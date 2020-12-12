<?php
// required headers
header("Access-Control-Allow-Origin: *"); //file can be read by everyone
header("Content-Type: application/json; charset=UTF-8"); //data returned in JSON format
  
// include database and object files
include_once 'database.php';
include_once 'student.php';

//initialise db connection and student objects
$database = new Connection();
$db = $database->connect();
$student = new Student($db);

//get result from fetch all records function 
$result = $student->fetch_all();
$count = $result->rowCount();

//if result is found, extract details into an array and encode into JSON output
if ($count > 0){
    $students_array = array();
    $students_array["students"] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) { 
        extract($row);
        $details = array(
            "admNo" => $admNo,
            "firstName" => $firstName,
            "lastName" => $lastName,
            "dateofBirth" => $dateofBirth,
            "school" => $school,
            "course" => $course
        );
        array_push($students_array["students"], $details);
    }
    http_response_code(200); //set response code - 200 OK
    echo json_encode($students_array);
}

//if result is not found, return an error message and encode into JSON output
else{
    $error_msg = array(
        "message" => "No student records found"
    );
    http_response_code(404); //set response code - 404 NOT FOUND
    echo json_encode($error_msg);
}