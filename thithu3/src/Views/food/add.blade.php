<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2> form</h2>
        <form action="" method="POST">
            <div class="mb-3 mt-3">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="code">code:</label>
                <input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
            </div>
            <div class="mb-3 mt-3">
                <label for="price">price:</label>
                <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
            </div>
            <div class="mb-3 mt-3">
                <label for="description">description:</label>
                <input type="text" class="form-control" id="description" placeholder="Enter description"
                    name="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
