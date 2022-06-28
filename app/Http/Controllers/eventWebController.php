<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

use function Ramsey\Uuid\v1;

class eventWebController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->all());
        if($request->has('_token')){
            $query=Event::query();
            if($request->search_input){
                $query = $query->orWhere('name', 'LIKE','%'.$request->search_input.'%')
                ->orWhere('slug', 'LIKE','%'.$request->search_input.'%');
            }

            $events = $query->orderBy('created_at','desc')
            ->paginate(10);
            //dd($events);
            return view('welcome',compact('events'));
        }
        else{
            $events = Event::orderBy('created_at','desc')
            ->paginate(10);
            //dd($events);
            return view('welcome',compact('events'));
        }    
    }

    public function create(Request $request)
    {
        return view('create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'event_name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required'
        ]);

        $uuid=Str::orderedUuid();
        $slug = Str::slug($request->event_name);
        $eventCreate = Event::create([
            'id' => $uuid,
            'name' => $request->event_name,
            'slug' => $slug,
            'startAt' => $request->start_at,
            'endAt' => $request->end_at,
        ]);

        return redirect('/events')->with('status','Success Add Event');
    }

    public function delete(Request $request)
    {
        //dd($request->all());

        $delete=Event::where('id',$request->id_event)->delete();

        return redirect('/events')->with('status','Success Delete Event');
    }

    public function edit($id)
    {
        $event=Event::where('id',$id)->first();
        return view('edit',compact('event'));
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'event_name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required'
        ]);

        $slug = Str::slug($request->event_name);
        $eventCreate = Event::where('id',$request->event_id)
        ->update([
            'name' => $request->event_name,
            'slug' => $slug,
            'startAt' => $request->start_at,
            'endAt' => $request->end_at,
        ]);

        return redirect('/events')->with('status','Success Add Event');
    }
}
