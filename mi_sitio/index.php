<?php
// index.php
$page = isset($_GET['page']) ? $_GET['page'] : 'inicio'; // Por defecto 'inicio'
$valid_pages = ['inicio', 'contacto', 'acerca'];

if (!in_array($page, $valid_pages)) {
    $page = 'inicio'; // Si no es válido, mostrar 'inicio'
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'menu.php'; ?>
    <main>
        <?php include "contenido/$page.php"; ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
