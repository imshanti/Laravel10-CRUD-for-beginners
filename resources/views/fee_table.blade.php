<!doctype html>
<html lang="en">
  <head>
    <title>Fee table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
      setTimeout("document.getElementById('off').style.display='none';",3000);
  
      </script>
  </head>
  <body>
    <div><h3>FEES TABLE</h3></div>
    <div class="container">
      <a href="/fee" class="btn btn-primary btn-m active" role="button" aria-pressed="true">Add Payment</a>
  </div>
  @if ($message = Session::get('success'))
  <div class="alert alert-success" id="off">
  <p>{{ $message }}</p>
  </div>
  @endif
  
  
    <table class="table">
        <thead>
            <tr>
                <th scope="col">.S.N</th>
                <th scope="col">Name</th>
                <th scope="col">class</th>
                <th scope="col">Roll</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Amount</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($fee as $data)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->class}}</td>
                <td>{{$data->roll}}</td>
                <td>{{$data->payment_method}}</td>
                <td>{{$data->amount}}</td>
                <td>{{$data->payment_date}}</td>
                <td>
                  <a href="{{url('fee_edit',$data->id)}}">Edit</a>
                 <a href="{{url('fee.delete',$data->id)}}">Delete</a>
              </td>
            @endforeach
        </tbody>
    </table>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>