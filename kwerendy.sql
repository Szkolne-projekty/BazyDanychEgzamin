/* 1. Policz ile jest samochodów marki opel z tabeli samochody. */
SELECT COUNT(*) FROM samochody WHERE samochody.MARKA = "Opel"; 

/* 2. Wyświetl imię i nazwisko klienta który wypożyczył samochód 2006-01-01 (relacja). */
SELECT k.IMIE, k.NAZWISKO FROM klienci k NATURAL JOIN wypozyczenia w WHERE w.DATA_WYP = "2006-01-01"; 

/* 3. Wyświetl samochody wyprodukowane w Niemczech i których dzienny koszt jest większy niż
20. */
SELECT * FROM samochody s WHERE s.KRAJ_PROD = "Niemcy" AND s.KOSZT_DNIA > 20;

/* 4. Dodaj użytkownika „wypozyczajacy” z hasłem zaq1@WSX. */
CREATE USER 'wypozyczajacy'@'127.0.0.1' IDENTIFIED BY 'zaq1@WSX';

/* 5. Wyświetl imię, nazwisko, marka, model, nr_rej, data_wyp, data_zw i koszt dla wszystkich
samochodów, klientów i wypożyczeń (relacja między trzema tabelami). */
SELECT k.IMIE, k.NAZWISKO, s.MARKA, s.MODEL, s.NR_REJ, w.DATA_WYP, w.DATA_ZWR, w.KOSZT FROM samochody s NATURAL JOIN wypozyczenia w NATURAL JOIN klienci k;

/* 6. Dodaj funkcję automatycznej numeracji dla kolumny id_wyp w tabeli wypożyczenia. */
ALTER TABLE `wypozyczenia` CHANGE `ID_WYP` `ID_WYP` INT NOT NULL AUTO_INCREMENT, ADD PRIMARY KEY (`ID_WYP`); 

/* 7. Wstaw do tabeli wypożyczenie – id_kli = 100, id_sam = 15, data_wyp = dziś, data_zwr = za
miesiąc i koszt 1000 */
INSERT INTO `wypozyczenia` (`ID_WYP`, `ID_SAM`, `ID_KLI`, `DATA_WYP`, `DATA_ZWR`, `KOSZT`) VALUES (NULL, '15', '100', '2025-05-13', '2025-06-13', NULL); 

/* 8. Policz ile jest wszystkich samochodów. */
SELECT COUNT(*) FROM samochody;