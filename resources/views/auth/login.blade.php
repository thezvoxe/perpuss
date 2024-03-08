<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background-color: #dcdddd" style="background-image:image()">

    <div class="container">
        <div class="card position-absolute top-50 start-50 translate-middle rounded" style="width: 25rem; height: 19rem; border-radius: 17px">
            <div class="card-body" style="background-color: #f3f3f3;">
            <form action="{{ route('login') }}" method="POST" >
                @csrf
                <div class="mb-3">
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                  @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div>
                    <p>Belum punya akun? silahkan daftar terlebih dahulu</p>
                    <a href="{{ route('register') }}">
                        <p>Sign up</p>
                    </a>
                </div>
            </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
