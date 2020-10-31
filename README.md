## Lab 2: Data Representation in XML using C# and PHP

> Projects

[Serialisation and Deserialisation (C#)](https://github.com/AllanVikiru/DistributedObjectsWebServices/tree/xml/Serialisation%20And%20Deserialisation) : has 2 major scripts - ```Country.cs``` for defining XML elements and ```Program.cs``` for serialisation & deserialisation to and from XML. There's a sample text file containing the XML document skeleton and the XML file that is generated from the scripts.

[Generate XML files from MySQL tables (PHP)](https://github.com/AllanVikiru/DistributedObjectsWebServices/tree/xml/MySQL%20To%20XML) : has 3 scripts - ```credentials.php``` for declaring database connection credentials, ```generate.php``` containing the function for generating the XML file and ```index.php``` for connecting to the database and passing database table information to the XML file generation function. There's also ```students.sql```, a SQL file for the database table, the generated XML file and its sample. 
  
> Prerequisites

[Install and Setup C# in VSCode](https://www.youtube.com/watch?v=Y7GMBmd1EAk) 


> Program Execution

```
C#
 
dotnet new console  // set up sample application

dotnet run      // run main program (Program.cs)  

//Note: only one Program.cs file can exist within one project - be sure to replace accordingly with the project            
```

```
PHP

Create a folder 'dows-mysql-to-xml' within the web server folder and paste the scripts on there. 

Create a MYSQL database and import students.sql as a new table. 

In credentials.php enter your database connection credentials as indicated - server name, username, password and database name.

Consequently, run the script dows-mysql-to-xml/index.php on your web browser.
            
```


