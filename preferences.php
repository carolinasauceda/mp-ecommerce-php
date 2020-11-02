<?php
    // SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';

    // Agrega credenciales
    MercadoPago\SDK::setAccessToken('APP_USR-8058997674329963-062418-89271e2424bb1955bc05b1d7dd0977a8-592190948');
    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();
    $preference->payment_methods = array(
        "excluded_payment_methods" => array(
            array("id" => "master")
        ),
        "excluded_payment_types" => array(
            array("id" => "atm")
        ),
        "installments" => 6
        );
    $preference->back_urls = array(
        'success'=>'/',
        'failure'=>'/fallo.php',
        'pending'=>'/pendiente.php',
    );
    $preference->auto_return='approved';
    $preference->external_reference="k98@live.com";
?>
 