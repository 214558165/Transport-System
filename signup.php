<?php
include_once 'database/dbConn.php';
session_start();



?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Student Transport System</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>


    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 06:00-22:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>076-568-0651</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>


            </ul>
          </div>
        </div>
      </div>
    </div>
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Student Transport System</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="signup.php">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signin.php">Sign in</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Student Portal </h1>
            <span>TUT student regester</span>
          </div>
        </div>
      </div>
    </div>


<div class="container">
    <div class="row">
  <div class="col-md-5 mx-auto">
  <div id="first">
    <div class="myform form ">
      <br>
      <br>
      <br>
      <br>
       <div class="logo mb-3">
         <div class="col-md-12 text-center">
          <h3>Create Student Account</h3>
         </div>
      </div>

               <form action="signup.php" method="post" novalidate="novalidate">
                       <div class="form-group">
                          <label for="exampleInputEmail1">Student Number*</label>
                          <input type="email" id="studnum" onchange="validate()" name="studNo"  class="form-control"  style="border-radius: 50px;"  placeholder="student number">
                       </div>
                       <div class="form-group">
                          <label for="exampleInputEmail1">Student Name*</label>
                          <input type="email" name="studName"  class="form-control"  style="border-radius: 50px;"  placeholder="name">
                       </div>
                       <div class="form-group">
                          <label for="exampleInputEmail1">Student Surname*</label>
                          <input type="email" name="studSurname"  class="form-control"  style="border-radius: 50px;"  placeholder="surname">
                       </div>
                       <div class="form-group">
                          <label for="exampleInputEmail1">Student Email*</label>
                          <input type="email" id="e" name="studEmail"  class="form-control"  style="border-radius: 50px;"  placeholder="email">
                       </div>
                       <div class="form-group">
                          <label for="exampleInputEmail1">Student Campus*</label>
                          <select class="form-control rounded-pill border-0 shadow-sm px-4"  style="border-radius: 50px;"  name="cmpus">
                                          <option  value="">Select Campus</option>
                                          <option value="Arcadia Campus">Arcadia Campus</option>
                                          <option value="Arts Campus">Arts Campus</option>
                                          <option value="Em​alahleni Campus">Em​alahleni Campus</option>
                                          <option value="Ga-Rankuwa Campus">Ga-Rankuwa Campus</option>
                                          <option value="Mbombela Campus">Mbombela Campus</option>
                                          <option value="Polokwane Campus">Polokwane Campus</option>
                                          <option value="Pretoria Campus">Pretoria Campus</option>
                                          <option value="Soshanguve North Campus">Soshanguve North Campus</option>
                                          <option value="Soshanguve South Campus">Soshanguve South Campus</option>
                                     </select>
                       </div>
                       <div class="form-group">
                          <label for="exampleInputEmail1">Password</label>
                          <input type="password" name="password"   class="form-control" style="border-radius: 50px;"  placeholder="password">
                       </div>
                       <div class="form-group">
                          <label for="exampleInputEmail1">Corfirm Password</label>
                          <input type="password" name="cpassword"   class="form-control" style="border-radius: 50px;"  placeholder="cornfim password">
                       </div>
                       <div class="form-group">
                          <p></p>
                       </div>
                       <?php

                                  if (isset($_SESSION['message'])): ?>
                                  <div class="alert alert-<?=$_SESSION['msg_type']?>">

                                    <?php
                                        echo $_SESSION['message'];
                                        unset($_SESSION['message']);
                                    ?>
                                </div>
                              <?php endif ?>
                       <div class="col-md-12 text-center ">

                           <button class="btn btn-primary" name="btnRegister" type="submit" id="sendMessageButton">Sign up</button>
                       </div>

                        <a href="signin.php">Already have an account?</a>
                  </form>
                  <br>
                  <br>
                  <br>
                  <br>
    </div>
  </div>

  </div>
</div>
  </div>

