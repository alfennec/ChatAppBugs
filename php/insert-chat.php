<?php 
    session_start();
    if(isset($_SESSION['unique_id']))
    {
        include_once "config.php";

        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){

            ###### Ajouter du code ici : début
    

            ######  Fin code
        }
    }else{
        header("location: ../login.php");
    }


    
?>