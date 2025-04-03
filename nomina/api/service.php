<?php
// GET <-- cuando quiero informacio
// POST <-- cuando escribo informacion
// PATCH <-- cuando edito informacio
// PUT <-- cuando reempalzo todo un objeto de infromacion
// DELETE <-- Cuando quiero borrar informacion
require_once '../controllers/create_controller.php';
require_once '../controllers/read_controller.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET':
        $id_doc = $_GET['id_doc'] ?? null; // si no existe el id, le asigno null
        $nomina = read($id_doc);
        if (empty($nomina)) {
            http_response_code(404); // Not Found
            header('Content-Type: application/json');
            echo json_encode(array('message' => 'No records found'));
        } else {
            http_response_code(200); // OK
            header('Content-Type: application/json');
            echo json_encode($nomina);
        }
        break;
    case 'POST': 
        $body =  file_get_contents("php://input");
        $body_json = json_decode($body, true);
        try {
            create($body_json['first_name'], $body_json['last_name'], $body_json['doc_id'], $body_json['salary']);
            http_response_code(201); 
            header('Content-Type: application/json');
            echo json_encode($body_json);

        } catch (Exception $e) {    
            $error = array(
                'message' => $e->getMessage()
            );
            http_response_code(400); // Bad Request
            header('Content-Type: application/json');
            echo json_encode($error);
        }
        
        break;
    case 'PUT':
        echo "esta reemplazando indormacion";
        break;
    case 'PATCH':
        echo "esta editando informacion";
        break;
    case 'DELETE':
        echo "estoy borrando informacion";
        break;
}
