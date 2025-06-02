<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "samochody");

$sql1 = "SELECT COUNT(*) FROM samochody;";
$res1 = mysqli_query($conn, $sql1);

$count = mysqli_fetch_row($res1)[0];

$sql2 = "SELECT k.IMIE, k.NAZWISKO, s.MARKA, s.MODEL, s.NR_REJ, w.DATA_WYP, w.DATA_ZWR, w.KOSZT FROM samochody s NATURAL JOIN wypozyczenia w NATURAL JOIN klienci k;";
$res2 = mysqli_query($conn, $sql2);

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
            <table>
                <thead>
                    <tr>
                        <th>Nazwisko</th>
                        <th>Imię</th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Numer Rej.</th>
                        <th>Data Wyp.</th>
                        <th>Data Zwr.</th>
                        <th>Koszt</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Skrypt 2 -->
                    <?php while ($row = mysqli_fetch_assoc($res2)): ?>
                        <tr>
                            <td><?= $row["NAZWISKO"]; ?></td>
                            <td><?= $row["IMIE"]; ?></td>
                            <td><?= $row["MARKA"]; ?></td>
                            <td><?= $row["MODEL"]; ?></td>
                            <td><?= $row["NR_REJ"]; ?></td>
                            <td><?= $row["DATA_WYP"]; ?></td>
                            <td><?= $row["DATA_ZWR"]; ?></td>
                            <td><?= $row["KOSZT"]; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
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
