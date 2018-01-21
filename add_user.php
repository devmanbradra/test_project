<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-5">
      <form class="form-group" action="sendmail_test.php" method="Post">
        <!-- <div class="form-group"> -->
          <label for="email">Email:</label>
          <input type="email" class="form-comtrol" id="email" placeholder="Enter your email" name="email">
        <!-- </div> -->
        
        <button type="submit" class="btn btn-primary">submit</button>
        <button type="reset" class="btn btn-primary">reset</button>
    </form>
    </div>
    <div class="col-4"></div>
  </div>  
</body>
</html>