<?php if (isset($_SESSION['logeado'])) : ?>
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-Inicio-tab" data-bs-toggle="pill" data-bs-target="#pills-Inicio" type="button" role="tab" aria-controls="pills-Inicio" aria-selected="true">Inicio</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-IngresoEmpleado-tab" data-bs-toggle="pill" data-bs-target="#pills-IngresoEmpleado" type="button" role="tab" aria-controls="pills-IngresoEmpleado" aria-selected="false">Ingresar Empleado</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-ConsultarEmpleado-tab" data-bs-toggle="pill" data-bs-target="#pills-ConsultarEmpleado" type="button" role="tab" aria-controls="pills-ConsultarEmpleado" aria-selected="false">Consultar Empleado</button>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Cerrar">Cerrar</a>
    </li>
  </ul>
<?php endif; ?>