<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function Ramsey\Uuid\v1;

class externalController extends Controller
{
    public function index()
    {
        $url='http://universities.hipolabs.com/search?country=Malaysia';
        $response = Http::get($url);
        $datas=$response->json();
        return view('external.index',compact('datas'));
    }
}
