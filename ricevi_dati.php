<!DOCTYPE html>
<html>

<head>
    <title>Ricevi dati da GET</title>
</head>

<body>
    <?php
    // Recupera i dati inviati
    $paragraf = $_GET['paragraf'];
    $badword = $_GET['badword'];

    $paragraf_length = strlen($paragraf);

    // Stampa il Paragrafo
    echo "<p><strong>Paragrafo:</strong> $paragraf</p>";
    echo "<p><strong>Lunghezza paragrafo:</strong> $paragraf_length caratteri</p>";

    // Stampa la Censura
    echo "<p><strong>Censura:</strong> $badword</p>";
    // Sostituisci tutte le occorrenze della parola da censurare con ***
    $paragraf_censured = str_replace($badword, '***', $paragraf);
    $paragraf_censured_length = strlen($paragraf_censured);

    echo "<p><strong>Paragrafo censurato:</strong> $paragraf_censured</p>";
    echo "<p><strong>Lunghezza paragrafo:</strong> $paragraf_censured_length caratteri</p>";

    ?>
</body>

</html>


<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste molestias eaque ab! Impedit, sint quasi? -->