<?php 
    include 'common/header.php';
   ?>
<div class="video-background-wrapper">
  <video preload="auto" autoplay class="video-background">
    <source type="video/mp4" src="video/mecovache.mp4" />
  </video>
</div>

<div id="front_tabs">
  <div class="container">
    <div class="tabs_wrapper tabs1_wrapper">
      <div class="tabs tabs1">
        <div class="tabs_tabs tabs1_tabs">

            <ul>
              <li class="active flights"><a href="#tabs-1">Flights</a></li>
              <li class="hotels"><a href="#tabs-2">Hotels</a></li>
              </ul>

        </div>
        <div class="tabs_content tabs1_content">

            <div id="tabs-1">
              <form action="javascript:;" class="form1">
                <div class="row">
                  <div class="col-sm-4 col-md-2">
                    <div class="select1_wrapper">
                      <label>Flying from:</label>
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">City or Airport</option>
                          <option value="2">Alaska</option>
                          <option value="3">Bahamas</option>
                          <option value="4">Bermuda</option>
                          <option value="5">Canada</option>
                          <option value="6">Caribbean</option>
                          <option value="7">Europe</option>
                          <option value="8">Hawaii</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="select1_wrapper">
                      <label>To:</label>
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">City or Airport</option>
                          <option value="2">Alaska</option>
                          <option value="3">Bahamas</option>
                          <option value="4">Bermuda</option>
                          <option value="5">Canada</option>
                          <option value="6">Caribbean</option>
                          <option value="7">Europe</option>
                          <option value="8">Hawaii</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="input1_wrapper">
                      <label>Departing:</label>
                      <div class="input1_inner">
                        <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="input1_wrapper">
                      <label>Returning:</label>
                      <div class="input1_inner">
                        <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-1">
                    <div class="select1_wrapper">
                      <label>Adult:</label>
                      <div class="select1_inner">
                        <select class="select2 select select3" style="width: 100%">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-1">
                    <div class="select1_wrapper">
                      <label>Child:</label>
                      <div class="select1_inner">
                        <select class="select2 select select3" style="width: 100%">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="button1_wrapper">
                      <button type="submit" class="btn-default btn-form1-submit">Search</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div id="tabs-2">
              <form action="javascript:;" class="form1">
                <div class="row">
                  <div class="col-sm-4 col-md-4">
                    <div class="select1_wrapper">
                      <label>City or Hotel Name:</label>
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Enter a destination or hotel name</option>
                          <option value="2">Lorem ipsum dolor sit amet</option>
                          <option value="3">Duis autem vel eum</option>
                          <option value="4">Ut wisi enim ad minim veniam</option>
                          <option value="5">Nam liber tempor cum</option>
                          <option value="6">At vero eos et accusam et</option>
                          <option value="7">Consetetur sadipscing elitr</option>
                          <option value="8">Sed diam nonumy</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="input1_wrapper">
                      <label>Check-In:</label>
                      <div class="input1_inner">
                        <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="input1_wrapper">
                      <label>Check-Out:</label>
                      <div class="input1_inner">
                        <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="select1_wrapper">
                      <label>Adult:</label>
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Room  for  1  adult</option>
                          <option value="2">Room  for  2  adult</option>
                          <option value="3">Room  for  3  adult</option>
                          <option value="4">Room  for  4  adult</option>
                          <option value="5">Room  for  5  adult</option>
                          <option value="6">Room  for  6  adult</option>
                          <option value="7">Room  for  7  adult</option>
                          <option value="8">Room  for  8  adult</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="button1_wrapper">
                      <button type="submit" class="btn-default btn-form1-submit">Search</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
              
                </div>
              </form>
            </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="popular_cruises1">
  <div class="container">

    <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100">POPULAR Tours</h2>

    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>

    <br><br>

    <div id="popular_wrapper" class="animated" data-animation="fadeIn" data-animation-delay="300">
      <div id="popular_inner">
        <div class="">
          <div id="popular">
            <div class="">
              <div class="carousel-box">
                <div class="inner">
                  <div class="carousel main">
                    <ul>
                      <?php
                      $q=$d->select("tbl_package","","");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             $i++;
                      ?>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="images/popular01.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1"><?php echo $package_name; ?> <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span><?php echo $package_name; ?></span> 7 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star2.png" alt="">
                                  </div>
                                  <div class="nums">- 18 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li><?php } ?>
                      <!-- <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="images/popular02.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Mediterranean <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Mediterranean</span> 18 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                  </div>
                                  <div class="nums">- 168 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      --><!--  <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="images/popular03.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Greece <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Greece</span> 6 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star2.png" alt="">
                                  </div>
                                  <div class="nums">- 16 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="images/popular01.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Bahamas <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Bahamas</span> 7 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star2.png" alt="">
                                  </div>
                                  <div class="nums">- 18 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="images/popular02.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Mediterranean <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Mediterranean</span> 18 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                  </div>
                                  <div class="nums">- 168 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="images/popular03.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Greece <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Greece</span> 6 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star1.png" alt="">
                                    <img src="images/star2.png" alt="">
                                  </div>
                                  <div class="nums">- 16 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="popular_pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 -->
