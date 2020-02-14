<?php
    require(dirname(__DIR__) ."/config/database.php");
        require(dirname(__DIR__) ."/config/connection.php");
        $query = "SELECT * FROM vehiculo";
        $sql = $conn->prepare($query);
        if ($sql === false) {
            echo json_encode(array('success' => 0 , 'error' => array( 'message' => $conn->connect_error, 'code' => $conn->connect_errno)));
        }else{
             if (!$sql->execute()) {
                 echo json_encode(array('success' => 0 , 'error' => array( 'message' => $sql->error, 'code' => $sql->errno)));
             }else{
                $resultado = $sql->get_result();
               if (!$resultado ) {
                    echo json_encode(array('success' => 0 , 'error' => array( 'message' => $resultado->error, 'code' => $resultado->errno)));
                }else{
                    if($resultado->num_rows == 0){
                        echo json_encode(array('success' => 0 , 'error' => array( 'message' => 'No hay vehiculos registraDos', 'code' => '001')));
                    }else{
                        $data = array();
                        for ($num_fila = ($resultado->num_rows - 1); $num_fila >= 0; $num_fila--) {
                            $resultado->data_seek($num_fila);
                            $data[] = $resultado->fetch_assoc();
                        }

                        echo json_encode(array('success' => 1,'data' => $data));
                    }
                }
                $resultado->close();
             }
        }
        $sql->close();
        require(dirname(__DIR__) ."/config/connectionclose.php");