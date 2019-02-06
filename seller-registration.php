<?php
include('dbconnect.php');
include('verify.php');
if(isset($_POST['submit']))
{
  
  
  if($_POST['seller_pwd']==$_POST['seller_cpwd'])
  {
    $seller_name = check($_POST['seller_name']);
    $seller_mobile = check($_POST['seller_mobile']);
    $seller_email = check($_POST['seller_email']);
    $seller_address = check($_POST['seller_address']);
    $seller_gst = check($_POST['seller_gst']);
    $seller_tin = check($_POST['seller_tin']);
    $seller_pan = check($_POST['seller_pan']);
    $seller_pwd = check($_POST['seller_pwd']);

    // $register = $conn->prepare("INSERT INTO seller_registration(seller_id, seller_name, seller_mobile, seller_email, seller_address, seller_gst, seller_tin, seller_pan) VALUES(null,?,?,?,?,?,?,?)");
    $register= mysqli_query($conn,"insert into seller_registration values(null,'$seller_name','$seller_mobile','$seller_email','$seller_address','$seller_gst','$seller_tin','$seller_pan')");
    
    $login = mysqli_query($conn,"insert into login values(null,'$seller_email','$seller_mobile','$seller_pwd','seller')");

   header("Location: index.php");
    


  



    // if($login->insert($insert_log))
    // {
      
    // }
    
    // if($collection->insert($seller_data))
    // {
    //   header("Location: index.php");
    // }

  }

}


?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 75px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Now!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name" name="seller_name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile</label>
            <input type="text" class="form-control" id="recipient-name" name="seller_mobile">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="recipient-name" name="seller_email">
          </div>
          
          <div class="form-group">
            <label for="message-text" class="col-form-label">Address:</label>
            <textarea class="form-control" id="message-text" name="seller_address"></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">GST</label>
            <input type="text" class="form-control" id="recipient-name" name="seller_gst">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">TIN</label>
            <input type="text" class="form-control" id="recipient-name" name="seller_tin">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">PAN</label>
            <input type="text" class="form-control" id="recipient-name" name="seller_pan">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="text" class="form-control" id="recipient-name" name="seller_pwd">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Confirm Password</label>
            <input type="text" class="form-control" id="recipient-name" name="seller_cpwd">
          </div>
           <button type="submit"  name="submit" value="submit" class="btn btn-primary">Send message</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
