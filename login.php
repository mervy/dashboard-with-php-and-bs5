<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<!-- 
    Para deixar lado a lado img e a section abaixo, usei: d-flex justify-content-around ou evenly
    Mas para isso deixei apenas dois itens: img e section
 -->
<div class="container d-flex justify-content-evenly mt-5 py-5">
    <img src="assets/img/logo-login.png" alt="Logo login">
    <section class="d-flex align-items-center">
        <div>
            <h3 class="display-5 fw-bold text-center">
                DASHBOARD<br>
                <span class="text-danger fs-3">Gkult Corp</span>
            </h3>
            <form class="d-block mx-auto mb-4" style="width:350px" action="index.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label float-start">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label float-start">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </form>
        </div>

    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>