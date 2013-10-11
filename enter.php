<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script> 
        $(function(){
          $("#includedContent").load("menu.html"); 
        });
        </script> 
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="includedContent"></div>
        <div id="container">
            <?php
        die("Sorry workin on it");
          //  session_start();
           
          //  if(!isset($_SESSION['First_Name'])) {
           // 	    die("You are not logged in");
           // }
        if(isset($_POST['add']))
        {
            $dbhost = 'candidates.politicalsimplicity.com';
            $dbuser = 'gcs278';
            $dbpass = 'PoliticalSimplicity';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
        if(! $conn )
        {
          die('Could not connect: ' . mysql_error());
        }
        if(! get_magic_quotes_gpc() )
        {
           $Name = addslashes ($_POST['Name']);
           $Party = addslashes($_POST['Party']);
           $Born = addslashes ($_POST['Born']);
           $Position = addslashes($_POST['Position']);
        }
        else
        {
           $Name = $_POST['Name'];  
           $Party = $_POST['Party'];
           $Born = $_POST['Born'];
           $Position = $_POST['Position'];
        }
        $Age = $_POST['Age'];
        $Popularity = $_POST['Popularity'];
        $User = $_SESSION['First_Name'] . '_' . $_SESSION['Last_Name'];
        
        $sql = "INSERT INTO Demographics ".
               "(Name,Party,Age,Birth_Place,Position,Popularity,Contributor) ".
               "VALUES('$Name','$Party',$Age,'$Born','$Position',$Popularity,'$User')";
        
        mysql_select_db('politicalsimplicity_candidates') or die("Error selecting db");

        $retval = mysql_query( $sql, $conn );
        if(! $retval )
        {
          die('Could not enter data: ' . mysql_error());
        }

        echo "Entered data successfully\n";
        mysql_close($conn);
        }
        else
        {
        ?>
        <h2>Welcome <?php echo($_SESSION['First_Name']); echo(" "); echo($_SESSION['Last_Name']); ?>!<br></h2>
        <form method="post" action="<?php $_PHP_SELF ?>">
        <table width="400" border="0" cellspacing="1" cellpadding="2">
        <tr>
        <td width="100">Candidate Name</td> 
        <td><input name="Name" type="text" id="Name"></td>
        </tr>
        <tr>
        <td width="100">Party</td>
        <td><input name="Party" type="text" id="Party"></td>
        </tr>
        <tr>
        <td width="100">Age</td>
        <td><input name="Age" type="text" id="Age"></td>
        <tr>
            <td width="100">Birth Place</td>
            <td><input name="Born" type="text" id="Born"></td>
        </tr>
        <tr>
            <td width="100">Current Position</td>
            <td><input name="Position" type="text" id="Position"></td>
        </tr>
        <tr>
            <td width="100">Percent Popularity</td>
            <td><input name="Popularity" type="text" id="Popularity"></td>
        </tr>
        <tr>
        <td width="100"> </td>
        <td> </td>
        </tr>
        <tr>
        <td width="100"> </td>
        <td>
        <input name="add" type="submit" id="add" value="Add Candidate">
        </td>
        </tr>
        </table>
        </form>
        <?php
        }
        ?>
        </div>
    </body>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
