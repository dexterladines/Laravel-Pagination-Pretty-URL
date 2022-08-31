<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Pagination Pretty URL Example</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center ">
        <h1 class="m-5">Laravel Pagination Pretty URL Example</h1>

        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a 
                                href="javascript:void(0)"
                                id="show-user"
                                class="btn btn-info"
                                >Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">

            @if ($prevURL)
                <a class="btn btn-primary m-10 leftbtn" href="{{ route('users.index', $prevURL) }}"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous </a>
            @endif

            @if ($nextURL)
                <a class="btn btn-primary m-10 rightbtn" href="{{ route('users.index', $nextURL) }}">Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            @endif

        </div>
    </div>
    
</body>
</html>