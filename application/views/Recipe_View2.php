<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recipe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Remove the navbar's default margin-bottom and rounded borders */ 
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }

  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 450px}

  /* Set gray background color and 100% height */
  .sidenav {
    padding-top: 20px;
    background-color: #f1f1f1;
    height: 100%;
  }

  /* Set black background color, white text and some padding */
  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }

  body{ font-family: Arial;}

  /* On small screens, set height to 'auto' for sidenav and grid */
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      padding: 15px;
    }
    .row.content {height:auto;} 
  }
</style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="<?php base_url();?>/Barry/Coppy">Hotel</a></li>
          <li><a href="<?php base_url();?>/Barry/Restaurant_View">Restaurant</a></li>
          <li><a href="<?php base_url();?>/Barry/Attractions_View">Attractions</a></li>
          <li><a href="#">Recipe</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">    
    <div class="row content">
      <div class="col-sm-2">
        <h1>Dsdf</h1>
      </div>
      <div class="col-sm-8">
          <p style="font-family:Arial, Verdana, sans-serif; font-size:50px;">สูตรอาหาร</p><br />
          <?php foreach ($recipe as $row) { ?>
          <table>

           <tr>
             <td><img src="data:image;base64,<?php echo $row['re_image']; ?>" height="200" width="200" ></td>
           </tr>
           <tr>
             <td><?php echo $row['re_name']; ?></td>
           </tr>
           <tr>
            <td><p style="font-family:Arial, Verdana, sans-serif; font-size:25px;">วิธีทำ</p></td>
           </tr>
           <tr>
            <td><?php echo $row['re_ingre']; ?></td>
             <td><?php echo $row['re_solu']; ?></td>
           </tr>
         </table>
         <?php } ?>
     </div>
     <div class="col-sm-2">
      <h1>Batty</h1>
     </div>

   </div>
 </div>



</body>
</html>

