<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Preparate</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                    <h4>Registro</h4>

                                <form action="{{ route('register')}}" method="post" class="mt-5 mb-5 login-input">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"  placeholder="Nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"  placeholder="Correo electrónico" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Registrar</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Tengo una cuenta <a href="{{ route('login')}}" class="text-primary">iniciar sesión </a> ahora</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('plugins/common/common.min.js')}}"></script>
    <script src="{{ asset('js/custom.min.js')}}"></script>
    <script src="{{ asset('js/settings.js')}}"></script>
    <script src="{{ asset('js/gleek.js')}}"></script>
    <script src="{{ asset('js/styleSwitcher.js')}}"></script>
</body>
</html>





