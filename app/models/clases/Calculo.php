
<?php
class Calculo
{
    private $BasicoMes;
    private $HoraOrdinariaDiurna;
    private $HoraOrdinariaNocturna;
    private $HoraExtraOrdinariaDiurna;
    private $HoraExtraOrdinariaNocturna;
    private $HoraFestivaDiurna;
    private $HoraFestivaNocturna;
    private $HoraExtraFestivaDiurna;
    private $HoraExtraFestivaNocturna;
    private $AuxilioDeTransporte;

    public function __construct(
        $BasicoMes, 
        $HoraOrdinariaDiurna, 
        $HoraOrdinariaNocturna, 
        $HoraExtraOrdinariaDiurna, 
        $HoraExtraOrdinariaNocturna, 
        $HoraFestivaDiurna, 
        $HoraFestivaNocturna,
        $HoraExtraFestivaDiurna,
        $HoraExtraFestivaNocturna,
        $AuxilioDeTransporte
        )
    {
        $this->BasicoMes = $BasicoMes;
        $this->HoraOrdinariaDiurna = $HoraOrdinariaDiurna;
        $this->HoraOrdinariaNocturna = $HoraOrdinariaNocturna;
        $this->HoraExtraOrdinariaDiurna = $HoraExtraOrdinariaDiurna;
        $this->HoraExtraOrdinariaNocturna = $HoraExtraOrdinariaNocturna;
        $this->HoraFestivaDiurna = $HoraFestivaDiurna;
        $this->HoraFestivaNocturna = $HoraFestivaNocturna;
        $this->HoraExtraFestivaDiurna = $HoraExtraFestivaDiurna;
        $this->HoraExtraFestivaNocturna = $HoraExtraFestivaNocturna;
        $this->AuxilioDeTransporte = $AuxilioDeTransporte;
    }

    public function HoraOrdinariaDiurna()
    {
        $ValorBruto = ($this->BasicoMes / 240) * $this->HoraOrdinariaDiurna;
        return $ValorBruto;
    }
    public function HoraOrdinariaNocturna()
    {
        $ValorBruto = $this->BasicoMes / 240 * 0.35 * $this->HoraOrdinariaNocturna;
        return $ValorBruto;
    }
    public function HoraExtraOrdinariaDiurna()
    {
        $ValorBruto = $this->BasicoMes / 240 * 1.25 *  $this->HoraExtraOrdinariaDiurna;
        return $ValorBruto;
    }
    public function HoraExtraOrdinariaNocturna()
    {
        $ValorBruto = $this->BasicoMes / 240 * 1.75 * $this->HoraExtraOrdinariaNocturna;
        return $ValorBruto;
    }
    public function HoraFestivaDiurna()
    {
        $ValorBruto = $this->BasicoMes / 240 * 1.75 *  $this->HoraFestivaDiurna;
        return $ValorBruto;
    }
    public function HoraFestivaNocturna()
    {
        $ValorBruto = $this->BasicoMes / 240 * 2.1 * $this->HoraFestivaNocturna;
        return $ValorBruto;
    }
    public function HoraExtraFestivaDiurna()
    {
        $ValorBruto = $this->BasicoMes / 240 * 2 * $this->HoraExtraFestivaDiurna;
        return $ValorBruto;
    }
    public function HoraExtraFestivaNocturna()
    {
        $ValorBruto = $this->BasicoMes / 240 * 2.5 * $this->HoraExtraFestivaNocturna;
        return $ValorBruto;
    }
    public function AuxilioDeTransporte()
    {
        $ValorAuxilio = $this->AuxilioDeTransporte / 2;
        return $ValorAuxilio;
    }

    public function Bruto(){
        $Bruto = $this->HoraOrdinariaDiurna() + $this->HoraOrdinariaNocturna() + $this->HoraExtraOrdinariaDiurna() + $this->HoraExtraOrdinariaNocturna() + $this->HoraFestivaDiurna() + $this->HoraFestivaNocturna() + $this->HoraExtraFestivaDiurna() + $this->HoraExtraFestivaNocturna();
        return $Bruto;
    }

    public function Deducciones(){
        $deduccionSalud = $this->Bruto() * 0.04;
        $deduccionPension = $this->Bruto() * 0.04;
        $Deducido = $deduccionSalud + $deduccionPension;

        return $Deducido;
    }

    public function Neto(){
        $Vbruto = ($this->Bruto() - $this->Deducciones()) + $this->AuxilioDeTransporte();
        return $Vbruto;
    }
}
?>