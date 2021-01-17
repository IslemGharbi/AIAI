<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
    // Include file which makes the Database Connection. 
    include 'connect.php';    

    //Incription Student
    if(isset($_POST['search'])) {
        $name_c=$_POST['InputNom3'];
        $phpVariable = $name_c;
        
        $sql1 = "SELECT * FROM student WHERE nom_s='$name_c'";
        $sql2 = "SELECT * FROM enseignant WHERE nom_e='$name_c'";
        $r1 = mysqli_query($conn, $sql1);
        $r2 = mysqli_query($conn, $sql2);
        $num1 = mysqli_num_rows($r1);
        $num2 = mysqli_num_rows($r2);

        if($num1>0)  {
            echo "Student Found Succesfully!";
            header("location:../update_s.php");
        }
        elseif($num2>0){
            echo" Enseignant Found Succesfully!";
            header("location:../update_e.php");
        }
        else{
            echo" Enseignant/Student Not Found!";
            exit();
        }
    }
}
$_SESSION['varname'] = $name_c;
?>