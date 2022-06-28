<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="row mt-5">
                        <div class="col-md-12 text-end mb-2 ml-3">
                            <a href="{{ route('users.create') }}" class="btn btn-success">Add New User</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">House Number</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->userAddresses->house_number}}</td>
                                        <td>{{$item->userAddresses->city}}</td>
                                        
                                        <td>
                                            <a href="{{route('users.show', ['user' => $item->id])}}" class="btn btn-primary">Show</a>
                                            <a href="{{route('users.edit', ['user' => $item->id])}}" class="btn btn-warning">Edit</a>
                                            <a href="{{route('users.destroy', ['user' => $item->id])}}" class="btn btn-danger">Delete</a>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>      
</body>
</html>