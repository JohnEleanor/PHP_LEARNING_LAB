<?php 
class Employee {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    } 

    public function getAllEmployees() {
        $stmt = $this->conn->prepare("SELECT * FROM employee");
        $stmt->execute();
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $employees;
    }

    public function getEmployeeById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM employee WHERE id = ?");
        $stmt->execute([$id]);
        $employees = $stmt->fetch(PDO::FETCH_ASSOC);
        return $employees;
    }


    public function addEmployee($data) {
        $name = $data["name"];
        $surename = $data["surname"];

        $stmt = $this->conn->prepare("INSERT INTO employee (emp_name, emp_surname) VALUE (:name, :surname)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':surname', $surename, PDO::PARAM_STR);
        $result = $stmt->execute();

        return ($result ? true : false);
    }


    public function updateEmployee($id, $data) {
        $id = $data['id'];
        $name = $data['name'];
        $surename = $data['surname'];

        $stmt = $this->conn->prepare('UPDATE employee SET emp_name = :name , emp_surname = :surname WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':surname', $surename, PDO::PARAM_STR);
        $result = $stmt->execute();
        return ($result ? true : false);
    }

    public function deleteEmployee($id) {
        $id = $_GET['id'];
        $stmt = $this->conn->prepare('DELETE FROM employee WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $result = $stmt->execute();
        return ($result ? true : false);
    }



}

// require_once 'db.php';
// $emp = new Employee($conn);

// print_r($emp->getAllEmployees());
// print_r($emp->getEmployeeById(2));

// Insert data 
// $emp->addEmployee([
//     "name"=> "test",
//     "surname"=> "eiei",
// ]);



?>