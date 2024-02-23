<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Post</title>

    <!-- Custom fonts for this template -->
    <link href="/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <h2>List Categories</h2>
        <a class="mt-3 btn btn-primary" href="categories/create">create</a>
        <a class="mt-3 btn btn-warning text-light" href="/admin">Back Dashboard</a>
        <div class="row">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categories as $key => $Categorie)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $Categorie['name'] }}</td>
                            <td>
                                <a class="btn btn-warning"
                                    href="/admin/categories/{{ $Categorie['id'] }}/update">update</a>
                                <a onclick="return confirm('Are you sure ??')" class="btn btn-danger"
                                    href="/admin/categories/{{ $Categorie['id'] }}/delete">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/assets/admin/js/demo/datatables-demo.js"></script>

</body>

</html>
