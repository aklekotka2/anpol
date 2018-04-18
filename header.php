<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollw" />
		<?php endif; ?>
		
        <meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width" />

        <title><?php bloginfo('title'); ?></title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slippry.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fontello/mail.css">

        
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="<?php echo ANPOL_THEME_URL; ?>js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo ANPOL_THEME_URL; ?>js/slippry.js"></script>
        <!--<script src="js/jquery.jqtransform.js"></script>
        <script src="js/slides.jquery.js"></script>-->
        <script src="<?php echo ANPOL_THEME_URL; ?>js/scripts.js"></script>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
		
		<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
	<div class="moje-cookie"></div>
        <header class="page-header">
            <div class="pos-center">
                <div class="logo">
                    <h1><a href="<?php echo esc_url(home_url('/')); ?>">Biuro rachunkowe, kancelaria rachunkowa Anpol Anna Olszewska</a></h1>
                </div>
                <div id="search">
                    <form action="<?php echo home_url().'/category/aktualnosci-pl'; ?>" action="get"> <!--action="<?php //echo get_template_directory_uri();?>/search.php" action="post" >-->
                        <input type="text" placeholder="szukaj" name="search" id="search_place"/>
                        <button><i class="demo-icon icon-search"></i></buton>
                    </form>
                </div>
            </div>
        </header>


        <nav class="main-nav">
            <div class="pos-center">
                    <div>
<?php wp_nav_menu(); //echo ABSPATH; ?>


                       <button type="button" title="Open menu" class="hamburger">

                            <svg  version="1.1" id="Layer_1" xmlns="&ns_svg;" xmlns:xlink="&ns_xlink;"  viewBox="0 0 52.7 20.7" style="overflow:visible;enable-background:new 0 0 52.7 20.7;" xml:space="preserve" class="hamburger-icon">
                            <path class="st0" d="M52.2,3.7c0,1.8-1.4,3.2-3.2,3.2H3.7c-1.8,0-3.2-1.4-3.2-3.2l0,0c0-1.8,1.4-3.2,3.2-3.2H49C50.8,0.5,52.2,1.9,52.2,3.7L52.2,3.7z"/>
                            <path class="st0" d="M52.2,17c0,1.8-1.4,3.2-3.2,3.2H3.7c-1.8,0-3.2-1.4-3.2-3.2l0,0c0-1.8,1.4-3.2,3.2-3.2H49C50.8,13.7,52.2,15.2,52.2,17L52.2,17z"/>
                            </svg>
                            
                            <svg  version="1.1" id="Layer_2" xmlns="&ns_svg;" xmlns:xlink="&ns_xlink;"  viewBox="0 0 41 41.2"
                                 style="overflow:visible;enable-background:new 0 0 41 41.2;" xml:space="preserve" class="close-icon">
                            <path class="st0" d="M39,39.9c-1.3,1.2-3.3,1.1-4.5-0.3L4.3,5.8C3.1,4.5,3.2,2.5,4.6,1.3l0,0c1.3-1.2,3.3-1.1,4.5,0.3l30.1,33.8
                                C40.4,36.7,40.3,38.7,39,39.9L39,39.9z"/>
                            <path class="st0" d="M39.6,3.3c1.2,1.3,1.1,3.3-0.2,4.5L5.9,38.2c-1.3,1.2-3.3,1.1-4.5-0.2l0,0c-1.2-1.3-1.1-3.3,0.2-4.5L35.1,3
                                C36.4,1.8,38.5,1.9,39.6,3.3L39.6,3.3z"/>
                            </svg>

                        </button>
                    </div>
            </div>
        </nav>
   