<div id="why1">
  <div class="container">

    <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100">WHY WE ARE THE BEST</h2>

    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>

    <br><br>

    <div class="row">
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="200">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="images/why1.png" alt="" class="img1 img-responsive">
                <img src="images/why1_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Amazing Travel</div>
                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="300">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="images/why2.png" alt="" class="img1 img-responsive">
                <img src="images/why2_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Discover</div>
                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="400">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="images/why3.png" alt="" class="img1 img-responsive">
                <img src="images/why3_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Book Your Trip</div>
                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="500">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="images/why4.png" alt="" class="img1 img-responsive">
                <img src="images/why4_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Nice Support</div>
                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- 
<div id="happy1">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-md-push-6">
        <div class="content">
          <div class="txt1 animated" data-animation="fadeIn" data-animation-delay="100">HAPPY CUSTOMERS</div>
          <div class="txt2 animated" data-animation="fadeIn" data-animation-delay="150">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, set amet. </div>
          <div class="txt3 animated" data-animation="fadeIn" data-animation-delay="200">
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh oui-
sod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit dolore magna aliquam erat voutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit..
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euisod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.
            </p>
          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="0">
            <div class="txt">Flights</div>
            <div class="bg">
              <div class="animated-distance" data-num="94" data-duration="1300" data-animation-delay="0"><span></span></div>
            </div>
          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="100">
            <div class="txt">Hotels</div>
            <div class="bg">
              <div class="animated-distance" data-num="87" data-duration="1300" data-animation-delay="100"><span></span></div>
            </div>
          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="200">
            <div class="txt">Cars</div>
            <div class="bg">
              <div class="animated-distance" data-num="48" data-duration="1300" data-animation-delay="200"><span></span></div>
            </div>
          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="txt">Cruises</div>
            <div class="bg">
              <div class="animated-distance" data-num="51" data-duration="1300" data-animation-delay="300"><span></span></div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-md-pull-6 animated" data-animation="fadeInLeft" data-animation-delay="200">
        <img src="images/people.png" alt="" class="img1 img-responsive">
      </div>
    </div>
  </div>
</div>
 -->
<!-- <div id="partners">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="100">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="images/partner1.jpg" alt="" class="img1 img-responsive">
                <img src="images/partner1_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="200">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="images/partner2.jpg" alt="" class="img1 img-responsive">
                <img src="images/partner2_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="300">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="images/partner3.jpg" alt="" class="img1 img-responsive">
                <img src="images/partner3_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="400">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="images/partner4.jpg" alt="" class="img1 img-responsive">
                <img src="images/partner4_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="500">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="images/partner5.jpg" alt="" class="img1 img-responsive">
                <img src="images/partner5_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="600">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="images/partner6.jpg" alt="" class="img1 img-responsive">
                <img src="images/partner6_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

 -->
<?php include'common/footer2.php';?>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>