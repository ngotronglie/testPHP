<!DOCTYPE html>
<html lang="en">

<head>
    <title>index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>Basic Table</h2>
        <a class="btn btn-primary" href="/food/add">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>code</th>
                    <th>price</th>
                    <th>description</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($food as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>{{ $value['code'] }}</td>
                        <td>{{ $value['price'] }}</td>
                        <td>{{ $value['description'] }}</td>
                        <td>
                            <a class="btn btn-warning" href="/food/{{ $value['id'] }}/update">update</a>
                            <a onclick="return confirm('sản phẩm sẻ bị xóa?')" class="btn btn-danger"
                                href="/food/{{ $value['id'] }}/delete">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
