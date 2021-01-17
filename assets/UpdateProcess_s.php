<?php 
session_start();
$nom_c = $_SESSION['varname'];
if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
    // Include file which makes the Database Connection. 
    include 'connect.php';    

    //Incription Student
    if(isset($_POST['update_s'])) {

        // Read Inputs into Variables
        $name=$_POST['InputNom4'];
        $prenom=$_POST['InputPrenom4'];
        $age=$_POST['InputAge4'];
        $email=$_POST['InputEmail4'];

        // Insert Values
        $sql=("UPDATE student SET nom_s='$name',pren_s='$prenom',age_s='$age',email_s='$email' WHERE nom_s='$nom_c'");
        if(mysqli_query($conn, $sql)){
            echo "Student Changed successfully.";
            header('Location:../updated.php');
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
   }  
?>