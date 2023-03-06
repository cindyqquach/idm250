<?php get_header(); ?>
<main> 
<!-- <h1> <?php echo get_the_title(); ?> </h1>  -->
<div> <?php echo get_the_excerpt(); ?> </div> 
<div class="pet-info"> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pierogi.png" class="pet-photo" alt="Pierogi the cat">
    <div> 
        <h1 class="pet-name"> PIEROGI </h1> 
        <h2 class="subheading"> FOSTER CARE </h2> 
        <h2  class="subheading"> AGE </h2> 
        <p class="intro-text"> 2 years </p> 
        <h2  class="subheading"> WEIGHT </h2> 
        <p class="intro-text"> 42 lbs </p> 
        <h2  class="subheading"> HOW I CAME TO PAWS </h2>
        <p class="intro-text"> Found stray animal </p> 
    </div> 
</div> 
    <p class="intro-text paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> 
    <h2  class="subheading para-subheading"> SOME FACTS ABOUT THIS PET </h2>
    <ul class="intro-text list paragraph"> 
        <li>- Sed ut perspiciatis unde omnis iste natus error sit voluptatem  </li> 
        <li>- Sed ut perspiciatis unde omnis iste natus error sit voluptatem  </li> 
    </ul>
    </div> 
</div> 
<div> 
<video
      controls
      autoplay
      poster="<?php echo get_template_directory_uri(); ?>/assets/images/pierogi-video.png" class="pet-video" alt="Pierogi the cat">
        <source src="#" type="video/mp4" />
      </video>
</div> 
<div> 
    <div class="gallery"> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pierogi2.png" class="pet-photo" alt="Pierogi the cat"> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pierogi3.png" class="pet-photo" alt="Pierogi the cat"> 
</div> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pierogi4.png" class="pet-photo-full" alt="Pierogi the cat"> 
</div> 
</main> 
<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>