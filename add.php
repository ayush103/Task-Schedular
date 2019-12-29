<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first!";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Task Scheduler</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div>
<div class="jumbotron" style="height: 180px; width: 100%; margin-top: 10px; padding: 2rem 2rem; opcaity: 0.8;">
    <h2>Task Scheduler</h2>      
    <p>A website that helps you prioritize your tasks.</p>
  <div class="dropdown" style="float: right;">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
    <img src="https://icon-library.net/images/user-icon-image/user-icon-image-21.jpg">
    </button>
    <div class="dropdown-menu">
    
    <br><button type="submit" class="btn btn-danger" name="addbutton" onclick="location.href = 'index.php';" style="border: 0px ;margin-left: 25px; margin-top: 0px; background-color: #ffffff;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCR4pyd0JtvLYD2XcZuv_bdDJCVjcJCdzVyHRDEcrqQXaj5cgh&s" ></button>
    <p class="dropdown-item"><strong><?php echo $_SESSION['username']; ?></strong></p>
      <a class="dropdown-item" href="index.php?logout='1'">Logout</a>
    </div>
  </div>
  </div>
<div class="flex-container">
    <div style="overflow-y: scroll; height: 300px; width: 550px; opacity: 0.9;" class='table-responsive'>
    
    <form action="index.php" method="post" style="width: 100%;">
        <div class="input-group">
          <input type="text" placeholder="TaskName" style="width: 75%; border-top-left-radius: 5px;    border-bottom-left-radius: 5px; height: 50px; margin-left: 15px; margin-right: 15px; margin-top: 5px; margin-bottom: 5px;" id="taskname" class="form-control validate" name="task">
        </div>
        <p style="margin-left: 15px; margin-right: 15px; margin-top: 0px; margin-bottom: 0px;">Deadline</p>
        <div class="input-group">
          <input type="date" style="width: 75%; border-top-left-radius: 5px;    border-bottom-left-radius: 5px; height: 50px; margin-left: 15px; margin-right: 15px; margin-top: 5px; margin-bottom: 5px;" id="deadline" class="form-control validate" name="deadline" value="<?php echo $deadline; ?>">
        </div>
        <div class="input-group">
          <textarea style="width: 75%; border-top-left-radius: 5px;    border-bottom-left-radius: 5px; height: 150px; margin-left: 15px; margin-right: 15px; margin-top: 5px; margin-bottom: 5px;" rows="3" placeholder="Description" id="detail" class="form-control validate" name="detail" ></textarea>
        </div>
        <div class="input-group">
        <input type="radio" name="label" value="1">1
        <input type="radio" name="label" value="2">2
        <input type="radio" name="label" value="3">3
        <input type="radio" name="label" value="4">4
        <input type="hidden"  name="taskno">
        </div>
      </div>
      <div class="modal-footer" style="border: 0px;">
      <div class="d-flex">
        <button type="submit" name="insert234" class="btn btn-info" style="opacity: 1;"><img src="https://cdn2.iconfinder.com/data/icons/web-application-icons-part-2/100/Artboard_73-512.png"></button>
      </div>
      </div>  

    </div>
</div>
    </form>
    </div>
</div>
</body>

</html>

