<?php
session_start();
require_once 'config.php';

if(isset($_SESSION['student_id'])) {
    $id = $_SESSION['student_id'];
    
    $sql = "SELECT * FROM `tbl_student_info` WHERE `student_id` = '$id'";  
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . mysqli_error($conn)); 
    }
    if (mysqli_num_rows($result) == 0) {
        die("No data found : $id");
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg justify-content-center  text-light fw-bold  mb-5 p-3" style="background-color: #00308F;">
    <div class="container">
        <a class="navbar-brand  text-light fs-4">PHP Complete Crud Application</a>
        <div class="float-end">
        <ul class="navbar-nav fs-6 ">
        <li class="nav-item ">
          <a class="nav-link text-light " aria-current="page" href="#">Subject</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Notes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Student Profile </a>
          <div class="dropdown-menu dropdown-menu-right ">
            <a href="logout.php" class="btn btn-outline-danger  rounded d-grid gap-1 mb-1 ">Log out</a>
          </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="col-lg-12">
            <div class="card border-0 shadow-lg mb-5">
                <div class="card-body">
                    <ul class="nav nav-tabs my-4" role="tablist">
                        <li class="nav-item"><a class="nav-link active" aria-current="first page" href="#">Info</a></li>
                        <li class="nav-item"><a class="nav-link disable" aria-current="second page" href="#">Account</a></li>
                        <li class="nav-item"><a class="nav-link disable" aria-current="third page" href="#">Profile</a></li>
                    </ul>
                    <div class="row">
                        <div class="col-12">
                        <img src="img/pmftci-bg.png" alt="" class=" card-img-top rounded">
                        </div>
                    </div>
                    <h6 class="text-center text-light bg-primary rounded p-2 mt-4">Student Information</h6>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-4">
                            <?php
                        
                                function return_avatar_file_path($gender){
                                    if($gender == 'Female'){
                                        return 'img\female_avatar1.jpg';
                            
                                    }else{
                                        return 'img\male_avatar1.jpg';
                                    }
                                }

                                    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
                                        $avatar_file_path = return_avatar_file_path($gender);

                                    echo '<img src="' . $avatar_file_path . '" alt="Avatar" class="img-fluid img-rounded-circle" style=" height: 50%;">';
                            ?>
                        </div>
                    </div>
                        <div class="col m-4">
                            <div class="card m-3 border-0  pb-3">
                                <div class="card-body">
                                    <div class="row col-sm-12 text-center">
                                        <div class="form-group col-sm-4 text-center">
                                            <label for="firstname" class="form-label fw-bold ">Firstname</label>
                                            <p><?php echo $row['firstname']; ?></p>
                                        </div>
                                        <div class="form-group col-sm-4 ">
                                            <label for="middlename" class="form-label  fw-bold">Middlename</label>
                                            <p><?php echo $row['middlename']; ?></p>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="lastname" class="form-label fw-bold">Lastname</label>
                                            <p><?php echo $row['lastname']; ?></p>
                                        </div>
                                    </div><hr>
                                    <div class="row col-sm-12 text-center">
                                        <div class="form-group col-sm-4 text-center">
                                            <label for="age" class="form-label fw-bold">Age</label>
                                            <p><?php echo $row['age']; ?></p>
                                        </div>
                                        <div class="form-group col-sm-4 ">
                                            <label for="gender" class="form-label  fw-bold">Gender</label>
                                            <p><?php echo $row['gender']; ?></p>
                                            <p><?php $gender ?></p>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="course" class="form-label fw-bold">Course</label>
                                            <p><?php echo $row['course']; ?></p>
                                        </div>
                                    </div><hr>
                                    <div class="row col-sm-12 text-center">
                                        <div class="form-group col-sm-4">
                                            <label for="year" class="form-label fw-bold">Year</label>
                                            <p><?php echo $row['year']; ?></p>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="section" class="form-label fw-bold">Section</label>
                                            <p><?php echo $row['section']; ?></p>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="nationality" class="form-label fw-bold ">Nationality</label>
                                            <p><?php echo $row['nationality']; ?></p>
                                        </div>
                                    </div><hr>
                                    <div class="row col-sm-12 text-center">
                                        <div class="form-group col-sm-4 text-center">
                                            <label for="contact" class="form-label fw-bold">Contact</label>
                                            <p><?php echo $row['contact_number']; ?></p>
                                        </div>
                                        <div class="form-group col-sm-4 ">
                                            <label for="address" class="form-label fw-bold ">Address</label>
                                            <p><?php echo $row['address']; ?></p>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="password" class="form-label fw-bold ">Password</label>
                                            <p><?php echo $row['password']; ?></p>
                                        </div>
                                    </div><hr>
                                    <div class="row col-sm-12 text-center">
                                        <div class="form-group col-sm-4">
                                            <label for="Email" class="form-label fw-bold">Email</label>
                                            <p><?php echo $row['email']; ?></p>
                                        </div>
                                    </div>
                            </div>
                        
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>