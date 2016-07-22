<!DOCTYPE html>
<html>
<head>
<title>Technology details</title>
	 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
</head>
<body> 
    <h2>Enter the technology details</h2>
     <p><span class="error">* required field.</span></p>

        <form action="/add1" method="GET">
             
            technology_name:
            <input type="text" name="tech_name" required >
            <span class="error">* </span>
            <br><br>
            <input type="submit" value="submit">
        </form> 

</body>
</html>