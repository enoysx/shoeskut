<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shoeskut</title>
    <link rel="icon" href="{{ url('/logo.png') }}">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ url('/assets/css/custom.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <section id="navbar">
    @include('partials.nav')
    </section>
    {{-- section home --}}
        <section id="home" class="my-5">
            <div class="container ">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-12">
                        <img src="{{ url('/assets/images/hero-image.png') }}" alt="hero_image" class="img-fluid">
                    </div>
                    {{-- <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Memudahkan pengelolaan untuk melakukan pelayanan terhadap customer dalam hal mencuci sepatu customer anda</p>
                        <a class="btn btn-primary btn-xl" href="{{ url('/login-pages') }}">Login</a>
                        <a class="btn btn-outline-primary btn-xl" href="{{ url('/register-pages') }}">Register</a>
                    </div> --}}
                </div>
            </div>
        </section>

        {{-- section about --}}
        <section id="about">
            <div class="container my-5 py-5 ms-auto ">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="about-h1"> Shoeskut Jakarta </h1>
                        <p class="about-p text-justify text-white">
                            Sebuah Brand yang bergerak pada layanan jasa pencucian dan perawatan sepatu, namun tidak hanya itu, Shoeskut juga menyediakan layanan bantuan bagi kamu yang ingin memiliki bisnis layanan jasa pencucian dan perawatan sepatu dan juga menyediakan beberapa produk untuk keperluan style/bergaya.
                        </p>
                        <a class="btn btn-primary about-btn rounded" href="{{ url('/service') }}"> Our Services </a>
                        <a class="btn btn-outline-light about-btn rounded" href="{{ url('/social-media') }}"> Our Social Media </a>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ url('/assets/images/about-image.png') }}" alt="about image"
                        class="img-fluid mt-5"
                        >
                    </div>
                </div>
            </div>
        </section>

{{-- section service --}}
<section id="service">
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="service-h1 text-center mb-5">Our Services</h1>
            </div>
            <div class="col-sm-12 mt-2">
                <div class="row align-items-center justify-content-center text-center mt-3">
                    <div class="col-3">
                        <img src="{{ url('/assets/images/regular.png') }}" class="img-fluid rounded-circle">
                        <h5 class="mt-3">Regular Wash</h5>
                        <a class="btn btn-outline-primary about-btn rounded" href="{{ url('/service') }}"> Learn More </a>
                    </div>
                    <div class="col-3">
                        <img src="{{ url('/assets/images/pickup.png') }}" class="img-fluid rounded-circle">
                        <h5 class="mt-3">Free Pickup & Delivery</h5>
                        <a class="btn btn-outline-primary about-btn rounded" href="{{ url('/service') }}"> Learn More </a>
                    </div>
                    <div class="col-3">
                        <img src="{{ url('/assets/images/deepclean.png') }}" class="img-fluid rounded-circle">
                        <h5 class="mt-3">Deep Clean</h5>
                        <a class="btn btn-outline-primary about-btn rounded" href="{{ url('/service') }}"> Learn More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>

     {{-- section social media --}}
    <section id="social">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="service-h1 text-center my-5">Our Media</h1>
                </div>
                {{-- instagram --}}
                <div class="col-sm-3">
                    <div class="card" style="width: 14rem;">
                        <img src="{{ url('/assets/images/instagram.png') }}" class="card-img-top" alt="instagram shoeskut">
                        <div class="card-body">
                          <h5 class="card-title ">Instagram</h5>
                          <p class="card-text ">@shoeskut</p>
                          <a href="https://www.instagram.com/shoeskut/" class="btn btn-outline-primary" target="blank">
                            Visit Our Instagram
                          </a>
                        </div>
                      </div>
                </div>
                {{-- Whatsapp --}}
                <div class="col-sm-3">
                    <div class="card" style="width: 14rem;">
                        <img src="{{ url('/assets/images/whatsapp.png') }}" class="card-img-top" alt="instagram shoeskut">
                        <div class="card-body">
                          <h5 class="card-title ">Whatsapp</h5>
                          <p class="card-text ">+62 895-3414-31405</p>
                          <a href="https://api.whatsapp.com/send/?phone=62895341431405&text&type=phone_number&app_absent=0" class="btn btn-outline-primary" target="blank">
                            Contat Us
                          </a>
                        </div>
                      </div>
                </div>
                {{-- Tiktok --}}
                <div class="col-sm-3">
                    <div class="card" style="width: 14rem;">
                        <img src="{{ url('/assets/images/tiktok.png') }}" class="card-img-top" alt="instagram shoeskut">
                        <div class="card-body">
                          <h5 class="card-title ">TikTok</h5>
                          <p class="card-text ">@shoeskut2</p>
                          <a href="https://www.tiktok.com/@shoeskut2?_t=8eyva6HiWGo&_r=1" class="btn btn-outline-primary" target="blank">
                            Visit Our TikTok
                          </a>
                        </div>
                      </div>
                </div>
                {{-- Youtube --}}
                <div class="col-sm-3">
                    <div class="card" style="width: 14rem;">
                        <img src="{{ url('/assets/images/youtube.png') }}" class="card-img-top" alt="instagram shoeskut">
                        <div class="card-body">
                          <h5 class="card-title ">Youtube</h5>
                          <p class="card-text ">Shoeskut</p>
                          <a href="https://www.youtube.com/@Shoeskut" class="btn btn-outline-primary" target="blank">
                            Visit Our Youtube
                          </a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023 - Shoeskut</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('/assets/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
