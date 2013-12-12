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
        <title>Item F</title>
    </head>
    <body>
        <?php
        // put your code here
        
        
        /*
         * From all your notes and assignments from previous weeks, you should
         * be able to create an address book form that can be submited to this page
         * and with the data collected should be able to save to the database.
         * 
         * 1. Start by creating the form and making sure you can collect the data from
         * the $_POST super global.
         * 
         * 2. Validate the data so at least something is being entered correctly.
         * 
         * 3. Take the validated data and insert into the database with bindparam 
         * before excuting
		 
		 
		 				if ( $stmt->execute() ){
						$sucessMsg = "<h3>Info Submited</h3>";
					} else {
						$errorMsg = "<h3>Info NOT Submited</h3>";
					}

         */
        ?>
		
		<?php
		
		const DB_DNS = "mysql:host=localhost;port=3306;dbname=phplab", DB_USER  = "root", DB_PASSWORD  = "";
		
		$db = new PDO(DB_DNS, DB_USER, DB_PASSWORD);

		if (count($_POST)) {
		
		
		$name = filter_input(INPUT_POST, "name");
		$address = filter_input(INPUT_POST, "address");
		$city = filter_input(INPUT_POST, "city");
		$state = filter_input(INPUT_POST, "state");
		$zip = filter_input(INPUT_POST, "zip");
		
			if ( is_string($name) && !empty($name) &&
			is_string($address) && !empty($address) && 
			is_string($city) && !empty($city) && 
			is_string($state) && !empty($state) &&
			is_string($zip) && !empty($zip) ) {

			echo "valid fields";
                        try {
				$stmt = $db->prepare('insert into addressbook set name = :nameValue, 
				address = :addressValue, city = :cityValue, state = :stateValue, zip = :zipValue' );
				
				$stmt->bindParam(':nameValue', $name, PDO::PARAM_STR);
				$stmt->bindParam(':addressValue', $address, PDO::PARAM_STR);
				$stmt->bindParam(':cityValue', $city, PDO::PARAM_STR);
				$stmt->bindParam(':stateValue', $state, PDO::PARAM_STR);
				$stmt->bindParam(':zipValue', $zip, PDO::PARAM_STR);
				$stmt->execute();	

			} catch( PDOException $e) {
				echo "DataBase Error";

			}

			}else {
                            echo "Invalid or empty field";
                        }  
		}
		
		
		?>
		
	<form name="addressbook" action="#" method="post">
            
            Name: <input type="text" name="name" /><br />
            Address: <input type="text" name="address" /><br />
            City: <input type="text" name="city" /><br />
            State: <input type="text" name="state" /><br />
            Zip: <input type="text" name="zip" /><br />
                      
            <input type="submit" value="Submit" />
            <br />
            <a href="itemE.php">View Table</a><br />
            <a href="itemg.php">Update Table</a>
        </form>
    </body>
</html>
