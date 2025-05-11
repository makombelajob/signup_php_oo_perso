<?php
include_once 'includes/header.php';
?>
<main class="container ">
    <section class="row">
        <div class="col-10 m-auto min-h-100">
            <h1 class="text-center fs-1 text-uppercase text-primary fw-bolder">Signup in PHP Object</h1>
            <form action="signup_treatment.php" method="post" class="alert alert-secondary">
                <div>
                    <label class="form-label fs-2 my-3" for="email">Email</label>
                    <input class="form-control fs-3" type="email" id="email" name="email">
                </div>
                <div>
                    <label class="form-label fs-2 my-3" for="password">Password</label>
                    <input class="form-control fs-3" type="password" id="password" name="password">
                </div>
                <div>
                    <input type="checkbox" id="gpdr">
                    <label class="fs-3 my-3" for="gpdr">J'acceptes les conditions d'utilisations</label>
                </div>
                <div class="text-center my-3">
                    <button class="btn btn-primary fs-2" type="submit">Signup</button>
                </div>
            </form>
        </div>
    </section>
</main>
