<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">Latest news</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->

<section class="section blog-wrap ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post">
                                <?php
                                //должно находится внутри цикла
                                if( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'medium', array(
                                        'class' => "w-100",
                                    ) );
                                }
                                else {
                                    echo '<img src="'.get_template_directory_uri().'/assets/images/blog/blog-1.jpg" class="w-100" />';
                                }
                                ?>
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase"><?php the_author(); ?></span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span><?php the_time('j F Y') ?></span>
                                    </div>
                                </div>
                                <a href="<?php echo get_the_permalink(); ?>" class="h4 "><?php the_title(); ?></a>
                                <p class="mt-3"><?php the_excerpt(); ?></p>
                                <a href="<?php echo get_the_permalink(); ?>" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                        Записей нет.
                    <?php endif; ?>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="row mt-5 mt-lg-0">
                    <div class="col-lg-12">
                        <div class="sidebar-widget search">
                            <div class="form-group">
                                <input type="text" placeholder="search" class="form-control">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="sidebar-widget about-bar">
                            <h5 class="mb-3">About us</h5>
                            <p>Nostrum ullam porro iusto. Fugit eveniet sapiente nobis nesciunt velit cum fuga doloremque
                                dignissimos asperiores</p>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="sidebar-widget category">
                            <h5 class="mb-3">Category</h5>
                            <ul class="list-styled">
                                <li>Marketing</li>
                                <li>Digiatl</li>
                                <li>SEO</li>
                                <li>Web Design</li>
                                <li>Development</li>
                                <li>video</li>
                                <li>audio</li>
                                <li>slider</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="sidebar-widget tag">
                            <a href="blog.html">web</a>
                            <a href="blog.html">development</a>
                            <a href="blog.html">seo</a>
                            <a href="blog.html">marketing</a>
                            <a href="blog.html">branding</a>
                            <a href="blog.html">web deisgn</a>
                            <a href="blog.html">Tutorial</a>
                            <a href="blog.html">Tips</a>
                            <a href="blog.html">Design trend</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sidebar-widget download">
                            <h5 class="mb-4">Download Files</h5>
                            <a href="#!"> <i class="fa fa-file-pdf"></i>Company Manual</a>
                            <a href="#!"> <i class="fa fa-file-pdf"></i>Company Profile</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
