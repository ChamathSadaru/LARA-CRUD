<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="b">


    <div class="container-fluid">
        <div class="row justify-content-center">

            <h1 class="text-center text-primary my-4">Update Product</h1>







            <div class="col-8 card my-4 shadow-lg border">
                <h1 class="text-center text-danger my-4">{{$product->title}} Update Product</h1>

                <form action="{{url('/edit_Product' , $product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product Title</label>
                        <input type="text" value="{{$product->title}}" class="form-control" id="pt" name="pt">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Product Discriptions</label>
                        <textarea class="form-control" id="pd" name="pd" rows="5" >{{$product->discriptions}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product Image</label>
                        <br>
                        <img class="my-2" src="/product/{{$product->image}}" style="height: 100px; width: 100px;" />
                        <input type="file" class="form-control" name="img" id="img" placeholder="name@example.com">
                    </div>
                    <div class="mt-5">
                        <input type="submit" value="Update Product" class="btn btn-primary col-4 btn-lg">
                    </div>
                </form>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end my-2">
                    <a href="{{ url('show_product') }}" class="btn btn-success me-md-2 col-4" type="button">View Product</a>
                </div>
            </div>



        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>