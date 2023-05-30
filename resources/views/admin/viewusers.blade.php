<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="/path/to/print.css" media="print">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>timestorr</title>
</head>

<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" border="1"style="background-color: #E8EAF6;" width="1330px" height="100px" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                            ID</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                            Full Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                            DATE</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                            TIME</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                            designation</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                            address</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                            CONTACT</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                            employmentstatus</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                            category</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                            timestore</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                            username</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                            password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $value)
                                    <tr class="odd">
                                        <td>URL {{$value->id}}</td>
                                        <td>{{$value->fullname}}</td>
                                        <td>{{$value->date}}</td>
                                        <td>{{$value->time}}</td>
                                        <td>{{$value->designation}}</td>
                                        <td>{{$value->address}}</td>
                                        <td>{{$value->contact}}</td>
                                        <td>{{$value->employmentstatus}}</td>
                                        <td>{{$value->category}}</td>
                                        <td>{{$value->timestore}}</td>
                                        <td>{{$value->username}}</td>
                                        <td>{{$value->password}}</td>
                                        <td><a href="/clientschedule/{{$value->id}}">Client schedule Form</a></td>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>

        <!-- /.container-fluid -->
    </section>
    </div>
</body>

</html>