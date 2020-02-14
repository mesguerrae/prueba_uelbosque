<?php
    require(dirname(__DIR__) ."/config/database.php");
    if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
        require(dirname(__DIR__) ."/config/connection.php");
        $query = "SELECT * FROM usuarios WHERE username = ? and password = ?";
        $sql = $conn->prepare($query);
        if ($sql === false) {
            echo json_encode(array('success' => 0 , 'error' => array( 'message' => $conn->connect_error, 'code' => $conn->connect_errno)));
        }else{
            $sql->bind_param("ss", $_POST['username'], md5($_POST['password']));
             if (!$sql->execute()) {
                 echo json_encode(array('success' => 0 , 'error' => array( 'message' => $sql->error, 'code' => $sql->errno)));
             }else{
                $resultado = $sql->get_result();
               if (!$resultado ) {
                    echo json_encode(array('success' => 0 , 'error' => array( 'message' => $resultado->error, 'code' => $resultado->errno)));
                }else{
                    if($resultado->num_rows == 0){
                        echo json_encode(array('success' => 0 , 'error' => array( 'message' => 'Usuario/Contraseña Erroneos. Verifique e intente nuevamente', 'code' => '001')));
                    }else{
                        echo json_encode(array('success' => 1));
                    }
                }
                $resultado->close();
             }
        }
        $sql->close();
        require(dirname(__DIR__) ."/config/connectionclose.php");
    } else {
        echo json_encode(array('success' => 0 , 'error' => array( 'message' => 'Ingrese Usuario/Contraseña validos', 'code' => '001')));
    }

?>