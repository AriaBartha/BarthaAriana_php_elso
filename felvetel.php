<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felvétel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark" fixed-top bg-body-tertiary>
        <div class="container-md">
            <a class="navbar-brand" href="index.php">Listázás</a>
            <a class="navbar-brand" href="felvetel.php">Felvétel</a>
        </div>
    </nav>
    <main class="container">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Név</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="mb-3" >
                <label for="type" class="form-label">Típus</label>
                <input type="text" name="type" id="type" class="form-control">
            </div>
            <div class="mb-3">
                <label for="layout" class="form-label">Lokalizáció</label>
                <input type="text" name="layout" id="layout" class="form-control">
            </div>
            <div class="mb-3">
                <label for="width" class="form-label">Szélesség</label>
                <input type="number" name="width" id="width" class="form-control">
            </div>
            <div class="mb-3">
                <label for="wireless" class="form-check-label">Vezetékes</label>
                <input type="radio" name="wireless" id="wired" value="0" class="form-check-input">
                <label for="wireless" class="form-check-label">Vezeték nélküli</label>
                <input type="radio" name="wireless" id="wireless" value="1" class="form-check-input">
                
            </div>
            <button type="submit" class="btn btn-outline-success">Elküld</button>
        </form>
    </main>
    <?php
    $errors = [];
    if (!isset($_POST["name"]) || empty($_POST["name"])){
        $errors[] = "Billentyűzet nevének megadása kötelező";
    }
    if (!isset($_POST["type"]) || empty($_POST["type"])){
        $errors[] = "Billentyűzet típus megadása kötelező";
    }
    if (!isset($_POST["layout"]) || empty($_POST["layout"])){
        $errors[] = "Billenytyűzet lokalizáció megadása kötelező";
    }
    if (!isset($_POST["width"]) || empty($_POST["width"])){
        $errors[] = "Billentyűzet szélességének megadása kötelező";
    }
    if (!isset($_POST["wireless"]) || empty($_POST["wireless"])){
        $errors[] = "Kötelező megadni, hogy vezetékes-e vagy sem.";
    }

    if (empty($errors)){
        require_once "KeyboardsTableMethods.php";
        $database = new KeyboardsTableMethods();
        $database->create($_POST);
    }
    ?>
</body>
</html>