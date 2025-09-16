<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoker Spell Combiner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-fluid m-0 p-0 main">
        <div class="content">
            <h1>INVOKER SPELL</h1>
            <p>COMBINER</p>
            <form method="post">
                <div>
                    <select name="spell-1" id="spell-1">
                        <option value="Q">Quas</option>
                        <option value="W">Wex</option>
                        <option value="E">Exort</option>
                    </select>
                    <select name="spell-2" id="spell-2">
                        <option value="Q">Quas</option>
                        <option value="W">Wex</option>
                        <option value="E">Exort</option>
                    </select>
                    <select name="spell-3" id="spell-3">
                        <option value="Q">Quas</option>
                        <option value="W">Wex</option>
                        <option value="E">Exort</option>
                    </select>
                </div>
                
                <input type="submit" value="Invoke">
            </form>

            <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $orbsCombo = [$_POST['spell-1'], $_POST['spell-2'], $_POST['spell-3']];
                sort($orbsCombo);
                $combination = implode('', $orbsCombo);

                $spells = [
                    "QQQ" => "Cold Snap",
                    "QQW" => "Ghost Walk",
                    "QQE" => "Ice Wall",
                    "WWW" => "EMP",
                    "QWW" => "Tornado",
                    "WWE" => "Alacrity",
                    "EEE" => "Sun Strike",
                    "EEQ" => "Forge Spirit",
                    "EEW" => "Chaos Meteor",
                    "EQW" => "Deafening Blast" 
                ];

                if (isset($spells[$combination])) {
                    echo "<h3 class='has-spell text-success'> 🪄 <br> " . $spells[$combination] . "</h3>";
                } else {
                    echo "<h3 class='no-spell text-warning'> ❌ <br> " . "No Spell" . "</h3>";
                }
            }
            ?>
            </div>
        </div>
    </div>
</body>
</html>
