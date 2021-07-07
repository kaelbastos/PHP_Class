<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <?php include "resources/Header.php"; ?>

    <div class='content'>

        <?php include $_SERVER["DOCUMENT_ROOT"]."/PHP/Avaliação 2/resources/ContentTable.php"; ?>

        <fieldset>
            <form method="get" action="Include.php">
                <button type="submit" class="homeButton">Novo Aluno</button>
            </form>
        </fieldset>

    </div>

    <?php include "resources/Footer.php"; ?>

</body>
</html>