<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('Header.php');
    ?>
    <div class="w-fit grid place-items-center relative">
        <img class="w-full p-0 blur-sm" src="<?= base_url() ?>images/munisipyobckgrnd.jpg" alt="">
        <!-- place div absolute and in center of parent -->
        <div class="absolute grid justify-center w-full pt-11 max-w-[550px] rounded-lg h-72 bg-background">
            <h1 class="text-3xl text-center font-bold tracking-widest">Make Registration EASY!</h1>
            <div class="flex w-96 justify-between">
                <a href="<?= base_url() ?>auth/signup" class="grid w-40 h-12 bg-secondary lg:text-2xl text-text place-items-center">Signup</a>
                <a href="<?= base_url() ?>auth/login" class="grid w-40 h-12 bg-primary lg:text-2xl text-background place-items-center">Login</a>
            </div>
        </div>
    </div>
</body>

</html>