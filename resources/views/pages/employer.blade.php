
@extends('pages.layouts.base')
@section('contenido')

<div class="content-body">
    <div class="container-fluid mt-3">

<div id="employer">
<input type="hidden" ref="getEmployer" value="{{ route('employer.index')}}">
<input type="hidden" ref="storeEmployer" value="{{ route('employer.store')}}">
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
            <input type="text" class="form-control" v-model="searchEmployer" @keyup.page-down="searchDataEmployers" placeholder="Bucar empleados">
        </div>

        <div class="card">
            <div class="card-body">
                <div class=" d-flex justify-content-end">
                    <button class="btn btn-info"  v-on:click.prevent="addEmployer">Agregar</button>
                </div>
                <div class="active-member">
                    <div class="table-responsive">
                        <table class="table table-xs mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Genero</th>
                                    <th>Cumpleaños</th>
                                    <th>Nacionalidad</th>
                                    <th>Direccion</th>
                                    <th>Salario</th>
                                    <th>NIF</th>
                                    <th>Status</th>
                                    <th>Firma</th>
                                    <th>Creado</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in searchDataEmployers">
                                    <td>@{{item.id}}</td>
                                    <td>
                                        <span>@{{item.name}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.email}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.phone}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.gender}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.birthday}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.nationality}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.address}}</span>
                                    </td>
                                    <td>
                                        <span>$@{{item.salary}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.nif}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.status=='1'?'Capacitado': 'No Capacitado'}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.signature=='1'?'Firma': 'Sin firma'}}</span>
                                    </td>
                                    <td>
                                        <span>@{{item.created_at}}</span>
                                    </td>
                                    <td><button class="btn btn-info btn-sm"  v-on:click.prevent="editEmployer(item)">Editar</button></td>
                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> --}}
                                    <td><button class="btn btn-danger btn-sm" v-on:click.prevent="deleteEmployer(item.id)">Eliminar</button></td>
                                </tr>


                            </tbody>
                        </table>
                        @include('pages.chunks.modal-employer-edit')
                        @include('pages.chunks.modal-employer-add')
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
