<?php
/**
 * @var $connection mysqli
 */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE username = '$login' OR email = '$email' LIMIT 1";
    $res = mysqli_query($connection, $sql);
    $userExists = (bool) mysqli_num_rows($res);
    $errors = [];
    if($userExists){
        $errors[] = 'Пользователь с таким логином или емайлом уже существует';
    }
    if($_POST['password'] != $_POST['password2']){
        $errors[] = 'Пароли не совпадают';
    }
    if (mb_strlen($_POST['password']) <5){
        $errors[] = 'Пароль не может быть короче 5 символов';
    }


    if(empty($errors)){
        $password = md5($_POST['password']);

        $sql = "INSERT INTO users (username, email, password) 
                VALUES('$login', '$email', '$password')";
        mysqli_query($connection, $sql);
        header("Location : /");

    }else {
        debug($errors);
        die();
    }


}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<style>
    body {
        background: #222D32;
        font-family: 'Roboto', sans-serif;
    }

    .login-box {
        margin-top: 75px;
        height: auto;
        background: #1A2226;
        text-align: center;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }

    .login-key {
        height: 100px;
        font-size: 80px;
        line-height: 100px;
        background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .login-title {
        margin-top: 15px;
        text-align: center;
        font-size: 30px;
        letter-spacing: 2px;
        margin-top: 15px;
        font-weight: bold;
        color: #ECF0F5;
    }

    .login-form {
        margin-top: 25px;
        text-align: left;
    }

    input[type=text] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        margin-bottom: 20px;
        padding-left: 0px;
        color: #ECF0F5;
    }

    input[type=password] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        padding-left: 0px;
        margin-bottom: 20px;
        color: #ECF0F5;
    }

    .form-group {
        margin-bottom: 40px;
        outline: 0px;
    }

    .form-control:focus {
        border-color: inherit;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-bottom: 2px solid #0DB8DE;
        outline: 0;
        background-color: #1A2226;
        color: #ECF0F5;
    }

    input:focus {
        outline: none;
        box-shadow: 0 0 0;
    }

    label {
        margin-bottom: 0px;
    }

    .form-control-label {
        font-size: 10px;
        color: #6C6C6C;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .btn-outline-primary {
        border-color: #0DB8DE;
        color: #0DB8DE;
        border-radius: 0px;
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .btn-outline-primary:hover {
        background-color: #0DB8DE;
        right: 0px;
    }

    .login-btm {
        float: left;
    }

    .login-button {
        padding-right: 0px;
        text-align: right;
        margin-bottom: 25px;
    }

    .login-text {
        text-align: left;
        padding-left: 0px;
        color: #A2A4A4;
    }

    .loginbttm {
        padding: 0px;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                Register
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form method="post" action="/register">
                        <div class="form-group">
                            <label class="form-control-label">USERNAME</label>
                            <input type="text" class="form-control" name="login">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Пароль</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Повторить пароль</label>
                            <input type="password" class="form-control" name="password2">
                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>
</body>
</html>