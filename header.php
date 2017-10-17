<!DOCTYPE html>
<html lang="<? bloginfo( 'language' ) ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? bloginfo( 'name' ) ?></title>
    <meta name="description" content="<? bloginfo( 'description' ) ?>">
    <link rel="stylesheet" href="<? path() ?>css/bootstrap.min.css">
    <link href="<? path() ?>css/style.css" rel="stylesheet">
	<? wp_head() ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<? path() ?>Favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<? path() ?>Favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<? path() ?>Favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<? path() ?>Favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<? path() ?>Favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<? path() ?>Favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<? path() ?>Favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<? path() ?>Favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<? path() ?>Favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<? path() ?>Favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<? path() ?>Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<? path() ?>Favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<? path() ?>Favicon/favicon-16x16.png">
    <link rel="manifest" href="<? path() ?>Favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<button type="button" class="toggle-btn">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span></button>
<div class="mobile-menu">
	<?php wp_nav_menu( array( 'menu' => 'Меню' ) ); ?>
</div>
<header>
    <div class="container">
        <div class="logo col-lg-1 col-sm-2"><a href="<? bloginfo( 'url' ) ?>">
                <img src="<? echo get_field( 'лого', 17 )['url'] ?>"
                     alt="<? echo get_field( 'лого', 17 )['alt'] ?>"></a></div>
        <div class="menu col-lg-6 col-md-7 col-sm-10">
			<?php wp_nav_menu( array( 'menu' => 'Меню', 'menu_class' => '' ) ); ?>
        </div>
        <div class="callbacks col-sm-12">
            <a data-target="#modal-buy" data-toggle="modal" class="btn buy"><? the_field( 'кнопка-купить', 17 ) ?></a>
            <a data-target="#modal-ask" data-toggle="modal"
               class="btn question"><? the_field( 'кнопка-вопрос', 17 ) ?></a>
        </div>
    </div>
</header>