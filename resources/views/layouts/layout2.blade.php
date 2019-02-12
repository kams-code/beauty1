<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8" />
  <title>QuickBeauty - Responsive Admin Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{asset('images/favicon_1.ico')}}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css" rel="stylesheet">
  <link href="{{ asset('/css/paper.css') }}" rel="stylesheet">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

  <script src="{{ asset('/js/moment.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <meta name="csrf-token" content="<?php echo csrf_token(); ?>">

  <link href="{{asset('plugins/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">

  <link href="{{asset('plugins/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{asset('plugins/magnific-popup/dist/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-datatables-editable/datatables.css')}}">



  <link href="{{asset('plugins/tagsinput/jquery.tagsinput.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/toggles/toggles.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/colorpicker/colorpicker.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('plugins/jquery-multi-select/multi-select.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('plugins/select2/dist/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />

  <link href="plugins/modal-effect/css/component.css" rel="stylesheet">
        
  <!-- Custom Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/core.css" rel="stylesheet" type="text/css">
  <link href="css/icons.css" rel="stylesheet" type="text/css">
  <link href="css/components.css" rel="stylesheet" type="text/css">
  <link href="css/pages.css" rel="stylesheet" type="text/css">
  <link href="css/menu.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">

  <script src="js/modernizr.min.js"></script>


  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('js/modernizr.min.js')}}"></script>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
</head>  
<body>
  <div id="url" style="display: none">{{url('')}}</div>
  <div id="wrapper">
    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog"> 
            
        </div>
    </div><!-- /.modal -->


          
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/detect.js"></script>
<script src="js/fastclick.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.blockUI.js"></script>
<script src="js/waves.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>

<script src="js/jquery.app.js"></script>

<!-- Modal-Effect -->
<script src="plugins/modal-effect/js/classie.js"></script>
<script src="plugins/modal-effect/js/modalEffects.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/detect.js"></script>
  <script src="js/fastclick.js"></script>
  <script src="js/jquery.slimscroll.js"></script>
  <script src="js/jquery.blockUI.js"></script>
  <script src="js/waves.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>

  <script src="js/jquery.app.js"></script>

  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>

  <!-- BEGIN PAGE SCRIPTS -->
  <script src="plugins/moment/moment.js"></script>
  <script src="plugins/fullcalendar/dist/fullcalendar.min.js"></script>

  
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
</html>