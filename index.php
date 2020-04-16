<?php

    $password = $_GET['pass'];
    if ($password == 'Boolean') {
        echo '<p style="color:#00FF00">Password Corretta</p>';
    } else {
        echo '<p style="color:#FF0000">Password Errata</p>';
    }
 ?>
