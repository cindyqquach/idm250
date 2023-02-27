<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">  
  <title>IDM250</title>
  <?php // https://developer.wordpress.org/reference/functions/wp_head/;?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php 
  wp_body_open();
  get_template_part('components/header')?> 
  <!-- <header>
    <img src="#" alt="logo"> 
    <nav>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Clinical Services</a></li>
        <li><a href="#">Locations</a></li>
        <li><a href="#">Get Involved</a></li>
      </ul>
    </nav>
  </header> -->
