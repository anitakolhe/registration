<!DOCTYPE html>
<html>
<head>
	<title>Registration_Form</title>
	<link rel="stylesheet" type="text/css" href="./style.css">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<h2> Registraion Form </h2>
	<form style="padding-left: 20px">
		
		<input type="text" name="user_name" placeholder="User Name"><br><br>
		
		<input type="email" name="email" placeholder="Email" ><br><br>
		
		<input type="Password" name="Password" placeholder="Password">
		
		<input type="Password" name="C_Password" placeholder="Conform your Password">
		<h5>Personal Details</h5>
		
		<input type="text" name="First_Name" placeholder="First Name">
		
		<input type="text" name="Last_Name" placeholder="Last Name"><br><br>
	    <input type="number" name="Ph_Number" size="10" placeholder="Phone_Number"><br><br><br>
	   	<input id="datepicker" width="276" / placeholder="Birth_Date">
   			 <script>
        		$('#datepicker').datepicker({
            		
        	});
    </script>
	   
	    <br><br>
	   
	    
	    <textarea placeholder="Address"></textarea>
	    <br><br>
	    <label>Gender</label>
	<div style="display:inline;">
	    <input type="radio" name="gender" value="Male"> Male
	    <input type="radio" name="gender" value="female" > Female
	    <input type="radio" name="gender" value="Other" > Other
	</div><br><br>
	<label>Status</label>
	<div style="display:inline;">
	    <input type="radio" name="Status" value="married"> married
	    <input type="radio" name="Status" value="unmarried"> unmarried
	</div><br>
	    <select><option>Country</option><option>India</option><option>Other</option></select><br><br><br>
		
		<label>Skill</label><div style="display: inline;">
			<input type="checkbox" value="">PHP
			<input type="checkbox" value="">Bootstrap
			<input type="checkbox" value="">CSS
			<input type="checkbox" value="">SQL
			<input type="checkbox" value="">JQuery
			<input type="checkbox" value="">HTML<br><br>
		
		<input type="text" name="Describe" placeholder="Description">
		
		<input type="text" name="Hobbies" placeholder="Hobbies"><br><br>
		
		<input type="text" placeholder="Tell About Your Self"> 
		
		<input type="text" placeholder="What you think you can do as a programmer"> <br><br>

		<input type="checkbox" value="" required>Terms and Condition

		<button  type="submit" name="save">Save</button>
	</form>

</body>
</html>
