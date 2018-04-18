<?php get_header(); ?>
<?php the_post(); ?>
    <section  class="slider">
        <ul id="slide-list">
          <li style="background-image: url('<?php echo ANPOL_THEME_URL; ?>img/4b.jpg') no-repeat; ">
            <a href="#slide4">
              <img src="<?php echo ANPOL_THEME_URL; ?>img/4b.jpg" 			  
			  	<?php if(get_bloginfo('language')=='pl-PL'):?>
					alt="Spokój i bezpieczeństwo finansowo-ksiegowe"
				<?php else: ?>
					alt="Calmness and financial and accounting security"
				<?php endif; ?>				  
			  >
            </a>
          </li>
        </ul>
    </section>
    <section class="content-wrapper">
        <header>
            <h2><?php the_title(); ?></h2>
        </header>
		<div class="pos-center">

			<div class="content">
				<?php the_content(); ?>
			</div>
			<div class="sidebar">
				<?php get_sidebar();?>
			</div>
		</div>
    </section>

<?php get_footer(); ?>


