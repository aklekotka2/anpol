<?php get_header();?>

    <section  class="slider">
        <ul id="slide-list">
          <li style="background-image: url('img/4b.jpg') no-repeat; ">
            <a href="#slide1">
              <img src="img/4b.jpg" alt="spokój i bezpieczeństwo finansowo-ksiegowe">
            </a>
          </li>
        </ul>
    </section>
    <section class="content-wrapper">
        <header>
            <h2>Szukane: </h2>
        </header>
		<div class="pos-center">

			<div class="content">
							
			<?php $query = new WP_Query( 'cat=27,30' ); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="post-container">
				 
					 <!-- Display the Title as a link to the Post's permalink. -->
					 <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

					
					 
					  <div class="entry">
						<?php echo get_the_excerpt(); ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="more">  [...]</a>
					  </div>
															
				</div>
					<?php endwhile; 
					wp_reset_postdata();
					else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
			
				
			</div>
			<div class="sidebar">
				<div class="info">
					<p>Biuro Rachunkowe "ANPOL"<br/> Kancelaria Podatkowa Anna Olszewska</p> 
					<p>ul. Przylaszczkowa 14c<br />04-994 Warszawa</p> 
					<p><i class="demo-icon icon-phone"></i> 22 810 15 01<br /><i class="demo-icon icon-fax"></i>  22 810 13 55</p><p><i class="demo-icon icon-mail-alt"></i>biuro@anpol.pl</p> 
				</div>			
				<div class="links">
					<h3>LINKI DLA PODATNIKA:</h3>
					<p>Zakład Ubezpieczeń Społecznych </p> 
					<p>Główny Urząd Statystyczny </p> 				
				</div>
			</div>
		</div>
    </section>




 <?php get_footer(); ?>