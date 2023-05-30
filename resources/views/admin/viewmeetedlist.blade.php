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
                            <table id="example2"style="background-color: #E8EAF6;" class="table table-bordered table-hover" border="1" width="1300px" height="100px">
                                <thead>
                                    <tr height="60px">
                                    <th>URL CLIENT ENQUIRES CODE</th>
                                        <th> MEETEDLIST</th>
                                        <th>STATUS</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ren as $value)
                                    <tr>
                                      
                                        <td>{{$value->urlid}}</td>
                                        <td>{{$value->multipleSelect}}</a></td>
                                        <td>{{$value->status}}</td>
                                      
</tr>
                                        @endforeach
                                </tbody>
                                </tfoot>
                            </table>
                            <br>
                            <a href="" onclick="window.print()"><button>print</button></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

</body>

</html>