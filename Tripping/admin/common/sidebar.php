<?php 
extract($_POST);
$role_id=$_SESSION['role_id'];
if($role_id==1)

{?>
<ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span> 
        </a>
        
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-users"></i>
          <span>Users</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
       <!--  <li><a href="addUser.php"><i class="fa fa-plus" aria-hidden="true"></i>
         Add User</a></li> -->
        <li><a href="users.php"><i class="fa fa-eye" aria-hidden="true"></i>
         View Manage User</a></li>
         <li><a href="userprofiles.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Users Profiles</a></li>
        </ul>
      </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-user"></i>
          <span>Vendor</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <!-- <li><a href="addvendor.php"><i class="fa fa-plus" aria-hidden="true"></i>
         Add Vendor</a></li> -->
        <li><a href="vendors.php"><i class="fa fa-eye" aria-hidden="true"></i>
         View Manage Vendor</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-list-ul"></i>
          <span>Packages type</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addpackagetype.php"><i class="fa fa-plus"></i> Add Package type</a></li>
        <li><a href="packagetypes.php"><i class="fa fa-eye"></i> View Manage Package type</a></li>
        </ul>
    </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-list-ul"></i>
          <span>Packages</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addpackage.php"><i class="fa fa-plus"></i> Add Package</a></li>
        <li><a href="packages.php"><i class="fa fa-eye"></i> View Manage Package</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-building"></i>
          <span>Hotels</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addhotel.php"><i class="fa fa-plus"></i> Add Hotel</a></li>
        <li><a href="hotels.php"><i class="fa fa-eye"></i> View Manage Hotel</a></li>
        </ul>
      </li>
      <li>
        <a href="feedback.php" class="waves-effect">
          <i class="fa fa-comment"></i> <span>Feedback</span> 
        </a>
      </li>
      
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-file-picture-o"></i>
          <span>Gallery</span> <i class="fa fa-angle-left pull-right "></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addGallery.php"><i class="fa fa-plus"></i> Add New</a></li>
        <li><a href="gallery.php"><i class="fa fa-tasks"></i> Manage Gallery</a></li>
       
        </ul>
      </li>
      <!--  <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-info-circle"></i>
          <span>Inquiry</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addinquiry.php"><i class="fa fa-plus" aria-hidden="true"></i>
         Add Inquiry</a></li>
        <li><a href="Inquires.php"><i class="fa fa-eye" aria-hidden="true"></i>
         View Manage Inquiry</a></li>
        </ul>
      </li> -->
    <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-bell-o"></i>
          <span>Notification</span> <i class="fa fa-angle-left pull-right "></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addNotification.php"><i class="fa fa-plus"></i> Add New</a></li>
        <li><a href="Notifys.php"><i class="fa fa-tasks"></i> Manage Notification</a></li>
       
        </ul>
      </li>
</ul>

<?php } ?>
<?php if($role_id==2)
{
?>
<ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span> 
        </a>
      </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-truck"></i>
          <span>Travel Agencies</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addagency.php"><i class="fa fa-plus"></i> Add Agency</a></li>
        </ul>
        <ul class="sidebar-submenu">
        <li><a href="agencies.php"><i class="fa fa-edit"></i> View Manage Agencies</a></li>
        </ul></li>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-bars"></i>
          <span>Package Types</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addpackagetype.php"><i class="fa fa-plus"></i> Add Package Types</a></li>
       </ul>
        <ul class="sidebar-submenu">
        <li><a href="packagetypes.php"><i class="fa fa-tasks"></i> View/Manage Package Types</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-bars"></i>
          <span>Packages</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addpackage.php"><i class="fa fa-plus"></i> Add Package</a></li>
        </ul>
        <ul class="sidebar-submenu">
        <li><a href="packages.php"><i class="fa fa-tasks"></i> View Manage Package</a></li>
        </ul></li>
      </li>
      <li>

        <a href="feedback.php" class="waves-effect">
          <i class="fa fa-comment"></i> <span>Feedback</span> 
        </a>
      </li>
      
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-file-picture-o"></i>
          <span>Gallery</span> <i class="fa fa-angle-left pull-right "></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addGallery.php"><i class="fa fa-plus"></i> Add New</a></li>
        <li><a href="gallery.php"><i class="fa fa-tasks"></i> Manage Gallery</a></li>
       
        </ul>
      </li>


     <li>
        <a href="javaScript:void();" class="waves-effect">
          
          <i class="fa fa-bell-o"></i>
          <span>Notification</span> <i class="fa fa-angle-left pull-right "></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="addNotification.php"><i class="fa fa-plus"></i> Add New</a></li>
        <li><a href="Notifys.php"><i class="fa fa-tasks"></i> Manage Notification</a></li>
       
        </ul>
      </li>
</ul>
<?php } ?>