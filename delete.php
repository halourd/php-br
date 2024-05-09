<?php
require_once 'config.php';

$id =$_GET['id'];
$sql = "DELETE  FROM `tbl_student_info` WHERE `student_id` = $id";
$result = mysqli_query($conn, $sql);

if($result){
    echo "<script>
                    alert('Record successfully deleted!');
                    location.href = 'index.php';
                </script>";
        }else{
            "<script>
                    alert('Failed to delete!');
                    location.href = 'index.php';
                  </script>";
        }

    mysqli_close($conn);
?>