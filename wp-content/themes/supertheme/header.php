<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Title</title>
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