<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package shopbiz
 */
get_header(); ?>
<!--==================== ti breadcrumb section ====================-->
<?php get_template_part('index','banner'); ?>
<!--==================== main content section ====================-->
<main id="content">
  <div class="container">
    <div class="row">


<?php 
  $slider_overlay = get_theme_mod('shopbiz_overlay_slider_color_control','');
  
  $shopbiz_slider_enable = get_theme_mod('shopbiz_slider_enable');
  $slider_post_one = array(get_theme_mod('slider_post_one'));
  $slider_post_two = array(get_theme_mod('slider_post_two'));
  $slider_post_three = array(get_theme_mod('slider_post_three'));
  if($shopbiz_slider_enable){
  ?>
<!--==================== ta-SLIDER ====================-->
<section class="ta-slider-warraper">
  <div id="ta-slider" class="owl-carousel">
	<!--Slider-one-->
	<?php
	if($slider_post_one){ ?>
	<?php
			$slider_query = new WP_Query( array( 'post__in' => $slider_post_one, 'ignore_sticky_posts' => true));
            if( $slider_query->have_posts() ){                
                while( $slider_query->have_posts() ){
                    $slider_query->the_post();		
     ?>
	<div class="item">
      <figure> 
	  <?php if( has_post_thumbnail() ){ the_post_thumbnail( 'img-responsive' ); } ?></figure>
      <div class="ta-slider-inner" style="background:<?php echo esc_html($slider_overlay);?>">
        <div class="container inner-table">
          <div class="inner-table-cell">
            <div class="slide-caption">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="description">
               <?php the_content(); ?>
              </div>
			</div>
          </div>
        </div>
      </div>
    </div>
	<?php } } }?>
	<!--- Slider Two -->
	<?php
	if($slider_post_two){ ?>
	<?php
			$slider_query = new WP_Query( array( 'post__in' => $slider_post_two, 'ignore_sticky_posts' => true));
            if( $slider_query->have_posts() ){                
                while( $slider_query->have_posts() ){
                    $slider_query->the_post();		
     ?>
	<div class="item">
      <figure> 
	  <?php if( has_post_thumbnail() ){ the_post_thumbnail( 'img-responsive' ); } ?></figure>
      <div class="ta-slider-inner" style="background:<?php echo esc_html($slider_overlay);?>">
        <div class="container inner-table">
          <div class="inner-table-cell">
            <div class="slide-caption">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="description">
                <?php the_content(); ?>
              </div>
			</div>
          </div>
        </div>
      </div>
    </div>
	<?php } } }?>
	
	<!-- Slider Three -->
	<?php
	if($slider_post_three){ ?>
	<?php
			$slider_query = new WP_Query( array( 'post__in' => $slider_post_three, 'ignore_sticky_posts' => true));
            if( $slider_query->have_posts() ){                
                while( $slider_query->have_posts() ){
                    $slider_query->the_post();		
     ?>
	<div class="item">
      <figure> 
	  <?php if( has_post_thumbnail() ){ the_post_thumbnail( 'img-responsive' ); } ?></figure>
      <div class="ta-slider-inner" style="background:<?php echo esc_html($slider_overlay);?>">
        <div class="container inner-table">
          <div class="inner-table-cell">
            <div class="slide-caption">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="description">
                <?php the_content(); ?>
              </div>
			</div>
          </div>
        </div>
      </div>
    </div>
	<?php } } }?>
  </div>
</section>
<div class="clearfix"></div>
<?php } ?>

<?php 
$shopbiz_service_enable = get_theme_mod('shopbiz_service_enable');
if($shopbiz_service_enable){
?>
<!--==================== SERVICE SECTION ====================-->
<section id="service" class="ta-section text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInDown animated padding-bottom-50 text-center">
        <div class="ta-heading">
          <?php $shopbiz_service_title = esc_attr(get_theme_mod('shopbiz_service_title'));
					
			if( !empty($shopbiz_service_title) ):

				echo '<h3 class="ta-heading-inner">'.$shopbiz_service_title.'</h3>';

			endif; ?>
        </div>
        <?php $shopbiz_service_subtitle = esc_attr(get_theme_mod('shopbiz_service_subtitle'));

			if( !empty($shopbiz_service_subtitle) ):

				echo '<p>'.$shopbiz_service_subtitle.'</p>';

			endif; ?>
      </div>
    </div>
    <div class="row">
      <?php 
		if(is_active_sidebar( 'shopbiz_service_widget' )):
						
			dynamic_sidebar( 'shopbiz_service_widget' );
		endif;
			 ?>
    </div>
  </div>
</section>
<?php } ?>



      <div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-md-12"; } else { echo "col-md-9 col-sm-8"; } ?>"> 
      <?php while(have_posts()){the_post(); get_template_part('content',''); ?>
      <?php } ?>
      <div class="col-md-12 text-center">
        <?php //Previous / next page navigation
        the_posts_pagination( array(
        'prev_text' => '<i class="fa fa-angle-left"></i>',
        'next_text' => '<i class="fa fa-angle-right"></i>',
		'screen_reader_text' => ' ' ,
        ) ); ?>
      </div>
      </div>
	    <aside class="col-md-3 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</main>
<?php get_footer(); ?>
