<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>student admission</title>
  </head>
  <body style="background-color:darkturquoise;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">STUDENT ADMISSION FORM</h1>
          <hr style="height: 1px;color: black;background-color: red;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->fetch_single($id);
              if(!empty($row)){

          ?>
          <div class="card">
            <div class="card-header">
              Single Record
            </div>
            <div class="card-body">
              <p>First Name = <?php echo $row['fname']; ?></p>
              <p>Last Name = <?php echo $row['lname']; ?></p>
              <p>Date Of Birth = <?php echo $row['date']; ?></p>
              <p>Email = <?php echo $row['email']; ?></p>
              <p>Mobile No. = <?php echo $row['mobile']; ?></p>
              <p>gender = <?php echo $row['gender']; ?></p>
              <p>Address = <?php echo $row['address']; ?></p>
              <p>Course = <?php echo $row['course']; ?></p>
            </div>
          </div>
          <?php
            }else{
            echo "no data";
          }
          ?>
        </div>
      </div>
    </div>

   
  </body>
</html>