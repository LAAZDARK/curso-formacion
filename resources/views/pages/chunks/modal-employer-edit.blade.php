<form method="post" name="formEdit" v-on:submit.prevent="updateEmployer">
<div class="modal fade" id="editEmployerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Empleado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              @csrf
            <input type="hidden" v-model="form.id" class="form-control" >
            <div class="form-group">
              {{-- <label class="col-form-label">Nombre:</label> --}}
              <input type="text" v-model="form.name" placeholder="Nombre" class="form-control" >
            </div>
            <div class="form-group">
              {{-- <label class="col-form-label">Correo:</label> --}}
              <input type="email" v-model="form.email" placeholder="Correo" class="form-control" >
            </div>
            <div class="form-group">
                {{-- <label class="col-form-label">telefono:</label> --}}
                <input type="phone" v-model="form.phone" placeholder="Telefono" class="form-control" >
              </div>
            <div class="form-group">
                {{-- <label class="col-form-label">Duración:</label> --}}
                <input type="password" v-model="form.password" placeholder="password" class="form-control" >
            </div>
            <div class="form-group">
                {{-- <label class="col-form-label">Costo:</label> --}}
                <input type="text" v-model="form.nationality" placeholder="Nacionalidad" class="form-control" >
            </div>
            <div class="form-group">
                <label >Genero</label>
                <select class="form-control" v-model="form.gender" >
                  <option value="Mujer">Mujer</option>
                  <option value="Hombre">Hombre</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
              <div class="form-group">
                {{-- <label class="col-form-label">Costo:</label> --}}
                <input type="text" v-model="form.address" placeholder="Dirección" class="form-control" >
            </div>
            <div class="form-group">
                {{-- <label class="col-form-label">Costo:</label> --}}
                <input type="number" v-model="form.salary" placeholder="Salario" class="form-control" >
            </div>
            <div class="form-group">
                {{-- <label class="col-form-label">Costo:</label> --}}
                <input type="text" v-model="form.nif" placeholder="NIF" class="form-control" >
            </div>
            <div class="form-group">
                <label >Status</label>
                <select class="form-control" v-model="form.status" >
                  <option value="1">Capacitado</option>
                  <option value="0" selected>No capacitado</option>
                </select>
              </div>
              <div class="form-group">
                <label >Firma</label>
                <select class="form-control" v-model="form.signature" >
                  <option value="1">Firmado</option>
                  <option value="0" selected>Sin firma</option>
                </select>
              </div>
            <div class="form-group">
                {{-- <label class="col-form-label">Costo:</label> --}}
                <input type="date" v-model="form.birthday" placeholder="Fecha de nacimiento" class="form-control" >
            </div>
              <div class="modal-footer">
                {{-- <button  class="btn btn-secondary" data-dismiss="modal">Cerrar</button> --}}
                <input type="submit" class="btn btn-primary" value="Actualizar">
              </div>
            </div>


        </div>
    </div>
  </div>

</form>
