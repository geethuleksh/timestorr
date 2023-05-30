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

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Horizontal Form -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="mx-auto">URL(M.S) LIST-1(MEET-1 PROGRAM)</h3>
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
                                <label for="time" class="col-sm-2 col-form-label">TIME OUT</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="timeout" name="timeout">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="venue" class="col-sm-2 col-form-label">CDC VENUE</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="venue" name="venue">
                                </div>
                            </div><br>
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="ensure" class="col-sm-2 col-form-label">URL CLENT ENSURE CATEGORY</label>
                                    <div class="col-sm-10">
                                        <select class="form-control selectpicker" multiple data-live-search="true" name="clientcategory" id="clientcategory">
                                            <option value="URL1">URL1</option>
                                            <option value="URL2">URL2</option>
                                            <option value="URL3">URL3</option>
                                            <option value="URL4">URL4</option>
                                            <option value="URL5">URL5</option>
                                            <option value="URL6">URL6</option>
                                            <option value="URL7">URL7</option>
                                            <option value="URL8">URL8</option>
                                            <option value="URL9">URL9</option>
                                            <option value="URL10">URL10</option>
                                            <option value="URL11">URL11</option>
                                            <option value="URL12">URL12</option>
                                            <option value="URL13">URL13</option>
                                            <option value="URL14">URL14</option>
                                            <option value="URL15">URL15</option>
                                            <option value="URL16">URL16</option>
                                            <option value="URL17">URL17</option>
                                            <option value="URL18">URL18</option>
                                            <option value="URL19">URL19</option>
                                            <option value="URL20">URL20</option>
                                            <option value="URL21">URL21</option>
                                            <option value="URL22">URL22</option>
                                            <option value="URL23">URL23</option>
                                            <option value="URL24">URL24</option>
                                            <option value="URL25">URL25</option>
                                            <option value="URL26">URL26</option>
                                            <option value="URL27">URL27</option>
                                            <option value="URL28">URL28</option>
                                            <option value="URL29">URL29</option>
                                            <option value="URL30">URL30</option>
                                            <option value="URL31">URL31</option>
                                            <option value="URL32">URL32</option>
                                            <option value="URL33">URL33</option>
                                            <option value="URL34">URL34</option>
                                            <option value="URL35">URL35</option>
                                            <option value="URL36">URL36</option>
                                            <option value="URL37">URL37</option>
                                            <option value="URL38">URL38</option>
                                            <option value="URL39">URL39</option>
                                            <option value="URL40">URL40</option>
                                            <option value="URL41">URL41</option>
                                            <option value="URL42">URL42</option>
                                            <option value="URL43">URL43</option>
                                            <option value="URL44">URL44</option>
                                            <option value="URL45">URL45</option>
                                            <option value="URL46">URL46</option>
                                            <option value="URL47">URL47</option>
                                            <option value="URL48">URL48</option>
                                            <option value="URL49">URL49</option>
                                            <option value="URL50">URL50</option>
                                            </datalist>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-sm-10">
                                        <input class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
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









<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>