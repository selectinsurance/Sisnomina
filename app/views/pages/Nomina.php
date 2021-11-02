<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-Inicio" role="tabpanel" aria-labelledby="pills-Inicio-tab">

        <div class="container-fluid my-5 border shadow">
            <form action="./Calculo" method="post">
                <div class="row my-2">
                    <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 text-center">
                        <h1>Sistema Nomina</h1>
                        <h3>Empleados</h3>
                    </div>
                    <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
                </div>
                <div class="row my-4">
                    <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-3"></div>
                    <div class="col-12 col-sm-11 col-md-10 col-lg-9 col-xl-9 text-center table table-responsive">
                        <table class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>Seleccionar</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>TipoD</th>
                                    <th>Documento</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Nacimiento</th>
                                    <th>Correo</th>
                                    <th>Salario</th>
                                    <th>Empresa</th>
                                    <th>Nit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($rows = mysqli_fetch_assoc($empleados)) : ?>
                                    <tr>
                                        <td>
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="id[]" value="<?= $rows['IdEmpleado'] ?>">
                                            </label>
                                        </td>
                                        <td><?= $rows['nombre'] ?></td>
                                        <td><?= $rows['apellido'] ?></td>
                                        <td><?= $rows['TipoDocumento'] ?></td>
                                        <td><?= $rows['documento'] ?></td>
                                        <td><?= $rows['telefono'] ?></td>
                                        <td><?= $rows['direccion'] ?></td>
                                        <td><?= $rows['fechaNacimiento'] ?></td>
                                        <td><?= $rows['correo'] ?></td>
                                        <td><?= $rows['sueldo'] ?></td>
                                        <td><?= $rows['NombreEmpresa'] ?></td>
                                        <td><?= $rows['NIT'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type="submit" value="Nomina" name="btnIngresarNomina" class="btn btn-success my-2">
            </form>
        </div>

    </div>
    <div class="tab-pane fade" id="pills-IngresoEmpleado" role="tabpanel" aria-labelledby="pills-IngresoEmpleado-tab">
        <div class="container-fluid my-5">
            <form action="Empleados" method="post">
                <div class="row text-center">
                    <h2>Ingresar Empleados</h2>
                </div>
                <div class="row shadow my-2">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Ingrese Nombre" required="required"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <label for="Apellido">Apellido:</label>
                        <input type="text" name="Apellido" id="Apellido" class="form-control" placeholder="Ingrese Apellido" required="required"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="form-group">
                            <label for="TipoDoc">Tipo Documento:</label>
                            <select class="form-control" name="TipoDoc" id="TipoDoc">
                                <option value="CC">Cedula Ciudadania</option>
                                <option value="CE">Cedula Extranjeria</option>
                                <option value="P">Pasaporte</option>
                                <option value="PEP">P.E.P</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2 col-lg-3 col-xl-3">
                        <label for="Documento">Documento:</label>
                        <input type="text" name="Documento" id="Documento" class="form-control" placeholder="Ingrese Numero" required="required"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <label for="Telefono">Telefono:</label>
                        <input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Ingrese Telefono" required="required"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <label for="Direccion">Direccion:</label>
                        <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Ingrese Direccion" required="required"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <label for="FechaNac">Fecha Nacimiento:</label>
                        <input type="date" name="FechaNac" id="FechaNac" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 col-md-2 col-lg-3 col-xl-3">
                        <label for="Correo">Correo:</label>
                        <input type="email" name="Correo" id="Correo" class="form-control" placeholder="Ingrese Correo" required="required"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2 col-lg-3 col-xl-3">
                        <label for="Salario">Salario:</label>
                        <input type="number" name="Salario" id="Salario" class="form-control" placeholder="Ingrese Salario" required="required"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2 col-lg-3 col-xl-3">
                        <label for="NombreEmpresa">Nombre Empresa:</label>
                        <input type="text" name="NombreEmpresa" id="NombreEmpresa" class="form-control" placeholder="Ingrese Nombre Empresa" required="required"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2 col-lg-3 col-xl-3">
                        <label for="Nit">Nit:</label>
                        <input type="number" name="Nit" id="Nit" class="form-control" placeholder="Ingrese Nit" required="required"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2 col-lg-3 col-xl-3">
                        <label for="AuxilioDeTransporte">AUXILIO TRANSPORTE</label>
                        <input type="number" name="AuxilioDeTransporte" id="AuxilioDeTransporte" class="form-control my-2" required="required" placeholder="0"></br>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2 col-lg-3 col-xl-3 my-3">
                        <input type="submit" name="btnIngresarEmpleado" value="Guardar" class="btn btn-danger">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="tab-pane fade" id="pills-ConsultarEmpleado" role="tabpanel" aria-labelledby="pills-ConsultarEmpleado-tab">
        <center>
            <h1>Consultar Empleado</h1>
        </center>
        <form action="Empleados" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-2 col-md-3 col-lg-3 col-xl-4">
                        <label for="tipoDocumento">Tipo Documento:</label>
                        <select class="form-control" name="tipoDocumento" id="tipoDocumento">
                            <option value="CC">Cedula Ciudadania</option>
                            <option value="CE">Cedula Extranjeria</option>
                            <option value="P">Pasaporte</option>
                            <option value="PEP">P.E.P</option>
                        </select><br>
                        <input type="submit" value="Guardar" class="btn btn-success" name="btnConsultarEmpleado">
                    </div>
                    <div class="col-12 col-sm-10 col-md-4 col-lg-3 col-xl-4">
                        <label for="DocumentoEmpleado">Documento del empleado:</label>
                        <input type="text" name="DocumentoEmpleado" id="DocumentoEmpleado" class="form-control" placeholder="Ingrese Documento">
                    </div>
                    <div class="col-12 col-md-5 col-lg-6 col-xl-4">
                        <div class="container-fluid">
                            <div class="row">
                                <?php if (!empty($Consulta)) : ?>
                                    <?php while ($rows = mysqli_fetch_assoc($Consulta)) : ?>
                                    <label for="prueba"><?= $rows['nombre'] ?></label>


                                    
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>