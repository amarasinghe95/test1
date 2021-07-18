<?php

    if(isset($_POST["reset-request-submit"])){

        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "http://localhost/csproject/creat-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

        
}
else{
    header("location: ../index.php");
}