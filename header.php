<!DOCTYPE html>
<html lang="sv-SE">
<head>
    <?php wp_head();?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0735ce69aa.js" crossorigin="anonymous"></script>
    <title>Timeiggesund</title>
</head>


</head>
<body <?php body_class();?>>


<header>
     <div class="container">
        <nav>
            <div class="logo">
            <?php
                    if ( function_exists( 'the_custom_logo') ) {
                        the_custom_logo();
                    }
                ?>
                </div>
            
                <?php wp_nav_menu(

                    array(

                        'theme_location' => 'top-menu',
                    'menu_class' => 'top-bar'

                    )
                );?>
                
                </div>

                <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                </div>
        </nav>
    

            
        
</header>




    