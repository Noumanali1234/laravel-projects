<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>

        {{-- bootstrap cdn link css --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        <style>
            .text{
                color: red;
            }
            ul{
                list-style: none;
            }
        </style>
</head>
<body>

    {{-- heading --}}
    <div class="container text-center">
        <div class="col">
            <div class="row">
                <h1>Add New User</h1>
            </div>
        </div>
    </div>

    {{-- back button --}}
    <div class="container text-center my-2">
        <div class="row">
            <div class="col">
                <a href="{{ route('users.index') }}" class="btn btn-dark">Back To Users Table</a>
            </div>
        </div>
    </div>

    {{-- errors showing --}}
    <div class="container text">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                 </ul>
                @endif
                
            </div>
        </div>
    </div>

    {{-- user form --}}
     <div class="container">
        <div class="row">
            <div class="col">

                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <form action="{{ route('users.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="id" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" name="age" class="form-control" id="age" placeholder="Enter Age">
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter City">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div> 
    

    {{-- boostrap js cdn link --}}
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
