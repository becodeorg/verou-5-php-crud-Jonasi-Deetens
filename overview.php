<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Let it RIP - I'm not talking about your farts, but about beyblades ofcourse!</title>
    <script src="./script.js" defer></script>
    <link rel="stylesheet" href="./style.css">
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
            <li class="arenaItem">
                <h2><?= $beyblade['name']; ?></h2>
                <p>Type: <?= $beyblade['type']; ?></p>
                <p>Spinning direction: <?= $beyblade['spin_direction']; ?></p>
                <p>Stats: [<?= "W:" . $beyblade['weight'] . ", AP: " . $beyblade['attack_power'] . ", DP:" . $beyblade['defense_power'] . ", S: " . $beyblade['stamina']; ?>]</p>
                <p>Special move: <?= $beyblade['special_move']; ?></p>
                <p>Beast: <?= $beyblade['bey_beast']; ?></p>
                <p><a href="?action=edit&id=<?= $beyblade["id"] ?>">Edit</a><a href="?action=remove&id=<?= $beyblade["id"] ?>">Remove</a></p>
                <img class="beyblade" src="<?= $beyblade["image"] ?>" alt="Image of the beyblade" width="100", height="100">
            </li>
        <?php endforeach; ?>
    </ul>
    <section id="arena">

    </section>
</main>
</body>
</html>