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
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="form-group">
                        <form name="add_name" id="add_name">
                            <table class="table table-bordered table-hover" id="dynamic_field">
                                <tr>
                                    <td><input type="text" name="name[]" placeholder="Enter your Name"
                                            class="form-control name_list" /></td>
                                    <td><input type="text" name="email[]" placeholder="Enter your Email"
                                            class="form-control name_email" /></td>
                                    <td><input type="text" name="amount[]" value="700"
                                            placeholder="Enter your Money" class="form-control total_amount" /></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-primary">Add
                                            More</button></td>
                                </tr>
                            </table>
                            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            var i = 1;
            var length;
            //var addamount = 0;
            var addamount = 700;

            $("#add").click(function() {

                <
                !--
                var rowIndex = $('#dynamic_field').find('tr').length;
                -- >
                <
                !--console.log('rowIndex: ' + rowIndex);
                -- >
                <
                !--console.log('amount: ' + addamount);
                -- >
                <
                !--
                var currentAmont = rowIndex * 700;
                -- >
                <
                !--console.log('current amount: ' + currentAmont);
                -- >
                <
                !--addamount += currentAmont;
                -- >

                addamount += 700;
                console.log('amount: ' + addamount);
                i++;
                $('#dynamic_field').append('<tr id="row' + i +
                    '"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list"/></td><td><input type="text" name="email[]" placeholder="Enter your Email" class="form-control name_email"/></td>	<td><input type="text" name="amount[]" value="700" placeholder="Enter your Money" class="form-control total_amount"/></td><td><button type="button" name="remove" id="' +
                    i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function() {
                addamount -= 700;
                console.log('amount: ' + addamount);

                <
                !--
                var rowIndex = $('#dynamic_field').find('tr').length;
                -- >
                <
                !--addamount -= (700 * rowIndex);
                -- >
                <
                !--console.log(addamount);
                -- >

                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });



            $("#submit").on('click', function(event) {
                var formdata = $("#add_name").serialize();
                console.log(formdata);

                event.preventDefault()

                $.ajax({
                    url: "action.php",
                    type: "POST",
                    data: formdata,
                    cache: false,
                    success: function(result) {
                        alert(result);
                        $("#add_name")[0].reset();
                    }
                });

            });
        });
    </script>
</body>

</html>
