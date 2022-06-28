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
    <div class="container-md">
        <div class="row pt-5">
            <div class="col-8">
                <a href="{{ url('logout') }}" class="btn btn-danger btn-sm">Logout</a>
                <a href="{{ url('external') }}" class="btn btn-primary btn-sm">External API</a>
                @if (auth()->user()->type == 'admin')
                    <a href="{{ url('events/create') }}" class="btn btn-primary btn-sm">Create Event</a>
                @endif
            </div>
            <div class="col-4">
                <form class="form-inline" action="{{ url('/events') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="search_input" name="search_input">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col">
                <!--alert success -->
                @if (session('status'))
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="alert alert-info bg-success" role="alert">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    </div>
                    </div>
                @endif
                <!--alert success -->
                <table class="table table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col" colspan="3">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->slug }}</td>
                            <td>
                                <!-- Button trigger modal Detail-->
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDetail{{ $data->id }}">
                                    Detail
                                </button>
                                
                                <!-- Modal Detail-->
                                <div class="modal fade" id="ModalDetail{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="{{ url('events/delete') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <span><b><label>ID: </label></b>{{$data->id}}</span>
                                            </div>
                                            <div class="form-group">
                                                <span><b><label>Event Name: </label></b>{{$data->name}}</span>
                                            </div>
                                            <div class="form-group">
                                                <span><b><label>Slug: </label></b>{{$data->slug}}</span>
                                            </div>
                                            <div class="form-group">
                                                <span><b><label>Start At: </label></b>{{$data->startAt}}</span>
                                            </div>
                                            <div class="form-group">
                                                <span><b><label>End At: </label></b>{{$data->endAt}}</span>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </td>
                            @if (auth()->user()->type == 'admin')
                            <td>
                                <a href="{{ url('events/'.$data->id.'/edit') }}" class="btn btn-info btn-sm">Update</a>
                            </td>
                            <td>
                                <!-- Button trigger modal Delete-->
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDelete{{ $data->id }}">
                                    Delete
                                </button>
                                
                                <!-- Modal Delete-->
                                <div class="modal fade" id="ModalDelete{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="{{ url('events/delete') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="id_event" id="id_event" value="{{ $data->id }}">
                                            Are you sure wants to Delete <b>{{ $data->name }}</b> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row pt-3">{{ $events->links("pagination::bootstrap-4"   ) }}</div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>