<?php

      if (isset($_POST['btnRegister']))
      {
                $studNo = mysqli_real_escape_string($conn,$_POST['studNo']);
                $studEmail = mysqli_real_escape_string($conn,$_POST['studEmail']);
                $studName = mysqli_real_escape_string($conn,ucwords($_POST['studName']));
                $studSurname = mysqli_real_escape_string($conn,ucwords($_POST['studSurname']));
                $cmpus = mysqli_real_escape_string($conn,$_POST['cmpus']);
                $password= mysqli_real_escape_string($conn,$_POST['password']);
                $cPassword = mysqli_real_escape_string($conn,$_POST['cpassword']);


                if (empty($studNo)&&empty($studEmail)&&empty($studName)&&empty($studSurname)&&empty($cmpus)&&empty($password))
                {
                  $_SESSION['message'] = "All field are empty";
                  $_SESSION['msg_type'] = "danger";

                 echo "<script>location.replace('signup.php');</script>";
                 exit();
                }
                else
                {

                  if (!empty($studName))
                   {
                         if (preg_match("/^[a-zA-Z\s]+$/",$studName))
                         {
                                 if (!empty($studSurname))
                                 {
                                         if (preg_match("/^[a-zA-Z]+$/",$studSurname))
                                         {
                                               if (!empty($studNo))
                                               {
                                                     if (preg_match("/^[0-9]+$/",$studNo))
                                                     {
                                                             if (substr($studNo,0,1) == "2")
                                                             {
                                                                     $year = "20".substr($studNo,1,2);

                                                                     $y = date("Y") ;

                                                                     if (strlen($studNo) == 9)
                                                                     {
                                                                               if ($year <= $y)
                                                                               {

                                                                                                   if (!empty($cmpus))
                                                                                                   {

                                                                                                                       if (!empty($password)&&!empty($cPassword))
                                                                                                                       {
                                                                                                                                 if ($password == $cPassword)
                                                                                                                                 {
                                                                                                                                           $sql = "SELECT* FROM student WHERE studNo = '$studNo'";
                                                                                                                                           $result = mysqli_query($conn,$sql);
                                                                                                                                           $num = mysqli_num_rows($result);

                                                                                                                                           if ($num>0)
                                                                                                                                           {
                                                                                                                                             $_SESSION['message'] = "Student Number Already have account";
                                                                                                                                             $_SESSION['msg_type'] = "danger";



                                                                                                                                            echo "<script>location.replace('signup.php');</script>";
                                                                                                                                            exit();
                                                                                                                                           }
                                                                                                                                           else
                                                                                                                                           {

                                                                                                                                                   $newPwd = password_hash($cPassword, PASSWORD_DEFAULT);
                                                                                                                                                   $sql = "INSERT INTO student(studName,studSurname,studNo,studEmail,studCampus,studPwd)
                                                                                                                                                           VALUES('$studName', '$studSurname', '$studNo', '$studEmail', '$cmpus', '$newPwd')";

                                                                                                                                                   mysqli_query($conn,$sql);

                                                                                                                                                   echo '<script>alert("Student Successfully registered")</script>';
                                                                                                                                                   echo "<script>location.replace('signin.php');</script>";


                                                                                                                                           }

                                                                                                                                 }
                                                                                                                                 else
                                                                                                                                 {
                                                                                                                                   $_SESSION['message'] = "Password does not match";
                                                                                                                                   $_SESSION['msg_type'] = "danger";



                                                                                                                                  echo "<script>location.replace('signup.php');</script>";
                                                                                                                                  exit();
                                                                                                                                 }
                                                                                                                       }
                                                                                                                       else
                                                                                                                       {
                                                                                                                         $_SESSION['message'] = "Password is empty";
                                                                                                                         $_SESSION['msg_type'] = "danger";



                                                                                                                        echo "<script>location.replace('signup.php');</script>";
                                                                                                                        exit();
                                                                                                                       }

                                                                                                   }
                                                                                                   else
                                                                                                   {
                                                                                                     $_SESSION['message'] = "Select Campus";
                                                                                                     $_SESSION['msg_type'] = "danger";



                                                                                                    echo "<script>location.replace('signup.php');</script>";
                                                                                                    exit();
                                                                                                   }


                                                                               }
                                                                               else
                                                                               {
                                                                                 $_SESSION['message'] = "Student number  must less 2022 ";
                                                                                 $_SESSION['msg_type'] = "danger";



                                                                                echo "<script>location.replace('signup.php');</script>";
                                                                                exit();
                                                                               }
                                                                     }
                                                                     else
                                                                     {
                                                                       $_SESSION['message'] = "Student number  must 9 numbers only(216599390)";
                                                                       $_SESSION['msg_type'] = "danger";



                                                                      echo "<script>location.replace('signup.php');</script>";
                                                                      exit();
                                                                     }



                                                             }
                                                             else
                                                             {
                                                               $_SESSION['message'] = "Student number must begin with 2";
                                                               $_SESSION['msg_type'] = "danger";



                                                              echo "<script>location.replace('signup.php');</script>";
                                                              exit();
                                                             }

                                                     }
                                                     else
                                                     {
                                                       $_SESSION['message'] = "Student number field must be numbers only";
                                                       $_SESSION['msg_type'] = "danger";


                                                      echo "<script>location.replace('signup.php');</script>";
                                                      exit();
                                                     }
                                               }
                                               else
                                               {
                                                 $_SESSION['message'] = "Student number field is empty";
                                                 $_SESSION['msg_type'] = "danger";


                                                echo "<script>location.replace('signup.php');</script>";
                                                exit();
                                               }
                                         }
                                         else
                                         {
                                             $_SESSION['message'] = "Surname field must be characters";
                                             $_SESSION['msg_type'] = "danger";



                                            echo "<script>location.replace('signup.php');</script>";
                                            exit();
                                         }
                                 }
                                 else
                                 {
                                   $_SESSION['message'] = "Surname field is empty";
                                   $_SESSION['msg_type'] = "danger";



                                    echo "<script>location.replace('signup.php');</script>";
                                    exit();
                                 }
                         }
                         else
                         {
                               $_SESSION['message'] = "Name field must be characters";
                               $_SESSION['msg_type'] = "danger";


                          echo "<script>location.replace('signup.php');</script>";
                          exit();
                         }
                   }
                   else
                   {
                     $_SESSION['message'] = "Name field is empty";
                     $_SESSION['msg_type'] = "danger";



                    echo "<script>location.replace('signup.php');</script>";
                    exit();
                   }




            }





      }








?>

<script type="text/javascript">
                                    function validate() {

                                            var stud = document.getElementById('studnum').value;
                                            if (stud != "")
                                            {
                                                  document.getElementById('e').value = stud+"@tut4life.ac.za";
                                            }
                                            else
                                            {
                                              document.getElementById('e').value = "";
                                            }
                                    }
           </script>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Student Transport System</h4>
            <p>Bus transport is available for all students staying in residences that are not situated on a campus.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>

          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">About Us</a></li>
              <li><a href="#">How We Work</a></li>
              <li><a href="#">Quick Support</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Campus Location</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14399.784036214123!2d28.0968938!3d-25.5401753!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e2de5e61f9e48e7!2sTshwane%20University%20of%20Technology%20-%20Soshanguve%20South%20Campus%20-%20TUT!5e0!3m2!1sen!2sza!4v1637665041778!5m2!1sen!2sza" width="358" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

        </div>
      </div>
    </footer>

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2021 TUT Student Transport System</p>
          </div>
        </div>
      </div>
    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0;
      function clearField(t){
      if(! cleared[t.id]){
          cleared[t.id] = 1;
          t.value='';
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
