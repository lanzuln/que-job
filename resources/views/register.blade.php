<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="roe">
            <div class="col-md-8 mx-auto">
                <div class="warapper my-5" >
                    <h2>Registration</h2>
                    <div class="pb-3"></div>
                    <form method="post" action="{{route('store.register')}}">
                        @csrf
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                          </div>

                        @endif
                        <input type="text" class="form-control" name="name" placeholder="enter name" value="{{old('name')}}">
                        @error('name')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="pb-3"></div>
                        <input type="email" class="form-control" name="email" placeholder="enter email" value="{{old('email')}}">
                        @error('email')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="pb-3"></div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
