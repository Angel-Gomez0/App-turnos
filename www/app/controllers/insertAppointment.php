<?php
session_start();
if (isset($_SESSION)) {
    if ($_SESSION['rol'] == "" || $_SESSION['rol'] != '1') {
        echo '<script type="text/javascript">';
        echo 'window.location.href="../login.php";';
        echo '</script>';
        exit();
    }
} else {
    echo '<script type="text/javascript">';
    echo 'window.location.href="../login.php";';
    echo '</script>';
    exit();
}

include '../models/getAvailabilitySchedules.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los datos enviados desde el formulario
    $doctorId = $_POST['id_specialist'];
    $speciality = $_POST['id_speciality'];
    $date = $_POST['date']; // Formato dd-mm-yyyy
    $time = $_POST['time'];
    $healthInsaurance = $_POST['healthInsaurance'];

    echo "Datos enviados: $doctorId - $speciality - $date - $time - $healthInsaurance";
} else {
    echo "Metodo de envio invalido";
}
?>
