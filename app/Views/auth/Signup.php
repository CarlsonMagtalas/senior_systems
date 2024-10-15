<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>

<body class="overflow-hidden">
    <img class="absolute z-0 blur-sm scale-150 translate-x-11 translate-y-16" src="<?= base_url() ?>images/munisipyobckgrnd.jpg" alt="munisipyo_background.jpg">
    <div class="w-full lg:mt-12 min-h-[550px] grid  justify-center relative z-10">
        <form id="signup-form" class="bg-background rounded-lg pt-6 w-full flex flex-col items-center lg:gap-6 lg:max-w-[420px] lg:min-w-[414px]" action="register" method="post">
            <?= csrf_field() ?>
            <img class="w-[78px]" src="<?= base_url() ?>images/munisipyo.png" alt="munisipyo_logo">
            <!-- Title -->
            <div class="text-center">
                <h1 class="text-2xl">Signup</h1>
            </div>

            <!-- Input Fields -->
            <div class="flex flex-col gap-[15px]">
                <input class="w-full outline outline-1 pl-2 lg:min-w-[255px] lg:max-w-[260px] lg:min-h-[45px] lg:max-h-[50px]" type="text" name="email" placeholder="Email">
                <input class="w-full outline outline-1 pl-2 lg:min-w-[255px] lg:max-w-[260px] lg:min-h-[45px] lg:max-h-[50px]" type="password" name="password" placeholder="Password">
                <input class="w-full outline outline-1 pl-2 lg:min-w-[255px] lg:max-w-[260px] lg:min-h-[45px] lg:max-h-[50px]" type="password" name="con_pass" placeholder="Confirm Password">
            </div>

            <!-- Buttons -->
            <div class="flex flex-col gap-3">
                <button class="w-full block text-xl rounded-lg bg-primary text-background lg:min-w-[255px] lg:max-w-[260px] lg:min-h-[45px] lg:max-h-[50px]">Register</button>
                <p class="text-center">have an account?</p>
                <a class="w-full text-xl grid place-items-center rounded-lg bg-secondary text-background text-center lg:min-w-[255px] lg:max-w-[260px] lg:min-h-[45px] lg:max-h-[50px]" href="">Login</a>
            </div>
        </form>
    </div>
</body>

<script>
    $(document).ready(() => {
        console.log("jquery is working");
        let signForm = $('#signup-form');

        signForm.on('submit', (event) => {
            event.preventDefault();
            let formData = new FormData(signForm[0]);

            $.ajax({
                url: 'signup',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: (response) => {
                    console.log(response);
                },
                error: (error) => {
                    console.log(error);
                }
            })
            console.log(formData);
        });
    });
</script>

</html>