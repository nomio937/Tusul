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
                <div class="x_content">
                  <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps">
                      <li>
                        <a href="#step-1">
                          <span class="step_no">1</span>
                          <span class="step_descr">
                                            Алхам 1<br />
                                            <small>Хувийн  мэдээлэл</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-2">
                          <span class="step_no">2</span>
                          <span class="step_descr">
                                            Алхам 2<br />
                                            <small>Ур чадвар</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-3">
                          <span class="step_no">3</span>
                          <span class="step_descr">
                                            Алхам 3<br />
                                            <small>Нууц үг</small>
                                        </span>
                        </a>
                      </li>
                    </ul>
                    <div class="col-md-3"></div>
                    <div class="col-md-8"> <div id="step-1">
                      <form class="form-horizontal form-label-left" action="{{URL::route('regis-post')}}" method="post">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Овог <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name"   required="required" name ="name" class="firstname form-control col-md-7 col-xs-12 ">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label col-md-3 col-sm-3 col-xs-12"  name ="lname" for="last-name">Нэр <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="lname" required="required" class="lastname form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Төрсөн огноо <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="birthday" class=" dates date-picker form-control col-md-7 col-xs-12" required="required" name ="date" type="text">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Хүйс</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="male"> &nbsp; Эрэгтэй &nbsp;
                              </label>
                              <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="female" checked=""> Эмэгтэй
                              </label>
                            </div>
                          </div>
                        </div>
                       
                  <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Хаяг <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="address" required="required" class="address form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Утас <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="phone" required="required" class="phone form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">И-мэйл хаяг <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="email" name="email" required="required" class="email form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                      </form>

                    </div>
                    <div id="step-2">
                       <form class="form-horizontal form-label-left">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Клуб нэр <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Төрөл<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Чадвар <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Хугацаа<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" placeholder="Хичээллэсэн  хугацаа" required="required" type="text">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div id="step-3">
              <form class="form-horizontal form-label-left">
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Нэвтрэх нэр <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="loginname" required="required" class=" loginname form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Нууц үг<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="last-name" name="password" required="required" class="password form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Нууц үг <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="birthday" class="c_password form-control col-md-7 col-xs-12"  name ="c_password" placeholder="Нууц үг  дахин  оруулна уу" required="required" type="password">
                          </div>
                        </div>
                      </form>
                      <form action="login/login" class="forms"></form>
                    </div>
                  </div>
                </div>
              </div>
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
