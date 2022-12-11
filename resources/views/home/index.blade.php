<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Key Genarate</h3>

                </div>
                <div class="card-body">
                    <form action="{{ url('key') }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="row mb-3">
                            <div class="col-md-3"> Enter Number </div>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="number">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3"> Enter Latter </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="letter">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">Key Genarate </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
