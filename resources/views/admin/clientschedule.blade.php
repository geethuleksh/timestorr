<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/virtual-select.min.css">
    <link href="multiselect.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Horizontal Form -->
        <div class="card card-info">
            <div class="card-header"style="background-color: #1A237E;">
                <h3 class="mx-auto"style="background-color: #1A237E;">URL(M.S) LIST-1(MEET-1 PROGRAM)</h3>
            </div>
        </div><br><br>
        @foreach($result as $value)
        <form method="post" action="/clientscheduleaction/{{$value->id}}" enctype="multipart/form-data">
            @csrf
            <div class="fashion_section_2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="enquiry" class="col-sm-2 col-form-label">URL CLIENT ENQUIRES
                                    CODE</label>
                                <div class="col-sm-10">
                                    <input type="text" value="URL{{$value->id}}" class="form-control" id="url" name="url">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ensure" class="col-sm-2 col-form-label">URL CLENT ENSURE
                                    CATEGORY</label>
                                <div class="col-sm-10">
                                    <Select input class="form-control" list="browsers" name="ensure" id="ensure">
                                        <option value="">select</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="40">40</option>
                                        <option value="80">80</option>
                                        <option value="100">100</option>
                                    </Select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date" class="col-sm-2 col-form-label">DATE</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="date" name="date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="time" class="col-sm-2 col-form-label">TIME IN</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="timein" name="timein">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="venue" class="col-sm-2 col-form-label">CDC VENUE</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="venue" name="venue">
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="ensure" class="col-sm-2 col-form-label">URL CLENT ENSURE CATEGORY</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="clientcategory" name="clientcategory">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <center><button type="submit" style="background-color: #1A237E;"class="btn btn-primary">Submit</button></center>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
    </div>
    </form>
    <script type="text/javascript" src="js/virtual-select.min.js"></script>
    <script type="text/javascript">
        VirtualSelect.init({
            ele: 'clientcategory'
        });
    </script>
    @endforeach
    </div>
    </div>
    </section>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</body>

</html>