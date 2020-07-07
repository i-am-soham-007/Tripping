<?php include 'common/header.php'; ?>
<div id="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <div class="sidebar-block">
                    	<ul>
						  <h3>Profiles</h3><br>
                            <div class="col-sm-12 no-padding">
                                <div class="input1_wrapper">
                                    <li><a href="changepassword.php">Change Password</a></li>
                                 </div>
                            </div>

                            <div class="col-sm-12 no-padding">
                            	<div class="input2_wrapper">
                                <li><a href="profile.php">Change Profile</a></li>
                                </div>
                            </div><br>
                    </ul>
                </div>
            </div>
					<div class="col-sm-9">
					<div class="live-comment">
                            <div class="live-comment-title">Change Password</div>
                            <div class="live-comment-form">

                                <div id="note3"></div>
                                <div id="fields3">
                                    <form id="ajax-contact-form3" class="form-horizontal" Method="POST" enctype="multipart/form-data" action="controller/profileController.php">
                                        <div class="row">
                                        	<div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputName"></label>
                                                   <img src="../images/U_profile/<?php echo $_SESSION['user_profile']; ?>" height="80" width="80">
                                                   <h5>Name :- <?php echo $_SESSION['user_name']; ?><br>
                                                   <br>Mobile:- <?php echo $_SESSION['user_mobile']; ?></h5>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                 <p style="color: black;">Old Password</p>

                                                    <input type="text" class="form-control" id="inputName" name="oldPassword" placeholder="Old password">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <p style="color: black;">New Password</p>
                                                     <input type="text" class="form-control" id="inputEmail" name="password" placeholder="New Password">
                                                </div>
                                            </div>
                                           <div class="col-sm-12">
                                                <div class="form-group">
                                                    <p style="color: black;">Confirm Password</p>
                                                    <input type="text" class="form-control" id="inputEmail" name="cPassword" placeholder="Confirm password">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="changePassword" class="btn-default btn-cf-submit3">Change Password</button>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

					</div>
        </div><!-- END Row -->
    
    </div><!-- END Container -->
</div>

<?php include 'common/footer2.php'; ?>