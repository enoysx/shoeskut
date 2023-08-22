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
        {{-- custom and boostrap --}}
        <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </head>
    <body >
        <section id="navbar">
            @include('partials.nav')
        </section>
        
        {{-- form login  --}}
        <section id="register" class="mt-5">
            <div class="container mt-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12">
                        <div class="row g-0 justify-content-center mt-5">
                            <div class="col-sm-6 col-md-6 bg-tertiary img-regis">
                                <img src="{{ url('/logo.jpg') }}" alt="" class="img-fluid ">
                            </div>
                            <div class="col-sm-6 col-md-6 img-login">
                                <div class="card ms-5">
                                    <div class="card-body">
                                        <h3> <strong>Welcome,</strong></h3>
                                        <p>Start your journey with us 🚀</p>
                                        <form method="POST" action="{{ route('register') }}" class="my-4">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="inputFirstName">name</label>
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0 my-3 w-75">
                                                        <input class="form-control" id="inputFirstName" name="name" type="text" placeholder="Enter your first name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <label for="inputEmail">Email address</label>
                                            <div class="form-floating mb-3 my-3 w-75">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputPassword">Password</label>
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0 my-3 w-75">
                                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Create a password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-sign-up btn-block w-75" >Sign Up</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
                    

{{-- 
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

                                    <div class="card-header">
                                        <div class="container text-center">
                                            <img src="{{ url('/logo.jpg') }}" width="45" height="45" alt="">
                                            <h3 class="text-center font-weight-light my-4">Register</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="name" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{url('/login-pages')}}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; E-Services 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div> --}}

        <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

        <script src="{{url('js/scripts.js')}}"></script>
    </body>
</html>
