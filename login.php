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
            <h2>Welcome contributor!<br></h2>
            <p>Let's get your info first..</p>
            <div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
		<?php
           
		    if(isset($_SESSION['First_Name'])) {
			header("Location: ./enter.php");
		    }
		    
                if(isset($_POST['login']) ){
                	if($_POST['First_Name'] == "") {
                		display("First_Name");
                	}
                	else if($_POST['Last_Name'] == "" ) {
                		display("Last_Name");	
                	}
                	else if($_POST['Passcode'] == "") {
                		display("Passcode");	
                	}
			else {
			    $dbhost = 'candidates.politicalsimplicity.com';
			    $dbuser = 'gcs278';
			    $dbpass = 'PoliticalSimplicity';
			    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
			    if(! $conn ){
			      die('Could not connect: ' . mysql_error());
			    }
			    
			    $Password = $_POST['Passcode'];
	
			    $sql = "SELECT Password FROM users;";
	
			    mysql_select_db('politicalsimplicity_candidates') or die("Error selecting db");
	
			    $retval = mysql_query( $sql, $conn );
			    $row = mysql_fetch_array($retval);
			    $code = $row['Passcode'];
	 
			    if(! $retval ){
			      die('Could not enter data: ' . mysql_error());
			    }
			    if( $Password != "GrantSpence" ){
				echo('Incorrect Passcode');	    
			    }
			    else {
				echo('Success!');
				$_SESSION['First_Name'] = $_POST['First_Name'];
				$_SESSION['Last_Name'] = $_POST['Last_Name'];
				header("Location: ./enter.php");
			    }
			    mysql_close($conn);
			}
                }
                else {
                	display("");	
                }
                function display($error) {
            ?>
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width="400" border="0" cellspacing="1" cellpadding="2">
                    <tr>
                        <td width="100">First Name:</td>
                        <td><input name="First_Name" type="text" id="First_Name"></td>
                    </tr>
                     <?php 
                    	if($error == "First_Name") {
                    		echo('<tr>
                    			<td></td>
					<td id="error">You must enter a first name</td>
					</tr>');	
                    	}
                    ?>
                    <tr>
                    
                        <td width="100">Last Name:</td>
                        <td><input name="Last_Name" type="text" id="Last_Name"></td>
                    </tr>
                    <?php 
                    	if($error == "Last_Name") {
                    		echo('<tr>
                    			<td></td>
					<td id="error">You must enter a last name</td>
					</tr>');	
                    	}
                    ?>
                    <tr>
                        <td width="100">Passcode:</td>
                        <td><input name="Passcode" type="password" id="Passcode"></td>
                    </tr>
                    <?php 
                    	if($error == "Passcode") {
                    		echo('<tr>
                    			<td></td>
					<td id="error">You must enter a passcode</td>
					</tr>');	
                    	}
                    ?>
                    
                </table>
               
                <input name="login" type="submit" id="login" value="Login">
            </form>
        <?php
        }
        ?>
        </div>
    </body>
</html>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

