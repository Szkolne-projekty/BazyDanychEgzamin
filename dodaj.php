<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "samochody");

$sql1 = "SELECT COUNT(*) FROM samochody;";
$res1 = mysqli_query($conn, $sql1);

$count = mysqli_fetch_row($res1)[0];

/* Skrypt 3 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID_KLI = $_POST['ID_KLI'];
    $ID_SAM = $_POST['ID_SAM'];
    $DATA_WYP = $_POST['DATA_WYP'];
    $DATA_ZWR = $_POST['DATA_ZWR'];
    $KOSZT = $_POST['KOSZT'];

    $sql2 = "INSERT INTO `wypozyczenia` (`ID_WYP`, `ID_SAM`, `ID_KLI`, `DATA_WYP`, `DATA_ZWR`, `KOSZT`) VALUES (NULL, '$ID_SAM', '$ID_KLI', '$DATA_WYP', '$DATA_ZWR', '$KOSZT'); ";

    mysqli_query($conn, $sql2);
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypożyczalnia samochodów</title>
    <link rel="stylesheet" href="styls.css">
</head>

<body>
    <!-- Nagłówek -->
    <header>
        <img src="logo.png" alt="nasze logo">
    </header>

    <!-- Menu -->
    <nav>
        <h1>Wypożyczalnia samochodów</h1>
        <table>
            <tr>
                <td class="nav-table-td"><a href="index.php">Strona główna</a></td>
                <td class="nav-table-td"><a href="dodaj.php">Dodaj wypożyczenie</a></td>
            </tr>
        </table>
    </nav>

    <main>
        <!-- Lewa sekcja -->
        <section class="left">
            <form action="dodaj.php" method="post">
                <table>
                    <tr>
                        <td>ID Klienta</td>
                        <td><input type="number" name="ID_KLI"></td>
                    </tr>
                    <tr>
                        <td>ID Samochodu</td>
                        <td><input type="number" name="ID_SAM"></td>
                    </tr>
                    <tr>
                        <td>Data wypożyczenia</td>
                        <td><input type="date" name="DATA_WYP"></td>
                    </tr>
                    <tr>
                        <td>Data zwrotu</td>
                        <td><input type="date" name="DATA_ZWR"></td>
                    </tr>
                    <tr>
                        <td>Koszt</td>
                        <td><input type="number" name="KOSZT"></td>
                    </tr>
                    <tr>
                        <td><button type="reset">Czyść</button></td>
                        <td><button type="submit">Wstaw</button></td>
                    </tr>
                </table>
            </form>
        </section>

        <!-- Prawa sekcja -->
        <aside class="right">
            <section class="right-1">
                <img src="auto.png" alt="maluch">
            </section>
            <section class="right-2">
                <h3 class="script-4-text">Zawsze niskie ceny!</h3>
                <h4>Ilość samochodów w bazie</h4>

                <!-- Skrypt 1 -->
                <p><?= $count; ?></p>
            </section>
        </aside>
    </main>

    <!-- Stopki -->
    <footer>
        <section class="footer-1">
            <p>Warszawa <br> ul. Wiejska 12 <br> tel. 123456789</p>
        </section>
        <section class="footer-2">
            Autor strony: <br> 00000000000
        </section>
    </footer>

    <script src="script.js"></script>
</body>

</html>
