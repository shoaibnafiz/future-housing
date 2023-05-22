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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center mb-4">Add New Flat</h1>
                    <form action="store.php" method="post" enctype="multipart/form-data">
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
                            <label for="inputPicture" class="col-sm-2 col-form-label">Picture: </label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputPicture" name="picture" value="">
                            </div>
                        </div>

                        <!-- <div class="row mb-3 form-check">
                            <div class="d-inline-block col-2">
                                <label for="inputCheck" class="form-check-label">Is Active?</label>
                            </div>
                            <div class="d-inline-block col-5">
                                <input type="checkbox" class="form-check-input" id="inputCheck" name="is_active"
                                    value="1" checked>
                            </div>
                        </div> -->

                        <!-- <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="inputIsActive">
                                Is Active:
                            </label>
                            <div class="col-sm-10">
                                <input class="form-check-input mt-2" type="checkbox" value="1" id="inputIsActive"
                                    name="is_active" checked>
                            </div>
                        </div> -->

                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>