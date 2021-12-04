<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Preparate</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{ asset('images/favicon.png')}}"
    />
    <!-- Place favicon.ico in the root directory -->

    <!-- ======== CSS here ======== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/lineicons.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />
  </head>
  <body>

    <!-- ======== preloader start ======== -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- preloader end -->

    <!-- ======== header start ======== -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('home')}}">
                  <img src="{{ asset('images/logo.png')}}" alt="Logo" />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="page-scroll active" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#features">Características</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">Acerca de</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('login')}}">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('page.register')}}">Registro</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ======== header end ======== -->

    <!-- ======== hero-section start ======== -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1 class="wow fadeInUp" data-wow-delay=".4s">
                Llegó el momento de especializarse
              </h1>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                con los mejores cursos en línea.
              </p>
              <a
                href="{{route('login')}}"
                class="main-btn border-btn btn-hover wow fadeInUp"
                data-wow-delay=".6s"
                >Iniciar sesión</a
              >
              <a href="#features" class="scroll-bottom">
                <i class="lni lni-arrow-down"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
              <img src="{{ asset('img/home/devices.jpg')}}" style="height: 460px; border-radius: 10%;" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== hero-section end ======== -->

    <!-- ======== feature-section start ======== -->
    <section id="features" class="feature-section pt-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-bootstrap"></i>
              </div>
              <div class="content">
                <h3>Programación</h3>
                <p>
                    Tenemos múltiples cursos de programación con C#, java, PHP, JavaScript, C, etc..
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-layout"></i>
              </div>
              <div class="content">
                <h3>Diseño</h3>
                <p>
                    Contamos con los mejores instructores y arquitectos en diseño que a través de cursos nos comparten sus conocimientos.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-coffee-cup"></i>
              </div>
              <div class="content">
                <h3>Administración</h3>
                <p>
                    Parte nuestro objetivo como empresa es tener una buena administración pero no será posible sin tu ayuda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== feature-section end ======== -->

    <!-- ======== about2-section start ======== -->
    <section id="about" class="about-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                    Prepárate con cursos en linea
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                    Prepárate es una plataforma online de cursos empresariales que permite a todos sus colaboradores tomar e impartir cursos, desde cualquier lugar.
                </p>
              </div>
              <ul>
                <li>Acceso rapido</li>
                <li>Fácil de administrar</li>
                <li>Soporte 24/7</li>
              </ul>
              <a
                href="{{ route('page.register')}}"
                class="main-btn btn-hover border-btn wow fadeInUp"
                data-wow-delay=".6s"
                >Registrate</a
              >
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 order-first order-lg-last">
            <div class="about-img-2">
              <img src="img/about/about-2.png" alt="" class="w-100" />
              <img
                src="img/about/about-right-shape.svg"
                alt=""
                class="shape shape-1"
              />
              <img
                src="img/about/right-dots.svg"
                alt=""
                class="shape shape-2"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== about2-section end ======== -->

    <!-- ======== scroll-top ======== -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ======== JS here ======== -->
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
  </body>
</html>
