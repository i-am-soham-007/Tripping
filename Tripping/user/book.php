<?php include 'common/header.php'; ?>
    <div id="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <div class="sidebar-block">
                         <?php 
                         extract($_POST);

                      $q=$d->select("tbl_package","package_id='$package_id'");
 $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             $i++;
         }
                    ?>
                        <form action="Demopayment.php" method="POST">
                            <h3><?php echo $package_name; ?></h3>
                            <span class="similar"></span>

                            <div class="clearfix"></div>
                            <div style="margin-top:10px;"></div>


                            <div class="col-sm-12 no-padding">
                                <div class="input1_wrapper">
                                    <label>Adults</label>
                                    <div class="input2_inner">
                                        <input type="text" class="input" value="">
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Return:</label>
                                    <div class="input2_inner">
                                        <input type="text" class="input" value="Prague">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Check-In:</label>
                                    <div class="input1_inner">
                                        <input type="text" class="input datepicker" value="16/07/2014">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Check-Out:</label>
                                    <div class="input1_inner">
                                        <input type="text" class="input datepicker" value="26/07/2014">
                                    </div>
                                </div>
                            </div> -->
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;font-weight:500;color:#464646;font-size:13px;">Price:</label>
                                    <div class="col-md-6 price-left" style="padding-right:0;padding-left:0;">
                                        <span class="red"><?php echo $package_amount; ?></span>/<span class="blue">Person</span>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;font-weight:500;color:#464646;font-size:13px;">Total Booking:</label>
                                    <div class="col-md-6 price-total-left" style="padding-right:0;padding-left:0;">
                                        <span class="red">$729</span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="clearfix"></div>
                            <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
                            <div class="no-padding margin-top text-center" style="margin-top:30px;">
                                         <button type="submit" name="booking" class="btn btn-default btn-cf-submit3" style="width:100%;">BOOKING NOW</button>
                            </div>
                            <div class="clearfix"></div>

                        </form>

                    </div>

                    <!-- <div class="clearfix"></div>
                    <div class="margin-top"></div>
                    <div class="sm_slider sm_slider1">
                        <a class="sm_slider_prev" href="#"></a>
                        <a class="sm_slider_next" href="#"></a>
                        <div class="">
                            <div class="carousel-box">
                                <div class="inner">
                                    <div class="carousel main">
                                        <ul>
                                            <li>
                                                <div class="sm_slider_inner">
                                                    <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
                                                    <div class="txt2">George Smith</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sm_slider_inner">
                                                    <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
                                                    <div class="txt2">Adam Parker</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 -->
                </div>
                <div class="col-sm-9">
                    <div class="blog_content">


                        <div class="post post-full">
                            <h3 class="hch"><?php echo $package_name; ?></h3>

                            <div class="clearfix"></div>
                            <!-- <p class="address">Na Strzi 32, Prague, 14000, Czech Republic</p> -->
                            <div class="post-header">
                                <div class="post-slide">
                                    <div id="sl1">
                                        <a class="sl1_prev" href="#"></a>
                                        <a class="sl1_next" href="#"></a>
                                        <div class="sl1_pagination"></div>
                                        <div class="carousel-box">
                                            <div class="inner">
                                                <div class="carousel main">
                                                    <ul>
                                                        <li>
                                                            <div class="sl1">
                                                                <div class="sl1_inner">
                                                                    <img src="../images/Packages/<?php echo $package_gallery; ?>" alt="" class="img-responsive">
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-story">
                                <div class="post-story-info margin-top">
                                    <div class="date12">Most Popular Facilities:</div>
                                    <div class="by">
                                        <!-- <span class="option-booking">
                                            <span>Mileage unlimited</span>
                                            <span>/</span>
                                            <span>5 Doors</span>
                                            <span>/</span>
                                            <span>Automatic transimission</span>
                                            <span>/</span>
                                            <span>5 Passengers</span>
                                            <span>/</span>
                                             <span>Air Conditioning</span>
                                        </span> -->
                                    </div>
                                </div>

                                <div class="post-story-body clearfix">
                                   
                                    <h4>Package Description</h4>
                                      <ul>
                                          <li><?php echo $package_description; ?></li>
                                          
                                      </ul>
                                    <p>
                                        Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                                        Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                        Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. </p>
                                    <p>  Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    </p>



                                </div>
                                <div class="post-story-tags clearfix">

                                    
                                    <div class="share_post clearfix">
                                        <div class="txt1">Share Post:</div>
                                        <div class="social4_wrapper">
                                            <ul class="social4 clearfix">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
<!-- 
                        <div class="num-comments">3 Comments</div>

                        <div class="comment-block clearfix">
                            <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/user1.jpg" alt="" class="img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="top clearfix">
                                    <div class="txt1">By <a href="#">George Smith</a></div><span>|</span>
                                    <div class="txt2">Date: 06 March, 2016</div><span>|</span>
                                    <div class="txt3"><a href="#">Reply</a></div>
                                </div>
                                <div class="txt">
                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                </div>
                            </div>
                        </div>

                        <div class="comment-block left1 clearfix">
                            <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/user2.jpg" alt="" class="img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="top clearfix">
                                    <div class="txt1">By <a href="#">Admin</a></div><span>|</span>
                                    <div class="txt2">Date: 06 March, 2016</div><span>|</span>
                                    <div class="txt3"><a href="#">Reply</a></div>
                                </div>
                                <div class="txt">
                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                </div>
                            </div>
                        </div>

                        <div class="comment-block clearfix">
                            <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/user3.jpg" alt="" class="img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="top clearfix">
                                    <div class="txt1">By <a href="#">George Smith</a></div><span>|</span>
                                    <div class="txt2">Date: 06 March, 2016</div><span>|</span>
                                    <div class="txt3"><a href="#">Reply</a></div>
                                </div>
                                <div class="txt">
                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                </div>
                            </div>
                        </div>
 -->


                        <div class="live-comment">
                            <div class="live-comment-title">Leave a Comment</div>
                            <div class="live-comment-form">

                                <div id="note3"></div>
                                <div id="fields3">
                                    <form id="ajax-contact-form3" class="form-horizontal" action="javascript:;">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="inputName">Your Name</label>
                                                    <input type="text" class="form-control" id="inputName" name="name" value="Full Name" onBlur="if(this.value=='') this.value='Full Name'" onFocus="if(this.value =='Full Name' ) this.value=''">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="inputEmail">Email</label>
                                                    <input type="text" class="form-control" id="inputEmail" name="email" value="E-mail address" onBlur="if(this.value=='') this.value='E-mail address'" onFocus="if(this.value =='E-mail address' ) this.value=''">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="inputEmail">Website</label>
                                                    <input type="text" class="form-control" id="inputEmail" name="email" value="Website" onBlur="if(this.value=='') this.value='Website'" onFocus="if(this.value =='Website' ) this.value=''">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputMessage">Your Message</label>
                          <textarea class="form-control" rows="9" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message'"
                                    onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn-default btn-cf-submit3">Send Comment</button>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


   <?php include 'common/footer2.php';?>