@extends('admin/admin')
@section('head')
  <script src="admin/js/jquery.min.js"></script>
  <script src="admin/js/nprogress.js"></script>
 @stop
@section('row tile_count')
  
  @stop
  @section('row x_title')
   Мэдээ  оруулах
   @section('dashboard_graph')
      <form class="form-horizontal form-label-left" action="impsave" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Мэдээний нэр <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="title" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Мэдээ<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="subject" required="required" class=" form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                            <div class="form-group ">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Төрөл<span class="required">*</span>
                             </label> 
                               <div class="col-md-6 col-sm-6 col-xs-8">
                                          <select class="form-control select" style="width: 100%;" name ="slt">
                                                  <?php
                                                  foreach ($imviewdata as  $value) {
                                                    # code...
                                                  ?>  <option > <?php echo $value->tname;?> </option>
                                                 <?php
                                               }
                                                  ?>
                                                       </select>
                                                      </div>
                                         
                                            <div class="col-sm-1 nprice">
                                             <input class="form-control " type="text" name="number">
                                            </div>
                                                
                                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Зураг <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="file"  multiple="true" class="form-control col-md-7 col-xs-12"  name ="file"  type="file">
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-3">
                        	 <input type="submit" class="btn btn-lg btn-danger btn-block "  value="Хадгалах"/>
                        </div>
                          
                        </div>

                      </form>
                  
     @stop
    @stop
    @section('nav-md')
    <script type="text/javascript">
                                    $(document).ready(function(){
                                      $("select.select").change(function(){
                                        var selectedC  =  $(".select option:selected").val();
                                      $.get('getreg?tid='+selectedC,function(data){
                                          $(".nprice").empty();
                                          $.each(data,function(i,sub){
                                            $(".nprice").append('<input class="form-control"  type="text" name="number" value="' + sub.id +'">')
                                          })
                                        })
                                                          });
                                         });
                                      
                                    </script>
     @stop
