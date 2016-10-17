<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Title</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php wp_head(); ?>
</head>
<body>
<header>
   <div class="header-container">
      <?php
         wp_nav_menu('header-menu');
      ?>
   </div>
</header>