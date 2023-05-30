<html lang="en">

<head>
    <meta charset="utf-8">
    <title>INTRACTS INC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https:fonts.gstatic.com">
    <link href="https:fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary"style="background-color: #E8EAF6;">


                        <div class="card-header"style="background-color: #1A237E;">
                            <center>
                                <h3 class="card-title text-white" style="background-color: #1A237E;">Register Form</h3>
                            </center>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach($result as $value)
                        <form method="post" action="/myprofileaction/{{$value->id}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter full name" value="{{$value->fullname}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">DATE</label>
                                    <input type="date" class="form-control" name="date" placeholder="date" value="{{$value->date}}">
                                </div>
                                <div class="form-group">
                                    <label for="contact">TIME</label>
                                    <input type="time" class="form-control" name="time" placeholder="time" value="{{$value->time}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">DESIGNATION</label>
                                    <input type="text" class="form-control" name="designation" value="{{$value->designation}}" placeholder="designation">
                                </div>
                                <div class="form-group">
                                    <label for="contact">ADDRESS</label>
                                    <input type="text" class="form-control" name="address" value="{{$value->address}}" placeholder="address">
                                </div>
                                <div class="form-group">
                                    <label for="contact">CONTACT</label>
                                    <input type="text" class="form-control" name="contact" value="{{$value->contact}}" placeholder="contact">
                                </div>
                                <div class="form-group">
                                    <label for="contact"> EMPLOYMENT STATUS:</label>
                                    <select input type="select" class="form-control" list="browsers" value="{{$value->employmentstatus}}" name="employmentstatus" id="employmentstatus" placeholder="browser">
                                        <option value=""></option>
                                        <option value="Job">job</option>
                                        <option value="Business">Business</option>
                                        <option value="Provision">Provision</option>
                                        <option value="UnEmployment">UnEmployment</option>
                                        <option value="Student">Student</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="contact"> CATEGORY OF EMPLOYMENT</label>
                                    <input type="text" class="form-control" name="category" value="{{$value->category}}" placeholder="category">
                                </div>
                                <div class="form-group">
                                    <label for="contact">ENTERED ON TIME STORE: </label>
                                    <input type="text" class="form-control" name="timestore" value="{{$value->timestore}}" placeholder="timestore">
                                </div>
                                <div class="form-group">
                                    <label for="contact"> USERNAME</label>
                                    <input type="text" class="form-control" name="username" value="{{$value->username}}" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label for="contact">PASSWORD</label>
                                    <input type="password" class="form-control" name="password" value="{{$value->password}}" placeholder="password">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="text-white"  style="background-color: #1A237E;">Submit</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>