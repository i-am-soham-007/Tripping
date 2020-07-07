  <?php  if (isset($_SESSION['errorMsgd'])) { ?>
<!--   <script type="text/javascript">

   
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
        });
      } else {
        swal("Your imaginary file is safe!");
      }
    });
  </script>
 -->  
 <script type="text/javascript">

  swal({   
    title: "Are you sure?",   
    text: "You will not be able to recover this Details!",   
    type: "warning",   showCancelButton: true,  
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes, delete it!",  
    cancelButtonText: "No, cancel!",   
    closeOnConfirm: false,   closeOnCancel: false 
}, 
function(isConfirm){   

if (isConfirm) {    
table.row($(btn).parents('tr')).remove().draw(false);
   $.ajax({
  type: "POST",
  url: "del.php",
  data: dataString,
  cache: false,
  success: function(result){
   swal("Deleted!", "Your Data has been deleted.", "success");  
    }
    });
  } 
  else {     swal("Cancelled", "Your Data is safe :)", "error");   } });

  </script>
<?php }?>