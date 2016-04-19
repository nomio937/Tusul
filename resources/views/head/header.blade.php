@extends('app')
@section('bxslider')
       <div class="slide"><a target="_blank" href="news.php?m=6&n=1"><img src="images/17c23b4134eddb4a9142280d6d5e4119.jpg" title="Монголын байт харваа" /></a></div>
                                        <div class="slide"><a target="_blank" href="news.php?m=7&n=2"><img src="images/87cc4defa2e574d83e4ff2a4605a8566.png" title="ЕРӨНХИЙЛӨГЧИЙН МЭНДЧИЛГЭЭ" /></a></div>
  @stop
@section('content')
@foreach ($resdata as $value)
<div class="col-lg-3">
                <div class="item">
                    <a href="http://www.archery.mn/news.php?n=41">
                        <div class="item-inner">
                      
                            <h1><?php echo $value->title;?></h1>
                            <p> <?php echo $value->subject; ?></p>
                             </div>
                        <div class="item-inner-img">
                            <img src="upload/<?php echo $value->image;?>" alt="" width="100%"/>
                        </div>
                    </a>
                </div>
            </div>
@endforeach

 @stop
 @section('htfoot')
        <h2>Хамтрагч байгууллагууд</h2>
    <div class="col-lg-12">
    <div class="well">
            <div id="myCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/0cafac4f25a313dbfa28b406e7ce4f79.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/has.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/de3bd631472c0a373e94a336c7388aa0.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3 khan"><a href="#x"><img src="images/khan.png" alt="Image" class="img-responsive"></a>
                            </div>
                         
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                              <div class="col-sm-3"><a href="#x"><img src="images/0cafac4f25a313dbfa28b406e7ce4f79.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/has.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/de3bd631472c0a373e94a336c7388aa0.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3 khan"><a href="#x"><img src="images/khan.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                </div>
            </div>
            <!--/myCarousel-->
        </div>
    </div>
  @stop