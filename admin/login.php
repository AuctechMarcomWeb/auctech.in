<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="./assets/css/pages/auth-light.css" rel="stylesheet" />
       <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .content form {
            padding: 15px 20px 20px 20px;
            background-color: rgba(252, 248, 253, 0.0);
            color: white;
        }

        .content {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px #b93e76;
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }

        h2.login-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .input-group-icon {
            position: relative;
        }

        .input-group-icon .input-icon {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
        }

        .form-control {
            width: 100%;
            padding: 12px 20px;
            padding-left: 40px;
            border: 1px solid #b93e76;
            border-radius: 5px;
            font-size: 14px;
        }

        .ui-checkbox {
            display: flex;
            align-items: center;
        }

        .ui-checkbox input {
            margin-right: 5px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #b93e76, #f49e33);
            border: 1px solid #b93e76;
            color: white;
            padding: 12px;
            border-radius: 5px;
            text-align: center;
            width: 100%;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #b93e76, #f49e33);
            border: 1px solid #b93e76;
        }

        label {
            font-size: 15px;
            color: black;
            font-weight: bold;
            color: white;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .content {
                padding: 20px;
                width: 90%;
            }

            h2.login-title {
                font-size: 20px;
            }
        }

        @media (max-width: 576px) {
            .form-control {
                padding: 10px 15px;
            }

            .btn-primary {
                padding: 10px;
            }
        }

        .bg-silver-300 {
            background-color: #fff !important;
        }
    </style>
</head>

<body class="bg-silver-300">
    <div class="content">
        <form id="login-form" method="POST" action="check_login.php">
            <h2 class="login-title mb-5 text-dark">Admin Login</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <label for="email">Email</label>
                    <div class="input-icon"><i class="fa fa-envelope mt-4"></i></div>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <label for="password">Password</label>
                    <div class="input-icon"><i class="fa fa-lock font-16 mt-4"></i></div>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info text-dark">
                    <input type="checkbox">
                    <span class="input-span"></span> Remember me
                </label>
            </div>
            <div class="form-group mt-3">
                <button type="submit" name="Submit"
                    class="btn btn-primary btn-block text-white mt-3 mb-0 fw-bold fs-4 mt-5">Log In</button>
            </div>
        </form>
    </div>

</body>

</html>