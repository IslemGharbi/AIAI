<?php 
session_start();
$nom_c = $_SESSION['varname'];
if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
    // Include file which makes the Database Connection. 
    include 'connect.php';    

    //Incription Student
    if(isset($_POST['update_e'])) {

        // Read Inputs into Variables
        $name=$_POST['InputNom4'];
        $prenom=$_POST['InputPrenom4'];
        $age=$_POST['InputAge4'];
        $email=$_POST['InputEmail4'];
        $grade=$_POST['InputGrade4'];

        // Insert Values
        $sql=("UPDATE enseignant SET nom_e='$name',pren_e='$prenom',age_e='$age',email_e='$email',grade_e='$grade' WHERE nom_e='$nom_c'");
        if(mysqli_query($conn, $sql)){
            echo "Enseignant Changed successfully.";
            header('Location:../updated.php');
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
   }  
?>