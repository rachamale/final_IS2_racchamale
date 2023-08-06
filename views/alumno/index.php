<h1 class="text-center">Ingreso de Alumnos</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioAlumnos">
        <div class="row mb-3">
            <div class="col">
                <label for="codigoAlumno">Codigo Alumno</label>
                <input type="text" step="0.01" min="0" name="codigoAlumno" id="codigoAlumno" class="form-control" disabled>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="nombreAlumno">Nombre Alumno</label>
                <input type="text" step="0.01" min="0" name="nombreAlumno" id="nombreAlumno" class="form-control">
            <div class="col">
                <label for="apellidoAlumno">Apellido Alumno</label>
                <input type="text" step="0.01" min="0" name="apellidoAlumno" id="apellidoAlumno" class="form-control">
            </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="gradoAlumno">Grado Alumno</label>
                <input type="text" step="0.01" min="0" name="gradoAlumno" id="gradoAlumno" class="form-control">
            </div>
            <div class="col">
                <label for="armaAlumno">Arma Alumno</label>
                <input type="text" step="0.01" min="0" name="armaAlumno" id="armaAlumno" class="form-control">
            </div>
            <div class="col">
                <label for="nacimientoAlumno">Nacimiento Alumno</label>
                <input type="date" step="0.01" min="0" name="nacimientoAlumno" id="nacimientoAlumno" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="detalle">Detalle situacion</label>
                <input type="text" step="0.01" min="0" name="detalle" id="detalle" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioAlumnos" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
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
        <h2>LISTADO DE ALUMNOS</h2>
        <table class="table table-bordered table-hover" id="tablaNotas">
            <thead class="table-dark">
                <tr>
                    <th>NO. </th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>GRADO</th>
                    <th>ARMA</th>
                    <th>FECHA NACIMIENTO</th>
                    <th>DETALLE</th>
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

