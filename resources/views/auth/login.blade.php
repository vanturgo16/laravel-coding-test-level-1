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
    <center><h1>Login Form</h1></center>
    <div class="container-md">
        <div class="row pt-4 justify-content-md-center">
            <div class="col col-6">
                <!--validasi form-->
                @if (count($errors)>0)
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="alert alert-info bg-danger" role="alert">
                            <ul>
                                <li><strong>Data Login Failed !</strong></li>
                                @foreach ($errors->all() as $error)
                                    <li><strong>{{ $error }}</strong></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    </div>
                @endif
                <!--end validasi form-->

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
                <form action="{{ url('postlogin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                      </div>
                    </div>

                    <center>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </center>
                </form>
                <center>
                OR
                <br>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Sign Up First
                    </button>
                </center>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sign Up Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('signup') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="user_name" name="user_name">
                                    </div>
                                  </div>
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Email</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Password</label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="password">
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">User Type</label>
                                    <div class="col-sm-10">
                                      <select name="user_type" id="user_type" class="form-control">
                                        <option value="">- Choose User Type -</option>
                                        <option value="user">USER</option>
                                        <option value="admin">ADMIN</option>
                                      </select>
                                    </div>
                                  </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>