<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="week6.css" type="text/css" />
        <title>Item E</title>
        
    </head>
    <body>
        <?php
         /*
        * Please follow the instructions below.
        * 
          * It is very important to know how to connect to a database and
          * how to retrive data.  PDO in PHP makes it easier to connect
          * and access data.
          * 
          * below is code that will access an address book.  With the results
          * echo out the data in a table, list, etc.  the results are returned in
          * a multidimentional array, so the first set is a regular array and the 
          * inner array is a key=>value pair.
          * 
          * the for each loop is ideal.
          * 
        * 
        */

        
        $db = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");

        $statement = $db->prepare('select * from addressbook');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        if (count($result)) {
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>Address</th><th>City</th><th>State</th><th>Zip</th></tr>";
            foreach($result as $row) {
                echo "<tr><td>", $row["name"], 
					 "</td><td>", $row["address"],
                     "</td><td>", $row["city"], 
					 "</td><td>", $row["state"], 
					 "</td><td>", $row["zip"], 
					 "</td></tr>";
            }
            echo "</table>";
        }else{
            echo "<p> No results found from addressbook</p>";
        }
		
		
        // put your code here
        ?>
        <a href="itemf.php">Submit form</a><br />
        <a href="itemg.php">Update Table</a>
    </body>
</html>
