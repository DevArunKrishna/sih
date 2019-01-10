<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
<script>
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}
</script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <body>
	  <h6>Create Account</h6>
<form action = "Script URL" method = "GET|POST">
<h2>Candidate Name</h2>
 First name: <input type = "text" name = "first_name" />
         <br><br>
         Last name: <input type = "text" name = "last_name" />
<br>
<br>
<h2>Father Name/Guardian:</h2><input type="text" name="F_GName"/><br><br>
<h2>Mother Name:</h2><input type="text" name="Mname"/>
<br><br>
<label for="gender"><h2>Gender:</h2></label>
		<select id="gender">
			<option>--Select Gender--</option>
			<option>Male</option>
			<option>Female</option>
		</select>
<br><br>
<h2>Date Of Birth:</h2><input type="date" name="B_day"/>
<br>
<br>
<h2>Age:</h2><input type="number" name="age"/>
<br>
<br>
<label for="Blood Group"><h2>Blood Group:</h2></label>
<select id="Blood Group">
    <option>--Select Blood Group--</option>
    <option>A Positive</option>
    <option>A Negative</option>
    <option>A Unknown</option>
    <option>B Positive</option>
    <option>B Negative</option>
    <option>B Unknown</option>
    <option>AB Positive</option>
    <option>AB Negative</option>
    <option>AB Unknown</option>
    <option>O Positive</option>
    <option>O Negative</option>
    <option>O Unknown</option>
    <option>Unknown</option>
</select>
<br>
<br>
<h2>Phone Number:</h2><input type="number" name="P_no"/>
<br>
<br>
<h2>Alternate Phone Number:</h2><input type="number" name="A_no"/>
<br>
<br>
<h2>Email:</h2><input type="text" name="Email"/>
<br>
<br>



            
<!-- Address form -->
         
            
<h2>Address</h2>
 
        
                
<!-- full-name input-->
                
<div class="control-group">
                    
<label class="control-label">Full Name</label>
                    
<div class="controls">
                        
<input id="full-name" name="full-name" type="text" placeholder="full name"
   class="input-xlarge">
                        
<p class="help-block"></p>
                    
</div>
                
</div>
     
           
<!-- address-line1 input-->
                
<div class="control-group">
                    
<label class="control-label">Address Line 1</label>
                    
<div class="controls">
                        
<input id="address-line1" name="address-line1" type="text" placeholder="address line 1"
  class="input-xlarge">
                                           
</div>
  
</div>
   
<br>
            
<!-- address-line2 input-->
                
<div class="control-group">
                    
<label class="control-label">Address Line 2</label>
                    
<div class="controls">
                        
<input id="address-line2" name="address-line2" type="text" placeholder="address line 2"
  class="input-xlarge">
                        
                   
 </div>
                
</div>
 
<br> 
              
<!-- city input-->
                
<div class="control-group">
                    
<label class="control-label">City / Town</label>
                    
<div class="controls">
                        
<input id="city" name="city" type="text" placeholder="city" class="input-xlarge">
                        
<p class="help-block"></p>
                    
</div>
                
</div>
  
             
 <!-- region input-->
                
<div class="control-group">
                   
 <label class="control-label">State / Province / Region</label>
                    
<div class="controls">
                        
<input id="region" name="region" type="text" placeholder="state / province / region"
  class="input-xlarge">
                        
<p class="help-block"></p>
                    
</div>
                
</div>
     
           
<!-- postal-code input-->
 
<div class="control-group">
                    
<label class="control-label">Zip / Postal Code</label>
                    
<div class="controls">
                                       
<input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code"
  class="input-xlarge">
                        
<p class="help-block"></p>
      
 </div>
                
</div>
           
</fieldset>
        
</div>

</div>

<h2>Sports Specializtion:</h2><input type = "text" name = "S_spec" />
 <br>
<br>
<h2>Upload Files</h2>
Upload Gold Medal Ceritficates
<br>
<input type = "file" name = "fileupload" accept = "image/*" />
<br><br>
Upload Silver Medal Certificates
<br>
<input type = "file" name = "fileupload" accept = "image/*" />
<br><br>
Upload Bronze Medal Certificates
<br>
<input type = "file" name = "fileupload" accept = "image/*" />
<br><br>
Upload Participation Certificates
<br>
<input type = "file" name = "fileupload" accept = "image/*" />
<br><br>

