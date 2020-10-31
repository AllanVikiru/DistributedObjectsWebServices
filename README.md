## Lab 2: Data Representation in XML using C# and PHP

> Projects

[Serialisation and Deserialisation (C#)](https://github.com/AllanVikiru/DistributedObjectsWebServices/tree/xml/Serialisation%20And%20Deserialisation) : has 2 main scripts - ```Country.cs``` for defining XML elements and ```Program.cs``` for serialisation & deserialisation to and from XML. There's a sample text file containing the XML document skeleton (```sample.txt```) and the XML file (```countries.xml```) that is generated from the scripts.

[Generate XML files from MySQL (PHP)](https://github.com/AllanVikiru/DistributedObjectsWebServices/tree/xml/MySQL%20To%20XML) : ```students.sql```, is a SQL file for defining the database table. For XML generation, it has 3 scripts - ```credentials.php``` for declaring database connection credentials, ```generate.php``` containing the function for generating the XML file and ```index.php``` for connecting to the database and passing database table information to the XML file generation function. The generated XML file is defined in ```students.xml```and its predefined version in ```sample.txt```. 
  
> Prerequisites

[Install C# and Setup C# in VSCode](https://www.youtube.com/watch?v=Y7GMBmd1EAk) 

*Note: The IDE doesn't necessarily have to be VSCode. The C# program can be executed via the command prompt.*


> Program Execution

```
C#
 
dotnet run      // run main program (Program.cs)  
   
```

```
PHP

1. Create a folder 'dows-mysql-to-xml' within the web server folder and paste the scripts on there. 

2. Create a MYSQL database and import students.sql as a new table. 

3. In credentials.php enter your database connection credentials as indicated - server name, username, password and database name.

4. Consequently, run the script dows-mysql-to-xml/index.php on your web browser.
            
```


