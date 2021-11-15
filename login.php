
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registration</title>
    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- custom css-->
    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0,0.5), rgba(0, 0, 0,0.5)), url(pexels-photo-291528.jpeg);
            background-size: cover;
            background-position: center;
        }
        .login-box{
            max-width: 700px;
            margin: 200px auto;
        }
        .login-right{
            background: rgb(211, 211, 211,0.7);
            padding: 50px;
            color: #621708;

        }
        .login-left{
            background: #ffffff;
            padding: 50px;
            color: #621708;
        }
        .form-control{
            background: transparent;
        }
        .btn-custom{
            background: #E7D7C1;
            color: #FF7F51;
            border-color: #FF7F51;
        }
        .btn-custom:hover{
            background: #FF7F51;
            border-color: #FF7F51;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="class-md-6 login-left">
                <h2>
                    Login Here
                </h2>
                <Form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-custom"> Login </button>
                </Form>
            </div>
            <div class="class-md-6 login-right">
                <h2>
                    Register Here
                </h2>
                <Form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-custom"> Register </button>
                </Form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>