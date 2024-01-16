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
            <li><a href="./">Back</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Let's update your Beyblade!</h1>

    <form action="./" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $beyblade["name"] ?>"><br>
        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="<?= $beyblade["type"] ?>"><br>
        <label for="spin_direction">Spin direction:</label>
        <select name="spin_direction" id="spin_direction">
            <option value="Left" <?php $beyblade["spin_direction"] === "Left" ? "selected" : "" ?>>Left</option>
            <option value="Right" <?php $beyblade["spin_direction"] === "Right" ? "selected" : "" ?>>Right</option>
        </select><br>
        <label for="weight">Weight:</label>
        <input type="number" id="weight" name="weight" value="<?= $beyblade["weight"] ?>"><br>
        <label for="attack_power">Attack Power:</label>
        <input type="number" id="attack_power" name="attack_power" value="<?= $beyblade["attack_power"] ?>"><br>
        <label for="defense_power">Defense Power:</label>
        <input type="number" id="defense_power" name="defense_power" value="<?= $beyblade["defense_power"] ?>"><br>
        <label for="stamina">Stamina:</label>
        <input type="number" id="stamina" name="stamina" value="<?= $beyblade["stamina"] ?>"><br>
        <label for="special_move">Special Move:</label>
        <input type="text" id="special_move" name="special_move" value="<?= $beyblade["special_move"] ?>"><br>
        <label for="bey_beast">Beast:</label>
        <input type="text" id="bey_beast" name="bey_beast" value="<?= $beyblade["bey_beast"] ?>"><br>
        <input type="submit" value="Update">
    </form>
</main>
</body>
</html>