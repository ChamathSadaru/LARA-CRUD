<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Product</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <div class="container-fluid">
        <div class="row justify-content-center">

            <h1 class="text-center text-primary my-4">All Product</h1>

            <div class="col-10">

                <table class="table table-bordered border-light table-dark ">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Name</th>
                            <th scope="col">Discriptions</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($data as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->discriptions }}</td>
                                <td><img src="product/{{ $data->image }}" style="height: 100px; width: 100px;" alt=""></td>

                                <th scope="row">
                                    <div class="d-grid gap-2">
                                        <a href="{{ url('update_product', $data->id) }}" class="btn btn-success"
                                            type="button">Update</a>
                                        <a href="javascript:void(0)" data-url="{{ url('delete_product', $data->id) }}"
                                            class="btn btn-danger delete-button" type="button">Remove</a>
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end my-4">
                <a href="{{ url('go_addProduct') }}" class="btn btn-light me-md-2 col-3" type="button">Add Product</a>
            </div>

        </div>
    </div>

    <script>
        document.querySelectorAll('.delete-button').forEach(function(button) {
            button.addEventListener('click', function() {
                var url = this.getAttribute('data-url');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
