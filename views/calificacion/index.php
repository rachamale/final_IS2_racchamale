<h1 class="text-center">Ingreso de las calificaciones</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioCalificaciones">
        <div class="row mb-3">
            <div class="col">
                <label for="codigoCalificacion">Codigo del calificacion</label>
                <input type="text" name="codigoCalificacion" id="codigoCalificaciones" class="form-control" disabled>
            </div>
            <div class="col">
                <label for="codigoAlumno">Codigo del alumno</label>
                <input type="text" name="codigoAlumno" id="codigoAlumno" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="nombreMateria">Materia</label>
                <input type="text" step="0.01" min="0" name="nombreMateria" id="nombreMateria" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="notaMateria">Nota</label>
                <input type="number" step="0.01" min="0" name="notaMateria" id="notaMateria" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioCalificaciones" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
            </div>
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
            </div>
        </div>
    </form>
</div>
<div class="row justify-content-center" id="divTabla">
    <div class="col-lg-8">
        <h2>LISTADO DE CALIFICACIONES</h2>
        <table class="table table-bordered table-hover" id="tablaCalificaciones">
            <thead class="table-dark">
                <tr>
                    <th>NO. </th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CURSO</th>
                    <th>NOTA</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/controller/Alumnos.js')  ?>"></script>

