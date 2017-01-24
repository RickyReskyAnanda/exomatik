<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2015 00:53:03 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EXOMATIK | Login</title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Exo</h2>

            </div>
            <h3>Welcome to EXOMATIK</h3>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="post" action="<?=base_url('A_login/login')?>">
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>Exomatik &copy; 2016</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?=base_url()?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2015 00:53:03 GMT -->
</html>
