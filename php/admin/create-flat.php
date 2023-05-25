<pre>

<?php

?>

</pre>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center mb-4">Add New Flat</h1>
                    <form action="store-flat.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputFlat" class="col-sm-2 col-form-label">Flat: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputFlat" name="flat" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDescription" class="col-sm-2 col-form-label">Description: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDescription" name="description"
                                    value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputRent" class="col-sm-2 col-form-label">Rent: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputRent" name="rent" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPicture1" class="col-sm-2 col-form-label">Picture 1: </label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputPicture1" name="picture1" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPicture2" class="col-sm-2 col-form-label">Picture 2: </label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputPicture2" name="picture2" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPicture3" class="col-sm-2 col-form-label">Picture 3: </label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputPicture3" name="picture3" value="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>