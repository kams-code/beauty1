@section('monjs')
<script type="text/javascript">
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
</script>
@endsection