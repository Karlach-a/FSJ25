<?php

require_once __DIR__ . '/Clases/Biblioteca.php';
require_once __DIR__ . '/Clases/Libro.php';
require_once __DIR__ . '/Clases/Usuario.php';
require_once __DIR__ . '/Clases/Prestamo.php';

// Crear instancia de biblioteca (almacena los datos en memoria)
$biblioteca = new Biblioteca();

session_start();

// Persistencia temporal en sesión
if (!isset($_SESSION['biblioteca'])) {
    $_SESSION['biblioteca'] = $biblioteca;
} else {
    $biblioteca = $_SESSION['biblioteca'];
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./CSS/Style.css">
    <title>Gestion Biblioteca</title>
</head>
<body>
    <h1>Sistema de Gestión de Biblioteca</h1>
    

    <!-- Formulario para agregar libros -->
   
    <form action="procesar.php" method="POST" class="formulario">
    <h2>Agregar Libro</h2>
        <input type="hidden" name="action" value="agregarLibro">
        <label for="id">ID del libro:</label>
        <input type="number" id="id" name="id" required><br>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>
        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" required><br>
        <button type="submit">Agregar Libro</button>
    </form>
   
    <!-- Formulario para buscar libros -->
    
    <form action="procesar.php" method="GET" class="formulario2">
    <h2>Buscar Libro</h2>
        <input type="hidden" name="action" value="buscarLibro">
        <label for="titulo_buscar">Título:</label>
        <input type="text" id="titulo_buscar" name="titulo"><br>
        <button type="submit">Buscar</button>
    </form>

    <!-- Formulario para registrar préstamo -->
   
    <form action="procesar.php" method="POST" class="formulario3">
    <h2>Registrar Préstamo</h2>
        <input type="hidden" name="action" value="prestarLibro">
        <label for="id_libro">ID del Libro:</label>
        <input type="number" id="id_libro" name="id_libro" required><br>
        <label for="usuario">Nombre del Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        <button type="submit">Registrar Préstamo</button>
    </form>
</body>
</html>
