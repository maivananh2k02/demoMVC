<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <style>
        label {
            font-size: large;
            font-weight: bold;
        }
    </style>
</head>
<body>
<img src="data:image/png;base64,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" style="position: relative ; left: 500px;right: 500px" alt="">
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">SKU</label>
            <input type="file" class="form-control-file border" name="sku">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Product's name</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                   placeholder="Product">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputPassword1"
                   placeholder="VND">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Discount</label>
            <input type="text" name="discount" class="form-control" id="exampleInputPassword1"
                   placeholder="VND">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">image product</label>
            <input type="file" class="form-control-file border" name="img">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
