<?php
session_start();

if (isset($_SESSION['user_name'])) {
    header('location:../');
}

$base_url = "http://localhost:8888/mollanative";

// Ambil pesan dari session jika ada
$message = '';
$message_type = '';

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type'];

    // Hapus pesan setelah ditampilkan
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?php echo $base_url; ?>/public/assets/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo $base_url; ?>/public/assets/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $base_url; ?>/public/assets/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $base_url; ?>/public/assets/apple-touch-icon-114x114.png">
    <title>Login | Robert - Portfolio</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/public/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
            font-family: montserrat, sans-serif;
        }

        .form-signin {
            width: 100%;
            max-width: 380px;
            padding: 20px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
        }

        .form-signin input[type="email"],
        .form-signin input[type="password"] {
            margin-bottom: 15px;
        }

        .custom-alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .custom-alert.success {
            background-color: #e7f9ed;
            border: 1px solid #b7e2c7;
            color: #2b6d3b;
        }

        .custom-alert.error {
            background-color: #fdecea;
            border: 1px solid #f5b4b0;
            color: #b43731;
        }

        .custom-alert i {
            font-size: 18px;
            margin-right: 10px;
        }

        .custom-alert.success i {
            color: #2b6d3b;
        }

        .custom-alert.error i {
            color: #b43731;
        }

        .form-signin button {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="form-signin">
        <?php if (!empty($message)) : ?>
            <div class="custom-alert <?php echo $message_type === 'success' ? 'success' : 'error'; ?>">
                <i class="bi <?php echo $message_type === 'success' ? 'bi-check-circle-fill' : 'bi-x-circle-fill'; ?>"></i>
                <span><?php echo $message; ?></span>
            </div>
        <?php endif; ?>

        <form action="<?php echo $base_url; ?>/admin/controllers/AuthController.php" method="POST">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-2 mb-3 text-muted text-center">&copy; <?= date('Y'); ?></p>
        </form>
    </div>
</body>

</html>