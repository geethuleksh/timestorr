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
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Horizontal Form -->
        <div class="card card-info">
            <div class="card-header"style="background-color: #1A237E;">
                <h3 class="mx-auto">(MEETED-CLENTS LIST)</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/codeaction" enctype="multipart/form-data" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="ensure" class="col-sm-2 col-form-label">MEETED CLIENTS </label>
                        <div class="col-sm-10">
                            <select multiple name="multipleSelect" id="multipleSelect" placeholder="---Select the URL Client----" data-search="true" data-silent-initial-value-set="true" multiSelect-max-items="10">
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
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="enquiry" class="col-sm-2 col-form-label">URL CLIENT ENQUIRES CODE</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="urlid" name="urlid">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <center><button type="submit" class="btn btn-info"style="background-color: #1A237E;">Upload</button></center>
                        </div>
                    </div>
                    <!-- /.card-footer -->
            </form>
        </div>
        <script type="text/javascript" src="js/virtual-select.min.js"></script>
        <script type="text/javascript">
            VirtualSelect.init({
                ele: '#multipleSelect'
            });
        </script>
        <!-- /.card -->
        <!-- jQuery -->
        <script src="/../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="/../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/../../dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                bsCustomFileInput.init();
            });
        </script>
</body>
<script src="https:ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>

</html>