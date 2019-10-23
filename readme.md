1.A projekt indításához a githubon levő fájlokat be kell másolni a Xampp mappának a htdocs mappájába.<br>
2.A CognitiveCreatorsTest mappa .env fájlját módosítjuk megfelelően:<br>
        DB_DATABASE=cognitive_creators_test<br>
        DB_USERNAME=root<br>
        DB_PASSWORD= (ide az a jelszó jön,amit a phpMyAdmin felhasználónknak megadtunk)<br>
3.Futtatjuk a Xamppot(host meg adatbázis host), közben megnyitjuk a terminált<br>
4.A terminállal szintén bemegyünk a Xampp/htdocs/CognitiveCreatorsTest mappába<br>
5.Az adatbázis táblák létrehozásához/migrációjához futtatjuk a következő kódsort a terminálban:<br>
    php artisan migrate:fresh<br>
6.Mivel vannak általam létrehozott adatok, ezért ezekkel is feltöltjük az adatbázisunkat:<br>
    php artisan db:seed<br>
7.Megnyitjuk a böngészönket a következő linkre:<br>
    http://localhost/CognitiveCreatorsTest/public/products<br>
8.Hogy követni tudjuk az adatbázisunkat ezért belépünk a phpMyAdmin felhasználónkba:<br>
    http://localhost/phpmyadmin/index.php<br>
9.Ezek után lehet az oldalt tesztelni,van egy már alapból létrehozott felhasználónk:<br>
    Email: teszt@gmail.com<br>
    Jelszó: qwe<br>

Github repo link:<br>
https://github.com/BakDavid/CognitiveCreatorsTest<br>

Megjegyzések:<br>
Design és responsive design-al nem sokat dolgoztam, ez egyes helyeken látszhat is.<br>
Mire befejezni láttam a projektet akkor vettem tudomást az aspect-ratio-ról és hogy hogyan kéne azt használni.<br>
A képeket a megadott képekből szereztem ki és szerkesztettem meg.<br>
A kód 100%-a az én munkám, ezért jól átlátom a rendszert.<br>
