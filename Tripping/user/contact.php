<?php include 'common/header.php'; ?>
<div id="content">
  <div class="container">

    <div class="row">
      <div class="col-sm-6">

        <h3>CONTACT INFO</h3>

        <p>
          
        </p>

        <br>

        <h4>ADDRESS</h4>
        <p>
          <br>
          <a href="#"></a>
        </p>

        <h4>PHONE</h4>

        <p>
          +91 9265243821<br>
    
        </p>

        <div class="social3_wrapper">
          <ul class="social3 clearfix">
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
          </ul>
        </div>


      </div>
      <div class="col-sm-6">

        <h3>CONTACT FORM</h3>

        <div id="note"></div>
        <div id="fields">
          <form id="ajax-contact-form" class="form-horizontal" action="controller/contactController.php" method="POST">

            <div class="form-group">
                <label for="inputName">Your Name</label>
                <input type="text" class="form-control" id="inputName" name="name">
            </div>

            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" name="email">
            </div>


            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                    <label for="inputMessage">Your Message</label>
                    <textarea class="form-control" rows="7" id="inputMessage" name="msg">Message</textarea>
                </div>
              </div>
            </div>
            <button type="submit" name="addcontact" class="btn-default btn-cf-submit">send message</button>
          </form>
        </div>


      </div>
    </div>








  </div>
</div>






<?php include'common/footer2.php';?>