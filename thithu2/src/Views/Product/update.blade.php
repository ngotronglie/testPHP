<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form add</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="container mt-3">
        <h2>Form update</h2>
        <form action="" method="POST">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input value="{{ $product['name'] }}" type="text" class="form-control" id="name"
                    placeholder="Enter name" name="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price:</label>
                <input value="{{ $product['price'] }}" type="text" class="form-control" id="price"
                    placeholder="Enter price" name="price">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content:</label>
                <input value="{{ $product['content'] }}" type="text" class="form-control" id="content"
                    placeholder="Enter content" name="content">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
