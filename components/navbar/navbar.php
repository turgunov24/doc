<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../utils/styles/style.css">
    <link rel="stylesheet" href="../../utils/styles/custom_styles.css">
    <title>navbar</title>
</head>

<body>
    <header id="navbar" class="absolute top-0 left-0 w-full flex justify-between px-5 py-8 md:p-8">
        <div class="logo">
            <a data-clr="blc" href="<?php echo __FILE__ ?>">
                @turgunov
            </a>
        </div>
        <nav class="">
            <ul class="hidden sm:flex items-center justify-between gap-5">
                <li>
                    <a href="../../pages/works/works_page.php">
                        Work
                    </a>
                </li>
                <li>
                    <a href="../../pages/about/about_page.php">
                        About
                    </a>
                </li>
                <li>
                    <a href="../../pages/contact/contact_page.php">
                        Contact
                    </a>
                </li>
            </ul>
            <div class="sm:hidden">
                • Menu
            </div>
        </nav>
    </header>
</body>

</html>