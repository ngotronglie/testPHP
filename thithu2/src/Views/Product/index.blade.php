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
        <h2>Basic Table</h2>
        <a class="btn btn-primary" href="/Product/add">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>price</th>
                    <th>content</th>
                    <th>
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>{{ $value['price'] }}</td>
                        <td>{{ $value['content'] }}</td>
                        <td>
                            <a class="btn btn-warning" href="Product/{{ $value['id'] }}/update">update</a>
                            <a onclick="return confirm('Sản phẩm sẽ bị xóa')" class="btn btn-danger"
                                href="Product/{{ $value['id'] }}/delete">delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>
