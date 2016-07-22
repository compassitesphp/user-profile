<!DOCTYPE html>
<html>
    <head>
        <title>Add department</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    </head>
    <body> 
        <div class='container'>
            <h2>Department List</h2>
            <table class='table table-bordered'>
                <thead>
                    <tr>

                        <th>Department Id</th>
                        <th>Department Name</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($response as $departmentData)
                    <tr>
                        <td> {{ $departmentData->id }} </td>
                        <td> {{ $departmentData->dept_name }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
       <div class="container">
        <form action="addDept" method="GET">
            <input type="submit" value="add">
        </form> 
    </div>   
            
   </body>
  </html>