<h2>Educated/Uneducated:</h2>
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" checked="checked">Educated &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck">Uneducated
    <div id="ifYes" style="display:block">

<!-- Address form -->
         
            
<h2>SSLC School Details</h2>             
<!-- address-line1 input-->
SSLC School Name:
<input type = "text" name = "SSL_name" />
 <br>                
<div class="control-group">
                    
<label class="control-label">Address Line 1</label>
                    
<div class="controls">
                        
<input id="address-line1" name="address-line1" type="text" placeholder="address line 1"
  class="input-xlarge">
                                           
</div>
  
</div>
   
<br>
            
<!-- address-line2 input-->
                
<div class="control-group">
                    
<label class="control-label">Address Line 2</label>
                    
<div class="controls">
                        
<input id="address-line2" name="address-line2" type="text" placeholder="address line 2"
  class="input-xlarge">
                        
                   
 </div>
                
</div>
 
<br> 
              
<!-- city input-->
                
<div class="control-group">
                    
<label class="control-label">City / Town</label>
                    
<div class="controls">
                        
<input id="city" name="city" type="text" placeholder="city" class="input-xlarge">
                        
<p class="help-block"></p>
                    
</div>
                
</div>
  
             
 <!-- region input-->
                
<div class="control-group">
                   
 <label class="control-label">State / Province / Region</label>
                    
<div class="controls">
                        
<input id="region" name="region" type="text" placeholder="state / province / region"
  class="input-xlarge">
                        
<p class="help-block"></p>
                    
</div>
                
</div>
     
           
<!-- postal-code input-->
 
<div class="control-group">
                    
<label class="control-label">Zip / Postal Code</label>
                    
<div class="controls">
                                       
<input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code"
  class="input-xlarge">
                        
<p class="help-block"></p>
      
 </div>
                
</div>
           
</fieldset>
	
SSLC Marks:
<input type = "text" name = "SS_mark" />
 <br><br>

<!-- Address form -->
         
            
<h2>HSC School Details</h2>
 HSC School Name:
<input type = "text" name = "SSL_name" />
 <br>
        
             
<!-- address-line1 input-->
                
<div class="control-group">
                    
<label class="control-label">Address Line 1</label>
                    
<div class="controls">
                        
<input id="address-line1" name="address-line1" type="text" placeholder="address line 1"
  class="input-xlarge">
                                           
</div>
  
   
<br>
            
<!-- address-line2 input-->
                
<div class="control-group">
                    
<label class="control-label">Address Line 2</label>
                    
<div class="controls">
                        
<input id="address-line2" name="address-line2" type="text" placeholder="address line 2"
  class="input-xlarge">
                        
                   
 </div>
                
</div>
 
<br> 
              
<!-- city input-->
                
<div class="control-group">
                    
<label class="control-label">City / Town</label>
                    
<div class="controls">
                        
<input id="city" name="city" type="text" placeholder="city" class="input-xlarge">
                        
<p class="help-block"></p>
                    
</div>
                
</div>
  
             
 <!-- region input-->
                
<div class="control-group">
                   
 <label class="control-label">State / Province / Region</label>
                    
<div class="controls">
                        
<input id="region" name="region" type="text" placeholder="state / province / region"
  class="input-xlarge">
                        
<p class="help-block"></p>
                    
</div>
                
</div>
     
           
<!-- postal-code input-->
 
<div class="control-group">
                    
<label class="control-label">Zip / Postal Code</label>
                    
<div class="controls">
                                       
<input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code"
  class="input-xlarge">
                        
<p class="help-block"></p>
      
 </div>
                
</div>
           
</fieldset>
        
</div>


HSC Marks:
<input type = "text" name = "SS_mark" />
 <br><br>

<!-- Address form -->
         
            
<h2>College Details</h2>
 
        
College Name:
<input type = "text" name = "SSL_name" />
 <br>             
<!-- address-line1 input-->
                
<div class="control-group">
                    
<label class="control-label">Address Line 1</label>
                    
<div class="controls">
                        
<input id="address-line1" name="address-line1" type="text" placeholder="address line 1"
  class="input-xlarge">
                                           
