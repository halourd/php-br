
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-center  text-light fw-bold  mb-5 bg-primary">
    <div class="container">
        <!-- <a class="navbar-brand ">PHP Complete Crud application</a> -->
        <div class="float-end">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user fa-xl"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="studentDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <hr><li><a class="dropdown-item" href="#">Lesson</a></li>
                        <hr><li><a class="dropdown-item" href="#">Attendance</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="homepage.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="col-lg-12">
            <div class="card border-0 shadow-lg mb-5">
                <div class="card-body">
                    <ul class="nav nav-tabs my-4" role="tablist">
                        <li class="nav-item"><a class="nav-link active" aria-current="first page" href="#">Profile</a></li>
                        <li class="nav-item"><a class="nav-link disable" aria-current="second page" href="#">Account</a></li>
                        <li class="nav-item"><a class="nav-link disable" aria-current="third page" href="#">Info</a></li>
                    </ul>
                    <div class="row">
                        <div class="col-12">
                        <img src="img/pmftci-bg.png" alt="" class=" card-img-top rounded">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="card m-3 border-0 shadow bg-light pb-3">
                        <div class="card-body">
                            <h6 class="text-center text-light bg-primary rounded p-3 m-3">Student Information</h6>
                            <div class="row col-sm-12 text-center">
                                <div class="form-group col-sm-4 text-center">
                                    <label for="firstname" class="form-label fw-bold ">Firstname</label>
                                </div>
                                <div class="form-group col-sm-4 ">
                                    <label for="middlename" class="form-label  fw-bold">Middlename</label>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="lastname" class="form-label fw-bold">Lastname</label>
                                </div>
                            </div>
                            <div class="row col-sm-12 text-center">
                                <div class="form-group col-sm-4 text-center">
                                    <label for="age" class="form-label fw-bold">Age</label>
                                </div>
                                <div class="form-group col-sm-4 ">
                                    <label for="gender" class="form-label  fw-bold">Gender</label>
                                    <p><?php $gender ?></p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="course" class="form-label fw-bold">Course</label>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="year" class="form-label fw-bold">Year</label>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="section" class="form-label fw-bold">Section</label>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="nationality" class="form-label fw-bold ">Nationality</label>
                                </div>
                            </div>
                            <div class="row col-sm-12 text-center">
                                <div class="form-group col-sm-4 text-center">
                                    <label for="contact" class="form-label fw-bold">Contact</label>
                                </div>
                                <div class="form-group col-sm-4 ">
                                    <label for="address" class="form-label fw-bold ">Address</label>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="password" class="form-label fw-bold ">Password</label>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="Email" class="form-label fw-bold">Email</label>
                                </div>
                            </div>
                            <a href="edit.php" class="btn btn-outline-primary d-grid gap-1 mt-3 mx-3 ">Edit</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>