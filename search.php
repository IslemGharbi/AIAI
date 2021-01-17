<?php
    require "header.php";
?>
    <main>
        <center id="title_login"><h1 class="display-4">Chercher le Profile</h1></center>
        <div class="container" id="search_container">
            <div class="row">
                <center>
                <div class="col-5 .col-md-4">
                    <div class="p-3 border bg-light">
                        <form action="assets/SearchProcess.php" method="post">
                            <div class="mb-3">
                                <label for="InputNom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="InputNom3" name="InputNom3" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="search" id="btn_sub_reset">Chercher</button>
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