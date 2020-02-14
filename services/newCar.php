<?php
        require(dirname(__DIR__) ."/config/database.php");

        if(!validateIfExist($_POST['placa'])){
            require(dirname(__DIR__) ."/config/connection.php");
            $query = "INSERT INTO vehiculo (`placa`, `conductor`, `tecnico_fecha_ini`, `tecnico_fecha_fin`, `soat_fecha_ini`, `sota_fecha_fin`, `seguro_fecha_ini`, `seguro_fecha_fin`, `capacidad`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sql = $conn->prepare($query);
            if ($sql === false) {
                echo json_encode(array('success' => 0 , 'error' => array( 'message' => $conn->connect_error, 'code' => $conn->connect_errno)));
            }else{
                $sql->bind_param("ssssssssi", $_POST['placa'], $_POST['conductor'], $_POST['tecnico_fecha_ini'], $_POST['tecnico_fecha_fin'], $_POST['soat_fecha_ini'], $_POST['soat_fecha_fin'], $_POST['seguro_fecha_ini'], $_POST['seguro_fecha_fin'], $_POST['capacidad']);
                if (!$sql->execute()) {
                    echo json_encode(array('success' => 0 , 'error' => array( 'message' => $sql->error, 'code' => $sql->errno)));
                }else{
                    echo json_encode(array('success' => 1 , 'result' => array( 'message' => 'Registrado satisfactoriamente', 'code' => '001')));
                }
            }
            $sql->close();
            require(dirname(__DIR__) ."/config/connectionclose.php");
        }else{
            echo json_encode(array('success' => 0 , 'error' => array( 'message' => 'Vehiculo ya existe', 'code' => '001')));
        }





        function validateIfExist($placa){
            require(dirname(__DIR__) ."/config/database.php");
            require(dirname(__DIR__) ."/config/connection.php");
            $exist = false;
            $query = "SELECT * FROM vehiculo WHERE placa = ?";
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