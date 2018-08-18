<?php
// File : finnish/localized.admin.php - plus version (01.01.2015 - rev.18)
// Translation by Mirja-Liisa Väänänen, ShadowKiro <shadowkiro@gmail.com>
// Do not use ' but use ’ instead (utf-8 edit bug)

// extra header for charset
$Charset = "utf-8";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Ylläpitopaneeli sivulle %s");
define("A_MENU_1", "Rekisteröityneet käyttäjät"); //plural
define("A_MENU_11", "Rekisteröitynyt käyttäjä"); //singular
define("A_MENU_2", "Karkoitetut käyttäjät"); //plural
define("A_MENU_21", "Karkoitettu käyttäjä");	 //singular
define("A_MENU_3", "Siivoa huoneet");
define("A_MENU_4", "Lähetä sähköpostia");
define("A_MENU_5", "Asetukset");
define("A_MENU_6", "Chat viestit");
define("A_MENU_7", "Etsi");
define("A_MENU_8", "Yhteydet");
define("A_MENU_9", "Lokiarkisto");
define("A_MENU_1a", "Profiilit");
define("A_MENU_2a", "Tilastot");
define("A_LOGOUT", "Kirjaudu ulos");
define("A_MOD_DEV", "Toimintoa kehitetään");

// Frame for registered users
define("A_SHEET1_1", "Lista rekisteröityneistä käyttäjistä ja heidän oikeuksistaan");
define("A_SHEET1_2", "Käyttäjätunnus");
define("A_SHEET1_3", "Oikeudet");
define("A_SHEET1_4", "Valvotut huoneet");
define("A_SHEET1_5", "Valvotut huoneet erotellaan toisistaan pilkulla (,).");
define("A_SHEET1_6", "Poista valitut profiilit");
define("A_SHEET1_7", "Vaihda");
define("A_SHEET1_8", "Sinun lisäksesi muita käyttäjiä ei ole rekisteröitynyt.");
define("A_SHEET1_9", "Karkoita valitut profiilit");
define("A_SHEET1_10", "Nyt sinun täytyy siirtyä ’".A_MENU_2."’ säätääksesi valintasi.");
define("A_SHEET1_11", "Viimeksi paikalla");
define("A_SHEET1_12", "Karkoituksen syy (vapaaehtoinen)");
define("A_SHEET1_13", "Sallitut huoneet");
define("A_SHEET1_14", "Kaikki sallittu");
define("A_SHEET1_15", "Kaikki estetty");
define("A_SHEET1_16", "Huoneiden erityinen rajoittaminen täytyy merkitä myös ’".A_MENU_5."’ kentään.");
define("A_USER", "Käyttäjä");
define("A_MODER", "Valvoja");
define("A_TOPMOD", "Ylin valvoja");
define("A_ADMIN", "Ylläpitäjä");
define("A_PAGE_CNT", "Sivu %s %s sivusta");

// Frame for banished users
define("A_SHEET2_1", "Karkoitettujen käyttäjien ja rajoitettujen huoneiden lista");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Huoneet joita koskee");
define("A_SHEET2_4", "Saakka");
define("A_SHEET2_5", "Loputon");
define("A_SHEET2_6", "Huoneet erotetaan toisistaan pilkuilla ilman välilyöntejä (,), jos huoneita on yli neljä ’<B>*</B>’ merkki estää kaikki huoneet.");
define("A_SHEET2_7", "Poista karkoitus valituilta käyttäjiltä");
define("A_SHEET2_8", "Ei karkoitettuja käyttäjiä.");
define("A_SHEET2_9", "Syy (vapaaehtoinen)");

// Frame for cleaning rooms
define("A_SHEET3_1", "Olemassa olevat huoneet");
define("A_SHEET3_2", "\"Ei-oletushuoneiden\" siivoaminen poistaa niistä kaikki <br />valvojien statukset.");
define("A_SHEET3_3", "Puhdista valitut huoneet");
define("A_SHEET3_4", "Ei huoneita siivottavaksi.");
define("A_SHEET3_5", "Et ole valinnut yhtään huonetta. Valitse ainakin yksi alla olevasta listasta.");

