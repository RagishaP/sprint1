<!DOCTYPE html>
<html>
<head>
  <title>fb</title>
 
<?php $this->load->helper('url');?>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href=<?php echo base_url()."css/fbbt1.css";?>>
  
<div class="container-fluid">

  <div class="row">
  <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 " style="background-color: #3b5998; height: 80px; padding-top: 25px;">
<img src=<?php echo base_url()."images/fb1.jpg";?> class="img-responsive">
  </div>
  <div class="col-md-4 col-lg-4 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 " style="background-color: #3b5998; padding-top: 25px; padding-left:40px; height: 80px;">

  <span><input type="text" name="search" placeholder="Search Facebook" style="padding-right:60px; padding-left: 60px; ">
   <button class="w3-btn w3-orange w3-xlarge" style="position: absolute;"><i class="w3-margin-left fa fa-search"></i></button></span>
  </div>
<div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm " style="background-color: #3b5998; height: 80px; padding-top: 25px;">

  </div>
  <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-3 hidden-xs hidden-sm   " style="background-color: #3b5998; height: 80px; padding-top: 25px;">
  <table>
<tr><td><img src="<?php echo $pic;?>" class="img-responsive" style="width: 50px; height: 50px;"></td><td><font color="white"><?php echo $fname;?></font></td></tr>
</table>
  </div>
  <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm " style="background-color: #3b5998; height: 80px; padding-top: 25px;">

  </div>
  </div>
<div class="row">
  <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 " style="height:550px; background-color: #dfe3ee; ">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 " style="height:550px; background-color: #dfe3ee; ">
        <table>
      <tr><td> <img src="<?php echo $pic;?>" class="img-responsive" style="width: 50px; height: 50px; padding-top: 15px;"></td><td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td></tr>
       <tr><td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td><td>Edit Profile</td></tr>
      </table>
        </div>
        <div class="col-md-7 col-lg-7 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 a1 " >
          <div class="row">
            <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 " style="height:160px; background-color: #ffffff; margin-top: 8px;">
            <div class="row">
              <div class="col-md-4 col-lg-4 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-4 col-xs-offset-0 col-xs-4 " style="height:20px;">
             <table><tr><td><img src=<?php echo base_url()."images/write.jpg";?> class="img-responsive"></td><td>Update status</td></tr></table>
              </div>
             <div class="col-md-4 col-lg-4 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-4 col-xs-offset-0 col-xs-4 " style="height:20px;">
              <table><tr><td><img src=<?php echo base_url()."images/phtvd.jpg";?> class="img-responsive"></td><td>Add photos/video</td></tr></table>
              </div>
                <div class="col-md-4 col-lg-4 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-4 col-xs-offset-0 col-xs-4 " style="height:20px;">
              <table><tr><td><img src=<?php echo base_url()."images/write.jpg";?> class="img-responsive"></td><td>write post</td></tr></table>
              </div>


            </div>
            <hr>
            <div class="row">
            <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 ">
            <table>
            <tr><td> <img src="<?php echo $pic;?>" class="img-responsive" style="width: 50px; height: 50px;"></td><td style="color: #75a3a3;">whats on ur mind</td>
             </table>
              </div>
            </div>
              <!-- <table>
                <tr><td>Update status</td><td>Add photos/video</td><td>Write post</td></tr>
              </table> -->
            </div>
              
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 " style="height:370px; background-color: #ffffff; margin-top: 8px;">
              
            </div>
          </div>
          </div>
             <div class="col-md-3 col-lg-3 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 " style="height:550px; background-color: #dfe3ee;">
          
            <div class="row ad">
               <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 " style="height:546px; background-color: #ffffff; margin-top: 8px;margin-left:2px;">
                     your ads
                     <hr>
            </div>
            </div>

              </div>

        </div>
     
    </div>
      

  </div>
</div>

</div>  
</body>
</html>