## Lab 3: Service Invocation and Description in SOAP and WSDL using PHP

> Scripts

[database.php](https://github.com/AllanVikiru/DistributedObjectsWebServices/blob/rest/database.php) : contains function for connecting to the database.
  
[read_all.php](https://github.com/AllanVikiru/DistributedObjectsWebServices/blob/rest/read_all.php) : API function for reading all student record.

[read_one.php](https://github.com/AllanVikiru/DistributedObjectsWebServices/blob/rest/read_all.php) : API function for reading one student record.

[search.php](https://github.com/AllanVikiru/DistributedObjectsWebServices/blob/rest/search.php) : API function for searching student records based on a query.

[student.php](https://github.com/AllanVikiru/DistributedObjectsWebServices/blob/rest/student.php) : declares db queries for reading and searching records..

[students.sql](https://github.com/AllanVikiru/DistributedObjectsWebServices/blob/rest/students.sql) : SQL file for defining student information.


> Prerequisites

[Install Postman](https://learning.postman.com/docs/getting-started/installation-and-updates/) : we're using Postman to consume the REST API

[Send Requests over Postman](https://learning.postman.com/docs/getting-started/sending-the-first-request/)


> Program Execution
```
1. Create a folder 'dows-rest' within the local web server folder and paste the scripts on there. 

2. Create a MYSQL database and import students.sql as a new table. 

3. In database.php enter your database connection credentials as indicated - server name, username, password and database name.

4. Open Postman and send requests by entering the URL e.g. http://localhost/dows-rest/read_one.php?admNo=7 and view the response in the 'Response' tab
            
```
