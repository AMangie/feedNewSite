<?php
require_once("funciones.php");
$obFunction = new Funciones();
$obFunction->printHeader();
?>
    <div class="ContentWrapper">
        <div id="thankyou-Page" class="CMSComponent CMSComponent--contentheader">
            <div style="background-color:#004990;" class="ContentHeader ContentHeader--whiteText ContentHeader--circle">
                <ul class="ContentHeader-breadcrumbs ContentHeader-breadcrumbs--white">
                    <li class="ContentHeader-breadcrumb">Disclaimer</li>
                    <li>></li>
                    <li class="ContentHeader-breadcrumb is-active">Gracias</li>
                </ul>
                <img src="images/icon-feedback.png" class="ResponsiveImage ContentHeader-icon" alt="icon feedback">
                <h1 class="ContentHeader-title">Feedback llenado</h1>
                <div class="Grid Grid--content">
                    <div class="Grid-col u-colMd-8 u-offsetMd-2 u-colLg-6 u-offsetLg-3">
                        <h2 class="ContentHeader-intro" style="margin-bottom: 20px;">¡Gracias <?= $_GET['g'] ?> por tu interés en el nuevo aeromexico.com!</h2>
                        <br><br>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
    <!-- ContentWrapper-->
<?php
$obFunction->printFooter();

?>