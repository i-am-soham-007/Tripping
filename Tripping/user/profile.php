<?php include 'common/header.php';
$user_mobile='';
 ?>

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
                            <div class="live-comment-title">Change Profile</div>
                            <div class="live-comment-form">

                                <div id="note3"></div>
                                <div id="fields3">
                                    <form id="ajax-contact-form3" class="form-horizontal" Method="POST" enctype="multipart/form-data" action="controller/profileController.php">
                                        <div class="row">
                                        	<div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputName">Upload File</label>
                                                   <img src="../images/U_profile/<?php echo $_SESSION['user_profile']; ?>" height="80" width="80">
                                                   <h5>Name :- <?php echo $_SESSION['user_name']; ?><br>
                                                   <br>Mobile:- <?php echo $_SESSION['user_mobile']; ?></h5>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputEmail">Name</label>
                                                    <input type="text" class="form-control" id="inputName" name="user_name" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputEmail">Mobile</label>
                                                    <input type="text" class="form-control" id="inputEmail" name="user_mobile" value="<?php if(isset($updateProfile)){$user_mobile='';}else{echo $user_mobile;} ?>" placeholder="Enter Mobile">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputName">Upload File</label>
                                                    <input type="file"  id="inputName" name="user_profile" >
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="updateProfile" class="btn-default btn-cf-submit3">Upload Profile</button>
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