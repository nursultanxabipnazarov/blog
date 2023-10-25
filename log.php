<?php
 include "app/controllers/users.php";
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


 <section class="vh-70 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login form:</h3>
          
            <?php if(!empty($erMsg)){?>
              
              <p><?=$erMsg[0];?></p>
              
            <?php }?>
          
            

            


          
            <form method="post" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="email" value="<?=$login?>" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Login</label>
                  </div>

                </div>
               
              </div>
              <div class="row">

              <div class="col-md-6 mb-4">

<div class="form-outline">
  <input type="text" id="lastName"  name = "password" class="form-control form-control-lg" />
  <label class="form-label" for="lastName">Password</label>
</div>

</div>
              </div>


              


              

                


              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" name = "log" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>