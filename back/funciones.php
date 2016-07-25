<?php
class Funciones {

	private $stScripts;
	private $obConnect;

	function __construct(){
        $this->stScripts = "";
    }

    private function __clone(){ }

    public function addInlineScript ( $pstFileName ) {

    	if ( $pstFileName != "" ) {
    		$this->stScripts .= file_get_contents( $pstFileName );  
    	}
    }

    private function getConnect(){
    	require_once('../class/Db.class.php');
    	return Db::getInstance();
    }

    public function addScript( $pstPathScript ) {
    	$this->stScripts .= '<script type="text/javascript" src="'.$pstPathScript.'"></script>';
    }

    public function printHeader ( $pstTemplate = '' ) {
    	if ( $pstTemplate == '' ) {
	    	include_once("templates/header.php");
	    } else {
	    	include_once("templates/".$pstTemplate."_header.php");
	    }
    }

    private function printJS() {
    	return $this->stScripts;
    }

    public function printFooter ( $pstTemplate = '' ) {
    	if ( $pstTemplate == '' ) {
	    	include_once("templates/footer.php");
	    } else {
	    	include_once("templates/".$pstTemplate."_footer.php");
	    }
	    echo $this->printJS();
	    echo $this->closeFileHTML();
    }//public function printFooter (...

    private function closeFileHTML() {
    	return '</body></html>';
    }

    public function saveForm ( $payPost ) {
    	$this->obConnect = $this->getConnect();

        $lstIdUser = date('dmY_His');
        /*
        echo '<pre>';
        print_r($payPost);
        echo '</pre>';
        die( "-".$this->valNotZero($payPost['inpHdMen']."-") );
        */

        $query= "INSERT INTO feedback.survey (
                    id_user,
                    calificacion,
                    amigable,
                    complicado,
                    moderno,
                    viejo,
                    elegante,
                    barato,
                    limpio,
                    saturado,
                    gusto,
                    mejorar,
                    login_am,
                    mascota,
                    formas_pago,
                    cambiar_vuelo,
                    puntos_premier,
                    extras_puntos,
                    viajeros_frecuentes,
                    comentarios,
                    nombre_user,
                    edad_user,
                    hombre,
                    mujer,
                    negocios,
                    placer,
                    email_user,
                    pnr_user,
                    participar,
                    created_at
                ) VALUES (
                    '".$lstIdUser."',
                    '".$this->valNotZero($payPost['inpHdnCalificacion'])."',
                    '".$this->valNotZero($payPost['inpHdAmigable'])."',
                    '".$this->valNotZero($payPost['inpHdComplicado'])."',
                    '".$this->valNotZero($payPost['inpHdModerno'])."',
                    '".$this->valNotZero($payPost['inpHdViejo'])."',
                    '".$this->valNotZero($payPost['inpHdElegante'])."',
                    '".$this->valNotZero($payPost['inpHdBarato'])."',
                    '".$this->valNotZero($payPost['inpHdLimpio'])."',
                    '".$this->valNotZero($payPost['inpHdSaturado'])."',
                    '".$this->validaCampoText($payPost['texaGusto'])."',
                    '".$this->validaCampoText($payPost['textaMejorar'])."',
                    '".$this->valNotZero($payPost['login'])."',
                    '".$this->valNotZero($payPost['pets'])."',
                    '".$this->valNotZero($payPost['savepay'])."',
                    '".$this->valNotZero($payPost['changeOnline'])."',
                    '".$this->valNotZero($payPost['flightKMP'])."',
                    '".$this->valNotZero($payPost['KMP'])."',
                    '".$this->valNotZero($payPost['saveInfo'])."',
                    '".$this->validaCampoText($payPost['textaComments'])."',
                    '".$this->validaCampoText($payPost['middleName'])."',
                    '".$this->validaCampoText($payPost['selAge'])."',
                    '".$this->valNotZero($payPost['inpHdMen'])."',
                    '".$this->valNotZero($payPost['inpHdWoman'])."',
                    '".$this->valNotZero($payPost['inpHdNegocios'])."',
                    '".$this->valNotZero($payPost['inpHdPlacer'])."',
                    '".$this->validaCampoText($payPost['inpEmail'])."',
                    '".$this->validaCampoText($payPost['inpTxtPnr'])."',
                    '".(isset($payPost['redressNumberRequired']) ?  $this->valNotZero($payPost['redressNumberRequired']) : 0)."',
                    NOW() );";
        return $this->obConnect->ejecutar( $query );

    }//public function saveForm...

    private function valNotZero ( $pnuVal ) {
        $lnuRespuesta = ( ( trim($pnuVal) == "" || $pnuVal == null )  ? 0 : trim($pnuVal) );
        if ( $lnuRespuesta === "on" ) {
            $lnuRespuesta = 1;
        }
        return $lnuRespuesta;
    }

    private function validaCampoText ( $pstString ) {
        $lstReturn = str_replace ("select", "", $pstString);
        $lstReturn = str_replace ("insert", "", $pstString);
        return utf8_decode( $lstReturn );
    }

}
?>