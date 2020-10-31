<?php 

include 'credentials.php'; //file with database connection credentials 
include 'generate.php'; // file with generate XML file function


// Create and check for successful connection
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}
else {
    echo("Database Connection Successful!<br><br>");
    
}

$sql = "SELECT * FROM students"; //query to select all students from table
$students_array = array(); // declare new array for students information 

// perform SQL query and check for successful operation
$result = $conn->query($sql);

if (!$result) {
    exit(mysqli_error($conn));
}

//if query is successful fetch each row as associative array and push each to students info array
else {
    while ($row = $result->fetch_assoc()) { 
       array_push($students_array, $row);
       echo("Fetched Student ".$row['id']." - ".$row['firstName']." ".$row['lastName']."<br><br>"); 
    }
    //check if array contains records then call generateXML()
    if(count($students_array)){
        generateXML($students_array);
    }
}

$conn->close(); //close connection with database
  


