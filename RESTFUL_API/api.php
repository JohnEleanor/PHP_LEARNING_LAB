<?php 
require_once("db.php");
require_once("employee.php");

$employeObj = new Employee($conn);

$method = $_SERVER['REQUEST_METHOD'];

$endpoint = $_SERVER['PATH_INFO']; // ! สำคัญมากๆ ต้องใช้ PATH_INFO ถ้าใช้ REQUEST_URI จะไม่ได้

header('Content-Type: application/json');




/**
 * GET 
 *       |
 *       -> /employees : To get Employee
 *       -> /employees/{id} : Send ID to get Employee by ID
 *  POST 
 *       |
 *      -> /employees : To Create Employee or Insert Employee
 *
 *   PUT 
 *      |
 *     -> /emplyees/{id} : To Update Employee By ID 
 *
 *   DELETE
 *      |
 *      -> /employees/{id} : To Delete Employee By ID
*/


?>

<?php

if ($method == "GET") {
 
    if ($endpoint === '/employees') {
        $employees = $employeObj->getAllEmployees();
        echo json_encode($employees);
    }elseif (preg_match('/^\/employees\/(\d+)$/', $endpoint, $matches)) {
        $employeeId = $matches[1];
        $employee = $employeObj->getEmployeeById($employeeId);
        echo json_encode($employee);
    }
}elseif ($method == "POST") {
  
    if ($endpoint === "/employees") {
        $data = json_encode(file_get_contents("php://input"), true);
        $result = $employeObj->addEmployee($data);
        echo json_encode(['success' => $result]);
    }
}elseif ($method == "PUT") {
  
    if (preg_match("/^\/employees\/(\d+)$/", $endpoint, $matches)) {
        $employeeId = $matches[1];
        $data = json_decode(file_get_contents('php://input'), true);
        $result = $employeObj->updateEmployee($employeeId, $data);
        echo json_encode(['success'=> $result]);
    }
}elseif ($method == "DELETE") {
    if (preg_match("/^\/employees\/(\d+)$/", $endpoint, $matches)) {
        $employeeId = $matches[1];
        $result = $employeObj->deleteEmployee($employeeId);
        echo json_encode(["success"=> $result]);    
    }

}
?>  