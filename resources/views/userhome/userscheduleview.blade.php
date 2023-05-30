<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>intracts inc</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
            
                <h1 class="mb-4">MEET CLIENTS</h1>
            </div>
            <center>
                <div class="row">
                    <div class="col-md-11 mb-5">
                        <div class="bg-secondary">
                            <div class=" text-center p-4 "style="background-color: #1A237E;">
                                <h3 class="m-0 text-white"> TIMESTORR MEET CLIENTS</h3>
                            </div>
                            <div class="d-flex flex-column align-items-center py-5"style="background-color: #E8EAF6;">
                                @foreach($result as $value)
                                <p>ID:{{$value->id}}</p>
                                <p>URL CLIENT ENQUIRES CODE:{{$value->url}}</p>

                                <p>URL CLIENT ENSURE CATEGORY:{{$value->ensure}}</p>
                                <p>DATE:{{$value->date}}</p>
                                <p>TIME IN :{{$value->timein}}AM</p>
                                <p>CDC VENUE :{{$value->venue}}</p>
                                <p>URL CLIENT MEET ACCEPTONS CODE :{{$value->clientcategory}}</p>

                                @endforeach

                            </div>
                        </div>
                    </div>
            </center>
        </div>
    </div>
    </div>
    <!-- Pricing Plan End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="/mail/jqBootstrapValidation.min.js"></script>
    <script src="/mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>