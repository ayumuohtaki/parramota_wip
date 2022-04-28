<?php get_header(); ?>
            <div class="page-main">
                <div class="lead-inner">
                    <p class="contact-maessage">
                        「ご質問」、「ご相談など」、ポジティブかつ<br>
                        幅広い声をお待ちしております。
                    </p>
<?php
if( have_posts() ):
    while( have_posts() ):the_post();
        the_content();
    endwhile;
endif;
?>
                </div>
            </div>
<?php get_footer(); ?>