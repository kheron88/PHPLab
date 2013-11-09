<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="css_styles.css" type="text/css" />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Week 1 Lab</h1>
        <!--Create three string variables. -->
        <h4>1.a: Create three string variables.  Two that have a value, and the third that will concatenate the first two.</h4>
        
        <?php 
            $firstname = 'Korey';
            $lastname = 'Heron';
            echo $firstname, "<br />";
            echo $lastname, "<br />";
            //two that have a value, and the third that will concatenate the first two.
            $fullname = $firstname . ' ' . $lastname;
            echo $fullname, "<br />";
        ?> 
        <h4>1.b: Create three array variables.</h4>
            <h5>1. Array one with just 5 values:</h5>
        <?php 
            //Array one with just 5 values
            $array5 = array("one","two","three","four","five");
            print_r($array5);
            echo "<br />";
        ?>        
            <h5>2. Array two with five key=>value pairs:</h5>    
        <?php 
            //Array two with five key=>value pairs
            echo "";
            $array5key = array(
                    "First Name" => "Korey",
                    "Last Name" => "Heron" , 
                    "Amount" => "$500.00",
                    "State"  => "RI",
                    "City" => "Warwick");
            var_dump($array5key);

        ?>
            <h5>3. Array three with 3 multidimensional values:</h5>
        <?php 
        //Array three with 3 multidimensional values
            $arraymulti = array("multi1" => array("1" => "ONE",
                                                                            "2" => "TWO",
                                                                            "3" => "Three" ),
                                    "multi2" => array("4" =>"FOUR",
                                                                    "5" => "FIVE",
                                                                    "6" => "SIX"),
                                    "multi3" => array("7" => "SEVEN",
                                                                    "8" => "EIGHT",
                                                                    "9" => "NINE")
                                                                    );
            
            print_r($arraymulti);
            echo "<br />";

             echo $arraymulti["multi1"]["1"];
            echo $arraymulti["multi1"]["2"];
            echo $arraymulti["multi1"]["3"];
            echo $arraymulti["multi2"]["4"];
            echo $arraymulti["multi2"]["5"];
            echo $arraymulti["multi2"]["6"];
            echo $arraymulti["multi3"]["7"];
            echo $arraymulti["multi3"]["8"];
            echo $arraymulti["multi3"]["9"];
        ?>
        <h4>1c: Provide an example of the following string variables: <br /> Explode, sha1, htmlentities, md5, strip_tags, trim, ucwords, strlen, str_shuffle, ord</h4>
            <h5>Explode function: </h5>
        
        <?php 
            //Explode function - Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter.
            $state = "RhodeIsland Vermount NewYork";
            $statesAR = explode(" ", $state);
            $stateabbr = "RI VT NY";
            $statesabbrAR = explode(" ", $stateabbr);
            echo $statesAR[0];
            echo "<br />";
            echo $statesabbrAR[0];
        ?>
            <h5>sha1 function: </h5>
        <?php 
            //sha1 function - Calculates the sha1 hash of str using the » US Secure Hash Algorithm 1.
            $str = 'test';
                    //echo sha1($str)
            if (sha1($str) === 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3') {
                echo "Correct code: ";
            }
            echo sha1($str);
        ?>
            <h5>htmlentities function: </h5>
        <?php 
            //htmlentities function - This function is identical to htmlspecialchars() in all ways, except with htmlentities(), all characters which have HTML character entity equivalents are translated into these entities.
            echo "";
            $str = "'this' is sample of 'htmlentities'";
            echo htmlentities($str, ENT_QUOTES);
        ?>
            <h5>md5 function: </h5>
         <?php 
            //md5 function - Calculates the MD5 hash of str using the » RSA Data Security, Inc. MD5 Message-Digest Algorithm, and returns that hash.
            $code = 'secerect code';
            if (md5($code) === '5693f71163943cf7876c58551a821662') {
                echo "This is the secerct code";
            }

        ?>
            <h5>strip_tags function: </h5>
         <?php 
             //strip_tags function - This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given str. It uses the same tag stripping state machine as the fgetss() function.
             
             $teststrip = '<p>Tags will be stripped</p> <h1>Header tags stripped</h1>';
             echo strip_tags($teststrip);

        ?>
            <h5>trim function: </h5>
         <?php 
            //trim function - This function returns a string with whitespace stripped from the beginning and end of str.
            
            $texttoTRIM = "Trim will remove this word =>> remove";
            $trimmedTEXT = trim($texttoTRIM, "remove");
            var_dump($trimmedTEXT);
        ?>
            <h5>ucwords function: </h5>
         <?php 
            //ucwords function - Returns a string with the first character of each word in str capitalized, if that character is alphabetic.
            
            $lowcase = "this text was in all lower case";
            $uppercase = ucwords($lowcase);
            echo $uppercase;
        ?>
          
            <h5>strlen function: </h5>
        <?php
            //strlen function - Returns the length of the given string.
            
            $count = 'count the total number of characters';
            echo strlen($count);
        ?>
            <h5>str_shuffle function: </h5>
        <?php
            //str_shuffle function - shuffles a string. One permutation of all possible is created.
            $shuffleTEXT = "this is a test shuffle";
            echo str_shuffle($shuffleTEXT);
        ?>
            <h5>ord function: </h5>
        <?php
            //ord function - Returns the ASCII value of the first character of string.
            
            $str = "+";
            if (ord($str) == 43) {
                echo "43 is a + in the ASCII table";
            }
        
        ?>
            <h4>1.d: Use these array functions in your code: array_count_values, 
                array_flip, array_key_exists, array_map, array_rand, array_push, in_array, shuffle, count/sizeof, sort, in_array  </h4>
                
                <h5>array_count_values function: </h5>
                    
        <?php
            
            //array_count_values - returns an array using the values of array as keys and their frequency in array as values.
            
            $testarray = array(5,5,5,5,5,"two","two");
            print_r(array_count_values($testarray));

        ?>
                <h5>array_flip function: </h5>
        <?php
            //array_flip - returns an array in flip order, i.e. keys from array become values and values from array become keys.
            
            $fliparray = array(1,2,3);
            print_r(array_flip($fliparray));
        
        ?>
                <h5>array_key_exists function: </h5>
        <?php
            // array_key_exists - returns TRUE if the given key is set in the array. key can be any value possible for an array index.
            
            $arrayExists = array('test4' =>4 ,'test2','test3');
            if (array_key_exists('test4',$arrayExists)){
            echo "test1 exist in array";
            }
        ?>
                <h5>array_map function: </h5>
        <?php
            //array_map - returns an array containing all the elements of array1 after applying the callback function to each one. The number of parameters that the callback function accepts should match the number of arrays passed to the array_map ()
            
            $func = function($test1) {
                return $test1 * 4;
            };
            print_r(array_map($func, range(1, 10)));
        
        ?>
                <h5>array_rand function: </h5>
        <?php
            //array_rand - Picks one or more random entries out of an array, and returns the key (or keys) of the random entries.
            
            $array_randTest = array("Celtics", "Red Sox", "Patriots", "Bruins", "Yankees");
            $rand__array_keys = array_rand($array_randTest, 2);
            echo $array_randTest[$rand__array_keys[0]] . "\n";
            echo $array_randTest[$rand__array_keys[1]] . "\n";
        ?>
                <h5>array_push function: </h5>
        <?php
            //array_push() treats array as a stack, and pushes the passed variables onto the end of array. The length of array increases by the number of variables pushed.
            
            $input = array("Baseball", "Football");
            array_push($input, "Basketball", "Soccer", "Hockey");
            print_r($input);
        
        ?>
                <h5>in_array function: </h5>
        <?php
            //in_array - Searches haystack for needle using loose comparison unless strict is set.
          
            $haystack = array("needle", "Pen", "Pencil", "Needle");
            if (in_array("pen", $haystack)) {
                echo "Found the pen!";
            }
            if (in_array("needle", $haystack)) {
                echo "Found the needle!";
            }
        ?>
                <h5>shuffle function: </h5>
        <?php
            //shuffle - This function shuffles (randomizes the order of the elements in) an array.
            
            $rand_numbers = range(1, 100);
            shuffle($rand_numbers );
            foreach ($rand_numbers as $rand_number) {
                echo "$rand_number" . "\n";
            }
        
        ?>
                <h5>count/sizeof function: </h5>
        <?php
            //count/sizeof - Counts all elements in an array, or something in an object.
            
            $array100 = range(1,100);
            $output = count($array100);
            echo $output;
        ?>
                <h5>sort function: </h5>
        <?php
            //sort - This function sorts an array. Elements will be arranged from lowest to highest when this function has completed.
            
            $array_to_sort = array("bbb", "eee", "ccc", "aaa", "fff", "AAA");
            sort($array_to_sort);
            foreach ($array_to_sort as $sorted) {
                echo $sorted . "\n";
            }

        ?>
                <h4>1.e: Create an HTML table with 100 rows.  For each alternate row have the background color be set to silver.   
                    You can apply a class to each alternate row.  Do not use CSS tricks.  
                    Output the row number, execute the token function and display the date and time.</h4>
                
        <?php
            //create table with 100 rows.
        
        function token() {	
                return sha1( uniqid(mt_rand(), true) );
            }
            
            $row = "1";
            echo "<table border='1'>";
            echo "<tr><td>Row Number</td><td>Token</td><td>Date & Time</td></tr>";
            while ($row < 100 ){
                echo "<tr><td>", $row, "</td><td>", token(), "</td><td>", date('m-d-y h:i'), "</td></tr>";
                $row++;
                echo "<tr style=\"background-color: #D0D0D0;\"><td>", $row, "</td><td>", token(), "</td><td>", date('m-d-y h:i'), "</td></tr>";
                $row++;
            }
            echo "</table>";

        ?>
                <h4>1.f: Create 2 arrays.  One with a list of colors and the other with a list of phrases.  
                    Get a random color and phrase to display on every page load.</h4>
                
        <?php
                $colors = array("blue", "green", "black");
                $phrases = array("PHP", "HTML", "JAVASCRIPT");
                $colorsRand = array_rand($colors, 2);
                $phrasesRand = array_rand($phrases, 2);
                
                echo "<p style=\"color:", $colors[$colorsRand[0]], ";\">", $phrases[$phrasesRand[0]], "</p>";
         
          ?>  
    </body>
</html>