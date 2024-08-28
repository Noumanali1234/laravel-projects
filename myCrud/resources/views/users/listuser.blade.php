<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Users Table</title>

    <!-- Bootstrap CDN link for CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        /* Additional custom styles for button alignment */
        .action-buttons {
            display: flex;
            gap: 5px;
        }
        .bg{
            background: #0f0c29;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            padding: 40px 0;
        }
    </style>
</head>
<body>

    <!-- Heading -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Laravel Users Table</h1>
            </div>
        </div>
    </div>

    <!-- Add New user form button -->
    <div class="container text-center my-2">
        <div class="row">
            <div class="col">
                <a href="{{ route('users.create') }}" class="btn btn-dark">Add New User</a>
            </div>
        </div>
    </div>

    {{-- bootstrap alert for success message --}}
    <div class="container text-center">
        <div class="row">
            <div class="col">
                 @if (session('success'))
                     <div class="alert alert-success">
                        {{ session('success') }}
                     </div>
                 @endif
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="container my-3 border bg">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>City</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- showing serial number --}}
                            @php
                                $serialNumber = 1;
                            @endphp
                            <!-- Use a loop to populate the table with user data -->
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $serialNumber++ }}</td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="action-buttons">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Update</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-dark">Show User</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
