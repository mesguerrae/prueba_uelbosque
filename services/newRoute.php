<?php
        require(dirname(__DIR__) ."/config/database.php");

        if(!validateVehicule($_POST['vehiculo'])){
            require(dirname(__DIR__) ."/config/connection.php");
            $query = "INSERT INTO rutas (`vehiculo`, `material`, `distancia`, `peso`) VALUES (?, ?, ?, ?)";
            $sql = $conn->prepare($query);
            if ($sql === false) {
                echo json_encode(array('success' => 0 , 'error' => array( 'message' => $conn->connect_error, 'code' => $conn->connect_errno)));
            }else{
                $sql->bind_param("ssii", $_POST['vehiculo'], $_POST['material'], $_POST['distancia'], $_POST['peso']);
                if (!$sql->execute()) {
                    echo json_encode(array('success' => 0 , 'error' => array( 'message' => $sql->error, 'code' => $sql->errno)));
                }else{
                    echo json_encode(array('success' => 1 , 'result' => array( 'message' => 'Registrado satisfactoriamente', 'code' => '001')));
                }
            }
            $sql->close();
            require(dirname(__DIR__) ."/config/connectionclose.php");
        }else{
            echo json_encode(array('success' => 0 , 'error' => array( 'message' => 'Vehiculo ya tiene ruta asignada', 'code' => '001')));
        }





        function validateVehicule($placa){
            require(dirname(__DIR__) ."/config/database.php");
            require(dirname(__DIR__) ."/config/connection.php");
            $exist = false;
            $query = "SELECT * FROM rutas WHERE vehiculo = ?";
            $sql = $conn->prepare($query);
            if ($sql === false) {
                echo json_encode(array('success' => 0 , 'error' => array( 'message' => $conn->connect_error, 'code' => $conn->connect_errno)));
            }else{
                $sql->bind_param("s", $placa);
                 if (!$sql->execute()) {
                     echo json_encode(array('success' => 0 , 'error' => array( 'message' => $sql->error, 'code' => $sql->errno)));
                 }else{
                    $resultado = $sql->get_result();
                   if (!$resultado ) {
                        echo json_encode(array('success' => 0 , 'error' => array( 'message' => $resultado->error, 'code' => $resultado->errno)));
                    }else{
                        if($resultado->num_rows == 0){
                            $exist = false;
                        }else{
                            $exist = true;
                        }
                    }
                    $resultado->close();
                 }
            }
            $sql->close();
            require(dirname(__DIR__) ."/config/connectionclose.php");
            return $exist;

        }

?>