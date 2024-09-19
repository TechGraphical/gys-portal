<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // file_get_contents("php://input")
    $stmt = $db->query("SELECT * FROM data");
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $res = json_encode($row);
    echo $res;
}