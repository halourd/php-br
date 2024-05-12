<?php
require_once 'config.php';

$error = null;

 if(isset($_POST['submit'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    //check if email is valid
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "*Invalid Email";
    }

    $sql = "SELECT * FROM `tbl_student_info` WHERE `email` = '$email' AND `password` = '$password' ";
    $result = mysqli_query($conn, $sql);
    $_SESSION['student_id'] = $row['student_id'];
    
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if($row['role'] == "Administrator"){
            $_SESSION['id'] = $row['$student_id'];
            session_start();
            header("Location: index.php");
            exit;
        }
        
        if($row['role'] == "Student"){
            session_id($row['$student_id']);
            session_start();
            header("Location: account.php");
            exit;
        }

        $error = "Account not Administrator";
    }else {
        $error = "Sorry, email or password is invalid";
    }
    

 }

// if(isset($_POST['submit'])){
//     $email = $_POST['email'];
//     $password = $_POST['password'];
    
//     if($role == "admin" && $email == "admin@gmail.com" && $password == "admin12345"){
//         header("Location: index.php");
//         exit;
//     }else{
//         $error = "Invalid Email and Password";
        
//     }

//     if($role == "student"){
//         $sql = "SELECT * FROM `tbl_student_info` WHERE `email` = '$email' AND `password` = '$password' ";
//         $result = mysqli_query($conn , $sql);

//         if(mysqli_num_rows($result) == 1 ){
//             $row = mysqli_fetch_assoc($result);
//                 header("Location: account.php");
//                 exit;
//             }
//         } else {
//             $error = "*Invalid email and password";
//         }
//     } else{
//         echo "<script>
//                     alert('Account not Found!');
//                     location.href = login.php';
//                 </script>";
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<section class="bg-info bg-gradient " style=" min-height: 100vh">
    <div class="container">
        <div class="row  d-flex align-items-center justify-content-center ">
            <div class=" col-lg-5 col-md-7  mt-5 pt-5">
                <div class="card p-2 border-0 bg-body rounded shadow-lg bg-light mt-5">
                    <div class="card-body">
                        <div class="text-center my-4">
                            <h2 class="fw-bold" style="font-family: Georgia, serif;">Log in</h2>
                            <small class="text-muted ">Please enter your email and password.</small>
                        </div>
                        <form action="login.php" method="post">
                        <?php if (isset($error)) { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $error; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php } ?>
                            <div class="form-group d-flex flex-row align-items-center mb-4">
                                <i class="fa-solid fa-envelope fa-lg"></i>
                                <input type="email" class="form-control mx-2" name="email" placeholder="Email">
                            </div>
                            <div class="form-group d-flex flex-row align-items-center">
                                <i class="fa-solid fa-lock fa-lg"></i>
                                <input type="password" class="form-control mx-2" name="password" placeholder="Password">
                            </div>
                            <div class="d-grid gap-1 mt-3">
                                <button type="submit" class="btn btn-primary m-2" name="submit">Log in</button>
                            </div>
                            <div class="text-center">
                                <p>Don't have an account? <a href="register.php" class="text-decoration-none">Register here!</a><small class="text-muted p-1">(for student only)</small></p>
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
