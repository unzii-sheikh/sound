 @extends('layout')
@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>News</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/blog1.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>15</span>
                                <span>June ‘18</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">🎤 Top Artists Making Waves Right Now</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <!-- <p class="post-author">By<a href="#"> Admin</a></p>
                                <p class="tags">in<a href="#"> Events</a></p>
                                <p class="tags"><a href="#">2 Comments</a></p> -->
                            </div>
                            <!-- Post Excerpt -->
                            <p>Music is more than sound; it’s a form of motion that moves the mind. It can transform silence into a story, a heartbeat into a rhythm, and a fleeting feeling into a memory. Every instrument, every voice, is like a brushstroke on the canvas of time, painting moods and moments that linger long after the last note fades.</p>
                        </div>
                    </div>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/blog2.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>15</span>
                                <span>June ‘18</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">🎧 Featured Albums You Can’t Miss</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <!-- <p class="post-author">By<a href="#"> Admin</a></p>
                                <p class="tags">in<a href="#"> Events</a></p>
                                <p class="tags"><a href="#">2 Comments</a></p> -->
                            </div>
                            <!-- Post Excerpt -->
                            <p>music shapes our moods, memories, and experiences. It serves as both a form of personal expression and a shared cultural celebration, constantly evolving with new genres, styles, and technological innovations. Whether enjoyed live, through recordings, or in digital streams, music remains a vital part of human life, inspiring creativity, connection, and joy.</p>
                        </div>
                    </div>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/blog3.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>15</span>
                                <span>June ‘18</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">🎵 Trending Hits of the Week</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <!-- <p class="post-author">By<a href="#"> Admin</a></p>
                                <p class="tags">in<a href="#"> Events</a></p>
                                <p class="tags"><a href="#">2 Comments</a></p> -->
                            </div>
                            <!-- Post Excerpt -->
                            <p>Music is more than sound—it’s a universal language that connects people across cultures and experiences. Whether it’s the pulse of a live show, the emotion of a soulful vocal, or the energy of a festival crowd, music brings moments to life. Every beat tells a story, and every listener finds their own meaning within it.</p>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav> -->
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="blog-sidebar-area">

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Categories</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Album</a></li>
                                    <li><a href="#">Artist</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Genre</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Archive</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">February 2018</a></li>
                                    <li><a href="#">March 2018</a></li>
                                    <li><a href="#">April 2018</a></li>
                                    <li><a href="#">May 2018</a></li>
                                    <li><a href="#">June 2018</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Tags</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="tags">
                                    <li><a href="#">music</a></li>
                                    <li><a href="#">artists</a></li>
                                    <li><a href="#">Albums</a></li>
                                    <li><a href="#">genre</a></li>
                                    <li><a href="#">videos</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <a href="#"><img src="img/bg-img/add.gif" alt=""></a>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <a href="#"><img src="img/bg-img/add2.gif" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <!-- <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12"> -->
                    <!-- Contact Form Area -->
                    <!-- <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ##### Contact Area End ##### -->
     @endsection

   