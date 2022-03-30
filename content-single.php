  
                      <div class="news">

                        <!-- <time class="time"><?php the_time( 'Y.m.d' ); ?></time> -->
                        <p class='title'><?php the_title(); ?></p>
                        <div class="news-body"><?php the_content(); ?></div>                        
                      </div>
                      <div class="more-news">
<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
if ( $next_post ):
?>
<
                        <div class="prev">
                          <a class="another-link" href="<?php echo get_permalink( $next_post->ID ); ?>">NEXT</a>
                        </div>
<?php
endif;
if ( $prev_post ):
?>
                        <div class="next">
                          <a class="another-link" href="<?php echo get_permalink( $prev_post->ID );?>">PREV</a>
                        </div>
<?php endif; ?>

<a href="https://blogmura.com/ranking/in?p_cid=11065693" target="_blank" class="blogmura"><img src="https://b.blogmura.com/original/1246813"  alt="にほんブログ村 にほんブログ村へ" /></a>
                            <a href="#" class="uniik"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/u-logo.png" alt="PARRAMOTA~30minutes~"></a>
                            <a href="#" class="instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/instagram.png" alt="PARRAMOTA~30minutes~"></a>
                      </div>