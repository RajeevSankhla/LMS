<?php
// Start the session
session_start();
error_reporting(0);
$userprofile=$_session['username'];

?>
<!DOCTYPE html>
<html>
<head>
<style>
div.a {
  position: absolute;
  left:340px;
  width: 400px;
  height: 200px;
 
}

div.b {
  position: absolute;
  left: 510px;
  width: 400px;
  height: 200px;
  
} 

div.c {
  position: absolute;
  left: 720px;
  width: 400px;
  height: 200px;
} 
div.d {
  position: absolute;
  left: 910px;
  width: 400px;
  height: 200px;
} 
div.e {
  position: absolute;
  left: 1110px;
  width: 400px;
  height: 200px;
} 
.button {
  background-color: #FF1493;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}	

</style>
</head>	
<h1 align="center" style="color:yellow; font-size:60px" >Welcome</h1>
 <body  bgcolor="#E6E6FA"> 
<div style="float:right">
<p style="color:black; font-size:200%"><a href="logout.php" class="button">Logout</a></p>
</div>
 <body background="images/library1.jpeg">
        <p align="center"><font size="7" color="yellow"><b> Select your Operation on </b></font></p>

<?php
// Set session variables
//$_SESSION["logout"] = "1";
?>



<div class="a"><form method="POST" action="fetchfacbook.php">
	<p ><button type="submit" class="button"><font size="3">See Your Issued Books</font></button></p>
	</form>
</div>
<div class="b"><form method="POST" action="searchbook.php">
	<p align="center"><button type="submit" class="button"><font size="3">Search For A Book</font></button></p>
		</form>
</div>
<div class="c"><form method="POST" action="lendbookf.php">
	<p align="center"><button type="submit" class="button"><font size="3">Issue A Book</font></button></p>
		</form>
</div>
<div class="d"><form method="POST" action="returnbookf.php">
	<p align="center"><button type="submit" class="button"><font size="3">Return A Book</font></button></p>
		</form>
</div>
<div class="e"><form method="POST" action="reissuef.php">
	<p align="center"><button type="submit" class="button"><font size="3">Reissue A Book</font></button></p>
		</form>
	</div>
</body>
<html>
