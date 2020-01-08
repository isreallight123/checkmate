<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- links to css files -->
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">


</head>
<body>
<div id="body" style="padding-top: 0;">
    <main id="index">
        <div id="login-header">
            <figure>
                <img src="imgs/oluaka.png">
            </figure>
            <p>Oluaka Instutitue of Technology</p>
        </div>

        <div id="login-body">
            <header>
                <div class="bg-secondary"><span>Login</span></div>
            </header>
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control">
                </div>

                <div class="form-group" id="btn-submit">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </main>

<?php
    require "includes/footer.php";
?>
