@extends('loginhead')
@section('heads')
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="dist/css/animate.min.css" rel="stylesheet">
  <!-- Custom styling plus plugins -->
  <link href="dist/css/custom.css" rel="stylesheet">
  <link href="dist/css/green.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  @stop
  @section('container')
  @section('content')
   
      <!-- page content -->
      <div class="right_col">

        <div class="">
         
          <div class="row">

            <div class="col-md-12 col-sm-3 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Мэдээлэл <small>  Бүртгүүлэх</small></h2>
                
                  <div class="clearfix"></div>
                </div>
                <form>
                    <div class="form-group ">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><span class="required"></span>
                             </label> 
                               <div class="col-md-6 col-sm-6 col-xs-8">
                                          <select class="form-control select" style="width: 100%;" name ="slt">
                             <option >[Сонгох]</option>
                            <option >Дасгалжуулагч</option>
                            <option >Тамирчин</option>
                          </select>
                        </div>
                        </div>
                       </form>
            </div>
            </div>
          </div>
        </div>
      </div>
   @stop
    @stop

  @section('b')
  <script src="dist/js/bootstrap.min.js"></script>
  <script src="dist/js/custom.js"></script>
  <!-- form wizard -->
  <script type="text/javascript" src="dist/js/wizard/jquery.smartWizard.js"></script>
  <!-- pace -->
  <script src="js/nprogress.js"></script>
  <script src="js/jquery.min"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('select.select').change(function(){
        var  v  = $('.select option:selected').val();
        if (v=="Дасгалжуулагч") {
          window.open("daslsignup","_self");
        }
        if (v=="Тамирчин") {
window.open("tamir_regis","_self");
        }
      })
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      // Smart Wizard
      $('#wizard').smartWizard();
    });

    $(document).ready(function() {
      // Smart Wizard
      $('#wizard_verticle').smartWizard({
        transitionEffect: 'slide'
      });

    });
  </script>
@stop
