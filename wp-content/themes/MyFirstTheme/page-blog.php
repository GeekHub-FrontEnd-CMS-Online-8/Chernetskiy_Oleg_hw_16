<?php get_header(); ?>

<section>
    <div class="blog_container">

        <?php $query = new WP_Query( 'cat=3' ); ?>

        <!-- Работающий пример с выбором к-ства постов на странице -->
        <!--<?php $query = new WP_Query( ['cat'=>3,
            'posts_per_page' => 6
        ] ); ?> -->

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="blog_item">
                <?php the_post_thumbnail( 'full' , 'class=blog_item_photo' ); ?>
                <div class="blog_text-container blog_color1">
                    <div class="text_text_test">
                        <h2 class="blog_text-container_title"><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="blog_text-container_button">
                        <a href="<?php the_permalink(); ?>">read more</a>
                    </div>
                    <div class="blog_text-container_date">
                        <p><i class="far fa-calendar"></i> <?php the_date('d.m.Y'); ?></p>
                        <p><i class="fas fa-comment"></i> 24</p>
                    </div>
                </div>
            </div>

        <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>

        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_1.png">
            <div class="blog_text-container blog_color1">
                <div>
                    <h2 class="blog_text-container_title">Daniel Jackson Shoots
                        New Yorkers for i-D</h2>
                    <p class="blog_text-container_text">Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by Yadim,  Francelle and Hannah Murray,
                        casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 25.08.2014</p>
                    <p><i class="fas fa-comment"></i> 24</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_2.png">
            <div class="blog_text-container blog_color2">
                <div>
                    <h2 class="blog_text-container_title">Derek Henderson Shoots Karen Walker / ITC Ethical
                        Fashion Initiative Visible 2014 Campaignts Karen</h2>
                    <p class="blog_text-container_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit. Suspendisse in diam sit amet erat blandit efficitur at eget lorem. Aenean elementum lobortis tellus, sit amet mollis tortor rhoncus id.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 15.08.2014</p>
                    <p><i class="fas fa-comment"></i> 14</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_3.png">
            <div class="blog_text-container blog_color1">
                <div>
                    <h2 class="blog_text-container_title">Anne & jack</h2>
                    <p class="blog_text-container_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit. Suspendisse in diam sit amet erat blandit efficitur at eget lorem. Aenean elementum lobortis tellus, sit amet mollis tortor rhoncus id.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 13.08.2014</p>
                    <p><i class="fas fa-comment"></i> 44</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_4.png">
            <div class="blog_text-container blog_color2">
                <div>
                    <h2 class="blog_text-container_title">Amy Troost Shoots SS14
                        Collections for The Last
                        Magazine</h2>
                    <p class="blog_text-container_text">Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by Yadim,  Francelle and Hannah Murray,
                        casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 22.08.2014</p>
                    <p><i class="fas fa-comment"></i> 20</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_5.png">
            <div class="blog_text-container blog_color1">
                <div>
                    <h2 class="blog_text-container_title">Paul Wetherell Shoots
                        Meadham Kirchhoff SS14
                        Collection for i-D Walker.</h2>
                    <p class="blog_text-container_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit. Suspendisse in diam sit amet erat blandit efficitur at eget lorem. Aenean elementum lobortis tellus, sit amet mollis tortor rhoncus id.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 29.07.2014</p>
                    <p><i class="fas fa-comment"></i> 102</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_6.png">
            <div class="blog_text-container blog_color2">
                <div>
                    <h2 class="blog_text-container_title">Will Davidson Shoots Jennifer
                        Connelly for The Edit Ethical.</h2>
                    <p class="blog_text-container_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit. Suspendisse in diam sit amet erat blandit efficitur at eget lorem. Aenean elementum lobortis tellus, sit amet mollis tortor rhoncus id.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 15.07.2014</p>
                    <p><i class="fas fa-comment"></i> 44</p>
                </div>
            </div>
        </div>
    </div>
    <?php echo get_the_posts_pagination(); ?>
    <div class="blog_bottom-buttons_box">
        <div class="blog_bottom-buttons_item">
            <a href="#">Prev</a>
        </div>
        <div class="blog_bottom-buttons_items">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">7</a>
            <a href="#">8</a>
            <a href="#">...</a>
            <a href="#">21</a>
        </div>
        <div class="blog_bottom-buttons_item">
            <a href="#">Next</a>
        </div>
    </div>
    <div class="blog_button-to-up">
        <a href="#"><i class="fas fa-angle-up"></i></a>
    </div>
</section>

<?php get_footer(); ?>