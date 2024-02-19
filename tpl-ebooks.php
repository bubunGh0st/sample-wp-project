<?php
/**
 * Template Name: eBooks
 * */

get_header();

	if(have_posts()):
		while(have_posts()) : the_post();

?>

<!--#Inner-header Start-->
<?php if( has_post_thumbnail() ) {
	$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
<section class="innerheader w-100" style="background-image: url('<?php echo $image[0]; ?>');"></section>
<?php } else { ?>
<section class="innerheader w-100" style="background-image: url('https://projects.flyonit.com/homeodynamic/wp-content/uploads/2023/01/Inner-banner01.jpg');"></section>
<?php } ?>
<!--#Inner-header End-->
<!--#Our ebooks Start-->
<section class="team w-100">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="page-heading text-center"><?php the_title(); ?></h1>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="inner-content text-center">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
                /**
                 * Displaying ebooks
                 * from Custom Team Post Type
                 */ 

                $args = array(
                    'post_type'         =>  'our-ebooks',
                    'posts_per_page'    => -1,
                    'order'             => 'ASC',
                    'orderby'           => 'menu_order',
                    'paged' 			=> $paged,
                );

                $query = new WP_Query($args);

                if($query->have_posts()):
                    while($query->have_posts()) : $query->the_post();

            ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="team-member ebooks-box">
					<div class="team-image">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="ebooks">
					</div>
					<h4><?php the_title(); ?></h4>
					<!-- <div class="team-content">
						<?php //echo substr(get_the_content(), 0, 60); ?>
					</div> -->
					<div class="vision-content text-center">
						<a href="<?php the_permalink() ?>" class="btn booknow">Downlaod eBook</a>
					</div>
				</div>
			</div>
			<?php

					endwhile;
				endif;

			?>
			<div class="col-lg-12 col-md-12 col-sm-12 mb-4">

				<?php //homeo_blog_pagination(); ?>

			</div>
		</div>
	</div>
</section>
<!--#Our Ebooks End-->
<!--#Our Ebooks Referances Start-->
<section class="bookref w-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="referance-section-heading text-center"><h2 class="sub-heading">Homeopathic Resources</h2></div>
			</div>			
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="ebook-referance">
					<div class="referance-heading"><h4>Homeopathic Repertory</h4></div>
					<div class="referance-links">
						<a href="http://www.homeoint.org/english/index.htm">Homeopathic Repertory</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="ebook-referance">
					<div class="referance-heading"><h4>Homeopathic Materia Medica</h4></div>
					<div class="referance-links">
						<a href="https://www.vithoulkas.com/learning-tools/online-materia-medica/materia-medica-by-Allen">Materia Medica by Allen</a><br/>
						<a href="https://www.vithoulkas.com/learning-tools/online-materia-medica">Materia Medica</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="ebook-referance">
					<div class="referance-heading"><h4>Homeopathic Organon and Philosophy</h4></div>
					<div class="referance-links">
						<a href="https://homeopathybooks.in/lectures-on-homoeopathic-philosophy-by-james-tyler-kent/">Homoeopathic Philosophy by James Tyler Kent</a><br/>
						<a href="https://homeopathybooks.in/organon-and-philosophy-books/">Homeopathy Philosophy Books</a><br/>
						<a href="https://homeopathybooks.in/">Homeopathy Books Online</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--#Our Ebooks Referances Start-->

<?php

		endwhile;
	endif;

get_footer();