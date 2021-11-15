
@extends('pages.layouts.base')
@section('contenido')

<div class="content-body">
    <div class="container-fluid mt-3">

<div id="course">
<input type="hidden" ref="getCourse" value="{{ route('course.index')}}">
<input type="hidden" ref="storeCourse" value="{{ route('course.store')}}">
<div class="row">
    <div class="col-lg-12">
        <div v-if="message.success">
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                @{{ message.messages }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div v-if="error">
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                @{{ error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class=" d-flex justify-content-end">
            <button class="btn btn-info"  v-on:click.prevent="addCourse">Agregar</button>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="active-member">
                    <div class="table-responsive">
                        <table class="table table-xs mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Duración (hrs)</th>
                                    <th>Costo</th>
                                    <th>Creado</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in list">
                                    <td>@{{item.id}}</td>
                                    <td>
                                        <span>@{{item.nombre}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.descripcion}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.duracion}}</span>
                                    </td>
                                    <td>
                                        <span>$@{{item.costo}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.created_at}}</span>
                                    </td>
                                    <td><button class="btn btn-info btn-sm"  v-on:click.prevent="editCourse(item)">Editar</button></td>
                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> --}}
                                    <td><button class="btn btn-danger btn-sm" v-on:click.prevent="deleteCourse(item.id)">Eliminar</button></td>
                                </tr>


                            </tbody>
                        </table>
                        @include('pages.chunks.modal-course-edit')
                        @include('pages.chunks.modal-course-add')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection
