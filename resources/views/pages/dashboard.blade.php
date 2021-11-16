
@extends('pages.layouts.base')
@section('contenido')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Cursos</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$countCourses}}</h2>
                                    <p class="text-white mb-0">{{$date}}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-film"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Horas de cursos</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$sumHours}}</h2>
                                    <p class="text-white mb-0">{{$date}}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-clock-o"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Empleados</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$countUsers}}</h2>
                                    <p class="text-white mb-0">{{$date}}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Satisfación</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99%</h2>
                                    <p class="text-white mb-0">{{$date}}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cursos recientes</h4>
                                <div id="activity">
                                    @foreach ($courses as $item)
                                        <div class="media border-bottom-1 pt-3 pb-3">
                                            <img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">
                                            <div class="media-body">
                                                <h5>{{$item->nombre}}</h5>
                                                <p class="mb-0">{{$item->descripcion}}</p>
                                            </div><span class="text-muted ">{{$item->created_at}}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Usuarios recientes</h4>
                                <div id="activity">
                                    @foreach ($users as $item)
                                        <div class="media border-bottom-1 pt-3 pb-3">
                                            <img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">
                                            <div class="media-body">
                                                <h5>{{$item->name}}</h5>
                                                <p class="mb-0">{{$item->nationality}}</p>
                                                <p class="mb-0">{{$item->email}}</p>
                                            </div><span class="text-muted ">{{$item->created_at}}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection

