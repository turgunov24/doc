<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../utils/styles/custom_styles.css">
    <link rel="stylesheet" href="../../utils/styles/style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>footer</title>
</head>

<body>
    <footer id="footer" data-bg="blc" class="flex flex-col p-5">
        <div class="footer-main" class="border border-red-500 flex flex-col gap-10">
            <div class="w-full flex items-center justify-between">
                <figure class="">
                    <img src="../../assets/images/profile-image.jpg" class="rounded-full w-10 h-10"> 
                    <span data-clr="wht">Let's work together</sp>
                </figure>
                <ion-icon name="arrow-forward-outline" data-clr="wht" class="text-xl"></ion-icon>
            </div>
            <div data-bg="drgry" class="relative w-full h-[1px]">
                <a data-clr="wht"
                    class="w-32 h-32 absolute right-10 top-1/2 -translate-y-1/2 flex items-center justify-center p-10 rounded-full bg-blue-800 md:w-36 md:h-36">
                    Get in touch
                </a>
            </div>
        </div>
        <div class="footer-bottom" class="border">
            bottom
        </div>
    </footer>
</body>

</html>