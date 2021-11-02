<form action="Colillapdf.php" method="get" target="__blank">
    <div class="container">
        <div class="row text-center my-4">
            <h2>Revision de nomina</h2>
        </div>
        <div class="row shadow p-2">
            <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4">
                <label for="TotalDevengado">Total Devengado:</label>
                <input type="text" name="TotalDevengado" readonly id="TotalDevengado" class="form-control" value="<?= $devengado ?>">
            </div>
            <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4">
                <label for="Deducciones">Total de deducciones:</label>
                <input type="text" name="Deducciones" readonly id="Deducciones" class="form-control" value="<?= $deducciones ?>">
            </div>
            <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4">
                <label for="AuxilioDeTransporte">Auxilio de transporte:</label>
                <input type="text" name="AuxilioDeTransporte" readonly id="AuxilioDeTransporte" class="form-control" value="<?= $AuxTransporte ?>">
            </div>
            <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4">
                <label for="Neto">Neto a pagar:</label>
                <input type="text" name="Neto" id="Neto" readonly class="form-control" value="<?= $neto ?>">
            </div>
        </div>
    </div>
    <div class="container-fluid my-4 border">
        <div class="row">
            <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 table-responsive shadow">
                <table class="table table-hover table-sm text-center">
                    <thead>
                        <tr class="text-start">
                            <th>Hora ordinaria Diurna</th>
                            <th>Hora ordinaria Nocturna</th>
                            <th>Hora Extra Ordinaria Diurna</th>
                            <th>Hora Extra Ordinaria Nocturna</th>
                            <th>Hora festiva Diurna</th>
                            <th>Hora festiva Nocturna</th>
                            <th>Hora Extra Festiva Diurna</th>
                            <th>Hora Extra Festiva Nocturna</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style="text-align:center" readonly name="HoraOrdinariaDiurna" class="form-control" id="HoraOrdinariaDiurna" value="<?= $_POST['HoraOrdinariaDiurna'] ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="HoraOrdinariaNocturna" id="HoraOrdinariaNocturna" class="form-control" value="<?= $_POST['HoraOrdinariaNocturna'] ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="HoraExtraOrdinariaDiurna" id="HoraExtraOrdinariaDiurna" class="form-control" value="<?= $_POST['HoraExtraOrdinariaDiurna'] ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="HoraExtraOrdinariaNocturna" id="HoraExtraOrdinariaNocturna" class="form-control" value="<?= $_POST['HoraExtraOrdinariaNocturna'] ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="HoraFestivaDiurna" id="HoraFestivaDiurna" class="form-control" value="<?= $_POST['HoraFestivaDiurna'] ?>" ></td>
                            <td><input type="text" style="text-align:center" readonly name="HoraFestivaNocturna" id="HoraFestivaNocturna" class="form-control" value="<?= $_POST['HoraFestivaNocturna'] ?>" ></td>
                            <td><input type="text" style="text-align:center" readonly name="HoraExtraFestivaDiurna" id="HoraExtraFestivaDiurna" class="form-control" value="<?= $_POST['HoraExtraFestivaDiurna'] ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="HoraExtraFestivaNocturna" id="HoraExtraFestivaNocturna" class="form-control" value="<?= $_POST['HoraExtraFestivaNocturna'] ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="text-align:center" readonly name="ValorHoraOrdinariaDiurna" class="form-control" value="<?= $HoraOrdinariaDiurna ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="ValorHoraOrdinariaNocturna" class="form-control" value="<?= $HoraOrdinariaNocturna ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="ValorHoraExtraOrdinariaDiurna" class="form-control" value="<?= $HoraExtraOrdinariaDiurna ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="ValorHoraExtraOrdinariaNocturna" class="form-control" value="<?= $HoraExtraOrdinariaNocturna ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="ValorHoraFestivaDiurna" class="form-control" value="<?= $HoraFestivaDiurna ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="ValorHoraFestivaNocturna" class="form-control" value="<?= $HoraFestivaNocturna ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="ValorHoraExtraFestivaDiurna" class="form-control" value="<?= $HoraExtraFestivaDiurna ?>"></td>
                            <td><input type="text" style="text-align:center" readonly name="ValorHoraExtraFestivaNocturna" class="form-control" value="<?= $HoraExtraFestivaNocturna ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" value="Guardar Nomina" name="btnIngresarNomina" class="btn btn-danger my-3">
                <a href="Empleados" class="btn btn-warning">Cancelar</a>
            </div>
            <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4"></div>
            <div class="col-12 col-sm-4 my-3">
                <input type="text" name="id" id="id" readonly class="form-control" style="text-align:center" value="<?= $_POST['id'] ?>">
            </div>
            <div class="col-12 col-sm-4"></div>
        </div>
    </div>
</form>