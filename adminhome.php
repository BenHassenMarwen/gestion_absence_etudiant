<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" type="text/css" href="admin.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header">

        <a href="">Admin Dashboard</a>

        <div class="logout">

            <a href="logout.php" class="btn btn-primary">Logout</a>

        </div>

    </header>


    <aside>

        <ul>

            <li>
                <a href="">Gestion des absences</a>
            </li>

            <li>
                <a href="">Gestion des étudiants</a>
            </li>

            <li>
                <a href="">Gestion des séances</a>
            </li>

            <li>
                <a href="">Gesion des matières</a>
            </li>



        </ul>


    </aside>


    <div class="content">

        <h1>Bienvenu:
            <?php
            session_start();

            echo $_SESSION['username']
            ?>
        </h1>

        <p>les statestiques serant affichées ici</p>

        <input type="text" name="">


    </div>

</body>

</html>