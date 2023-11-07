<!doctype html>
<html lang="en">
  <head>
    <title>Edit fee</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="{{url('fee_edit',$fee->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$fee->name}}">
              @error('name')
              <div class="alert alert-danger"> {{$message}} </div> 
            @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Class</label>
                <input type="text" class="form-control" name="class" placeholder="Enter class" value="{{$fee->class}}">
                @error('class')
                <div class="alert alert-danger"> {{$message}} </div> 
              @enderror
              </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Roll</label>
                <input type="number" class="form-control" name="roll" placeholder="Enter roll" value="{{$fee->roll}}">
                @error('roll')
                <div class="alert alert-danger"> {{$message}} </div> 
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Payment Method</label>
              <select class="form-control" name="payment_method" value="{{$fee->payment_method}}">
         
                <option>cash</option>
                <option>online</option>
              </select>
              @error('payment_method')
              <div class="alert alert-danger"> {{$message}} </div> 
            @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Amount</label>
                <input type="double" class="form-control" name="amount" placeholder="Enter Amount" value="{{$fee->amount}}">
                @error('amount')
                <div class="alert alert-danger"> {{$message}} </div> 
              @enderror
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Payment Date</label>
              <input type="date" class="form-control" name="payment_date" placeholder="Enter Date of payment" value="{{$fee->payment_date}}">
              @error('payment_date')
              <div class="alert alert-danger"> {{$message}} </div> 
            @enderror
            </div>
            <button type="submit" class="btn btn-primary" >Update</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>