<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create user</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2 class="h2">Login</h2>

        @if (!empty($_SESSION['errors']))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($_SESSION['errors'] as $key => $error)
                        <li>Key: {{ $key }} - Error: {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
