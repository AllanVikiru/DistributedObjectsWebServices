<?php
// required headers
header("Access-Control-Allow-Origin: *"); //file can be read by anyone
header("Access-Control-Allow-Methods: GET"); //enable the GET method for fetching based on admission number
header("Content-Type: application/json; charset=UTF-8"); //data returned in JSON format

// include database and object files
include_once 'database.php';
include_once 'student.php';

//initialise db connection and student objects
$database = new Connection();
$db = $database->connect();
$student = new Student($db);

//set URL to fetch based on admission number i.e. /read_one.php?admNo=x
$student->adm_no = isset($_GET['admNo']) ? $_GET['admNo'] : die(); 

//get result from fetch one record function 
$result = $student->fetch_one();
$count = $result->rowCount();

//if result is found, extract details into an array and encode into JSON output
if ($count > 0){
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
    }
    http_response_code(200); //set response code - 200 OK
    echo json_encode($details);
}

//if result is not found, return an error message and encode into JSON output
else{
    $error_msg = array(
        "message" => "No student record found"
    );
    http_response_code(404); //set response code - 404 NOT FOUND
    echo json_encode($error_msg);
}