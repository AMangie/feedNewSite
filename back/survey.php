<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once("funciones.php");
$obFunction = new Funciones();



if ( isset($_POST['Enviar']) ) {
    if ( $obFunction->saveForm($_POST) ) {
        if ( isset($_POST['middleName']) ) {
            header("Location: thankyou.php?id=858123&g=".$_POST['middleName']);
        } else {
            header("Location: thankyou.php?id=858123&g=");
        }
    }
} else {
    $obFunction->printHeader();
?>
    <div class="ContentWrapper">
        <div id="CMSComponent-0" class="CMSComponent CMSComponent--contentheader">
            <div style="background-color:#004990;" class="ContentHeader ContentHeader--whiteText ContentHeader--circle">
                <ul class="ContentHeader-breadcrumbs ContentHeader-breadcrumbs--white">
                    <li class="ContentHeader-breadcrumb">Feedback</li>
                    <li>></li>
                    <li class="ContentHeader-breadcrumb is-active">Survey</li>
                </ul>
                <img src="images/icon-feedback.png" class="ResponsiveImage ContentHeader-icon" alt="icon feedback">
                <h1 class="ContentHeader-title">Tu opinión es importante</h1>
                <div class="Grid Grid--content">
                    <div class="Grid-col u-colMd-8 u-offsetMd-2 u-colLg-6 u-offsetLg-3">
                        <h2 class="ContentHeader-intro" style="margin-bottom: 20px;">¡Gracias por tu interés en el nuevo aeromexico.com!</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="TravelerInfo TravelerInfo--BOOK">
            <form  id="feedbackform" class="Form Form--traveler" method="post" action="<?= $_SERVER['PHP_SELF'] ?>" data-parsley-validate>
                <div class="Form-section">
                    <h4  class="Form-title">Acerca de nuestro Aeromexico <strong>BETA</strong></h4>
                    <div class="Form-main">
                        <div class="FormInput">
                            <p class="FormInput-label--text FormInput-principal no-padding-top">¿Qué calificación le das a tu experiencia en el nuevo aeromexico.com?</p>
                            <div class="FormInput-wrapper">
                               <div id="rateYo" style="margin: 0 auto;"></div>
                            </div>
                            <input type="hidden"  name="inpHdnCalificacion" id="inpHdnCalificacion"  required=""/>
                            <ul class="parsley-errors-list filled" id="starsValidation" style="display:none;"><li class="parsley-required">Por favor califica nuestro sitio</li></ul>
                        </div>
                       
                        <div id="caracteristicas" class="FormInput FormInput--toggle">
                                <div  class="FormInput-wrapper FormInput-wrapper--toggle">
                                    <div class="FormInput--area">
                                        <p class="FormInput-label--text FormInput-principal no-padding-top">Selecciona las características que definen el nuevo aeromexico.com</p>
                                        <div class="Toogle--buttons--area">
                                            <ul  class="Toggle Toggle--form">
                                                <li class="Toggle-listItem">
                                                    <button type="button" class="Toggle-button Toggle-button--form"><span>Amigable</span></button>
                                                    <input type="hidden" id="inpHdAmigable" name="inpHdAmigable" class="btn-opciones" value="0" data-error="complicado o amable.">
                                                </li>
                                                <li class="Toggle-listItem">
                                                    <button type="button" class="Toggle-button Toggle-button--form"><span>Complicado</span>
                                                    </button>
                                                    <input type="hidden" id="inpHdComplicado" name="inpHdComplicado" class="btn-opciones" value="0" data-error="complicado o amable." >
                                                </li>
                                            </ul> 
                                        </div>
                                        <div class="Toogle--buttons--area">
                                           <ul class="Toggle Toggle--form">
                                                <li class="Toggle-listItem">
                                                    <button type="button" class="Toggle-button Toggle-button--form"><span>Elegante</span></button>
                                                    <input type="hidden" id="inpHdElegante" name="inpHdElegante" class="btn-opciones" value="0" data-error="común o elegante.">
                                                </li>
                                                <li class="Toggle-listItem">
                                                    <button type="button" class="Toggle-button Toggle-button--form"><span>Común</span>
                                                    </button>
                                                    <input type="hidden" id="inpHdBarato" name="inpHdBarato" class="btn-opciones" value="0" data-error="común o elegante.">
                                                </li>
                                            </ul>
                                       </div>
                                   
                                       <div class="Toogle--buttons--area">
                                            <ul class="Toggle Toggle--form">
                                                <li class="Toggle-listItem">
                                                    <button type="button" class="Toggle-button Toggle-button--form"><span>Moderno</span></button>
                                                    <input type="hidden" id="inpHdModerno" name="inpHdModerno" class="btn-opciones" value="0" data-error="viejo o moderno.">
                                                </li>
                                                <li class="Toggle-listItem">
                                                    <button type="button" class="Toggle-button Toggle-button--form"><span>Viejo</span>
                                                    </button>
                                                    <input type="hidden" id="inpHdViejo" name="inpHdViejo" class="btn-opciones" value="0" data-error="viejo o moderno.">
                                                </li>
                                            </ul>
                                       </div>
                                       
                                       <div class="Toogle--buttons--area">
                                           <ul class="Toggle Toggle--form">
                                                <li class="Toggle-listItem">
                                                    <button type="button" class="Toggle-button Toggle-button--form"><span>Limpio</span></button>
                                                    <input type="hidden" id="inpHdLimpio" name="inpHdLimpio" class="btn-opciones" value="0" data-error="saturado o limpio.">
                                                </li>
                                                <li class="Toggle-listItem">
                                                    <button type="button" class="Toggle-button Toggle-button--form"><span>Saturado</span>
                                                    </button>
                                                    <input type="hidden" id="inpHdSaturado" name="inpHdSaturado" class="btn-opciones" value="0" data-error="saturado o limpio.">
                                                </li>
                                            </ul>
                                       </div>
                                        <ul class="parsley-errors-list filled " id="feedbackform-options" style="display:none;"><li class="parsley-required"></li></ul>

                                    </div><!-- FormInputarea -->

                                </div>
                        </div>
                        <div class="FormInput">
                             <p class="FormInput-label--text FormInput-principal no-padding-top">¿Qué fue lo que más te gustó?</p>

                            <div class="FormInput-wrapper">
                                <textarea class="FormInput-input FormInput-input--textarea FormInput-input--full" name="texaGusto" id="texaGusto"></textarea>                                                   
                            </div>
                        </div>
                        <div class="FormInput">
                             <p class="FormInput-label--text FormInput-principal no-padding-top">¿Qué cosas podríamos mejorar?</p>
                            <div class="FormInput-wrapper">
                                <textarea class="FormInput-input FormInput-input--textarea" name="textaMejorar" id="textaMejorar"></textarea>                             
                            </div>
                        </div>
                        
                    </div>

                </div>
                <div class="Form-section">
                     <h4  class="Form-title">Próximas Funcionalidades</h4>
                      <div class="Form-main">
                            <!-- preguntas -->
                            <p class="Form-desc">Evalúa que tan importantes son para ti las siguientes funcionalidades</p>
                            <p class="FormInput-label--text FormInput-principal no-padding-top">Hacer log-in en aeromexico.com con mi cuenta de Facebook o Twitter</p>
                            <div class="FormInput-wrapper FormRadios--v2">
                                <input type="radio" class="FormInputRadio-input" name="login" id="nada1" value="0"  data-parsley-required-message="Elige una opcion">
                                 <label  for="nada1" class="FormInputCheckbox-label">
                                    <span>Nada importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="login" id="indef1" value="1">
                                 <label  for="indef1" class="FormInputCheckbox-label">
                                    <span>Indiferente</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="login" id="imp1" value="2">
                                 <label  for="imp1" class="FormInputCheckbox-label">
                                    <span>Importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="login" id="muyimp1" value="3">
                                 <label  for="muyimp1" class="FormInputCheckbox-label">
                                    <span>Muy importante</span>
                                </label>

                            </div> 
                            <!-- preguntas -->
                            <!-- preguntas -->
                            <p class="FormInput-label--text FormInput-principal">Reservar boletos para poder llevar a mi mascota</p>
                            <div class="FormInput-wrapper FormRadios--v2">
                                <input type="radio" class="FormInputRadio-input" name="pets" id="nada2" value="0"  data-parsley-required-message="Elige una opcion">
                                 <label  for="nada2" class="FormInputCheckbox-label">
                                    <span>Nada importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="pets" id="indef2" value="1">
                                 <label  for="indef2" class="FormInputCheckbox-label">
                                    <span>Indiferente</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="pets" id="imp2" value="2">
                                 <label  for="imp2" class="FormInputCheckbox-label">
                                    <span>Importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="pets" id="muyimp2" value="3">
                                 <label  for="muyimp2" class="FormInputCheckbox-label">
                                    <span>Muy importante</span>
                                </label>
                            </div> 
                            <!-- preguntas -->
                            <!-- preguntas -->
                            <p class="FormInput-label--text FormInput-principal">Guardar mis formas de pago para futuras compras</p>
                            <div class="FormInput-wrapper FormRadios--v2">
                                <input type="radio" class="FormInputRadio-input" name="savepay" id="nada3" value="0"  data-parsley-required-message="Elige una opcion">
                                 <label  for="nada3" class="FormInputCheckbox-label">
                                    <span>Nada importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="savepay" id="indef3" value="1">
                                 <label  for="indef3" class="FormInputCheckbox-label">
                                    <span>Indiferente</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="savepay" id="imp3" value="2">
                                 <label  for="imp3" class="FormInputCheckbox-label">
                                    <span>Importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="savepay" id="muyimp3" value="3">
                                 <label  for="muyimp3" class="FormInputCheckbox-label">
                                    <span>Muy importante</span>
                                </label>
                            </div> 
                            <!-- preguntas -->
                            <!-- preguntas -->
                            <p class="FormInput-label--text FormInput-principal">Cambiar mi vuelo en línea</p>
                            <div class="FormInput-wrapper FormRadios--v2">
                                <input type="radio" class="FormInputRadio-input" name="changeOnline" id="nada4" value="0"  data-parsley-required-message="Elige una opcion">
                                 <label  for="nada4" class="FormInputCheckbox-label">
                                    <span>Nada importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="changeOnline" id="indef4" value="1">
                                 <label  for="indef4" class="FormInputCheckbox-label">
                                    <span>Indiferente</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="changeOnline" id="imp4" value="2">
                                 <label  for="imp4" class="FormInputCheckbox-label">
                                    <span>Importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="changeOnline" id="muyimp4" value="3">
                                 <label  for="muyimp4" class="FormInputCheckbox-label">
                                    <span>Muy importante</span>
                                </label>
                            </div> 
                            <!-- preguntas -->
                            <!-- preguntas -->
                            <p class="FormInput-label--text FormInput-principal">Poder reservar utilizando mis Puntos Premier</p>
                            <div class="FormInput-wrapper FormRadios--v2">
                                <input type="radio" class="FormInputRadio-input" name="flightKMP" id="nada5" value="0"  data-parsley-required-message="Elige una opcion">
                                 <label  for="nada5" class="FormInputCheckbox-label">
                                    <span>Nada importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="flightKMP" id="indef5" value="1">
                                 <label  for="indef5" class="FormInputCheckbox-label">
                                    <span>Indiferente</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="flightKMP" id="imp5" value="2">
                                 <label  for="imp5" class="FormInputCheckbox-label">
                                    <span>Importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="flightKMP" id="muyimp5" value="3">
                                 <label  for="muyimp5" class="FormInputCheckbox-label">
                                    <span>Muy importante</span>
                                </label>
                            </div> 
                            <!-- preguntas -->
                            <!-- preguntas -->
                            <p class="FormInput-label--text FormInput-principal">Poder comprar extras utilizando mis Puntos Premier <br>(Ej. Asientos AM Plus o equipaje extra)</p>
                            <div class="FormInput-wrapper FormRadios--v2">
                                <input type="radio" class="FormInputRadio-input" name="KMP" id="nada6" value="0"  data-parsley-required-message="Elige una opcion">
                                 <label  for="nada6" class="FormInputCheckbox-label">
                                    <span>Nada importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="KMP" id="indef6" value="1">
                                 <label  for="indef6" class="FormInputCheckbox-label">
                                    <span>Indiferente</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="KMP" id="imp6" value="2">
                                 <label  for="imp6" class="FormInputCheckbox-label">
                                    <span>Importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="KMP" id="muyimp6" value="3">
                                 <label  for="muyimp6" class="FormInputCheckbox-label">
                                    <span>Muy importante</span>
                                </label>
                            </div> 
                            <!-- preguntas -->
                            <!-- preguntas -->
                            <p class="FormInput-label--text FormInput-principal">Guardar información personal de mis viajeros frecuentes <br>(Ej. familiares, jefes, amigos)</p>
                            <div class="FormInput-wrapper FormRadios--v2">
                                <input type="radio" class="FormInputRadio-input" name="saveInfo" id="nada7" value="0"  data-parsley-required-message="Elige una opcion">
                                 <label  for="nada7" class="FormInputCheckbox-label">
                                    <span>Nada importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="saveInfo" id="indef7" value="1">
                                 <label  for="indef7" class="FormInputCheckbox-label">
                                    <span>Indiferente</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="saveInfo" id="imp7" value="2">
                                 <label  for="imp7" class="FormInputCheckbox-label">
                                    <span>Importante</span>
                                </label>
                                <input type="radio" class="FormInputRadio-input" name="saveInfo" id="muyimp7" value="3">
                                 <label  for="muyimp7" class="FormInputCheckbox-label">
                                    <span>Muy importante</span>
                                </label>
                            </div> 
                            <!-- preguntas -->

                            <div class="FormInput">
                                <p class="FormInput-label--text FormInput-principal">¿Tienes algún comentario adicional?</p>

                                <div class="FormInput-wrapper">
                                    <textarea class="FormInput-input FormInput-input--textarea" id="textaComments" name="textaComments"></textarea>                                                        
                                </div>
                            </div>
                 
                          
                      </div>  

                </div>
                <div class="Form-section">
                     <h4  class="Form-title">Tus datos</h4>
                      <div class="Form-main">
                            <p class="Form-desc">Escribe tus datos para participar por un boleto doble a nuestro evento de lanzamiento</p>
                            <div class="FormInput">
                                    <div class="FormInput-wrapper">
                                        <label for="middleName" class="FormInput-label FormInput-label--undefined" aria-required="false">
                                            <span>Tu nombre</span>
                                            <span class="FormInput-labelOptional">(Opcional)</span>
                                        </label>
                                        <input type="text"  spellcheck="true" maxlength="30" id="middleName" name="middleName" class="FormInput-input" autocorrect="on" autocapitalize="on" aria-disabled="false" aria-describedby="middleName-error-text">
                                    </div>
                            </div>

                            <div class="FormInput">
                                    <div class="FormInput-wrapper">
                                        <label for="middleName" class="FormInput-label FormInput-label--undefined" aria-required="false">
                                            <span>Tu edad</span>
                                            <span class="FormInput-labelOptional">(Opcional)</span>
                                        </label>
                                        <div class="select-style">
                                            <select name="selAge" id="selAge">
                                                <option selected="selected" value="">Selecciona tu rango de edad</option>
                                                <option value="-18">Menor de 18</option>
                                                <option value="18 - 25">18 a 25</option>
                                                <option value="26 - 35">26 a 35</option>
                                                <option value="36 - 45">36 a 45</option>
                                                <option value="+46">46 en adelante​</option>
                                            </select> 
                                        </div>
                                           
                                    </div>
                            </div>

                            <div class="FormInput FormInput--toggle">
                                    <div class="FormInput-wrapper FormInput-wrapper--toggle">
                                        <label aria-required="true" class="FormInput-label FormInput-label--undefined" for="gender" >
                                            <span>Género</span>
                                            <span class="FormInput-labelOptional">(Opcional)</span>
                                        </label>
                                        <ul class="Toggle Toggle--form">
                                            <li class="Toggle-listItem">
                                                <button for="inpHdMen" class="Toggle-button Toggle-button--form" type="button"><span>Hombre</span></button>
                                                <input type="hidden" id="inpHdMen" name="inpHdMen">
                                            </li>
                                            <li class="Toggle-listItem">
                                                <button for="inpHdWoman" class="Toggle-button Toggle-button--form" type="button"><span>Mujer</span>
                                                </button>
                                                <input type="hidden" id="inpHdWoman" name="inpHdWoman">
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="FormInput FormInput--toggle">
                                    <div class="FormInput-wrapper FormInput-wrapper--toggle">
                                        <label aria-required="true" class="FormInput-label FormInput-label--undefined" for="gender">
                                            <span>Tipo de viaje más común</span>
                                            <span class="FormInput-labelOptional">(Opcional)</span>
                                        </label>
                                        <ul class="Toggle Toggle--form">
                                            <li class="Toggle-listItem">
                                                <button class="Toggle-button Toggle-button--form" type="button"><span>Negocios</span></button>
                                                <input type="hidden" id="inpHdNegocios" name="inpHdNegocios" />
                                            </li>
                                            <li class="Toggle-listItem">
                                                <button class="Toggle-button Toggle-button--form" type="button"><span>Placer</span>
                                                </button>
                                                <input type="hidden" id="inpHdPlacer" name="inpHdPlacer" />
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="FormInput">
                                    <div class="FormInput-wrapper">
                                        <label for="email" class="FormInput-label FormInput-label--undefined" aria-required="false">
                                            <span>Email</span>
                                        </label>
                                        <input type="email"  spellcheck="true" required id="email" class="FormInput-input" autocorrect="on" autocapitalize="on" aria-disabled="false" aria-describedby="middleName-error-text" name="inpEmail" data-parsley-required-message="Escribe un email">
                                    </div>
                            </div>
                            <p class="Form-desc">Si realizaste una reserva en el nuevo aeromexico.com, compártenos tu código de reservación y participa en el sorteo de un viaje doble a cualquier destino de Aeroméxico en Estados Unidos, Canadá y México.</p>
                            <div class="FormInput">
                                    <div class="FormInput-wrapper">
                                        <label for="pnr" class="FormInput-label FormInput-label--undefined" aria-required="false">
                                            <span>PNR</span>
                                            <span class="FormInput-labelOptional">(Opcional)</span>
                                        </label>
                                        <input type="text" spellcheck="true" maxlength="30" id="pnr" class="FormInput-input" autocorrect="on" autocapitalize="on" aria-disabled="false" aria-describedby="middleName-error-text" name="inpTxtPnr">
                                    </div>
                            </div>

                            
                          
                            <div class="FormInput FormInput--checkbox FormInput--large">
                                <div class="FormInput-wrapper has-fieldLabel">
                                    <label for="redressNumberRequired" class="FormInput-label FormInput-label--checkbox" aria-required="false">
                                        <span>¡Participa!</span>
                                    </label>
                                    <div class="FormInputCheckbox-wrapper">
                                        <input type="checkbox" id="redressNumberRequired" class="FormInputCheckbox-input" aria-required="false" aria-disabled="false" aria-describedby="redressNumberRequired-error-text" name="redressNumberRequired" >
                                        <label  for="redressNumberRequired" class="FormInputCheckbox-label">
                                            <span>Quiero participar en el sorteo de 10 pases dobles para el evento de lanzamiento del nuevo Aeromexico.com en la Cd. de México.</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="FormInput FormInput--checkbox FormInput--large">
                                <div class="FormInput-wrapper has-fieldLabel">
                                    <div class="FormInputCheckbox-wrapper">
                                        <p>
                                        Al dar clic en “Enviar” aceptas los 
                                        <a target="_blank" href="http://aeromexico.com/es/viaja-con-aeromexico/preparando-tu-viaje/reglamentos-y-politicas/terminos-y-condiciones/?site=mx" class="link-gray">Términos y condiciones</a> y la <a target="_blank" href="http://aeromexico.com/es/viaja-con-aeromexico/preparando-tu-viaje/reglamentos-y-politicas/aviso-de-privacidad/?site=mx" class="link-gray">Política de privacidad</a>
                                        </p>
                                    </div>
                                </div>    
                            </div>
                      </div>  
                </div>
               
                <div class="TravelerInfo-bookSubmitBtn">
                    <input type="submit" name="Enviar" class="Btn Btn--block Btn--filledRed" value="Enviar">
                </div>    
            </form>
            
            <p class="TravelerInfo-privacyPolicy TravelerInfo-privacyPolicy--BOOK Form-privacyPolicy">Aerovías de México S.A. de C.V. (“Aeroméxico”), con domicilio en Avenida Paseo de la Reforma No. 445, Colonia Cuauhtémoc, Delegación Cuauhtémoc, C.P. 06500, México, D.F., tratará sus datos personales para proporcionarle la información que nos solicita y prestarle los servicios de transporte aéreo que contrata con nosotros, así como para fines, administrativos, estadísticos, publicitarios, mercadotécnicos y de prospección comercial. Usted puede conocer nuestro aviso de privacidad integral para clientes en: <a class="" target="_blank" ?site="mx" aviso-de-privacidad="" reglamentos-y-politicas="" viaje="" href="http://aeromexico.com/es/viaja-con-aeromexico/preparando-tu-">http://aeromexico.com/es/viaja-con-aeromexico/preparando-tu-viaje/reglamentos-y-politicas/aviso-de-privacidad/?site=mx</a></p>
        </div>
    </div>
    <!-- ContentWrapper-->
<?php
    $obFunction->addScript("https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.0.1/jquery.rateyo.min.js");
    $obFunction->addScript("js/parsley.min.js");
    $obFunction->addScript("js/i18n/es.js");
    $obFunction->addScript("js/app.js");
    $obFunction->addInlineScript("js/parsley.js.html");
    $obFunction->printFooter();
}
?>