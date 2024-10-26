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
        <form id="signup-form" class="bg-background rounded-lg pl-3 pr-3 pt-4 pb-4 w-full flex flex-col items-center lg:gap-4 lg:max-w-[716px] lg:min-w-[720px]" action="register" method="post">
            <?= csrf_field() ?>
            <img class="w-[78px]" src="<?= base_url() ?>images/munisipyo.png" alt="munisipyo_logo">
            <!-- Title -->
            <div class="flex flex-col gap-3">
                <div class="text-center">
                    <h1 class="text-2xl">Signup</h1>
                </div>
                <div class="rounded-full min-w-[430px] max-w-[427px] bg-gray-300">
                    <div id="progress" class="rounded-full transition-transform w-[0%] h-3 bg-primary"></div>
                </div>
            </div>

            <!-- TAB 1 -->
            <div id="tab-1" class="flex flex-col justify-between lg:min-w-[580px] lg:max-w-[585px] lg:min-h-[250px] lg:max-h-[255px] transition-opacity duration-300">
                <!-- Full Name Fields -->
                <?= view('auth/components/FullName') ?>
                <!-- Full Name Fields -->

                <!-- Address Fields -->
                <?= view('auth/components/Address', $address) ?>
                <!-- Address Fields -->

                <!-- Birth Information -->
                <?= view('auth/components/BirthInfo') ?>
                <!-- Birth Information -->
            </div>

            <!-- TAB 2 -->
            <div id="tab-2" class="hidden flex-col justify-between lg:min-w-[580px] lg:max-w-[585px] lg:min-h-[250px] lg:max-h-[255px] transition-opacity duration-300">
                
            </div>

            <!-- TAB 3 -->
            <div id="tab-3" class="hidden flex-col justify-between lg:min-w-[580px] lg:max-w-[585px] lg:min-h-[250px] lg:max-h-[255px] transition-opacity duration-300">
                <h1>Tab 3</h1>
                <input type="text" name="3">
            </div>

            <!-- TAB 4 -->
            <div id="tab-4" class="hidden flex-col justify-between lg:min-w-[580px] lg:max-w-[585px] lg:min-h-[250px] lg:max-h-[255px] transition-opacity duration-300">
                <h1>Tab 4</h1>
                <input type="text" name="4">
            </div>
            <div class="flex gap-4">
                <button type="button" id="prev" value="prev" class="flex justify-between text-text rounded-lg pt-3 pb-3 pl-2 pr-2"><i><-</i> Return</button>
                <button type="button" id="next" value="next" class="flex justify-between text-text rounded-lg pt-3 pb-3 pl-2 pr-2">Next <i>-></i></button>
            </div>
        </form>
    </div>
</body>
<script>
    $(document).ready(() => {
        console.log("jquery is working");
        let signForm = $("#signup-form");
        let defaultTab = 1;
        let prev = $('#prev');
        let next = $('#next');
        let tabs = $("[id^='tab-']");
        let progressBar = $('#progress');
        let progress = defaultTab / tabs.length * 100;

        updateProgress(progress);

        signForm.on("submit", (event) => {
            event.preventDefault();
            let formData = new FormData(signForm[0]);

            // if ($('#password').val() == $('#con-password').val()) {
            //     console.log("the passwords match");
            //     $.ajax({
            //         url: "signup",
            //         type: "POST",
            //         data: formData,
            //         processData: false,
            //         contentType: false,
            //         success: (response) => {
            //             console.log(response, response.csrf_test_name);
            //             $('input[name="<?= csrf_token() ?>"]').val(response.csrf_test_name);
            //         },
            //         error: (error) => {
            //             console.log(error);
            //         },
            //     });
            // } else {
            //     alert("passwords do not match try again");
            // }

            console.log(formData);
        });

        function updateProgress(newProgress) {
            progressBar.css('width', `${newProgress}%`);
            progress = newProgress;
        }

        function onClick(e) {
            if (e.target.value == 'next') {
                ++defaultTab;
                if (defaultTab > 4) {
                    if (confirm('Please make sure all the information provided is correct')) {
                        signForm.submit();
                    } else {
                        defaultTab = 4;
                    }
                } else {
                    $(`#tab-${defaultTab - 1}`).addClass('hidden').removeClass('opacity-150').addClass('opacity-0').hide();
                    $(`#tab-${defaultTab}`).removeClass('hidden').removeClass('opacity-0').addClass('opacity-150').show();
                }
            } else if (e.target.value == 'prev') {
                --defaultTab;
                if (defaultTab < 1) {
                    if (confirm('Return to Login?')) {
                        window.location.href = 'login';
                    } else {
                        defaultTab = 1;
                    }
                } else {
                    $(`#tab-${defaultTab + 1}`).addClass('hidden').removeClass('opacity-150').addClass('opacity-0').hide();
                    $(`#tab-${defaultTab}`).removeClass('hidden').removeClass('opacity-0').addClass('opacity-150').show();
                }
            }
            progress = defaultTab / tabs.length * 100;
            updateButtonText();
            updateProgress(progress);
            console.log(defaultTab);
        }

        function updateButtonText() {
            defaultTab == 4 ? next.text('Submit') : next.text('Next');
            defaultTab == 1 ? prev.text('Return') : prev.text('Back');
        }

        next.on('click', onClick);
        prev.on('click', onClick);
    });
</script>

</html>