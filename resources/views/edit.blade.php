<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <center><h1>Update Event</h1></center>
    <div class="container-md">
        <div class="row">
            <div class="col col-12">
                <!--validasi form-->
                    @if (count($errors)>0)
                    <div class="row align-items-center">
                    <div class="col-12">
                        <div class="alert alert-info bg-danger" role="alert">
                            <ul>
                                <li><strong>Saved Data Failed !</strong></li>
                                @foreach ($errors->all() as $error)
                                    <li><strong>{{ $error }}</strong></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    </div>
                @endif
                <!--end validasi form-->
                <form action="{{ url('events/update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="event_id" id="event_id" value="{{ $event->id }}">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Event Name</label>
                      <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->name }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Start At</label>
                      <input type="datetime-local" class="form-control" id="start_at" name="start_at" value="{{ date('Y-m-d\TH:i', strtotime($event->startAt)) }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">End At</label>
                      <input type="datetime-local" class="form-control" id="end_at" name="end_at" value="{{ date('Y-m-d\TH:i', strtotime($event->endAt)) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('/events')}}" class="btn btn-primary">Back to Events</a>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>