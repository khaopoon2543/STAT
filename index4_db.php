<?php 
    session_start();
    include('server.php');

    //collect answer row4
    $checkbox = $_POST['pattern'];
    foreach ($checkbox as $key => $value) {
            $row4= $value;
    }
    $_SESSION['row4']= $row4; 

    /*---------------------------------- INSERT to database ----------------------------------*/

    $errors = array();
    if (isset($_POST['submit'])) {

        if (empty($checkbox)) {
            array_push($errors, "กรุณาเลือกข้อนึงนะค้าบ ;-;");
            $_SESSION['error'] = "กรุณาเลือกข้อนึงนะค้าบ ;-;";
            header("location: index4.php");   
        }
        
        if (count($errors) == 0) {
            header('location: index5.php');           
            }         
    }
?>