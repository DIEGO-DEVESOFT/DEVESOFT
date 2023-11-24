<?php 
    require_once "models/Pregunta.php";
    class Landing{
        public function __construct(){}
        public function index(){
            
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    // echo "<script>alert ('MENSAJE ENVIADO')</script>";
                    require_once "views/Company/header.view.php";
                    require_once "views/Company/index.view.php";  
                    require_once "views/Company/footer.view.php";
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $Pregunta = new Pregunta(
                        NULL,
                        $_POST['NombreCompleto'],
                        $_POST['Email'],
                        $_POST['Pregunta']
                    );
                    $Pregunta->RegistrarPregunta();
                    header("Location: ?c=Landing&a=index");
                } 
        }
    }
?>