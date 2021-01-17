<?php 
   
if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
    // Include file which makes the Database Connection. 
    include 'connect.php';    

    //Incription Student
    if(isset($_POST['signup_submit1'])) {

        // Read Inputs into Variables
        $name_s=$_POST['InputNom1'];
        $prenom_s=$_POST['InputPrenom1'];
        $sexe_s=$_POST['FlexRadio1'];
        $age_s=$_POST['InputAge1'];
        $email_s=$_POST['InputEmail1'];

        // Insert Values
        $sql=("INSERT INTO student (nom_s,pren_s,sexe_s,age_s,email_s) VALUES ('$name_s','$prenom_s','$sexe_s','$age_s','$email_s')");
        if(mysqli_query($conn, $sql)){
            echo "Student added successfully.";
            header('Location:../welcome.php');
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }

    //Incription Enseignant
    if(isset($_POST['signup_submit2'])) {
        
        // Read Inputs into Variables
        $name_e=$_POST['InputNom2'];
        $prenom_e=$_POST['InputPrenom2'];
        $age_e=$_POST['InputAge2'];
        $email_e=$_POST['InputEmail2'];
        $grade_e=$_POST['InputGrade2'];

        // Insert Values
        $sql=("INSERT INTO enseignant (nom_e,pren_e,age_e,email_e,grade_e) VALUES ('$name_e','$prenom_e','$age_e','$email_e','$grade_e')");
        if(mysqli_query($conn, $sql)){
            echo "Enseignant added successfully.";
            header('Location:../welcome.php');
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
}   
?>