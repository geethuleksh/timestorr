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
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pb-4 pb-lg-0">
                    <iframe style="width: 100%; height: 470px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-lg-7"style="background-color: #1A237E;">
                    <center>
                        <h2 class=" text-uppercase font-weight-bold text-white"style="background-color: #1A237E;">intract inc </h2>
                    </center>
                    <div class="contact-form bg-secondary" style="padding: 30px ;background-color: #E8EAF6;">
                    <div id="success"style="background-color: #E8EAF6;"></div>

                        <form method="post" action="/userloginaction"style="background-color: #E8EAF6;">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email">user name</label>
                                    <input type="text" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>
                                <div class="card-footer">
                                   <center><button type="submit" class="btn btn-primary" style="background-color: #1A237E;">LOGIN</button>
                                    <input type="reset" value="clear"style="background-color: #1A237E;" class="btn btn-primary"></center> 
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <style type="text/css">
        .error {
            color: red
        }
    </style>
    <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
    <script type="text/javascript">
        $('#form').validate({
            rules: {
                username: {
                    required: true,
                    minlength: 5,
                    maxlength: 15,
                },
                password: {
                    required: true,
                    minlength: 5,
                    maxlength: 10,
                },
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "username") {
                    error.appendTo("#messageBox");
                } else {
                    error.insertAfter(element);
                }
            },
            messages: {
                username: {
                    required: "username is required!",
                    email: "Enter A Username !..",
                    remote: "Username already in use!"
                },
            }
        })
    </script>
</body>

</html>