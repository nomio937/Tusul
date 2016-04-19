@extends('loginhead')
@section('content')
<div class="col-lg-3">
<legend class="top">Нэвтрэх</legend>  
	<div class="row">
      <form   action="{{URL::route('sign-post')}}" method="post">
                           <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="icon-user"></i>  </span>
                                            <input type="text" class="form-control"  name ="username"  id ="username" placeholder="и-мэйл  хаяг" >
                                        </div>
                                <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="icon-lock "></i></span>
                                    <input class="form-control" placeholder="Нууц үг" name="password" id="password" type="password" value="" >
                                </div>
                            
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-danger btn-block "  value="Нэвтрэх"/>
                             <h4><a href="register"><p class="text-center">Бүртгүүлэх</p></a> </h4>
                               </form>
	</div>
</div>
<div class="col-lg-9">
<legend class="top">Мэдээ</legend>  
@foreach($rdata  as  $v)
<div class="col-lg-4">
                <div class="item">
                    <a href="http://www.archery.mn/news.php?n=41">
                        <div class="item-inner">  
                            <h1> {{$v->title}}</h1>
                            <p>{{$v->subject}}</p>
                            <small class="btn btn-primary">{{$v->tname}}</small>
                            </div>
                             <div class="item-inner-img">
                            <img src="upload/<?php echo $v->image;?>" alt="" width="100%"/>
                               </div>
                              </a>
                             </div>
                          </div>
     @endforeach 
 </div>
 <div class="col-md-12 col-sm-12 col-xs-12 text-center"> <?php echo $rdata->render();?></div>
  @stop