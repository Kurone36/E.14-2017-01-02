<!DOCTYPE  html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styl2.css">
        <title>Wynajmujemy samochody</title>
    </head>
    <body>
        <section id="baner">
            <h1>Wynajem samochodów</h1>
        </section>
        <section id="pl">
            <h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
            
                <?php
                    $connect = mysqli_connect('localhost', 'root', '', 'komis');
                        $sql = 'SELECT id, model, kolor FROM `samochody` WHERE marka = "Toyota" AND rocznik = 2014';
                        $query = mysqli_query($connect, $sql);

                            while($wiersz = mysqli_fetch_row($query)){
                                echo '<span>' . $wiersz[0] . ' Toyota: ' . $wiersz[1] . ' Kolor: ' . $wiersz[2] . '</span>';
                            }

                        mysqli_close($connect);
                ?>
           
            <h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
            
                <?php
                    $connect = mysqli_connect('localhost', 'root', '', 'komis');
                        $sql = "SELECT id, marka, model, rocznik FROM `samochody`";
                        $query = mysqli_query($connect, $sql);

                            while($wiersz = mysqli_fetch_row($query)){
                                echo '<span>' . $wiersz[0] . ' ' . $wiersz[1] . ' ' . $wiersz[2] .  ' ' . $wiersz[3] .'<br></span>';
                            }

                        mysqli_close($connect);
                ?>
            
        </section>
        <section id="ps">
            <h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
            <?php
                $connect = mysqli_connect('localhost', 'root', '', 'komis');
                        $sql = "SELECT Samochody_id, model, telefon FROM `samochody` JOIN `zamowienia` ON samochody.id = zamowienia.Samochody_id";
                        $query = mysqli_query($connect, $sql);

                            while($wiersz = mysqli_fetch_row($query)){
                                echo '<span>' . $wiersz[0] . '  ' . $wiersz[1] . '  ' . $wiersz[2] .'</span><br>';
                            }

                        mysqli_close($connect);
            ?>
        </section>
        <section id="pp">
            <h2>NASZA OFERTA</h2>
            <ul>
                <li>Fiat</li>
                <li>Toyota</li>
                <li>Opel</li>
                <li>Mercedes</li>
            </ul>
            <p>Tu pobierzesz naszą <a href="komis.sql">bazę danych</a></p>
            <p>autor strony: 01234567890</p>
        </section>      
    </body>
</html>