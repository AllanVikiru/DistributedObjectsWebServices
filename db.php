<?php

// database connection credentials
$servername = "localhost";
$port = 3306;
$username = "root";
$password = "";
$db = "dows_labs";

//test connection
try{
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$db", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // turn on error mode for debugging errors
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  // get maximum sql injection protection
    $conn_msg = "Database Connection Successful!";
} 
catch(Exception $e){
    $conn_msg = "Connection failed: " . $e->getMessage();
}

//save student details upon student registration
function register($first_name, $last_name, $dob, $school, $course){	
    global $conn;
    global $conn_msg;

	$query = $conn->prepare('INSERT INTO students (firstName, lastName, dateofBirth, school, course) VALUES (?, ?, ?, ?, ?)');
	$query->bindParam(1,$first_name, PDO::PARAM_STR);
	$query->bindParam(2,$last_name, PDO::PARAM_STR);
    $query->bindParam(3,$dob, PDO::PARAM_STR);
    $query->bindParam(4,$school, PDO::PARAM_STR);
    $query->bindParam(5,$course, PDO::PARAM_STR);
    
    try {
        $query->execute();
        echo '<script language="javascript">';
        echo 'alert("Registration Complete!");';
        echo "location.href='../dows-soap/register.php';";
        echo '</script>';
    }
    catch (Exception $e){
        echo '<script language="javascript">';
        echo 'alert("An error occurred. Please try again.");';
        echo '</script>';
        $conn_msg = $e->getMessage();
    } 
}

// fetch student from db using admission number - SOAP service function
function fetch($admNo){
    global $conn;
    $query = $conn->prepare('SELECT * FROM students WHERE admNo = ?');
	$query->bindParam(1, $admNo, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    if (empty($result)){
        return "<label class = 'text-danger'> No student is registered under admission number $admNo <label>";
    }
    else {
    return "<label>Student Information</label></br>
            Admission Number : ".$result['admNo']."</br>
            Name : ". $result['firstName']." ".$result['lastName']."</br>
            Date of Birth : ". $result['dateofBirth']."</br>
            School : ".$result['school']."</br>
            Course : ".$result['course']."";   
    }	 	 
}

?>