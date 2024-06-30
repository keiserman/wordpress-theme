<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="py-8 bg-gray-900 text-white">
        <div class="container mx-auto flex items-center justify-between">
            <a class="text-2xl" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>

            <!-- Hamburger Icon -->
            <div class="md:hidden">
                <button id="nav-toggle" class="text-white focus:outline-none relative z-50">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Navigation Menu -->
            <nav id="nav-menu" class="hidden absolute p-6 bg-gray-800 w-full md:w-auto md:bg-transparent md:relative md:flex md:items-center md:space-x-6">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'md:flex md:space-x-6')); ?>
            </nav>

            <a href="#" class="hidden md:block bg-blue-500 text-white py-2 px-4 rounded">Sign up</a>
        </div>
    </header>