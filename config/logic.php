<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // file_get_contents("php://input")
    $stmt = $db->query("SELECT * FROM data");
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $res = json_encode($row);
    echo $res;
} else if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $requirements = $_POST['requirements'];
    $type = $_POST['type'];
    $budget = $_POST['budget'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];
    $stmt = "INSERT INTO data (fname, mobile, requirements, type, budget, location, date, time, status, remarks) VALUES (:fname, :mobile, :requirements, :type, :budget, :location, :date, :time, :status, :remarks)";
    $stmt = $db->prepare($stmt);
    $data = [
        ":fname" => $fname,
        ":mobile" => $mobile,
        ":requirements" => $requirements,
        ":type" => $type,
        ":budget" => $budget,
        ":location" => $location,
        ":date" => $date,
        ":time" => $time,
        ":status" => $status,
        ":remarks" => $remarks,
    ];
    $res = $stmt->execute($data);
    if($res){
        http_response_code(200);
    } else {
        http_response_code(400);
    }
}