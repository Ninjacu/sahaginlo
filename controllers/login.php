<?php
/**
 * Created by PhpStorm.
 * User: user2
 * Date: 02/12/14
 * Time: 18:28
 */

require_once __DIR__ . '/../core/Hasa.php';
require_once __DIR__ . '/../data/DatabaseConnection.php';

$hasa = new \Core\Hasa();
$resultado = $hasa->validateLogin(array(
    'username' => $_POST['username'],
    'password' => $_POST['password'],
), new \Data\DatabaseConnection());

if(!$resultado) {
    echo "ERROR en el formulario";
    exit;
}

echo "Tu formulario es correcto";


