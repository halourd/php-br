<?php
require_once 'config.php';

if(isset($_POST['register'])){

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $nationality = $_POST['nationality'];
    $contact = $_POST['contact_number'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `tbl_student_info`(`firstname`, `middlename`, `lastname`, `age`, `gender`, `course`, `year`, `section`, `nationality`, `contact_number`, `address`, `password`, `email`)
        VALUES ('$firstname', '$middlename', '$lastname', '$age', '$gender', '$course', '$year', '$section', '$nationality', '$contact', '$address','$password', '$email')";

    if(mysqli_query($conn,$sql)){
        echo "<script>
                    alert('New record successfully added!');
                    location.href = 'index.php';
                </script>";
        }else{
            "<script>
                    alert('Failed to add!');
                    location.href = '#'';
                  </script>";
        }
        mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <section class="bg-info bg-gradient" style=" min-height: 100vh">
        <div class="container">
            <div class="row justify-content-center ">
                <div class=" col mt-5 ">
                    <div class="card border=0 bg-body rounded shadow-lg bg-light ">
                        <div class="card-body p-4 ">
                            <form action="add.php" method="post">
                                <div class="text-center mt-4 mb-5">
                                    <h2 class=" fw-bold" style="font-family: Georgia, serif;">Add Student</h2>
                                    <small class="text-muted fst-italic">Please enter a valid information</small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                        <label for="firstname" class="form-label ">Firstname</label>
                                        <input type="text"  id="firstname" class="form-control" name="firstname" required>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-xs-2 ">
                                        <label for="middlename" class="form-label ">Middlename</label>
                                        <input type="text"  id="middlename" class="form-control" name="middlename" >
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-xs-2">
                                        <label for="lastname" class="form-label ">Lastname</label>
                                        <input type="text"  id="lastname" class="form-control" name="lastname" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-6">
                                        <label for="age" class="form-label mt-2">Age</label>
                                        <input type="number"  id="age" class="form-control" name="age"required >
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <label for="gender" class="form-label mt-2">Gender</label>
                                        <select class="form-select" name="gender" id="gender" required>
                                        <option value="" disabled selected>Select your Gender</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    </div>
                                    <div class="col-lg-4 col-md-12 ">
                                        <label for="course" class="form-label mt-2">Course</label>
                                        <select class="form-select " name="course" id="course" placeholder ="Select your Course" required>
                                        <option value="" disabled selected>Select your Course</option>
                                        <option value="BSIT">BSIT</option>
                                        <option value="BSCrim">BSCrim</option>
                                        <option value="BSTM">BSTM</option>
                                        <option value="BSA">BSA</option>
                                        <option value="BSIS">BSIS</option>
                                    </select>
                                    </div>
                                    <div class="col-lg-2 col-md-12 ">
                                        <label for="year" class="form-label mt-2">Year</label>
                                        <select class="form-select " name="year" id="year" placeholder ="Select your Course" >
                                            <option value="" disabled selected>Select your Year</option>
                                            <option value="1st">1st</option>
                                            <option value="2nd">2nd</option>
                                            <option value="3rd">3rd</option>
                                            <option value="4th">4th</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-12 ">
                                        <label for="section" class="form-label mt-2">Section</label>
                                        <input type="text"  id="section" class="form-control" name="section"required >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                        <label for="nationality" class="form-label mt-2">Nationality</label>
                                        <input type="text"  id="nationality" class="form-control" name="nationality" required>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                        <label for="contact" class="form-label mt-2">Contact Number</label>
                                        <input type="number"  id="contact" class="form-control" name="contact" required>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                        <label for="address" class="form-label mt-2">Address</label>
                                        <input type="text"  id="address" class="form-control" name="address"required >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                            <label for="password" class="form-label mt-2">Password</label>
                                            <input type="password"  id="password" class="form-control" name="password"required >
                                        </div>
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                            <label for="confirm_password" class="form-label mt-2">Confirm Password</label>
                                            <input type="password"  id="confirm_password" class="form-control" name="confirm_password"required >
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-2">
                                            <label for="email" class="form-label mt-2">Email</label>
                                            <input type="email"  id="email" class="form-control " name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class= "text-center mb-3 ">
                                    <button class="btn btn-primary" name="register">Add student</button>
                                    <a href="index.php" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>