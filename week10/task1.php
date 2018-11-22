<?php
    $username = "";
    $pass = "";
    $ppass = "";
    if(!empty($_POST)) {
        $username = $_POST["login"];
        $pass = $_POST["password"];
        $ppass = $_POST["confirm_password"];
        if($username=="") {
            print "<div class = 'error'>Username should not be empty</div>";
        }
        else {
            print "<div class = 'error'>Username $username is already reserved</div>";
        }
        if($pass == "" and $ppass =="") {
            print "<div class = 'error'>Password and Confirm Password should not be empty</div>";
        }
        if($pass != $ppass) {
            print "<div class = 'error'>Password and Confirm Password doesn't equal to each other</div>";
        }
        print $pass." ".$ppass;
    }
?>

 <!DOCTYPE html>

<html>

  <head>
	<style>
		.error{
			display:block;
            width : 400px;
            margin-bottom: 5px;
			border: 2px solid red;
		}
	/* Styles go here */
		.attributes .row{
		  display:flex;
		  width: 290px;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		
		

	</style>
  </head>

  <body><form action="task1.php" method="post">
		<div class="attributes">
		  <div class="row"><div class="name">username:</div><div><input type="text" name="login"></div></div>
		  <div class="row"><div class="name">password:</div><div><input type="password" name="password"></div></div> 
		  <div class="row"><div class="name"> confirm password:</div><div><input type="password" name="confirm password"></div></div>
		  <div id = "button">
                    <input type = "submit" value = "Submit"><br>
          </div>            
		</div></form>
  </body>

</html>
