<!DOCTYPE html>
<html>
    
<!-- Mirrored from QuickBeauty.coderthemes.com/dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2019 13:26:04 GMT -->
<head>
        <meta charset="utf-8" />
        <title>QuickBeauty - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('images/favicon_1.ico')}}">

        <!--
      calendar css-->
        <link href="{{asset('plugins/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('plugins/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">

 <link rel="stylesheet" href="{{asset('plugins/magnific-popup/dist/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/jquery-datatables-editable/datatables.css')}}">


  

        <!-- Plugins css pour select-->
        <link href="{{asset('plugins/tagsinput/jquery.tagsinput.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/toggles/toggles.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/colorpicker/colorpicker.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/jquery-multi-select/multi-select.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/select2/dist/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />




        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
        <script src="{{asset('js/modernizr.min.js')}}"></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')}}"></script>
        <![endif]-->

        
    </head>

    <style type="text/css">
        .form-horizontal .control-label{
            text-align: left !important;
        }
    </style>
    <body class="fixed-left">
        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog"> 
                
            </div>
        </div><!-- /.modal -->

        <div id="deletemodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="background: red"> 
                <div class="modal-content" style="padding: 0px;border:0px">
                    <div class="modal-header" style="padding: 10px;background: red;border-color: red">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;opacity: 1">×</button>
                        <h4 class="modal-title" style="color: white">Confirmation</h4>
                    </div>
                    <div class="modal-body" style="padding: 30px">
                        <div class="row">
                            <div class="col-md-12" style="text-align: center;">
                                <h4>Voulez-vraiment cet élément?</h4>
                            </div>
                            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                                <button class="btn btn-danger" id="boutondelete">Supprimer</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!-- /.modal -->
        <!-- Begin page -->
        <div id="wrapper">
        


          
            <!-- Top Bar Start -->
            @yield('topbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            
            <!-- Left Sidebar End --> 
           
@yield('sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
      

            <!-- ============================================================== -->                      
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            
   @yield('sidebarright')
          
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/detect.js')}}"></script>
        <script src="{{asset('js/fastclick.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
        
        <script src="{{asset('js/jquery.app.js')}}"></script>
        <!-- pour les select -->
        
        <!-- jQuery  -->
        <script src="{{asset('plugins/moment/moment.js')}}"></script>
        <!-- jQuery  -->
        <script src="{{asset('plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
        <script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>
        <!-- jQuery  -->
        <script src="{{asset('plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
        <!-- flot Chart -->
        <script src="{{asset('plugins/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- jQuery  -->
        <script src="{{asset('plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
        <script src="{{asset('plugins/toggles/toggles.min.js')}}"></script>
        <script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/colorpicker/bootstrap-colorpicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/jquery-multi-select/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/jquery-multi-select/jquery.quicksearch.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>

        <script src="{{asset('pages/jquery.todo.js')}}"></script>
        
        <!-- jQuery  -->
        <script src="{{asset('pages/jquery.chat.js')}}"></script>
        
        <!-- jQuery  -->
        <script src="{{asset('pages/jquery.dashboard.js')}}"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="{{asset('plugins/moment/moment.js')}}"></script>
        <script src="{{asset('plugins/fullcalendar/dist/fullcalendar.min.js')}}"></script>
        <script src="{{asset('pages/jquery.fullcalendar.js')}}"></script>

        <!-- Datatables-->
        <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/buttons.bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/responsive.bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.scroller.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('pages/datatables.init.js')}}"></script>

        <script type="text/javascript" src="{{asset('plugins/isotope/dist/isotope.pkgd.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>

        <script type="text/javascript">

      
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        <!-- pour la galerie-->
        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                }); 
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>


        <script type="text/javascript">
            TableManageButtons.init();
            $(document).on('click','#imgpreview',function(){
                $('#inputimage').trigger('click');
            });
            
            function readURL(input, ids) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  
                  reader.onload = function (e) {
                      $('#'+ids).attr('src', e.target.result);
                      var src = $('#'+ids).attr('src');
                      
                  }
                  
                  reader.readAsDataURL(input.files[0]);
              }
          }
       
          $(document).on('change','#inputimage',function(){
              readURL(this,'imgpreview');
          });
          $(document).on('click','.imgpreviewupdate',function(){
            var id = $(this).attr('data-id');
                $('#inputimage'+id).trigger('click');
            });
          $(document).on('change','.inputimage',function(){
            var id = $(this).attr('data-id');
              readURL(this,'imgpreview'+id);
          });
          $(document).on('click','.btnadd',function(){
                var lien = $(this).attr('data-lien');
                $.ajax({
                  type: "GET",
                  url: lien,
                  data: {},
                  dataType:'text',
                  success: function(data){
                    $('#con-close-modal .modal-dialog').html(data);
                    jQuery(".select2").select2({
                        width: '100%'
                    });
                  },
                });
          });

          $(document).on('click','.btnedit',function(){
              // data-lien est le lien sur le bouton sur la vue index au niveau du boutton
                var lien = $(this).attr('data-lien');
                var id = $(this).attr('data-id');
                $.ajax({
                    //type de retour de la page
                  type: "GET",
                  url: lien,
                  data: {},
                  // type de retour de la function
                  dataType:'text',
                  success: function(data){
                    $('#con-close-modal .modal-dialog').html(data);
                  },
                });
          });

          $(document).on('click','.seedetails',function(){
                var lien = $(this).attr('data-lien');
                var id = $(this).attr('data-id');
                $.ajax({
                  type: "GET",
                  url: lien,
                  data: {'id':id},
                  dataType:'text',
                  success: function(data){
                    $('#con-close-modal .modal-dialog').html(data);
                  },
                });
          });

          $(document).on('click','.btndelete',function(){
                var lien = $(this).attr('data-lien');
                var id = $(this).attr('data-id');
                $('#boutondelete').attr('data-id',id);
                $('#boutondelete').attr('data-lien',lien);
          });
          $(document).on('click','#boutdellAll',function(){
                var start = document.getElementById('tablebody');
                var cbs = start.getElementsByTagName('input');
                var lien ="";
                for(var i=0; i < cbs.length; i++) {
                  if(cbs[i].type == 'checkbox') {
                      if(cbs[i].checked){
                          lien += ',organisations/'+cbs[i].value;
                          alert(',organisations/'+cbs[i].value);
                      }
                  }
                } 
                $('#boutondelete').attr('data-lien',lien.substring(1, lien.length));
          });
          $(document).on('click','#boutondelete',function(){
                var liendd = $(this).attr('data-lien');
                var listelien = liendd.split(',');
                for (var i = 0; i <listelien.length; i++) {
                    var lien = listelien[i];
                    $.ajax({
                      type: "DELETE",
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                      url: lien,
                      data: { _token : $('meta[name="csrf-token"]').attr('content')},
                      dataType:'text',
                      success: function(data){
                            location.reload();
                      },
                    });
                }
                
                setTimeout(function(){ location.reload(); }, 2500);

          });
          function checkAll(bx) {
            var start = document.getElementById('tablebody');
            var cbs = start.getElementsByTagName('input');
            for(var i=0; i < cbs.length; i++) {
              if(cbs[i].type == 'checkbox') {
                cbs[i].checked = bx;
              }
            }
            
            verified();
          }
          function verified(){
            var start = document.getElementById('tablebody');
            var cbs = start.getElementsByTagName('input');
            var count = 0;
            var id_s = '';
            for(var i=0; i < cbs.length; i++) {
              if(cbs[i].type == 'checkbox') {
                  if(cbs[i].checked){
                      count++;
                  }
              }
            } 
            if(count>0){
                $('#boutdellAll').show();
            }
            else {
                $('#boutdellAll').hide();
            }
          }
          $(document).on('click', '.check', function(){
            verified();
          });
          $(document).on('click', '#checkAll', function(){
            checkAll($('#checkAll').is(':checked'));
          });
        </script> 
    </body>

<!-- Mirrored from QuickBeauty.coderthemes.com/dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2019 13:26:43 GMT -->
</html>