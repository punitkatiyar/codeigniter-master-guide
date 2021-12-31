<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url('src/css/');?>style.css">
</head>

<body>
    <header>
        <a href="<?php echo site_url();?>">Blog Application</a>
        <nav>
            <a href="<?php echo site_url();?>">Home</a>
            <a href="<?php echo site_url('blog/tab1');?>">Tab one</a>
            <a href="<?php echo site_url('blog/tab2');?>">Tab two</a>
            <a href="<?php echo site_url('blog/tab3');?>">Tab Three</a>
            <a href="<?php echo site_url('blog/tab4');?>">Tab Four</a>

        </nav>
    </header>
    <section class="mid">
        <div class="mid_left">
            <h1><?php echo @$tab;?></h1>
        </div>
        <div class="mid_right"></div>
    </section>



</body>

</html>