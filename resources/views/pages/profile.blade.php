
@extends('pages.layouts.base')
@section('contenido')


<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-4">
                            <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                            <div class="media-body">
                                <h3 class="mb-0">{{$user->name}}</h3>
                                <p class="text-muted mb-0">{{$user->nationality}}</p>
                            </div>
                        </div>

                        <h4>Datos personales</h4>
                        {{-- <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p> --}}
                        <ul class="card-profile__info">
                            <li class="mb-1"><strong class="text-dark mr-4">Telefono</strong> <span>{{$user->phone}}</span></li>
                            <li><strong class="text-dark mr-4">Email</strong> <span>{{$user->email}}</span></li>
                            <li><strong class="text-dark mr-4">Fecha de nacimiento</strong> <span>{{$user->birthday}}</span></li>
                            <li><strong class="text-dark mr-4">Sexo</strong> <span>{{$user->gender}}</span></li>
                            <li><strong class="text-dark mr-4">NIF</strong> <span>{{$user->nif}}</span></li>
                        </ul>
                        <div class="row mb-5">
                            <div class="col-12 text-center">
                                {{-- <button class="btn btn-danger px-5">Actualizar</button> --}}
                                <a class="btn btn-danger px-5" href="{{ route('show.edit.profile')}}">Actualizar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Domicilio</h4>
                        <div id="activity">
                            <div class="media border-bottom-1 pt-3 pb-3">
                                <img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5>Received New Order</h5>
                                    <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                </div><span class="text-muted ">April 24, 2018</span>
                            </div>
                            <div class="media border-bottom-1 pt-3 pb-3">
                                <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5>iPhone develered</h5>
                                    <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                </div><span class="text-muted ">April 24, 2018</span>
                            </div>
                            <div class="media border-bottom-1 pt-3 pb-3">
                                <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5>3 Order Pending</h5>
                                    <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                </div><span class="text-muted ">April 24, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cuenta</h4>
                        <div id="activity">
                            <div class="media border-bottom-1 pt-3 pb-3">
                                <img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5>Received New Order</h5>
                                    <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                </div><span class="text-muted ">April 24, 2018</span>
                            </div>
                            <div class="media border-bottom-1 pt-3 pb-3">
                                <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5>iPhone develered</h5>
                                    <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                </div><span class="text-muted ">April 24, 2018</span>
                            </div>
                            <div class="media border-bottom-1 pt-3 pb-3">
                                <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5>3 Order Pending</h5>
                                    <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                </div><span class="text-muted ">April 24, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>


@endsection

