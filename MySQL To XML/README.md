### Generate XML files from MySQL tables using PHP

> Scripts

1. ```credentials.php``` - for declaring database connection credentials.

2. ```generate.php``` - containing the function for generating the XML file. 

3. ```index.php```- for connecting to the database and passing database table information to the XML file generation function.

4. ```students.sql``` - a SQL file for the database table.

5. ```students.xml``` - the generated XML file  and its sample ```sample.txt```. 
  
> Program Execution

```
1. Create a folder 'dows-mysql-to-xml' within the web server folder and paste the scripts on there. 

2. Create a MYSQL database and import students.sql as a new table. 

3. In credentials.php enter your database connection credentials as indicated - server name, username, password and database name.

4. Consequently, run the script dows-mysql-to-xml/index.php on your web browser.          
```
