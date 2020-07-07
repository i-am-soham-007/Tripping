<?php include 'common/header.php'; ?>

<div id="google_map2_wrapper"><div id="google_map2"></div></div>

<div class="breadcrumbs1_wrapper">
  <div class="container">
    <div class="breadcrumbs1"><a href="index.php">Home</a><span>/</span>Travel List</div>
  </div>
</div>


<div class="row">
                <div class="col-sm-3">

                 

                  <ul class="ul3">
                    <li><a href="#">Star Raiting</a></li>
                    <li><a href="#">Price Range</a></li>
                    <li><a href="#">Departure Ports</a></li>
                    <li><a href="#">Trip Duration</a></li>
                    <li><a href="#">Ships</a></li>
                  </ul>

                  <div class="star_rating_wrapper">
                    <div class="title">Star Raiting</div>
                    <div class="content">
                      <div class="star_rating">
                        <form>
                          <div>
                            <input id="checkbox-1" class="checkbox1-custom" name="checkbox-1" type="checkbox" checked>
                            <label for="checkbox-1" class="checkbox1-custom-label"><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><span>5 Stars</span></label>
                          </div>
                          <div>
                            <input id="checkbox-2" class="checkbox1-custom" name="checkbox-2" type="checkbox">
                            <label for="checkbox-2" class="checkbox1-custom-label"><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><span>4 Stars</span></label>
                          </div>
                          <div>
                            <input id="checkbox-3" class="checkbox1-custom" name="checkbox-3" type="checkbox" checked>
                            <label for="checkbox-3" class="checkbox1-custom-label"><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><span>3 Stars</span></label>
                          </div>
                          <div>
                            <input id="checkbox-4" class="checkbox1-custom" name="checkbox-4" type="checkbox">
                            <label for="checkbox-4" class="checkbox1-custom-label"><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><span>2 Stars</span></label>
                          </div>
                          <div>
                            <input id="checkbox-5" class="checkbox1-custom" name="checkbox-5" type="checkbox">
                            <label for="checkbox-5" class="checkbox1-custom-label"><img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><img src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png" alt=""><span>1 Stars</span></label>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>

                  
                </div>
                <div class="col-sm-9">

                  <form action="javascript:;" class="form3 clearfix">
                    <div class="select1_wrapper txt">
                      <label>Sort by:</label>
                    </div>
                    <div class="select1_wrapper sel">
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Name</option>
                          <option value="2">Name2</option>
                          <option value="2">Name3</option>
                        </select>
                      </div>
                    </div>
                    <div class="select1_wrapper sel">
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Price</option>
                          <option value="2">Price2</option>
                          <option value="2">Price3</option>
                        </select>
                      </div>
                    </div>
                    <div class="select1_wrapper sel">
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Raiting</option>
                          <option value="2">Raiting2</option>
                          <option value="2">Raiting3</option>
                        </select>
                      </div>
                    </div>
                    <div class="select1_wrapper sel">
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Popularity</option>
                          <option value="2">Popularity2</option>
                          <option value="2">Popularity3</option>
                        </select>
                      </div>
                    </div>
                    <div class="select1_wrapper buttons">
                      <a href="#" class="btn-default s1"></a>
                      <a href="#" class="btn-default s2"></a>
                      <a href="#" class="btn-default s3"></a>
                    </div>
                  </form>

                  <div class="row">
                     <?php 
            $q=$d->select("tbl_agency","","");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
                $i++;
             ?>

                    <div class="col-sm-4">
                      <div class="thumb6">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="../images/Agency/<?php echo $agency_logo; ?>" height="150" alt="" class="img-responsive">
                            <div class="over">
                              <div class="v1"><?php echo $agency_name; ?></div>
                              <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                            </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1"><?php echo $agency_name; ?></div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">$729.00</div>
                                <div class="nums">per/Day</div>
                              </div>
                              <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-cruise.html" class="btn-default btn1">Details</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php if($i=='3' || $i=='6' || $i=='9')
                    { 
                      echo "<p class='hl1'>";
                      echo "";
                      echo "</p>";
                    ?>
           <div class="hl1"></div>
         <?php } ?>       
<?php } ?>
                 </div> 
                

                  <div class="pager_wrapper">
                    <ul class="pager clearfix">
                      <li class="prev"><a href="#">Previous</a></li>
                      <li class="li"><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li class="li"><a href="#">3</a></li>
                      <li class="li"><a href="#">4</a></li>
                      <li class="li"><a href="#">5</a></li>
                      <li class="li"><a href="#">6</a></li>
                      <li class="li"><a href="#">7</a></li>
                      <li class="li"><a href="#">8</a></li>
                      <li class="li"><a href="#">9</a></li>
                      <li class="li"><a href="#">10</a></li>
                      <li class="next"><a href="#">Next</a></li>
                    </ul>
                  </div>


                </div>
              </div>
            </div>

        </div>
      </div>
    </div>








  </div>
</div>

<?php include 'common/footer2.php'; ?>