<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E - Services - About</title>
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
    {{-- END OF NAVIGATION --}}

    {{-- CONTENT --}}
        <section id="about">
            <div class="container mt-5 ms-auto ">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="about-h1"> Shoeskut Jakarta </h1>
                        <p class="about-p text-justify">
                            Shoeskut Jakarta adalah Sebuah brand yang bergerak pada suatu bisnis develop/pembuatan atau pembantu bisnis Shoes Care/ pencucian dan perawatan sepatu.Menyediakan atau membantu seperti melakukan pelatihan untuk pembersihan atau perawatan sepatu, menyediakan beberapa produk untuk keperluan style/bergaya.
                        </p>
                        <a class="btn btn-primary about-btn rounded" href="{{ url('/service') }}"> Our Services </a>
                        <a class="btn btn-outline-primary about-btn rounded" href="{{ url('/social-media') }}"> Our Social Media </a>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ url('/assets/images/about-image.png') }}" alt="about image"
                        class="img-fluid"
                        >
                    </div>
                </div>
            </div>
        </section>
    {{-- END OF CONTENT --}}

    {{-- <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023 - E-Services Laundry Sepatu</div>
        </div>
    </footer> --}}
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