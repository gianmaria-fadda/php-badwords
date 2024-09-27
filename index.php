<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <header>

        <h1>
            PHP
        </h1>

    </header>

    <main>

        <?php
            var_dump($_GET)
        ?>

        <div>
            Valore precedente di paragrafo: <?php echo $_GET ['paragraph'] ?>
        </div>

        <div>
            Valore precedente di parola da censurare: <?php echo $_GET ['badword'] ?>
        </div>
        
        <form action="./result.php" method="GET">
            <div>
                <div>
                    <label for="paragraph">
                        Paragrafo
                    </label>
                </div>
                <textarea id="paragraph" name="paragraph" placeholder="Inserisci il testo qui..."></textarea>
            </div>

            <div>
                <div>
                    <label for="badword">
                        Parola da censurare
                    </label>
                </div>

                <input id="badword" name="badword" placeholder="Inserisci il testo qui..." value="" type="text">
            </div>

            <div>
                <button type="submit">
                    Invia
                </button>
            </div>
        </form>

    </main>
</body>
</html>