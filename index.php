<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naveed and Brothers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        .parent {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .child {
            height: 80vh;
            width: 60vw;
        }
        .bg{
            background-color: #F7F7F7;
        }
    </style>

</head>

<body>
    <div>
        
        <div class="parent">
            <div class="child">
                <div class="container-fluid">
                    <div class="row g-0">
                        <!-- IMG SIDE -->
                        <div class="col-xl-7">
                            <div>
                                <img src="1.png" alt="" class="img-fluid w-100"
                                    style="height: 80vh; object-position: center;">
                            </div>
                        </div>
                        <!-- FORM SIDE -->
                        <div class="col-xl-5 bg">
                            <div>
                                <!-- COMPANY NAME -->
                                <a href="#" class="text-dark text-decoration-none text-center">
                                    <h3 class="mt-5 mb-4" style="font-weight: bold; font-family: 'Times New Roman', serif;">
                                        Naveed And Brothers
                                    </h3>
                                </a>
                                <!-- WELCOME NOTE -->
                                <h5 class="text-center mb-4"
                                    style="font-family: 'Times New Roman', serif; font-weight: bold;">
                                    Welcome to Admin Panel
                                </h5>
                                <!-- SIGN IN FORM -->
                                <form class="mx-7 " method="post" action="adminauth.php">
                                    <div class="mb-3 mx-5">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="email" placeholder="admin@gmail.com" required>
                                    </div>
                                    <div class="mb-3 mx-5">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name=password id="exampleInputPassword1" required placeholder="****">
                                        <!-- <div id="forgetpass" class="form-text pt-1 text-end" >
                                            <a href="#" class="text-success text-decoration-none ">
                                                Forgot password?
                                            </a>
                                        </div> -->
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" id="admin_login_btn" name="admin_login_btn"  class="btn btn-dark rounded-5 py-2"
                                            style="padding-left: 60px; padding-right: 60px; margin-top:15px;">Sign in</button>
                                    </div>

                                  
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>

</html>