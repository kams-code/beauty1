@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Gallery</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Components</a></li>
                                    <li class="active">Gallery</li>
                                </ol>
                            </div>
                        </div>

                        <!-- SECTION FILTER
                        ================================================== -->  
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="portfolioFilter">
                                    <a href="#" data-filter="*" class="current">toutes les categories</a>
                                    <a href="#" data-filter=".webdesign">Web Design</a>
                                    <a href="#" data-filter=".graphicdesign">Graphic Design</a>
                                    <a href="#" data-filter=".illustrator">Illustrator</a>
                                    <a href="#" data-filter=".photography">Photography</a>
                                </div>
                            </div>
                        </div>

                        <div class="port">
                            <div class="portfolioContainer row">
                                @foreach($services as $service)
                                <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
                                            <img src="assets/images/gallery/1.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                    </div>
                                </div>
                                @endforeach

                                


                              

                                <div class="col-sm-6 col-lg-3 col-md-4 webdesign photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/6.jpg" class="image-popup" title="Screenshot-6">
                                            <img src="assets/images/gallery/6.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 illustrator photography graphicdesign">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/7.jpg" class="image-popup" title="Screenshot-7">
                                            <img src="assets/images/gallery/7.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 graphicdesign photography webdesign">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/8.jpg" class="image-popup" title="Screenshot-8">
                                            <img src="assets/images/gallery/8.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/9.jpg" class="image-popup" title="Screenshot-9">
                                            <img src="assets/images/gallery/9.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 photography graphicdesign">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/10.jpg" class="image-popup" title="Screenshot-10">
                                            <img src="assets/images/gallery/10.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 graphicdesign photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/11.jpg" class="image-popup" title="Screenshot-11">
                                            <img src="assets/images/gallery/11.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 webdesign graphicdesign illustrator">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/12.jpg" class="image-popup" title="Screenshot-12">
                                            <img src="assets/images/gallery/12.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                    </div>
                                </div>
                                
                                

                            </div>
                        </div> <!-- End row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>