<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style1.css"/>
	  <link rel="stylesheet" href="style.css"/>
	  <script>
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}
</script>
 <style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
a{text-decoration: none;}
</style>
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>, <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
 <form action="" method="POST">
    <legend>
    <fieldset>
        
Username: <input type="text" name="user"><br />

<h2>Address</h2>
 
        
                
<!-- full-name input-->
                
<div class="control-group">
                    
                        
<p class="help-block"></p>
                    
</div>
                
</div>
     
           
<!-- address-line1 input-->
                
<div class="control-group">
                    
<label class="control-label">Address Line 1</label>
                    
<div class="controls">
                        
<input id="address-line1" name="addrline1" type="text" placeholder="address line 1"
  class="input-xlarge">
                                           
</div>
  
</div>
   
<br>
            
<!-- address-line2 input-->
                
                
</div>
 
<br> 
              
                        
<p class="help-block"></p>
      
 </div>
                
</div>
           
</fieldset>
        
</div>

</div>


<button type="submit" value="Register" name="submit">Submit</button>
            
        </fieldset>
        </legend>

</form>
    
<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user'])) {
	$user=$_POST['user'];
	
	$addr=$_POST['addrline1'];
	echo getCoordinates($addr);
	function getCoordinates($address){
 
$address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
 
$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
 
$response = file_get_contents($url);
 
$json = json_decode($response,TRUE); //generate array object from the response from the web
 
return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);
 
}	
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('userd') or die("cannot select DB");
	$sql="INSERT INTO register(username,fname,lname,faname,mname,age,pno,address,sports) VALUES('$user','$fname','$lname','$faname','$mname','$age','$pno','$addr','$sports')";
	$result=mysql_query($sql);
	if($result){
	echo "Details Added";
	} 
        else {
	echo "Failure!";
	}
	}
	else {
	echo "All fields are required!";
}
}
?>

</body>
</html>