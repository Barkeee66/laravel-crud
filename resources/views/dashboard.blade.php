<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css" >

</head>
<body>
 <div class="container">
      <div class="row">
          
      <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight"><h2>Users</div>
      </div>

     
      <div class = "employees-table">
                <table class="table table-hover table-dark table-striped" id="employeeList">
               
                    <tbody>
                    
                    <thead>
                    <th>Id</th>
                    <th>Full Name</th> <label class="validation-error hide" id="fullNameValidationError"></label>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                    </thead>
                    @foreach($datas as $data)
                    <tr>
                        <td>{{$data->id}}</td> 
                        <td>{{$data->name}}</td> 
                        <td>{{$data->email}}</td> 
                        <td><a onClick="onEdit(this)" href="{{ url('edit', $data->id)}}" class="btn btn-secondary">Edit</a></td>
                        <td><a onClick="onDelete(this)" href="{{route('user.delete', $data->id)}}" class="btn btn-danger">Delete</a></td>                       
                     </tr>
                     @endforeach
                    </tbody>
                    
</form>
</div>
                </table>
      <a class="btn btn-danger" style="width:3cm; float:right;" href="logout">Logout</a>
        </div>
      </div>
  </div> 

<hr>
</body>

</html>

