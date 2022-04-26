# EXSPJ1
Munkaerő nyilvántartás


Táblák
dolgozók (név, munkakör kód, szerv.egység kód, bruttó bér, adóazonosító*, TAJ*, bankszámlaszám*)
munkakörök
szervezeti egységek

A csillaggal jelölt adtok ellenőrzése, szintaktikai helyesség szempontjából (Google-> CDV)
Funkciók (törlés sehol nem lehet lehetséges, ha élő adata van hozzá kapcsolódva)
adatok felvitele/módosítása/törlése az összes táblában

Feladatok
Táblatervek
Funkciók megvalósítása
Lekérdezések
dolgozók listája
név szerintk
fizetés szerint
bankra csoportosítva (bankszámlaszám első 5 jegye)
szervezeti egységek, azon belül a dolgozói

A módosításokat naplózni kell
Plusz pontok járnak az alábbiakért
AJAX megoldás
Változásnapló triggerrel megoldva
CSS

Nem fogadok el a netről letöltött megoldást
Nyilvánvalóan egyes részmegoldások (pl. hogyan kell kapcsolódni az adatbázishoz) a netről fognak származni, de komplett megoldás letöltése és beadása (kis módosítás esetén is) nem elfogadható.
Ha több embernek szemmel láthatóan azonos a megoldása, az első beadást fogadom el eredetinek.


### Docker start containers - első futtatásra
sudo docker-compose up -d --build

## Leállítás
sudo docker-compose down

## Logok
sudo docker-compose logs

## Mi fut
sudo docker-compose ps