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

### Localhost ports: -> docker-compose.yml
index.php
http://localhost:8084/index.php

phpmyadmin db;root;root
http://localhost:8080/

### Docker start containers - első futtatásra
cd -> project folder 
Win at home: cd D:\xampp\htdocs\EXSPJ1\ | docker-compose up
sudo docker-compose up -d --build

## Leállítás
sudo docker-compose down

## Logok
sudo docker-compose logs

## Mi fut
sudo docker-compose ps

## TAJ CDV 
A TAJ szám egy kilenc számjegyből álló szám, amelyben az első nyolc számjegy egy folyamatosan kiadott egyszerű sorszám, amely mindig az előző, utoljára kiadott sorszámból egy hozzáadásával keletkezik. A kilencedik számjegy ellenőrző ún. CDV kód, melynek képzési algoritmusa az alábbi:

A TAJ szám első nyolc számjegyéből a páratlan helyen állókat hárommal, a páros helyen állókat héttel szorozzuk, és a szorzatokat összeadjuk. Az összeget tízzel elosztva a maradékot tekintjük a kilencedik, azaz CDV kódnak.

## Adóazonosító CDV
2. Az adóazonosító számot az alábbiak szerint kell képezni:
a) az 1. számjegy konstans 8-as szám, mely az adóalany magánszemély voltára utal,
b) a 2-6. számjegyek a személy születési időpontja és az 1867. január 1. között eltelt 
napok száma,
c) a 7-9. számjegyek az azonos napon születettek megkülönböztetésére szolgáló 
véletlenszerűen képzett sorszám,
d) a 10. számjegy az 1-9. számjegyek felhasználásával matematikai módszerekkel képzett 
ellenőrző szám

## bankszámla szám CDV
A bankszámlaszám ellenőrzésére szóló szám mindhárom 8 számjegyes felépítés esetén megtalálható. Mindig az utolsó, azaz a 8., a 16. és a 24. számjegyről beszélünk. Most bemutatom röviden ennek a működését, viszont kiemelném, hogy ezt neked nem kell sem tudnod, sem alkalmaznod, mert a pénzintézeti rendszerekbe ez az ellenőrzés már automatikusan be van építve, így ha rossz bankszámlaszámra próbálnád meg küldeni, akkor jelez a rendszer.

A számlaszám ellenőrzésére használt algoritmus:

Vegyük bármelyik nyolcas karaktersort.

első helyen álló számot 9-cel,
második helyen álló számot 7-tel,
a harmadik helyen álló számot 3-mal,
a negyedik helyen álló számot 1-gyel,
az ötödik helyen álló számot 9-cel,
a hatodik helyen álló számot 7-tel,
a hetedik helyen álló számot 3-mal,
a nyolcadik helyen álló számot 1-gyel szorozzuk be,
majd az így keletkezett szorzatokat összeadjuk. Az kapott összegnek tíz egész számú többszörösének, vagyis 10-zel oszthatónak kell lennie maradék nélkül. Ha ez igaz, akkor érvényes a bankszámlaszám. Ha nem, akkor érvénytelen.

Nézzük meg újra a Cégjelző példáján keresztül. Az első 8 számjegy: 10404072

Az ellenőrzési művelet a fentiek szerint:

1*9+0*7+4*3+0*1+4*9+0*7+7*3+2*1=9+0+12+0+36+0+21+2=70

A 70 egész számú többszöröse a tíznek (7*10), tehát a bankszámlaszám megfelelő formátumú.