<?php
// $serverName = "localhost";
// $dbUsername = "root";
// $dbPassword = "root";
// $dbName = "users";

// $connection = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);
// $sql = "SELECT * FROM users";
// $result = mysqli_fetch_assoc(mysqli_query($connection,$sql));
// echo($result["shop"]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css links -->
    <link rel="stylesheet" href="../../utils/styles/style.css">
    <link rel="stylesheet" href="../../utils/styles/custom_styles.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../libraries/locomotive_scroll/locomotive.scroll.css">
    <!-- javascript links -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../libraries/locomotive_scroll/locomtive.scroll.js"></script>
    <title>Home</title>
</head>

<body id="wrapper" data-scroll-container>
    <div id="content" class="">
        <!-- main -->
        <section id="home__main" data-scroll-section
            class="w-full min-h-[120vh] relative flex flex-col justify-end gap-20 p-5 md:flex-col-reverse md:justify-start md:min-h-screen">
            <!-- import navbar -->
            <?php
            include("../../components/navbar/navbar.php");
            ?>
            <!-- <div id="home__emoji" data-bg="blc"
                class="w-max h-max absolute top-1/2 -right-full flex items-center justify between gap-4 p-4 rounded-tl-full rounded-bl-full">
                <div id="emoji" class="text-5xl">
                    👋
                </div>
                <span data-clr="ltgry">
                    Located in <br /> Uzbekistan
                </span>
            </div>
            <div class="absolute bottom-10 left-0">
                <marquee data-clr="wht" class="text-8xl whitespace-nowrap">
                    Fullstack Developer-Turgunov Murodjon
                </marquee>
            </div> -->
            <div id="home__title">
                <h1 class="text-9xl whitespace-nowrap md:text-[10rem]">
                    Fullstack Developer - Turgunov Murodjon
                </h1>
            </div>
            <div id="home__category-and-globus"
                class="w-full relative flex justify-between items-center md:flex-row-reverse md:absolute top-1/2 left-0 -translate-y-1/2">
                <div class="border relative text-white text-2xl">
                    <ion-icon name="arrow-forward-outline" class="text-xl absolute left-0 -top-10"></ion-icon>
                    Freelance <br>
                    Fullstack Developer
                </div>
                <div class="border">
                    hwllo
                </div>
            </div>
        </section>
        <!-- about -->
        <section id="home__about" data-scroll-section
            class="flex flex-col items-center px-4 py-20 gap-7 w-full h-max sm:p-20 md:flex-row md:gap-14 md:items-start lg:px-32">
            <div id="about-left" class="w-full md:w-8/12">
                <h4 class="text-xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus incidunt nemo perferendis impedit
                    deserunt quae fugiat voluptate tempora illum eius cum aistinctio soluta.
                </h4>
            </div>
            <div id="about-rigth" class="w-full flex gap-5 md:w-4/12 md:flex-col md:gap-8">
                <h6 class="w-7/12 md:w-full">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet a, quaerat impedit quia sunt qui
                    sequi asperiores quisquam minima.
                </h6>
                <div class="relative w-5/12 md:w-full pb-10">
                    <span data-bg="blc" data-clr="wht"
                        class="w-32 h-32 absolute -bottom-14 right-0 flex items-center justify-center p-10 rounded-full md:top-0 left-0 md:w-36 md:h-36">
                        About
                    </span>
                </div>
            </div>
        </section>
        <!-- works -->
        <section data-scroll-section id="home__works" class="flex flex-col gap-5 px-4 py-10">
            <span data-clr="ltgry" class="hidden md:block text-xs px-20">
                RECENT WORK
            </span>
            <div id="works-main" class="w-full flex flex-col items-center">
                <!-- mobile works -->
                <ul class="w-full flex flex-col items-start gap-6 sm:flex-row md:hidden">
                    <li class="flex flex-col justify-start gap-3 w-full sm:w-1/2">
                        <figure class="flex items-center justify-center px-4 py-16 bg-slate-800 sm:py-12">
                            <img src="../../assets/images/home__main-background.jpg" alt="">
                        </figure>
                        <h4 class="text-3xl">
                            Work title
                        </h4>
                        <div data-clr="drgry" class="flex items-center justify-between py-3 border-t border-slate-300">
                            <span>
                                Design & Development
                            </span>
                            <span>
                                2023
                            </span>
                        </div>
                    </li>
                    <li class="flex flex-col justify-start gap-3 w-full sm:w-1/2">
                        <figure class="flex items-center justify-center px-4 py-16 bg-slate-800 sm:py-12">
                            <img src="../../assets/images/home__main-background.jpg" alt="">
                        </figure>
                        <h4 class="text-3xl">
                            Work title
                        </h4>
                        <div data-clr="drgry" class="flex items-center justify-between py-3 border-t border-slate-300">
                            <span>
                                Design & Development
                            </span>
                            <span>
                                2023
                            </span>
                        </div>
                    </li>
                </ul>
                <!-- dekstop works -->
                <ul class="hidden md:flex w-full flex-col gap-3">
                    <li class="w-full flex items-center justify-between px-20 py-10">
                        <h2 class="text-5xl xl:text-7xl">
                            Hello world
                        </h2>
                        <span data-clr="drgry" class="text-sm">
                            Design & Development
                        </span>
                    </li>
                    <li class="w-full flex items-center justify-between px-20 py-10">
                        <h2 class="text-5xl xl:text-7xl">
                            Hello world
                        </h2>
                        <span data-clr="drgry" class="text-sm">
                            Design & Development
                        </span>
                    </li>
                    <li class="w-full flex items-center justify-between px-20 py-10">
                        <h2 class="text-5xl xl:text-7xl">
                            Hello world
                        </h2>
                        <span data-clr="drgry" class="text-sm">
                            Design & Development
                        </span>
                    </li>
                </ul>
            </div>
            <button data-br="ltgry" class="px-10 py-5 mx-auto mt-10">
                <a href="#">
                    More work
                </a>
            </button>
        </section>
        <!-- horizontal section -->
        <section id="home__horizontal" data-scroll-section
            class="hidden md:flex flex-col justify-between w-full h-max gap-5 py-10 border-2 border-red-400">
            <div id="top" data-scroll data-scroll-direction="horizontal"
                class="flex items-center justify-between gap-5 whitespace-nowrap border">
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
            </div>
            <div id="bottom" data-scroll data-scroll-direction="horizontal"
                class="flex items-center justify-between gap-5 whitespace-nowrap border">
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
                <figure data-bg="blc" class="w-max h-max flex items-center justify-center px-6 py-8 border">
                    <img src="../../assets/images/home__main-background.jpg" class="w-56 h-52 lg:w-60 xl:w-72">
                </figure>
            </div>
        </section>
    </div>
    <script>
        (function () {
            var scroll = new LocomotiveScroll({
                el: document.querySelector("[data-scroll-container]"),
                smooth: true,
                multiplier: 1
            });
        })();
    </script>
</body>

</html>