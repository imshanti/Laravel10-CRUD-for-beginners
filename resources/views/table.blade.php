<!doctype html>
<html lang="en">

<head>
    <title>Student Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
    setTimeout("document.getElementById('off').style.display='none';",3000);

    </script>
{{-- // <p style="color:Green; " id=off>Save vayo!</p> --}}
{{-- <style>
.button {
  border: none;
  color: rgba(255, 255, 255, 0.349);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} 
.button2 {background-color: hsl(195, 100%, 36%);} 
</style> --}}
</head>

<body>
    <div>
        <h4>Student tables</h4>
    </div>
    <div class="container">
        <a href="/form" class="btn btn-primary btn-m active" role="button" aria-pressed="false">Add Student</a>
        <a href="/fee_table" class="btn btn-primary btn-m active" role="button" aria-pressed="true">View Fees</a>
    </div>
   

 @if ($message = Session::get('success'))
 <div class="alert alert-success" id="off">
 <p>{{ $message }}</p>
 </div>
 @endif
    <table class="table" id= "data-table">
            <thead>
                <tr>
                    <th scope="col">.S.N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Roll No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Actions</th>
                
                </tr>
            </thead>
            <tbody>
                
                 @foreach ($student as $data)
                <tr>
                   
                    <th scope="row">{{++$i}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->class}}</td>
                    <td>{{$data->roll}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                     
                    <td>
                        <form action="{{ url('student.delete',$data->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ url('edit',$data->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach 
        </table>
       
   
</body>

</html>