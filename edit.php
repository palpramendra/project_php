<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>student admission </title>
  </head>
  <body style="background-color: lightgreen;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">STUDENT ADMISSION FORM</h1>
          <hr style="height: 1px;color: black;background-color: blue;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);

              if (isset($_POST['update'])) {
        if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['date']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['fname'])) {
          if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['date']) && !empty($_POST['email']) && !empty($_POST['mobile']) && isset($_POST['gender']) && !empty($_POST['address']) && !empty($_POST['course'])) {
                    
                    $data['id'] = $id;
                    $data['fname'] = $_POST['fname'];
                    $data['lname'] = $_POST['lname'];
                    $data['date'] = $_POST['date'];
                    $data['email'] = $_POST['email'];
                    $data['mobile'] = $_POST['mobile'];
                    $data['gender'] = $_POST['gender'];
                    $data['address'] = $_POST['address'];
                    $data['course'] = $_POST['course'];

                    $update = $model->update($data);

                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'records.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'records.php';</script>";
                    }

                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?id=$id");
                  }
                }
              }

          ?>
          <form action="" method="post">
            
            <div class="form-group">
              <label for="">First Name:</label>
              <input type="text" name="fname" value="<?php echo $row['fname']; ?>" class="form-control">
            </div>
             <div class="form-group">
               <label for="">Last Name:</label>
               <input type="text" name="lname" value="<?php echo $row['lname']; ?>" class="form-control">
           </div>
             <div class="form-group">
               <label for="">Date Of Birth:</label>
               <input type="date" name="date" value="<?php echo $row['date']; ?>" class="form-control">
           </div>
            <div class="form-group">
              <label for="">Email:</label>
              <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="number" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control">
            </div>
                <div class="form-group">
               <label for="">Gender:</label>
               <select class="form-control" name="gender" value="<?php echo $row['gender']; ?>">
                <option>Male</option>
                 <option>Femle</option>
                 <option>Other</option>
               </select>
             </div>

            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="1" class="form-control"><?php echo $row['address']; ?></textarea>
            </div>
               <label>Course For:</label>
               <select class="form-control" name="course" value="<?php echo $row['course']; ?>">
                <option>BBS</option>
                 <option>MBS</option>
                 <option>BED</option>
               </select><br>
                <div class="form-group">
              <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </div>
            </div>
         </form>
        </div>
      </div>
    </div>


  </body>
</html>