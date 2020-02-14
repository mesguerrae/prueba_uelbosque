<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login-boxed.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] mié, 05 feb 2020 16:26:16 GMT -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login Boxed - ArchitectUI HTML Bootstrap 4 Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.87c0748b313a1dda75f5.css" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class=" mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">

                                    <form class=""  id="loginform" method="post" autocomplete="off">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input autocomplete="off" name="username" id="username" placeholder="Correo electronico" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input autocomplete="off" name="password" id="password" placeholder="Contraseña" type="password" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer clearfix">
                                            <div class="float-right">
                                                <input type="submit" class="btn btn-primary btn-lg" name="loginBtn" id="loginBtn" value="Login" />
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="assets/scripts/main.87c0748b313a1dda75f5.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#loginform').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'services/login.php',
                data: $(this).serialize(),
                success: function(response)
                {
                    var jsonData = JSON.parse(response);
                    if (jsonData.success == "1")
                    {
                    location.href = 'vehiculo.php';
                    }
                    else
                    {
                        alert(jsonData.error.message);
                    }
            }
        });
        });
    });
</script>

</body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login-boxed.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] mié, 05 feb 2020 16:26:16 GMT -->
</html>
