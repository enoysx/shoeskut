<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shoeskut - About</title>
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
    <section id="nav">
        @include('partials.nav')
    
    </section>
    {{-- CONTENT --}}
       <section id="service" >
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="service-h1">Our Services</h1>
                </div>
                {{-- kiri --}}
                <div class="col-sm-6">
                    <h2 class="py-2 mt-4">Regular Wash</h2>
                    <img src="{{ url('/assets/images/service-reguler.jpeg') }}" class="img-fluid rounded" alt="">
                    <p class="service-p py-3">
                        Layanan pencucian yang dimana bagian yang dicuci mulai dari bagian outsole, midsole, upper dan shoe lace, estimasi pengerjaan untuk layanan pencucian dengan jenis Regular Wash adalah 3 sampai 4 hari, harga untuk layanan pencucian regular wash yaitu mulai dari 29.000.
                        <br/>
                    </p>
                </div>
                {{-- kanan --}}
                <div class="col-sm-6">
                    <h2 class="py-2 mt-4">Deep Clean</h2>
                    <img src="{{ url('/assets/images/service-dc.jpeg') }}" class="img-fluid rounded" alt="">
                    <p class="service-p py-3">
                        Layanan pencucian yang dimana bagian yang dicuci mulai dari bagian outsole, midsole, upper, insole dan shoe lace, estimasi pengerjaan untuk layanan pencucian dengan jenis Regular Wash adalah 3 sampai 4 hari, harga untuk layanan pencucian regular wash yaitu mulai dari 59.000.
                        <br/>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h2 class="py-2 mt-4">Pickup & Delivery</h2>
                    <img src="{{ url('/assets/images/pickupdeli.jpg') }}" class="img-fluid rounded" alt="">
                    <p class="service-p py-3">
                        Layanan Pickup Delivery adalah layanan yang dapat memudahkan kamu dalam hal merawat sepatumu pada kami, kamu hanya perlu membuat janji temu dan lakukan pembayaran untuk sepatumu dijemput dan diantar oleh tim kami.
                        <br/>
                    </p>
                </div>
                <div class="col-3"></div>
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