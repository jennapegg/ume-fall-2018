<article class="game-entry">

 <h3>
   <?php the_title(); ?> 
   </h3>

 <?php the_post_thumbnail( 'thumbnail' ); ?>

    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>

   
</article>