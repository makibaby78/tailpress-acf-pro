<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="bg-header w-full bg-white">
		<div class="container mx-auto max-w-screen-xl">
            <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between px-4 mx-auto">
                    <a href="#" class="flex items-center">
                        <?php tailpress_get_logo() ?>
                    </a>
                    <div class="flex items-center">
                        <div>
                            <?php 
                            wp_nav_menu( array(
                                'menu' => 'Top Menu',
                                'container' => 'div',
                                'container_class' => 'top-menu px-10 items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1',
                                'menu_class' => 'flex flex-row mt-4 font-medium lg:space-x-8 lg:mt-0',
                            ) );
                            ?>
                        </div>
                        <div class="flex items-center lg:order-2">
                             <?php if( get_theme_mod('header_btn') ): ?>
                                <a href="<?php if( get_theme_mod('header_link') ){echo get_theme_mod('header_link'); }else{ echo "#";} ?>" class="focus:outline-none">
                                    <button class="btn-1 text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 font-bold">
                                        <?php echo get_theme_mod('header_btn') ?>
                                    </button>
                                </a>
                            <?php endif; ?>	
                            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
	</header>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
