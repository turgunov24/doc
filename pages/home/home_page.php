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
    <link rel="stylesheet" href="">
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
            <h1
            <?php
            include("../../components/footer/footer.php")
                ?>

            <script>
        // (function () {
        //     var scroll = new LocomotiveScroll({
        //         el: document.querySelector("[data-scroll-container]"),
        //         smooth: true,
        //         multiplier: 1
        //     });
        // })();
            </script>
</body>

</html>