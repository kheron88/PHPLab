<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        $dbh = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");
        $stmt = $dbh->prepare('SELECT fullname, email, comments FROM week3');
        $stmt->execute();
        
         
         $result = $stmt->fetchAll();
         
         /*
          $result[0]["fullname"] = "tedsfs";
          
          */
         
         //var_dump($result);
        
          if ( count($result) ) {
            echo "<table border='1'>";
            foreach($result as $row) {
                 echo "<tr><td>", $row["fullname"], "</td><td>", $row["email"],
                         "</td><td>", $row["comments"], "</td></tr>";
            }  
            echo "</table>";
          } else {
            echo "No rows returned.";
          }
       
        ?>
        
       
        <form name="mainform" action="processform.php" method="post">
            
            Full name: <input type="text" name="fullname" value="" /> <br />
            Email: <input type="text" name="email" value="" /> <br />
            Comments: <br /> <textarea cols="20" rows="5" name="comments"></textarea> <br />
            <input name="submit" type="submit" value="Submit" />
            
        </form>
        
    </body>
</html>
