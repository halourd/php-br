<?php
require_once 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `tbl_student_info` WHERE `student_id` = '$id'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);

    $student_id = $row['student_id'];
    $firstname = $row['firstname'];
    $middlename = $row['middlename'];
    $lastname = $row['lastname'];
    $age = $row['age'];
    $gender = $row['gender'];
    $course = $row['course'];
    $year = $row['year'];
    $section = $row['section'];
    $nationality = $row['nationality'];
    $contact = $row['contact_number'];
    $address = $row['address'];
    $password = $row['password'];
    $email = $row['email'];
}else{
    header('location: index.php');
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
    <section class="bg-info bg-gradient" style="min-height: 100vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col mt-5">
                    <div class="card border=0 bg-body rounded shadow-lg bg-light">
                        <div class="card-body p-4">
                            <form action="update.php" method="post">
                                <div class="text-center mt-4 mb-5">
                                    <h2 class="fw-bold" style="font-family: Georgia, serif;">Edit Student</h2>
                                    <small class="text-muted fst-italic">Please enter your valid information</small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                        <label for="firstname" class="form-label">Firstname</label>
                                        <input type="hidden" name="id" value="<?=$id?>">
                                        <input type="text" id="firstname" class="form-control" name="firstname" value="<?=$firstname?>" required>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                        <label for="middlename" class="form-label">Middlename</label>
                                        <input type="text" id="middlename" class="form-control" name="middlename" value="<?=$middlename?>">
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-xs-2">
                                        <label for="lastname" class="form-label">Lastname</label>
                                        <input type="text" id="lastname" class="form-control" name="lastname" value="<?=$lastname?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-6">
                                        <label for="age" class="form-label mt-2">Age</label>
                                        <input type="number" id="age" class="form-control" name="age" value="<?=$age?>" required>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <label for="gender" class="form-label mt-2">Gender</label>
                                        <select class="form-select" name="gender" id="gender" required>
                                            <option value="Female"<?= ($gender == 'Female') ? 'selected' : ''?>>Female</option>
                                            <option value="Male"<?= ($gender == 'Male') ? 'selected' : ''?>>Male</option>
                                            <option value="Others"<?= ($gender == 'Others') ? 'selected' : ''?>>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <label for="course" class="form-label mt-2">Course</label>
                                        <select class="form-select" name="course" id="course" placeholder="Select your Course" required>
                                            <option value="BSIT"<?= ($course == 'BSIT') ? 'selected' : ''?>>BSIT</option>
                                            <option value="BSCrim"<?= ($course == 'BSCrim') ? 'selected' : ''?>>BSCrim</option>
                                            <option value="BSTM"<?= ($course == 'BSTM') ? 'selected' : ''?>>BSTM</option>
                                            <option value="BSA"<?= ($course == 'BSA') ? 'selected' : ''?>>BSA</option>
                                            <option value="BSIS"<?= ($course == 'BSIS') ? 'selected' : ''?>>BSIS</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <label for="gender" class="form-label mt-2">Gender</label>
                                        <select class="form-select" name="gender" id="gender" required>
                                            <option value="Female"<?= ($gender == 'Female') ? 'selected' : ''?>>Female</option>
                                            <option value="Male"<?= ($gender == 'Male') ? 'selected' : ''?>>Male</option>
                                            <option value="Others"<?= ($gender == 'Others') ? 'selected' : ''?>>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-12">
                                        <label for="section" class="form-label mt-2">Section</label>
                                        <input type="text" id="section" class="form-control" name="section" value="<?=$section?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                        <label for="nationality" class="form-label mt-2">Nationality</label>
                                        <input type="text" id="nationality" class="form-control" name="nationality" value="<?=$nationality?>" required>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                        <label for="contact" class="form-label mt-2">Contact Number</label>
                                        <input type="number" id="contact" class="form-control" name="contact" value="<?=$contact?>" required>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-xs-2">
                                        <label for="address" class="form-label mt-2">Address</label>
                                        <input type="text" id="address" class="form-control" name="address" value="<?=$address?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <label for="password" class="form-label mt-2">Password</label>
                                        <input type="password" id="password" class="form-control" name="password" value="<?=$password?>" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="email" class="form-label mt-2 mb-2">Email</label>
                                        <input type="email" id="email" class="form-control" name="email" value="<?=$email?>" required>
                                    </div>
                                </div>
                                <div class= "text-center my-3 ">
                                    <input class="btn btn-success " type="submit" name="update" value="Update">
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
