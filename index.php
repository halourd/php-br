
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
<nav class="navbar navbar-expand-sm justify-content-center  text-light fw-bold  mb-5 bg-info" style="background-color: gray;">
    <div class="container">
        <a class="navbar-brand ">PHP Complete Crud application</a>
        <div class="float-end">
            <ul class="navbar-nav">
                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                    <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                        <li><a class="dropdown-item" href="#">Manage Students</a></li>
                        <hr><li><a class="dropdown-item" href="#">Manage Courses</a></li>
                        <hr><li><a class="dropdown-item" href="#">Generate Reports</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="homepage.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container  pt-5 px-4  my-5 border rounded border=0 shadow bg-light">
    <div class="text-center mb-4">
        <h2 style="font-family: Georgia, serif;">CRUD Operations for Student Information</h2>
        <small class="text-muted text-small fst-italic">Integrative Programming and Technologies</small>
    </div>
    <div class="mb-3">
        <a href="homepage.php" class="btn btn-sm btn-success"><i class="fa-solid fa-house"></i></a>
        <a href="add.php" class="btn btn-sm btn-primary">Add New <i class="fa-solid fa-circle-plus"></i></a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-striped text-center">
            <thead class="table-dark">
                <tr class=" p-4">
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Section</th>
                    <th>Nationality</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'config.php';

                $sql = "SELECT * FROM `tbl_student_info`";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        //ROW 1
                        if($row['role'] == "Student"){
                        ?>
                        <tr>
                            <td><?= $row['student_id'] ?></td>
                            <td><?= $row['firstname']?></td>
                            <td><?= $row['middlename']?></td>
                            <td><?= $row['lastname']?></td>
                            <td><?= $row['age']?></td>
                            <td><?= $row['gender']?></td>
                            <td><?= $row['course']?></td>
                            <td><?= $row['year']?></td>
                            <td><?= $row['section']?></td>
                            <td><?= $row['nationality']?></td>
                            <td><?= $row['contact_number']?></td>
                            <td><?= $row['address']?></td>
                            <td><?= $row['password']?></td>
                            <td><?= $row['email']?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['student_id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete.php?id=<?= $row['student_id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
                            </td>
                        </tr>
                        <?php }}}else{ ?>
                            <td class="text-center fw-bold" colspan="14">No results Found.</td>

    
                            <?php } mysqli_close($conn); ?>
             </tbody>
        </table>
    </div>
</div>
</body>
</html>
