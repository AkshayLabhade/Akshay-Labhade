<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <style type="text/css"> 
      .main{
        background-color: white;
      }
      .bg{
        background-color: #DCDCDC;
      }
    </style>

    <title><?php echo $_POST['title'] ?></title>
  </head>
  <body class="d-flex justify-content-center bg" style="font-family: 'Roboto', sans-serif;">
    <div class="col-sm-7 main my-4" style="border-radius : 10px; box-shadow: 0px 0px 16px black;">
      <div class="p-3">
        <img src="<?php echo $_POST['logo'] ?>" style="width: <?php echo $_POST['logo_size'] ?>;">
      </div>
      <div style="background-color: <?php echo $_POST['color_code'] ?>; border-radius: 10px; box-shadow: 0px 0px 15px black;" class="text-white text-center py-1">
        <h2><?php echo $_POST['title'] ?><br><small><?php echo $_POST['Subtitle'] ?></small></h2>
      </div>
      <div class="text-justify p-3">
        <p><?php echo $_POST['abstract'] ?></p>
      </div>
      <div class="text-center">
        <img src="<?php echo $_POST['image_link'] ?>" class="w-50" style="box-shadow: 0px 0px 15px black; border-radius:10px;">
      </div>
      <div class="text-center p-3">
        <a href="<?php echo $_POST['landing_page_link'] ?>"><button class=" btn text-white rounded btn-lg" type="submit" style="background-color: <?php echo $_POST['color_code'] ?>; border-color: <?php echo $_POST['color_code'] ?>; box-shadow: 0px 0px 15px black; "><?php echo $_POST['Button_text'] ?></button></a>
      </div>
      <div class="text-center p-3">
        <small>All Rights Reserved . © 2021 Arkentech Publishing, Inc. <a href=https://www.arkentechpublishing.com/privacy/>Privacy Policy</a> or <a href="https://www.arkentechpublishing.com/unsubscribe/">Unsubscribe</a>.</small>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>