<?php
    require "header.php";
?>
    <main>
    <center id="title_signup"><h1 class="display-4">Inscription</h1></center>
        <div class="container px-4" id="signup_container">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 border bg-light">
                    <h3>Inscription Eleve</h3>
                        <form id="form1" method="POST" action="assets/SignupProcess.php">
                            <div class="mb-3">
                                <label for="InputNom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="InputNom1" name="InputNom1" required>
                            </div>
                            <div class="mb-3">
                                <label for="InputPrenom" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="InputPrenom1" name="InputPrenom1" required>
                            </div>
                            <div class="mb-3">
                                <label for="InputAge" class="form-label">Age</label>
                                <input type="number" class="form-control" id="InputAge1" name="InputAge1" required>
                            </div>
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="InputEmail1" name="InputEmail1" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">Ne partage jamais ton Email avec autre personne.</div>
                            </div>
                            <div class="mb-3">
                                <label for="InputSexe" class="form-label">Sexe</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="FlexRadio1" id="flexRadio1" value="Homme" checked>
                                    <label class="form-check-label" for="Radio">Homme</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="FlexRadio1" id="flexRadio2" value="Femme">
                                    <label class="form-check-label" for="Radio">Femme</label>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="Check1" required>
                                <label class="form-check-label" for="Check1">Check me out</label>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <center><button type="submit" class="btn btn-primary" name="signup_submit1" id="btn_sub_reset">Inscription</button></center>
                                    </div>
                                    <div class="col">
                                        <center><input type="reset"  class="btn btn-primary" name="signup_reset1" id="btn_sub_reset"></center>
                                    </div>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                        <h3>Inscription Enseignant</h3>
                        <form id="form2" action="assets/SignupProcess.php" method="POST">
                            <div class="mb-3">
                                <label for="InputNom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="InputNom2" name="InputNom2" required>
                            </div>
                            <div class="mb-3">
                                <label for="InputPrenom" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="InputPrenom2" name="InputPrenom2" required>
                            </div>
                            <div class="mb-3">
                                <label for="InputAge" class="form-label">Age</label>
                                <input type="number" class="form-control" id="InputAge2" name="InputAge2" required>
                            </div>
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="InputEmail2" name="InputEmail2" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">Ne partage jamais ton Email avec autre personne.</div>
                            </div>
                            <div class="mb-3">
                                <label for="Inputgrade" class="form-label">Grade</label>
                                <input type="text" class="form-control" id="InputGrade2" name="InputGrade2" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="Check2" required>
                                <label class="form-check-label" for="Check2">Check me out</label>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <center><button type="submit" class="btn btn-primary" name="signup_submit2">Inscription</button></center>
                                    </div>
                                    <div class="col">
                                        <center><input type="reset"  class="btn btn-primary" name="signup_reset2" id="btn_sub_reset"></center>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    require "footer.php";
?>