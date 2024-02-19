<?php
/**
* Template Name: About Us
*/
get_header();
	if(have_posts()) :
		while (have_posts()) : the_post();
?>
	<?php if( has_post_thumbnail() ) {
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	?>
	<section class="innerheader w-100" style="background-image: url('<?php echo $image[0]; ?>');"></section>
	<?php } else { ?>
	<section class="innerheader w-100" style="background-image: url('https://projects.flyonit.com/homeodynamic/wp-content/uploads/2023/01/Inner-banner01.jpg');"></section>
	<?php } ?>
	
	<!--#Inner-header End-->
	<!--#Main Body Start-->
<!-- 	<section class="contact w-100">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-heading"><?php //the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section> -->
	<section class="about-outer-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="inner-content">
						<h1 class="page-heading abt-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php 
		endwhile;
	endif;
?>

<!--#Our Team and Partners Start-->
    <section class="team w-100">
        <div class="container">
        	<div class="row">
                <div class="col-sm-12">
                    <h1 class="page-heading text-center team-title"><?php the_field('team_title'); ?></h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <?php
                    /**
                     * Displaying Team Members
                     * from Custom Team Post Type
                     */ 

                    $args = array(
                        'post_type'         =>  'team',
                        'posts_per_page'    => -1,
                        'order'             => 'ASC',
                        'orderby'           => 'menu_order',
                    );

                    $query = new WP_Query($args);

                    if($query->have_posts()):
                        while($query->have_posts()) : $query->the_post();

                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member doctor">
                        <div class="team-image">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Team">
                        </div>
                        <h4><?php the_title(); ?></h4>
                        <div class="team-content">
                        	<div class="exprt-content" id="expr-con<?php echo the_ID(); ?>" style="display: block;">
                        		<p><?php echo substr(get_the_excerpt(), 0, 60); ?>...</p>
                        	</div>
                        	<div class="full-content" id="full-con<?php echo the_ID(); ?>" style="display: none;">
                        		<?php the_content(); ?>
                        	</div>
                        	<button class="team-read-btn" onclick="toggleText(this.id)" id="<?php the_ID(); ?>">Read More</button>
                        </div>
                    </div>
                </div>
                    <?php 

                            endwhile;
                        endif;    
                    ?>
            </div>
        </div>
    </section>
    <!--#Our Team and Partners End-->

<?php

get_footer(); 

?>