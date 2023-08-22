<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shoeskut</title>
    <link rel="icon" href="{{ url('/logo.png') }}">
    {{-- font awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    {{-- custom and bootstrap --}}
    <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <section id="navbar">
        @include('partials.nav')
    </section>
    
    {{-- form login  --}}
    <section id="login" class="mt-5">
        <div class="container mt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row g-0 justify-content-center mt-5">
                        <div class="col-sm-6 col-md-6 bg-tertiary">
                            <div class="card ms-4">
                                <div class="card-body">
                                    <h3> <strong>Welcome Back,</strong></h3>
                                    <p>Sign in or Sign up to order our services 😉</p>
                                    <form method="POST" action="{{ route('login') }}" class="my-5">
                                        @csrf
                                        <label for="inputEmail" >Email address</label>
                                        <div class="form-floating my-3">
                                            <input class="form-control w-75 align-item-center " id="inputEmail" type="email"
                                                placeholder="name@example.com" name="email"
                                                value="{{ old('email') }}" />
                                        </div>
                                        <label for="inputPassword">Password</label>
                                        <div class="form-floating my-3">
                                            <input class="form-control w-75" id="inputPassword" type="password"
                                                name="password" value="{{ old('password') }}" placeholder="Password" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                
                                            <button class="btn btn-sign-in w-75" type="submit">Sign In</button><br>
                                        </div>
                                        <p class="my-5">Don't have an account?  <a class="link link-primary" href="{{ url('/register-pages') }}">Sign Up</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 img-login">
                            <img src="{{ url('/logo.jpg') }}" alt="" class="img-fluid">
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
                
        {{-- <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div> --}}



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <script src="{{ url('js/scripts.js') }}"></script>
</body>

</html>
