<?php 
# Get WordPress default header
get_header();

# Check if we have blogposts in WordPress
if ( have_posts() ) :
    # Here is the beginning of the while-loop (loops through all my blogpost)
    while ( have_posts() ) : the_post() // Access each blogpost element
?>
<!-- the_permalink() function below makes my blogpost title to a link  -->
<h2><a href="<?php the_permalink(); ?>" > <?php the_title(); ?> </a>  </h2>
    <!-- the_title() function will go and get the title for each blogpost -->
    <p><?php the_content(); ?></p>
    <!-- the_content() function will go and get the content f or each blogpost -->
    
    <?php endwhile; # Ending while-loop

else:
# If the if-statement is false then execute the else-statement
    echo "<p>No blogpost(s) were found in WordPress!</p>";

endif;
# Ending if-statement

# Get WordPress default footer
get_footer();
?>
  
 




