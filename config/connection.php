<?php
    $conn = new mysqli($host, $user,$pass, $dbname,$port);
    if ($conn->connect_errno){
        echo json_encode(array('success' => 0 , 'error' => array( 'message' => $conn->connect_error, 'code' => $conn->connect_errno)));
    }
