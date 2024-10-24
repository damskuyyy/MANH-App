<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MANH-HOME</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('front/assets/favicon.ico')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('front/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-success bg-success">
            <div class="container px-5">
            <a class="navbar-brand" href="#!">
            <img src="{{asset('front/assets/logo.png')}}" alt="Logo" style="width: 50px; height: auto;" /></a>
                <a class="navbar-brand" href="#!">MA Nurul Huda</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('/')}}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/profil')}}">Profil Institusi Pendidikan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/ekstra')}}">Ekstrakulikuler</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/galeri')}}">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <!-- Footer-->
        <footer class="py-4 bg-dark">
            <div class="container px-3"><p class="m-0 text-center text-white">Copyright &copy; MA Nurul Huda 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('front/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