</div>
  
</div>
   
<br>
            
<!-- address-line2 input-->
                
<div class="control-group">
                    
<label class="control-label">Address Line 2</label>
                    
<div class="controls">
                        
<input id="address-line2" name="address-line2" type="text" placeholder="address line 2"
  class="input-xlarge">
                        
                   
 </div>
                
</div>
 
<br> 
              
<!-- city input-->
                
<div class="control-group">
                    
<label class="control-label">City / Town</label>
                    
<div class="controls">
                        
<input id="city" name="city" type="text" placeholder="city" class="input-xlarge">
                        
<p class="help-block"></p>
                    
</div>
                
</div>
  
             
 <!-- region input-->
                
<div class="control-group">
                   
 <label class="control-label">State / Province / Region</label>
                    
<div class="controls">
                        
<input id="region" name="region" type="text" placeholder="state / province / region"
  class="input-xlarge">
                        
<p class="help-block"></p>
                    
</div>
                
</div>
     
           
<!-- postal-code input-->
 
<div class="control-group">
                    
<label class="control-label">Zip / Postal Code</label>
                    
<div class="controls">
                                       
<input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code"
  class="input-xlarge">
                        
<p class="help-block"></p>
      
 </div>
                
</div>
           
</fieldset>
	
 College Year: <input type = "number" name = "Coll_year" />
         <br><br>
 Semester: <input type = "number" name = "sem" />
         <br><br>
 1st Semester Marks:<input type = "number" name = "1_mark" />
         <br><br>
2nd Semester Marks:<input type = "number" name = "2_mark" />
         <br><br>
3rd Semester Marks:<input type = "number" name = "3_mark" />
         <br><br>
4th Semester Marks:<input type = "number" name = "4_mark" />
         <br><br>
5th Semester Marks:<input type = "number" name = "5_mark" />
         <br><br>
6th Semester Marks:<input type = "number" name = "6_mark" />
         <br><br>
7th Semester Marks:<input type = "number" name = "7_mark" />
         <br><br>
8th Semester Marks:<input type = "number" name = "8_mark" />
         <br><br>
9th Semester Marks:<input type = "number" name = "9_mark" />
         <br><br>
10th Semester Marks:<input type = "number" name = "10_mark" />
         <br><br>
</div>
<h2>Language Known</h2>

<label for="Language 1">Language 1:</label>
<select id="Language 1">
    <option>--Select Language--</option>
    <option>Hindi</option>
    <option>English</option>
    <option>Bengali</option>
    <option>Marathi</option>
    <option>Gujarathi</option>
    <option>Tamil</option>
    <option>Rajasthani</option>
    <option>Urudu</option>
    <option>Telugu</option>
    <option>Malayalam</option>
    <option>Kannada</option>
    <option>Odia</option>
    <option>Assamese</option>
   <option>Punjabi</option>
</select>

<label for="Language 2">Language 2:</label>
<select id="Language 2">
    <option>--Select Language--</option>
    <option>Hindi</option>
    <option>English</option>
    <option>Bengali</option>
    <option>Marathi</option>
    <option>Gujarathi</option>
    <option>Tamil</option>
    <option>Rajasthani</option>
    <option>Urudu</option>
    <option>Telugu</option>
    <option>Malayalam</option>
    <option>Kannada</option>
    <option>Odia</option>
    <option>Assamese</option>
   <option>Punjabi</option>
</select>
            <label for="Language 3">Language 3:</label>
            <select id="Language 3">
            <option>--Select Language--</option>
            <option>Hindi</option>
            <option>English</option>
            <option>Bengali</option>
            <option>Marathi</option>
            <option>Gujarathi</option>
            <option>Tamil</option>
            <option>Rajasthani</option>
            <option>Urudu</option>
            <option>Telugu</option>
            <option>Malayalam</option>
            <option>Kannada</option>
            <option>Odia</option>
            <option>Assamese</option>
            <option>Punjabi</option>
            </select>

<br><br>
<h2>Password</h2>

 Set Password:<input type = "password" name = "Set_pass" />
         <br><br>
  Confirm Password:<input type = "password" name = "Con_pass" />
<br><br>
<br>
<br>

</form>
</body>
</html>
  
  