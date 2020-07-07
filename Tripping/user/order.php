<?php include'common/header.php'; ?>
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
                          <input type="text" class="form-control" id="inputName" name="username" value="Full Name" onBlur="if(this.value=='') this.value='Full Name'" onFocus="if(this.value =='Full Name' ) this.value=''">
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
                          <input type="text" class="form-control" id="inputMobile" name="mobile" maxlength="10" minlength="10" pattern="[0-9]{10}" onBlur="if(this.value=='') this.value='Website'" onFocus="if(this.value =='' ) this.value=''">
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label for="inputMessage">Your Message</label>
                          <textarea class="form-control" rows="9" id="inputMessage" name="" onBlur="if(this.value=='') this.value='Message'"
                                      onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                      </div>
                    </div>
                  </div> -->

                  <button type="submit" class="btn-default btn-cf-submit3">Send Comment</button>
                </form>
              </div>

            </div>

          </div>
<?php include'common/footer2.php'; ?>