<?php 

// FAQs Shortcode
function custom_shortcode() {
?>
	<div class="accordion-outer row">
	                <div class="accordion" id="myAccordion">
	
	                    <?php
	                            $args = array(
	                                'post_type'         =>  'our-faqs',
	                                'posts_per_page'    => -1,
	                                'order'             => 'ASC',
	                                'orderby'           => 'menu_order',
	                            );
	
	                            $faqs = get_posts($args);
	                            if(is_array($faqs) && !empty($faqs)):
	
	                                $i=0; foreach($faqs as $faq) {

	                                	if( $i % 2 == 0 ){
	                    ?>
	                    <div class="accordion-item animate__animated animate__fadeInLeft">
	                        <h2 class="accordion-header" id="heading<?php echo $i; ?>">
	                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>"><?php echo $faq->post_title; ?></button>
	                        </h2>
	                        <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
	                            <div class="card-body">
	                                <p><?php echo $faq->post_content; ?></p>
	                            </div>
	                        </div>
	                    </div>
	                    <?php } else{ ?>
	                    <div class="accordion-item animate__animated animate__fadeInRight">
                        <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>"><?php echo $faq->post_title; ?></button>
                        </h2>
                        <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p><?php echo $faq->post_content; ?></p>
                            </div>
                        </div>
                    </div>
	
	                    <?php 
								
								}
	                            $i++; }
	                        endif;
	
	                    ?>
	
	                </div>
	            </div>
<?php 
}
add_shortcode( 'faqs', 'custom_shortcode' );

//Testimonial Shortcode
function testi_shortcode(){
?>


	<div class="row">
		<div class="col-md-12">
			<div class="testimonial-three owl-carousel owl-theme">
				<?php
				/**
				* Displaying Testimonials
				* from Custom Testimonials Post Type
				*/
				$args = array(
				'post_type'         =>  'testimonial',
				'posts_per_page'    => -1,
				'order'             => 'DESC',
				'orderby'           => 'date',
				);
				$query = new WP_Query($args);
				if($query->have_posts()):
				while($query->have_posts()) : $query->the_post();
				$id = get_the_id();
				?>
				<div class="item testimonial-box text-center">
					<div class="single-carousel pt-40 wow">
						<div class="date"><?php echo get_the_date('Y-m-d'); ?></div>
						<div class="rating">
							<?php
							$i = get_field('member_detail_group_star_select');
							for($x = 0; $x < $i; $x++){
							?>
							<span><i class="fa-solid fa-star"></i></span>
							<?php } ?>
						</div>
						<p><?php the_content(); ?></p>
						<div class="author-img-block">
							<div class="author-tablecell-block">
								<!-- <img src="assets/images/testi2img/testi1.jpg" alt="" title=""> -->
								<p><?php the_title(); ?></p>
							</div>
						</div>
					</div>
				</div>
				<?php
				endwhile;
				endif;
				?>
			</div>
		</div>
	</div>

<?php 
}
add_shortcode( 'testimonial', 'testi_shortcode' ); 

//Research And Publications Shortcode
function research_shortcode(){
?>
<?php 

	$id = get_the_id();
	if( have_rows('information', $id) ): while( have_rows('information', $id) ) : the_row();

?>
	<div class="row">
		<?php if( have_rows('info-1', $id) ): while( have_rows('info-1', $id) ) : the_row(); ?>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="research-referance">
				<div class="research-heading"><h4><?php echo get_sub_field('heading'); ?></h4></div>
				<div class="research-links">
					<p><?php echo get_sub_field('description'); ?></p>
					<a href="<?php echo get_sub_field('link'); ?>" target="_blank"><?php echo get_sub_field('link'); ?></a>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
		<?php if( have_rows('info-2', $id) ): while( have_rows('info-2', $id) ) : the_row(); ?>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="research-referance">
				<div class="research-heading"><h4><?php echo get_sub_field('heading'); ?></h4></div>
				<div class="research-links">
					<p><?php echo get_sub_field('description'); ?></p>
					<?php

						$link = get_sub_field('link');
						if( $link ): 
    						$link_url = $link['url'];
    						$link_title = $link['title'];

					?>
					<a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
		<?php if( have_rows('info-3', $id) ): while( have_rows('info-3', $id) ) : the_row(); ?>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="research-referance">
				<div class="research-heading"><h4><?php echo get_sub_field('heading'); ?></h4></div>
				<div class="research-links">
					<p><?php echo get_sub_field('description'); ?></p>
					<?php 

						$link2 = get_sub_field('link2');
						if( $link2 ){
							$link2_url		= $link2['url'];
							$link2_title	= $link2['title'];
						}

					?>
					<a href="<?php echo esc_url( $link2_url ) ?>" title="<?php echo esc_html( $link2_title ) ?>" target="_blank"><?php echo esc_html( $link2_title ) ?></a>
					<a href="<?php echo get_sub_field('link'); ?>" target="_blank"><?php echo get_sub_field('link'); ?></a>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
<?php 
	endwhile;
	endif;
?>

<?php
}
add_shortcode( 'research', 'research_shortcode' );