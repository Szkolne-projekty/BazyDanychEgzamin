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
                <h3>Zawsze niskie ceny!</h3>
                <h4>Ilość samochodów w bazie</h4>

                <!-- Skrypt 1 -->
                <?php



                ?>
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
</body>

</html>