// Frame for sending mails
define("A_SHEET4_0", "Et ole asettanut ylläpidon sähköpostia  ’".A_MENU_5."’ sivulta.");
define("A_SHEET4_1", "Lähetä sähköpostit");
define("A_SHEET4_2", "Vastaanottaja:");
define("A_SHEET4_3", "Valitse kaikki");
define("A_SHEET4_4", "Aihe:");
define("A_SHEET4_5", "Viesti:");
define("A_SHEET4_6", "Lähetä nyt!");
define("A_SHEET4_7", "Kaikki sähköpostit on lähetetty.");
define("A_SHEET4_8", "Sisäinen virhe tapahtui lähetettäessä viestejä.");
define("A_SHEET4_9", "Vastaanottajat, aihe tai viesti puuttuu!");
define("A_SHEET4_10", "Lisää sähköpostit ja erota ne toisistaan pilkuilla ilman välilyöntejä (,)");
define("A_SHEET4_11", "Allekirjoitus");
define("A_SHEET4_12", "Poista valinta kaikista");
define("A_SHEET4_13", "Laita kaikki vastaanottajat ’Bcc’ kenttään");

// Frame for configuration
define("A_SHEET5_0", "Nykyinen versiosi on %s");
define("A_SHEET5_1", "Täällä on uusin julkaistu versio (%s)!");

// Chat Extras
define("A_EXTR_DSBL", "Chat viestit estetty") ;
define("A_REFRESH_MSG", "Päivitä viestit") ;
define("A_MSG_DEL", "Poista") ;
define("A_POST_TIME", "Lähetetty") ;
define("A_FROM_TO", "Keneltä › Kenelle") ;
define("A_FROM", "Keneltä") ;
define("A_CHTEX_ROOM", "Huone") ;
define("A_CHTEX_MSG", "Viesti") ;

// Save chat logs
define("A_CHAT_LOGS_1", "IP yhteyksien lokit sivulle %s");
define("A_CHAT_LOGS_2", "Chatin arkistot on estetty");
define("A_CHAT_LOGS_3", "Avaa Chatin IP lokien sivu");
define("A_CHAT_LOGS_4", "Tyhjennächatin IP lokitiedosto");
define("A_CHAT_LOGS_5", "Tämä arkistoi nollaus ja chatin IP lokitiedostot!\\n");
define("A_CHAT_LOGS_6", "Täysi chatin lokiarkisto");
define("A_CHAT_LOGS_7", "Näytä julkinen chatin arkistoalue");
define("A_CHAT_LOGS_8", "Tämä tuhoaa kaikki tiedostot ja kansiot\\njotka on tallennettu %s kansioon!\\n"); // year
define("A_CHAT_LOGS_9", "Poista kaikki vuoden %s lokit"); // year
define("A_CHAT_LOGS_10", "Poista vuosi");
define("A_CHAT_LOGS_11", "Tämä poistaa kaikki tiedostot\\njotka on tallennettu %s kansioon!\\n"); //month/year
define("A_CHAT_LOGS_12", "(vain julkiset)");
define("A_CHAT_LOGS_13", "Poista kuukausi");
define("A_CHAT_LOGS_14", "tämä poistaa kaikki %s tiedostot!\\n"); //day.php file
define("A_CHAT_LOGS_15", "Poista tämä loki");
define("A_CHAT_LOGS_16", "Lue %s loki"); // day month year
define("A_CHAT_LOGS_17", "Julkisten chattilokien arkisto");
define("A_CHAT_LOGS_18", "(vain julkinen)");
define("A_CHAT_LOGS_19", "\\nTätä toimintoa ei voi kumota...\\nOletko varma?");
define("A_CHAT_LOGS_20", "Näytä täysi chatin arkistojen osio");
define("A_CHAT_LOGS_21", "Mene ylös");
define("A_CHAT_LOGS_22", "Arkistoitu lokitiedosto");
define("A_CHAT_LOGS_23", "Luotu %s"); // Generated on "date"
define("A_CHAT_LOGS_24", "Tiivistä kaikki %s lokit zip tiedostoksi"); // date
define("A_CHAT_LOGS_25", "Tämä luo zipin kaikista lokeista\\n %s kansioon tallennetuist tiedostoista!\\n"); //month/year
define("A_CHAT_LOGS_26", "\\nOletko varma?");
define("A_CHAT_LOGS_27", "Zip arkistot");
define("A_CHAT_LOGS_28", "Lataa %s");
define("A_CHAT_LOGS_29", "Poista tämä zip");
define("A_CHAT_LOGS_30", "IP arkistot");
define("A_CHAT_LOGS_31", "Koko %s %s");
define("A_CHAT_LOGS_32", "Tiedosto");
define("A_CHAT_LOGS_33", "Kansio");
define("A_CHAT_LOGS_34", "%s onnistuneesti poistettu: %s"); //sample: File (Folder) successfully deleted: bak/blabla.php
define("A_CHAT_LOGS_35", "%s onnistuneesti luotu: %s");
define("A_CHAT_LOGS_36", "%s ei ole olemassa: %s");
define("A_CHAT_LOGS_37", "%s ei voitu poistaa: %s");
define("A_CHAT_LOGS_38", "%s ei voitu luoda: %s");
define("A_CHAT_LOGS_39", "%s kirjoitus suojattu: %s");
define("A_CHAT_LOGS_40", "Virhe ilmaantui tallentaessa tiedostoa: %s"); //filename

