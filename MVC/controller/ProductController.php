<?php 
    require_once './config/database.php';
    require_once './models/Product.php';

    class ProductController{
        public $product;
        public $db;


        public function __construct()
        {
            $database = new Database();
            $this->db= $database->getConnection();// se necesita la conexion a la bd no todos los datoa de la db
            $this->product = new Product($this->db);//no tiene que estar asi en el proyecto
        }

        public function read(){
            // Logica para Leer productos
            $sentence=$this->product->read();
            $products=$sentence->fecthAll(PDO::FETCH_ASSOC);
            include './views/home.php';
        }

        public function create(){
            //Logica para crear productos
            if($_SERVER['REQUEST_METHOD']=="POST"){
                print_r($_POST);
            }
                include './views/create.php';
        }

        public function update($id){
                //Logica para actualizar producto
                include './views/edit.php';

        }

        public function delete($id){
            $this->product->delete($id);
            header('Location: /');
        }

    }

?>