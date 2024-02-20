<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

<body>
    <form action="search.php" method="post">
        <label for="search">Search: </label>
        <input type="text" name="search" id="">
        <button type="submit">OK</button>
    </form>
    <?php
    foreach ($food as $key => $value) {
        echo '<h1>' . $key . '</h1>';
        echo '<ul>';
        foreach ($value as $item) {
            echo '<li>' . $item . '</li>';
        }
        echo '</ul>';
    }
    ?>
</body>

</html>