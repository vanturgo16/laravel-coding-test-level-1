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
                <a href="{{ url('events') }}" class="btn btn-primary btn-sm">Back to event List</a>
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
                        <th scope="col">Univ Name</th>
                        <th scope="col">Web Page</th>
                        <th scope="col">Country</th>
                        <th scope="col">Code</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data['name'] }}</td>
                            <td>{{ $data['web_pages'][0] }}</td>
                            <td>{{ $data['country'] }}</td>
                            <td>{{ $data['alpha_two_code'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>