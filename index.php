<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords</title>
    </head>
    <body>
        <?php
        $badword = $_GET["badword"];
        $paragrafo = "Un file di testo di piccole dimensioni che viene copiato sul disco rigido da un server di pagine Web e costituisce la carta d’identità dell’utente.";
        $lunghezzaParagrafo = strlen($paragrafo);
        $nuovoParagrafo = str_replace($badword, "***", $paragrafo);
        ?>
        <h1><?php echo $nuovoParagrafo ?></h1>
        <p><?php echo  "La lunghezza del paragrafo è di ". " " . $lunghezzaParagrafo . " " . "caratteri" ?></p>
    </body>
</html>