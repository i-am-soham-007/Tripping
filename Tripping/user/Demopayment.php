<?php
$package_id="";
$user_id="";
include 'common/header.php';

$MERCHANT_KEY = "z43zPxpt";
$SALT = "mEfIfYMa48";
extract($_POST);


// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">



  <div id="content">
    <div class="container">
    
      <div class="row">
        
        <div class="col-sm-6">
           <h3>Package Details</h3>
      
                    <?php 
                    
           
          $q=$d->select("tbl_package","package_id='$package_id'");
          $i=0;

          while ($row=mysqli_fetch_array($q)) {
          extract($row);
                     $i++;
                    ?>
        <br> 
        <br>
             <?php
            $todaydate=date('Y/m/d');
            $td=strtotime($todaydate);
            $start=strtotime($package_start);
            $rm=$td-$start;
            $dateCount=abs(floor($rm / (60 * 60 * 24)));
            
?>
          <h4>  <?php  echo $package_name; ?></h4>
          
          <br>
          <p><img src="../images/Packages/<?php echo $package_gallery; ?>"></p>
            <br>
            <p><label>Remaining Days :   <?php echo $dateCount; ?>  </label></p>
             <br>
            <p><label>Total Days :   <?php echo $package_days; ?>  </label></p>
            <br>
            <p><label>START DATE :   <?php echo $package_start; ?>  </label></p>
            <br>
            <p><label>END DATE :   <?php echo $package_end; ?></label></p>
            <br>
            <p><label>AMOUNT :   <?php echo $package_amount; ?>   &#8377;</label></p>
<?php } ?>
         
          </div>
        
      <div class="col-sm-6">
      <h3> Payment Gateway</h3>
          <br/>
     <?php if($formError) { ?>
	
          <span style="color:red"><img src="payumoney_logo.png"><br> Please fill all mandatory fields. </span>
             <br/>
              <br/>
    <?php } ?>
   
  <div id="note"></div>
        <div id="fields">
        
    <form action="<?php echo $action; ?>" class="form-horizontal" method="post" name="payuForm">
      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
    
         <!-- <b>Mandatory Parameters <?php echo $package_id; ?></b>
         -->
        <div class="form-group">
            <label for="inputName">Amount: </label>
              <input name="amount" class="form-control" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" />
         </div>
          
          <div class="form-group">
            <label for="inputName">First Name: </label>
              <input name="firstname" id="firstname" class="form-control" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" />
        </div>
        
         <div class="form-group">
            <label for="inputName">Email: </label>
              <input name="email" id="email" class="form-control" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" />
        </div>

         <div class="form-group">
            <label for="inputName">Phone: </label>
              <input name="phone" class="form-control" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />
            </div>

             <div class="form-group">
            <label for="inputName">Package Info: </label>
        <textarea name="productinfo" class="form-control"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
      </div>

<input type="hidden" name="surl" value="http://localhost/Project/Tripping/Demo/user/success.php" size="64" />
<input type="hidden" name="furl" value="http://localhost/Project/Tripping/Demo/user/failure.php" size="64" />
<input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        
          <?php if(!$hash) { ?>
<input type="submit" name="payment" class="btn-default btn-cf-submit" value="Submit" />
 
          <?php } ?>
       
    </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php  include 'common/footer2.php'; ?>