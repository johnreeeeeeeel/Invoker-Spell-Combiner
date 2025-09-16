<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoker Spell Combiner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        html, body {
            padding: 0;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
            background-color: #282828;
            cursor: default;
        }

        .main {
            background-color: #282828;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            background-color: #1e1e1e;
            border: 2px solid #FF9000;
            box-shadow: 1px 1px 5px black;
            padding: 30px;
            border-radius: 12px;
        }

        .content h1, .content p {
            margin: 0;
            color: #999999;
            letter-spacing: 2px;
            text-align: center;
        }

        .content h1 {
            font-size: 40px;
            font-weight: bolder;
        }

        .content p {
            font-size: 12px;
            margin-top: -5px;
            margin-bottom: 20px;
            text-align: center;
            letter-spacing: 17px;
        }

        .content form {
            display: flex;
            flex-direction: column;
        }

        .content form div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .content form div select {
            padding: 8px 16px 8px 16px;
            border-radius: 12px;
            background-color: #d9d9d9;
        }

        .content form input {
            padding: 8px 16px 8px 16px;
            border-radius: 12px;
            border: none;
            background-color: #FF9000;
            font-weight: 600;
            transition: all 0.5s ease;
        }

        .content form input:hover {
            background-color: #c77100;
        }

        .result .has-spell, .result .no-spell {
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bolder;
            font-size: 24px;
        }
    </style>
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
