
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
     <div class='container'>
        <h2>Technology details</h2>
        <table class='table table-bordered'>
    			<thead>
      			<tr>
							
                            <th>Technology_id</th>
                            <th>Technology_name</th>
                            
			</tr>
                        </thead>
                        <tbody>
                            
                            @foreach($response as $technologyData)
                            <tr>
                                <td> {{ $technologyData->id }} </td>
                                <td> {{ $technologyData->tech_name }} </td>
                                
                             </tr>
                            @endforeach
                         </tbody>
                    </table>
     </div>
     <div class="container">
        <form action="/add" method="GET">
            <input type="submit" value="add">
        </form> 
    </div>   
                        
     
   
</body>
</html>