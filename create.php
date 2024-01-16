<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Beyblade</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="./">Overview</a></li>
            <li><a href="#">New Beyblade</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Let's create a new Beyblade!</h1>

    <form action="../index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="type">Type:</label>
        <input type="text" id="type" name="type"><br>
        <label for="spin_direction">Spin direction:</label>
        <select name="spin_direction" id="spin_direction">
            <option value="left">Left</option>
            <option value="left">Right</option>
        </select><br>
        <label for="weight">Weight:</label>
        <input type="number" id="weight" name="weight"><br>
        <label for="attack_power">Attack Power:</label>
        <input type="number" id="attack_power" name="attack_power"><br>
        <label for="defense_power">Defense Power:</label>
        <input type="number" id="defense_power" name="defense_power"><br>
        <label for="stamina">Stamina:</label>
        <input type="number" id="stamina" name="stamina"><br>
        <label for="special_move">Special Move:</label>
        <input type="text" id="special_move" name="special_move"><br>
        <label for="beast">Beast:</label>
        <input type="text" id="beast" name="beast"><br>
    </form>
</main>
</body>
</html>