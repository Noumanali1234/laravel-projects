<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>

    {{-- bootstrap cdn link css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    {{-- heading --}}
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Single User Detail</h1>
            </div>
        </div>
    </div>


    {{-- Add New user form button --}}

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a href="{{ route('users.index') }}" class="btn btn-dark">Back To All Users Details</a>
            </div>
        </div>
    </div>

    {{-- table --}}


    <div class="container text-center my-3 border">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>City</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Use a loop to populate the table with user data -->
                            {{-- @foreach($users as $user) --}}
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    
{{-- boostrap js cdn link --}}
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
