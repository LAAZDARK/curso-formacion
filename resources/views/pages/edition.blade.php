
@extends('pages.layouts.base')
@section('contenido')

<div class="content-body">
    <div class="container-fluid mt-3">

<div id="edition">
<input type="hidden" ref="getEdition" value="{{ route('edition.index')}}">
<input type="hidden" ref="storeEdition" value="{{ route('edition.store')}}">
<input type="hidden" ref="getListUser" value="{{ route('list.trained.user')}}">
<input type="hidden" ref="getListCourse" value="{{ route('list.courses')}}">
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
        {{-- Busqueda --}}
        <div class="input-group icons">
            <input type="text" class="form-control" v-model="searchEdition" @keyup.page-down="searchDataEditions" placeholder="Bucar ediciones">
        </div>

        <div class="card">
            <div class="card-body">
                <div class=" d-flex justify-content-end">
                    <button class="btn btn-info"  v-on:click.prevent="addEdition">Agregar</button>
                </div>
                <div class="active-member">
                    <div class="table-responsive">
                        <table class="table table-xs mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Curso</th>
                                    <th>Instructor</th>
                                    <th>Lugar</th>
                                    <th>Feha de inicio</th>
                                    <th>Feha de fin</th>
                                    <th>Horario</th>
                                    <th>Creado</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in searchDataEditions">
                                    <td>@{{item.id}}</td>
                                    <td>
                                        <span>@{{item.course.nombre}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.user.name}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.direccion}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.fecha_inicio}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.fecha_fin}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.horario}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.created_at}}</span>
                                    </td>
                                    <td><button class="btn btn-info btn-sm"  v-on:click.prevent="editEdition(item)">Editar</button></td>
                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> --}}
                                    <td><button class="btn btn-danger btn-sm" v-on:click.prevent="deleteEdition(item.id)">Eliminar</button></td>
                                </tr>


                            </tbody>
                        </table>
                        @include('pages.chunks.modal-edition-edit')
                        @include('pages.chunks.modal-edition-add')
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
