<?php 
    session_start();
    if($_SESSION['user']){	
    	session_destroy();
    	header("location:?p=principal");
    }
    else{
    	header("location:?p=principal");
    }
?>