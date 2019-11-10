<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
</head>
<body>
	 <div class="container box">
   <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
   <div class="form-group">
    <select name="country" id="country" class="form-control input-lg dynamic" data-dependent="state">
     <option value="">Select Country</option>
     @foreach($country_list as $country)
     <option value="{{ $country->country}}">{{ $country->country }}</option>
     @endforeach
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="state" id="state" class="form-control input-lg dynamic" data-dependent="city">
     <option value="">Select State</option>
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="city" id="city" class="form-control input-lg">
     <option value="">Select City</option>
    </select>
   </div>
   {{ csrf_field() }}
   <br />
   <br />
  </div>

</body>

<script>
$(document).ready(function(){

      $('#country').on('change',function(){

            var country  = $(this).val();
            var _token = $('input[name="_token"]').val();
            if(country !=''){
            $.ajax({
              type:"post",
              url:"{{ route('dynamicdependent.fetch') }}",
              data:{country:country,_token:_token},
              
              success:function(data){
                $("#state").empty();
                $("#state").append(data);
  

                  //////// end /////////
              }
            });
          }
          });

            $('#state').on('change',function(){

            var state  = $(this).val();
            var _token = $('input[name="_token"]').val();
            if(state !=''){
            $.ajax({
              type:"post",
              url:'dynamic_dependent/fetchstate',
              data:{state:state,_token:_token},
              
              success:function(data){
                $("#city").empty();
                $("#city").append(data);
  
                  //////// end /////////
              }
            });
          }
          });

 $('#country').change(function(){
  $('#state').val('');
  $('#city').val('');
 });

 $('#state').change(function(){
  $('#city').val('');
 });
 

});
</script>
</html>