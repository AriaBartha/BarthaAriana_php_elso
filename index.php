<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listázás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once "KeyboardsTableMethods.php";
        $database = new KeyboardsTableMethods();
        $keyboards = $database->getAll();
    ?>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark" fixed-top bg-body-tertiary>
        <div class="container-md">
            <a class="navbar-brand" href="index.php">Listázás</a>
            <a class="navbar-brand" href="felvetel.php">Felvétel</a>
        </div>
    </nav>
    <main class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Név</th>
                    <th>Típus</th>
                    <th>Localizáció</th>
                    <th>Szélesség</th>
                    <th>Vezeték nélküli (igen=1 / nem=0)</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($keyboards as $keyboard): ?>
                <tr>
                    <td><?php echo $keyboard['id'] ?></td>
                    <td><?php echo $keyboard['name'] ?></td>
                    <td><?php echo $keyboard['type'] ?></td>
                    <td><?php echo $keyboard['layout'] ?></td>
                    <td><?php echo $keyboard['width'] ?></td>
                    <td><?php echo $keyboard['wireless'] ?></td>
                </tr>
            <?php endforeach; ?>    
            </tbody>
        </table>
    </main>
</body>
</html>