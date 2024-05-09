<?php
require_once 'config.php';

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $nationality = $_POST['nationality'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    

    $sql = "UPDATE `tbl_student_info` SET `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `age` = '$age',
     `gender` = '$gender', `course` = '$course', `year` = '$year', `section` = '$section', `nationality` = '$nationality',
      `contact_number` = '$contact', `address` = '$address',`password` = '$password', `email` = '$email' WHERE `student_id` = '$id'";

     if(mysqli_query($conn,$sql)){
        echo "<script>
                    alert('New record successfully updated!');
                    location.href = 'index.php';
                </script>";
        }else{
            "<script>
                    alert('Failed to add!');
                    location.href = 'index.php';
                  </script>";
        }

    mysqli_close($conn);
}

?>