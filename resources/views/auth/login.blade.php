<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Signin Template · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('assets/dist/css/sign-in.css') }}" rel="stylesheet">
</head>

<body>
    <main class="form-signin w-100 m-auto">
        <div class="signin px-5 py-5">
            <form action="{{ route('do.login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                    <img class="mb-4" src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt=""
                        width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                </div>
                <div class="card-body">
                    <div class="form-group mb-1">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                        <div class="text-danger">
                            @error('email')
                                Email tidak boleh kosong.
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-1">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="{{ old('password') }}"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        <div class="text-danger">
                            @error('password')
                                Password tidak boleh kosong.
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <span>
                            <a href="{{ route('register') }}">Register</a>
                        </span>
                    </div>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>
