
<!DOCTYPE html>
<html>
    <head>
        <title>List of employee</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    </head>
    <body> 
        <div class='container'>
            <h2>Employee List</h2>
            <table class='table table-bordered'>
                <thead>
                    <tr>

                        <th>Employee_id</th>
                        <th>Employee_Name</th>
                        <th colspan="3">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($response as $employeeData)
                    <tr>
                        <td> {{ $employeeData->id }} </td>
                        <td> {{ $employeeData->employee_name }} </td>
                        <td><a href='{{$employeeData->id}}/delete'> Delete</td>
                        <td><a href='{{$employeeData->id}}/edit'> edit</td> 
                        <td><a href='{{$employeeData->id}}/view'> view profile</td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
       <div class="container">
           <a href='/addEmp'> Add</td>
        </form> 
    </div>   
            
   </body>
  </html>
