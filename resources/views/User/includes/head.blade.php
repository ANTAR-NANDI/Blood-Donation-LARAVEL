<meta charset="utf-8">
        <title>Blood Donation Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
         <link rel="stylesheet" href="{{ asset('User/vendor/css/bootstrap.min.css') }}">
        <!-- Font awesome -->
         <link rel="stylesheet" href="{{ asset('User/vendor/css/font-awesome.min.css') }}">
        <!-- Owl carousel -->
        <link rel="stylesheet" href="{{ asset('User/vendor/css/owl.carousel.css') }}">


        <!-- Template main Css -->
        <link rel="stylesheet" href="{{ asset('User/vendor/css/style.css') }}">
        
        
        <!-- Modernizr -->
        <script src="{{ asset('User/vendor/js/modernizr-2.6.2.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('User/vendor/css/signin.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>
    
    $(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
</script>

        

       

