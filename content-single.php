  
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
                          <div class="link">
                            <a href="https://blogmura.com/ranking/in?p_cid=11065693" target="_blank" class="blogmura"><img src="https://b.blogmura.com/logo-blogmura-circle.svg" width="40" height="40" border="0" alt="ブログランキング・にほんブログ村へ" /></a>
                            <a href="https://m.uniik.me/user/207488684960817850?utm_source=Uniik&utm_medium=more&utm_campaign=207488684960817850" class="uniik"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/uniik_logo.jpg" alt="PARRAMOTA~30minutes~"></a>
                            <a href="https://www.instagram.com/parramota.30minutes/" class="instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/instagram.jpg" alt="insta"></a>
                          </div>
                          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5083323348437783"
     crossorigin="anonymous"></script>
<!-- test -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5083323348437783"
     data-ad-slot="6715592131"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                      </div>