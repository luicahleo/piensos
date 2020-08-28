<?php
require_once('includes/head.php');
?>

<body>
<?php
require_once('includes/header.php');
?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/img/bg/agendar_perro_gato.jpg);">
        <div class="container">
            <h2>Agendar Entrega</h2>
            <p>Aqui podras agendar la entrega a domicilio o si prefieres recoger en tienda</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">

        </div>
    </div>
</div>

<div class="login-register-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class=""  href="login.php">
                            <h4> Iniciar sesion </h4>
                        </a>
                        <a  href="register.php" class="active">
                            <h4> register </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once('includes/footer.php');
require_once('includes/js.php');

?>

</body>

</html>
