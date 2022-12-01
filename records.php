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
  <body style="background-color: skyblue;">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">STUDENT ADMISSION FORM</h1><br>
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table" border="3">
            <thead>
              <tr>
                <th>ID</th>
                <th>Fname</th>
                <th>lname</th>
                <th>Date Of Birth</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Course</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td>
                  <a href="read.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Detail</a>
                  <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                  <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Update</a>
                </td>
              </tr>

              <?php
                }
              }else{
                echo "no data";
            }

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </body>
</html>