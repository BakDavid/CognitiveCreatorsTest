1.A projekt indításához a githubon levő fájlokat be kell másolni a Xampp mappának a htdocs mappájába.
2.A CognitiveCreatorsTest mappa .env fájlját módosítjuk megfelelően:
        DB_DATABASE=cognitive_creators_test
        DB_USERNAME=root
        DB_PASSWORD= (ide az a jelszó jön,amit a phpMyAdmin felhasználónknak megadtunk)
3.Futtatjuk a Xamppot(host meg adatbázis host), közben megnyitjuk a terminált
4.A terminállal szintén bemegyünk a Xampp/htdocs/CognitiveCreatorsTest mappába
5.Az adatbázis táblák létrehozásához/migrációjához futtatjuk a következő kódsort a terminálban:
    php artisan migrate:fresh
6.Mivel vannak általam létrehozott adatok, ezért ezekkel is feltöltjük az adatbázisunkat:
    php artisan db:seed
7.Megnyitjuk a böngészönket a következő linkre:
    http://localhost/CognitiveCreatorsTest/public/products
8.Hogy követni tudjuk az adatbázisunkat ezért belépünk a phpMyAdmin felhasználónkba:
    http://localhost/phpmyadmin/index.php
9.Ezek után lehet az oldalt tesztelni,van egy már alapból létrehozott felhasználónk:
    Email: teszt@gmail.com
    Jelszó: qwe

Github repo link:
https://github.com/BakDavid/CognitiveCreatorsTest

Megjegyzések:
Design és responsive design-al nem sokat dolgoztam, ez egyes helyeken látszhat is.
Mire befejezni láttam a projektet akkor vettem tudomást az aspect-ratio-ról és hogy hogyan kéne azt használni.
A képeket a megadott képekből szereztem ki és szerkesztettem meg.
A kód 100%-a az én munkám, ezért jól átlátom a rendszert.
