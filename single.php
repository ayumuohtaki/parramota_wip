<?php get_header(); ?>
              <div class="page-inner full-width">
                <div class="page-main" id="pg-newsDetail">
                  <div class="main-container">
                    <div class="main-wrapper">
<?php
if (  have_posts() ):
  while ( have_posts() ) : the_post();
    get_template_part( 'content-single' );
  endwhile;
endif;
?>                      
                    </div>
                  </div>
                </div>
              </div>
              
              <a href="https://blogmura.com/ranking/in?p_cid=11065693" target="_blank"><img src="https://b.blogmura.com/original/1246813"  alt="にほんブログ村 にほんブログ村へ" /></a>
              <div class="uniik_logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/uniik_logo.png" alt="PARRAMOTA~30minutes~" /></div>
              
<?php get_footer(); ?>