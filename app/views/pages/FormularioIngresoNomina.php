<div class="container-fluid">
    <form action="./Totales" method="post">
        <div class="row text-center my-5">
            <h1>Realizar Nomina de Empelado Seleccionado</h1>
        </div>
        <div class="row border shado-sm">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 my-3">
                <label style="font-size: 12px;">BASICO:</label>
                <input type="number" name="Basico" readonly id="Basico" value="<?= $Salario['sueldo'] ?>" class="form-control">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 my-3">
                <label style="font-size: 12px;">Empleado:</label>
                <input type="text" name="id" readonly id="id" class="form-control" value="<?= $id ?>">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 my-3">
                <label style="font-size: 12px;">Auxilio Transporte:</label>
                <input type="number" name="AuxilioDeTransporte" readonly id="AuxilioDeTransporte" class="form-control" required="required" value="<?= $Salario['AuxilioTransporte'] ?>" placeholder="AUXILIO TRANSPORTE">
            </div>
        </div>
        <div class="row text-center">
            <h2>Ingrese Conceptos</h2>
        </div>
        <div class="row border shadow">
            <div class="col-12 col-md-2 col-lg-3 col-xl-3">
                <input type="number" name="HoraOrdinariaDiurna" class="form-control my-2" id="HoraOrdinariaDiurna" required="required" placeholder="ORDINARIA DIURNA"></br>
            </div>
            <div class="col-12 col-md-2 col-lg-3 col-xl-3">
                <input type="number" name="HoraOrdinariaNocturna" class="form-control my-2" id="HoraOrdinariaNocturna" required="required" placeholder="ORDINARIA NOCTURNA"></br>
            </div>
            <div class="col-12 col-md-2 col-lg-3 col-xl-3">
                <input type="number" name="HoraExtraOrdinariaDiurna" class="form-control my-2" id="HoraExtraOrdinariaDiurna" required="required" placeholder="EXT ORDINARIA DIURNA"></br>
            </div>
            <div class="col-12 col-md-2 col-lg-3 col-xl-3">
                <input type="number" name="HoraExtraOrdinariaNocturna" class="form-control my-2" id="HoraExtraOrdinariaNocturna" required="required" placeholder="EXT ORDINARIA NOCTURNA">
            </div>
            <div class="col-12 col-md-2 col-lg-3 col-xl-3">
                <input type="number" name="HoraFestivaDiurna" class="form-control my-2" id="HoraFestivaDiurna" required="required" placeholder="HORA FESTIVA DIURNA">
            </div>
            <div class="col-12 col-md-2 col-lg-3 col-xl-3">
                <input type="number" name="HoraFestivaNocturna" class="form-control my-2" id="HoraFestivaNocturna" required="required" placeholder="HORA FESTIVA NOCTURNA">
            </div>
            <div class="col-12 col-md-2 col-lg-3 col-xl-3">
                <input type="number" name="HoraExtraFestivaDiurna" class="form-control my-2" id="HoraExtraFestivaDiurna" required="required" placeholder="HORA EXTRA FESTIVA DIURNA">
            </div>
            <div class="col-12 col-md-2 col-lg-3 col-xl-3">
                <input type="number" name="HoraExtraFestivaNocturna" class="form-control my-2" id="HoraExtraFestivaNocturna" required="required" placeholder="EXTRA FESTIVA NOCTURNA">
                <input type="submit" value="Calcular" name="btnCalcularNomina" class="btn btn-success btn-sm my-3">
                <a href="Empleados" class="btn btn-warning btn-sm">Salir</a>
            </div>
        </div>
    </form>
</div>