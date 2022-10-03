<?php
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $nasc = $_POST['nasc'];

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo '<script>alert ("'.$email.' is a valid email address")</script>';
    } else {
        echo '<script>alert ("'.$email.' is not a valid email address")</script>';
    }
    
    ?>