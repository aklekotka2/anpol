<?php
/*

	Template Name: Kontakt

*/
?>

<?php get_header(); ?>
<?php the_post(); ?>
    <section  class="slider">
        <ul id="slide-list">
          <li style="background-image: url('<?php echo ANPOL_THEME_URL; ?>img/4b.jpg') no-repeat; ">
            <a href="#slide1">
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
				<div class="form-container">
					<?php the_content(); ?>
					<!--<form name="myForm">
						<label for="pole">Imię i nazwisko</label>
						<input type="text"  id="pole"/>
						<label for="pole1">Adres e-mail</label>
						<input type="email"  id="pole1"/>
						<label for="pole3">Pytanie</label>
						<textarea id="pole3" rows="5" cols="60">Pytanie</textarea>
						<button>wyślij</button>
					</form>	-->
				</div>
			</div>
			<div class="sidebar">
				<?php get_sidebar();?>
			</div>
		</div>
    </section>




<?php get_footer(); ?>