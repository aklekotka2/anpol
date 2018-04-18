<?php get_header();>
<?php the_post(); ?>
	<section  class="slider">
        <ul id="slide-list">
          <li style="background-image: url('<?php echo ANPOL_THEME_URL; ?>img/1a.jpg') no-repeat; ">
            <a href="#slide1">
              <img src="<?php echo ANPOL_THEME_URL; ?>img/1a.jpg" alt=<?php echo ($lang=="pl"?"Obsługa rachunkowo-ksiegowa":'nie'); ?>>
            </a>
          </li>
          <li style="background: url('<?php echo ANPOL_THEME_URL; ?>img/2a.jpg') no-repeat; background-size: cover;">

            <a href="#slide2">
              <img src="<?php echo ANPOL_THEME_URL; ?>img/2a.jpg"  alt="Obsługa kadrowo-placowa">
            </a>
          </li>
           <li style="background: url('<?php echo ANPOL_THEME_URL; ?>img/3a.jpg') no-repeat; background-size: cover;">

            <a href="#slide3">
              <img src="<?php echo ANPOL_THEME_URL; ?>img/3a.jpg" alt="Rozliczenia projektów unijnych">
            </a>
          </li>
          <!--<li style="background: url('img/4.jpg') no-repeat; background-size: cover;">
            <a href="#slide4">
              <img src="img/4.jpg" alt="And this is some very long caption for slide 4.">
            </a>
          </li>-->
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
				<!--<div class="info">
					<p>Biuro Rachunkowe "ANPOL"<br/> Kancelaria Podatkowa Anna Olszewska</p> 
					<p>ul. Przylaszczkowa 14c<br />04-994 Warszawa</p> 
					<p><i class="demo-icon icon-phone"></i> 22 810 15 01<br /><i class="demo-icon icon-fax"></i>  22 810 13 55</p><p><i class="demo-icon icon-mail-alt"></i>biuro@anpol.pl</p> 
				</div>			
				<div class="links">
					<h3>LINKI DLA PODATNIKA:</h3>
					<p>Zakład Ubezpieczeń Społecznych </p> 
					<p>Główny Urząd Statystyczny </p> 				
				</div>-->
				<?php get_sidebar();?>
			</div>
		</div>
    </section>

<?php get_footer(); ?>


