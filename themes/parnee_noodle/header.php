<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
    <nav class="navbar navbar-expand-sm navbar-light" id="amatic">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#myNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNav">
               <?php 
                $args = array(
                    'menu' => 'Menu',
                    'container' => false,
                );
                wp_nav_menu($args);
               ?>
            </div>
    </nav>
    </div>
</header>