<!DOCTYPE html>
<html>
<head>
<title>Department details</title>
	 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
</head>
<body> 
    <h2>Enter the department details</h2>
     <p><span class="error">* required field.</span></p>
     <div>
         <form action="addDept1" method="GET">
             
            department_name:
            <input type="text" name="dept_name" required >
            <span class="error">* </span>
            <br><br>
            <input type="submit" value="submit">
        </form> 

     </div>
        
</body>
</html>