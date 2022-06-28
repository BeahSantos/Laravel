<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create new user</h5>
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            </div>
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" value="{{old('email')}}">
                            </div>
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">House Number</label>
                                <input type="text" class="form-control" name="house_number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Street</label>
                                <input type="text" class="form-control" name="street">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country Code</label>
                                <input type="text" class="form-control" name="country_code">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</body>
</html>