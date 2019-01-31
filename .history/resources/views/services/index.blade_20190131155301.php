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
                                            <img  src="{{asset('images/'.$service->image)}}" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>
                                            <ul>
                                              <li> {{ $service->nom }}</li>
                                              <li> {{service->description}}</li>
                                              </

                                            </ul> 
                                        </h4>
                                    </div>
                                </div>
                                @endforeach

                                


                                
                                

                            </div>
                        </div> <!-- End row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>