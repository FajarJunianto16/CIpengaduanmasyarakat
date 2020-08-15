<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css');?>">
    <style>
        .register {
            background: -webkit-linear-gradient(left, #670694, #9809eb);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #670694;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #670694;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #670694;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
</head>

<body>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>Welcome</h3>
                <p>Register Now!!!</p>
                <a href="<?php echo site_url('/Dashboard/masuk');?>"><input type="submit" name="" value="Login" /></a><br />
                <img src="<?php echo base_url('asset/img/pengaduan.png');?>">
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">REGISTER</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                            <form action="<?php echo site_url('Dashboard/insertuser')?>" method="POST">
                            <div class="form-group">
                                    <input type="text"  name="NIK" class="form-control" placeholder="NIK*"value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="name" class="form-control" placeholder="Nama*"value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password"  name="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="Email" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="telepon" minlength="10" maxlength="10" name="txtEmpPhone"
                                        class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
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
</body>

</html>