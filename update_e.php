<?php
    require "header.php";
?>
    <main>
        <center id="title_login"><h1 class="display-4">Modifier Un Enseignant</h1></center>
        <div class="container" id="update_container">
            <div class="row">
                <center>
                <div class="col-5 .col-md-4">
                    <div class="p-3 border bg-light">
                    <form id="form1" method="POST" action="assets/UpdateProcess_e.php">
                        <div class="mb-3">
                            <label for="InputNom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="InputNom4" name="InputNom4" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputPrenom" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="InputPrenom4" name="InputPrenom4" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputAge" class="form-label">Age</label>
                            <input type="number" class="form-control" id="InputAge4" name="InputAge4" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="InputEmail4" name="InputEmail4" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputGrade" class="form-label">Grade</label>
                            <input type="text" class="form-control" id="InputGrade4" name="InputGrade4" aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update_e" id="btn_sub_reset">Update</button>
                        </form>
                    </div>
                </div>
                </center>
            </div>
        </div>
    </main>
<?php
    require "footer.php";
?>