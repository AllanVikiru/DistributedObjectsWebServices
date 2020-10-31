<?php

function generateXML($students_array){
    try{

        $file = 'students.xml'; //declare file name
        $dom = new DOMDocument('1.0', 'utf-8'); //create XML file with the version type and encoding format
        $root = $dom->createElement('students'); //set root element for XML file

        for ($i=0; $i<count($students_array); $i++){ //create new entries as per records in the student array
            //set variables to the different attributes
            $studentID = $students_array[$i]['id'];
            $studentFirstName = $students_array[$i]['firstName'];
            $studentLastName = $students_array[$i]['lastName'];
            $studentDOB = $students_array[$i]['dateofBirth'];
            $studentSchool = $students_array[$i]['school'];
            $studentCourse = $students_array[$i]['course'];

            $student = $dom->createElement('student'); //set level 1 child element student and set ID as attribute
            $student->setAttribute('id', $studentID);

            $first_name = $dom->createElement('firstName', $studentFirstName); //set level 2 child element firstName and append it to student 
            $student->appendChild($first_name);

            $last_name = $dom->createElement('lastName', $studentLastName);//set level 2 child element lastName and append it to student
            $student->appendChild($last_name);

            $dob = $dom->createElement('dateofBirth', $studentDOB);//set level 2 child element dateofBirth and append it to student
            $student->appendChild($dob);

            $details = $dom->createElement('details');//set level 2 child element details and append it to student
            $student->appendChild($details);

            $school = $dom->createElement('school', $studentSchool);//set level 3 child element school and append it to details
            $details->appendChild($school);

            $course = $dom->createElement('course', $studentCourse);//set level 3 child element school and append it to details
            $details->appendChild($course);

            $root->appendChild($student); //append level 1 child element student it to root element students
        }

        $dom->appendChild($root); //append root element students to the XML file
        $dom->formatOutput  = true; //format the XML file and save 
        $dom->save($file);
        //prompt for successful generation
        echo 'Student XML file Created! Access it <a href="../dows-mysql-to-xml/students.xml">here</a>.<br><br>'; 
        echo '<i><b>Note</b>: As noticed with Mozilla Firefox, your browser add-ons may interfere with the file preview function.<br> 
        Copy the URL to a new Private Browsing window, or to another browser to view the file. You can also access it from your directory locally.</i>';
    }
    catch (Exception $ex){
        //prompt for unsuccessful generation
        echo 'An error occured:', $ex->getMessage();
    }
}

?>
