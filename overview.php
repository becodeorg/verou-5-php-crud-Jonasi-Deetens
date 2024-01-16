<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="#">Overview</a></li>
            <li><a href="?action=create">New Beyblade</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Let it RIP - I'm not talking about your farts, but about beyblades ofcourse!</h1>

    <ul>
        <?php foreach ($beyblades as $beyblade) : ?>
            <li>
                <h2><?= $beyblade['name']; ?></h2>
                <p>Spinning direction: <?= $beyblade['spin_direction']; ?></p>
                <p>Stats: [<?= "W:" . $beyblade['weight'] . ", AP: " . $beyblade['attack_power'] . ", DP:" . $beyblade['defense_power'] . ", S: " . $beyblade['stamina']; ?>]</p>
                <p>Special move: <?= $beyblade['special_move']; ?></p>
                <p>Beast: <?= $beyblade['bey_beast']; ?></p>
                <p><a href="?action=edit&id=<?= $beyblade["id"] ?>">Edit</a></p>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
</body>
</html>