// Admin Search Page
define("A_SEARCH_1", "Chatin etsintäsivu");
define("A_SEARCH_2", "Kaikki kategoriat");
define("A_SEARCH_3", "Nimet");
define("A_SEARCH_4", "IP Osoite");
define("A_SEARCH_5", "Oikeudet");
define("A_SEARCH_6", "E-mail");
define("A_SEARCH_7", "Sukupuoli");
define("A_SEARCH_8", "Kuvaukset");
define("A_SEARCH_9", "Linkit");
define("A_SEARCH_10", "Etsi");
define("A_SEARCH_11", "Oikeuksien kategoriassa oikeudet ovat <b>ad</b>, <b>mod</b> tai <b>u</b>.");
define("A_SEARCH_12", "Sukupuolikategoriassa vaihtoehdot ovat: <b>0</b> muille, <b>1</b> miehille, <b>2</b> naisille tai <b>3</b> pareille.");
define("A_SEARCH_13", "Käyttäjätunnus");
define("A_SEARCH_14", "Etunimi");
define("A_SEARCH_15", "Sukunimi");
define("A_SEARCH_16", "Maa");
define("A_SEARCH_18", "Oikeudet");
define("A_SEARCH_19", "IP");
define("A_SEARCH_20", "Sukupuoli");
define("A_SEARCH_21", "Hakuehto");
define("A_SEARCH_22", "Haettu");
define("A_SEARCH_23", "Aseta hakuehto ja yritä uudelleen");
define("A_SEARCH_24", "Kriteereihisi sopivaa tietoa ei löydy. Kokeile muita asetuksia.");
define("A_SEARCH_25", "Valvo tätä käyttäjää");
define("A_SEARCH_26", "Käyttäjä on päättänyt piilottaa tietonsa yksityisyytensa takia, älä paljasta niitä!");
define("A_SEARCH_27", "Näytä kuukausi");
define("A_SEARCH_28", "Näytä kaikkis yntymäpäivät");
define("A_SEARCH_29", "Syntymäpäiviä ei ole meneillään %s"); //current month name

// Connected users Page
define("A_LURKING_1", "Hiipparit ja Online olevat käyttäjät") ;
define("A_LURKING_2", "Hiipparointi estetty") ;

// Statistics Page
define("A_STATS_1", "Chatin asetussivu");
define("A_STATS_2", "Tiedon kerääminen alkoi %s"); //date
define("A_STATS_3", "Kaikki tilastot (kaikkina aikoina)");
define("A_STATS_4", "Yksityiskohtaiset tilastot (Viimeisten %s päivän toiminnot)"); //no of days
define("A_STATS_5", "Asetukset estetty");
define("A_STATS_6", "Viimeisimmät %s"); //Top 10 or Top 5
?>