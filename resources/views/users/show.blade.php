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
                        <h5 class="card-title">Show user details</h5>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" readonly value="{{$data->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" readonly value="{{$data->email}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">House Number</label>
                            <input type="text" class="form-control" name="house_number" readonly value="{{$data->userAddresses->house_number}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="email" class="form-control" name="city" readonly value="{{$data->userAddresses->city}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>