<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <title>student admission</title>
  </head>
  <body style="background-color: aqua;">
 


    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">ONLINE STUDENT ADMISSION </h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $insert = $model->insert();
          ?> 
            <form action="" method="post">

           <div class="form-group ">
          <table border="1">
              <label>First Name:</label>
              <input type="text" class="form-control" placeholder="Enter your first name" name="fname" autocomplete="off">
            </div>
             <div class="form-group ">
               <label>Last Name:</label>
               <input type="text" class="form-control" placeholder="Enter your last name" name="lname"autocomplete="off">
           </div>
             <div class="form-group">
               <label>Date Of Birth:</label>
               <input type="date" class="form-control" placeholder="Enter your dob" name="date"autocomplete="off">
           </div>

           <div class="form-group">
               <label>Email</label>
               <input type="email" class="form-control" placeholder="Enter your email" name="email"autocomplete="off">
           </div>

                 <div class="form-group">
                  <label>Mobile No:</label>
                  <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobile"autocomplete="off">
                 </div>
                  <div class="form-group">
               <label>Gender:</label>
               <select class="form-control" name="gender">
                <option>Male</option>
                 <option>Female</option>
                 <option>Other</option>
               </select>
             </div>
               <div class="form-group ">
            <label> Address:</label>
            <input type-"text" name="address" class="form-control" placeholder="Enter Address  ">
          </div>
           <div class="form-group col-6">
               <label>Course For:</label>
               <select class="form-control" name="course">
                <option>BBS</option>
                 <option>MBS</option>
                 <option>BED</option>
               </select>
             </div>
           </table>

             

            <div class="form-group">
              <input type="submit" id="button" class="btn btn-primary" name="submit">
              <input type="reset" id="button" class="btn btn-primary" name="Reset">
               <a href="records.php"><button type="button" class="btn btn-primary" data-dismiss="model">Record</button></a>
              
            </div>
          </form>

        </div>
      </div>
    </div>
  
  </body>
</html>