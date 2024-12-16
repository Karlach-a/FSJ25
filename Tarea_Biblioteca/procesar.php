<?php

require_once __DIR__ . '/Clases/Biblioteca.php';//__DIR__ devuelve el directorio del archivo actial 
require_once __DIR__ . '/Clases/Libro.php';
require_once __DIR__ . '/Clases/Usuario.php';
require_once __DIR__ . '/Clases/Prestamo.php';

session_start();

if (!isset($_SESSION['biblioteca'])) { //verifica la existencia de la biblioteca 
    die("La biblioteca no está inicializada.");
}

$biblioteca = $_SESSION['biblioteca'];

// Procesar acciones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
//se verifica que tipo de action llega atraves del metoro POST
    switch ($action) {
        case 'agregarLibro':
            $id = intval($_POST['id']);
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $categoria = $_POST['categoria'];

            $libro = new Libro($id, $titulo, $autor, $categoria);
            $biblioteca->agregarLibro($libro);

            echo  "<h2> Libro agregado exitosamente. <h2>";
            break;

        case 'prestarLibro':
            $idLibro = intval($_POST['id_libro']);
            $usuarioNombre = $_POST['usuario'];

            $usuario = new Usuario(uniqid(), $usuarioNombre); //se crea un usuario con id unico generado por uniqid()
            $resultado = $biblioteca->prestarLibro($idLibro, $usuario);

            echo $resultado;
            break;

        default:
            echo "Acción no reconocida.";
            break;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') { //procesa solicitudes del get 
    $action = $_GET['action'] ?? '';

    switch ($action) {
        case 'buscarLibro': //Se toma el título enviado como parametro en la URL (titulo) y se pasa al metodo buscarLibro() de la clase Biblioteca.
            $titulo = $_GET['titulo'] ?? null;

            $resultados = $biblioteca->buscarLibro($titulo);

            if (count($resultados) > 0) {
                echo "<h2>Resultados de búsqueda:</h2>";
                foreach ($resultados as $libro) {
                    echo "<p>ID: {$libro->getId()} | Título: {$libro->getTitulo()} | Autor: {$libro->getAutor()} | Categoría: {$libro->getCategoria()}</p>";
                }
            } else {
                echo "No se encontraron libros con ese título.";
            }
            break;

        default:
            echo "Acción no reconocida.";
            break;
    }
}

// Guardar cambios en sesión
$_SESSION['biblioteca'] = $biblioteca;
?>
<link rel="stylesheet" href="./CSS/Style.css">
<br><h2><a href="index.php">Volver</a></h2> <!-- REgresamos al index  -->
