<form method="post" name="formAdd" v-on:submit.prevent="storeEdition">
<div class="modal fade" id="addEditionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Empleado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @csrf
          <input type="hidden" v-model="form.id" class="form-control" >
          <div class="form-group">
              <label >Nombre del curso</label>
              <select class="form-control" v-model="form.course_id" >
                <option v-for="course in listCourses" v-bind:value="course.id">
                    @{{course.nombre}}
                </option>

              </select>
          </div>
          <div class="form-group">
              <label >Instructor</label>
              <select class="form-control" v-model="form.teacher_id" >
                <option v-for="user in listUsers" v-bind:value="user.id">
                    @{{user.name}}
                </option>

              </select>
          </div>
          <div class="form-group">
              <label class="col-form-label">Lugar:</label>
              <textarea class="form-control" v-model="form.direccion">@{{form.direccion}}</textarea>
            </div>
          <div class="form-group">
              <label class="col-form-label">Fecha Inicial:</label>
              <input type="date" v-model="form.fecha_inicio" placeholder="Fecha inicial" class="form-control" >
          </div>
          <div class="form-group">
              <label class="col-form-label">Fecha Final:</label>
              <input type="date" v-model="form.fecha_fin" placeholder="Fecha final" class="form-control" >
          </div>
          <div class="form-group">
              <label >Horario</label>
              <select class="form-control" v-model="form.horario" >
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
              </select>
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
