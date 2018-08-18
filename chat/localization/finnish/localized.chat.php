<?php
// File : finnish/localized.chat.php - plus version (25.01.2015 - rev.49)
// Translation by Mirja-Liisa Väänänen, ShadowKiro <shadowkiro@gmail.com>
// Do not use ' but use ’ instead (utf-8 edit bug)

// extra header for Charset
$Charset = "utf-8";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Ohjeet");

define("L_WEL_1", "Viestit poistuvat %s %s jälkeen");	// X hours/hour
define("L_WEL_2", "ja epäaktiiviset käyttäjät %s %s kuluttua");	// Y minutes/minute

define("L_CUR_1", "Nyt");
define("L_CUR_1a", "paikalla on");
define("L_CUR_1b", "paikalla on");
define("L_CUR_2", "chatissa");
define("L_CUR_3", "Käyttäjät chat - huoneissa");
define("L_CUR_4", "käyttäjät ysityisissä huoneissa");
define("L_CUR_5", "Käyttäjät hiippailemassa<br />(tarkkailemassa sivua):");	// means break (next row)


define("L_SET_1", "Kirjautuminen");
define("L_SET_2", "Nimi");
define("L_SET_3", "Montako viestiä näytetään");
define("L_SET_4", "Aikaväli päivityksien välillä");
define("L_SET_5", "Valitse huone");
define("L_SET_6", "Yleiset huoneet");
define("L_SET_7", "Valitse");
define("L_SET_8", "käyttäjien perustamat julkiset huoneet");
define("L_SET_9", "Luo oma");
define("L_SET_10", "julkinen");
define("L_SET_11", "yksityinen");
define("L_SET_12", "huone");
define("L_SET_13", "Sitten vain");
define("L_SET_14", "Astu sisään");
define("L_SET_15", "Valmiit yksityiset huoneet");
define("L_SET_16", "Käyttäjien yksityiset huoneet");
define("L_SET_17", "Valitse avatarisi");
define("L_SET_18", "Lisätäksesi tämän sivun kirjanmerkkeihisi paina \"Ctrl+D\".");
define("L_SET_19", "Muista minut");

define("L_SRC", "on ilmaiseksi saatavilla");

define("L_SECS", "sekuntia");
define("L_MIN", "minuutti");
define("L_MINS", "minuuttia");
define("L_HOUR", "tunti");
define("L_HOURS", "tuntia");
define("L_DAY", "päivä");
define("L_DAYS", "päivät");

// registration stuff:
define("L_REG_1", "Salasana");
define("L_REG_2", "Tunnuksen hallinta");
define("L_REG_3", "Rekisteröidy");
define("L_REG_4", "Muokkaa profiiliasi");
define("L_REG_5", "Poista käyttäjätunnus");
define("L_REG_6", "Käyttäjien rekisteröityminen");
define("L_REG_7", "Vain jos olet rekisteröitynyt");
define("L_REG_8", "E-mail");
define("L_REG_9", "Olet onnistuneesti rekisteröitynyt.");
define("L_REG_10", "Takaisin");
define("L_REG_11", "Muokkaaminen");
define("L_REG_12", "Käyttäjätietojen muokkaaminen");
define("L_REG_13", "Käyttäjän poistaminen");
define("L_REG_14", "Kirjaudu");
define("L_REG_15", "Kirjaudu sisään");
define("L_REG_16", "Vaihda");
define("L_REG_17", "Profiilisi on onnistuneesti päivitetty.");
define("L_REG_18", "Valvoja on potkinut sinut ulos huoneesta.");
define("L_REG_18a", "Valvoja on potkinut sinut ulos huoneesta.<br />Syy: %s");	// %s is the actual reason (e.g. "for spamming")
define("L_REG_19", "Haluatko varmasti poistaa tunnuksesi?");
define("L_REG_20", "Kyllä");
define("L_REG_21", "Tunnuksesi on onnistuneesti poistettu.");
define("L_REG_22", "Ei");
define("L_REG_25", "Sulje");
define("L_REG_30", "Etunimi");
define("L_REG_31", "Sukunimi");
define("L_REG_32", "WWW");
define("L_REG_33", "näytä e-mail /whois käskyllä");
define("L_REG_34", "Muokataan käyttäjätietoja");
define("L_REG_35", "Ylläpito");
define("L_REG_36", "Kaupunki/Maa");
define("L_REG_37", "Kentät joissa <span class=\"error\">*</span> on täytettävä loppuun.");
define("L_REG_39", "Ylläpitäjä on poistanut huoneen jossa olit.");
define("L_REG_43", "Salaisuus"); // Confidential, Secret, Not telling
define("L_REG_44", "Pariskunta"); // refers to gender as a pair "man and woman" (couple, pair, family)
define("L_REG_45", "Sukupuoli");
define("L_REG_46", "Mies");
define("L_REG_47", "Nainen");
define("L_REG_48", "Joku muu");
define("L_REG_49", "Rekisteröityminen vaaditaan!");
define("L_REG_50", "Rekisteröityminen estetty!");
define("L_REG_51", "Ei koskaan"); //Last time connected to chat: 
define("L_REG_52", "Viimeisin sijainti"); 

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Asetuksesi kun menet chattiin");
define("L_EMAIL_VAL_2", "Tervetuloa chat palvelimellemme.");
define("L_EMAIL_VAL_Err", "Sisäinen virhe, ota yhteyttä ylläpitoon: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Salasanasi on lähetetty antamaasi sähköpostiosoitteeseen.<br />Voit vaihtaa salasanasi kirjautessasi täältä \"".L_REG_4."\".");
define("L_EMAIL_VAL_PENDING_Done", "Rekisteröitymistietosi on lähetetty tarkistettavaksi.");
define("L_EMAIL_VAL_PENDING_Done1", "Saat salasanasi kun ylläpito on hyväksynyt tunnuksesi.");
define("L_EMAIL_VAL_3", "Rekisteröitymisesi odottaa %s hyväksyntää");
define("L_EMAIL_VAL_31", "Onneksi olkoon! Rekisteritietosi on hyväksytty!");
define("L_EMAIL_VAL_32", "Nämä ovat kirjautumistietosi chatissa %s osoitteessa %s:"); //chat name at chaturl
define("L_EMAIL_VAL_4", "Olet juuri rekisteröinyt tunnuksen chattiin %s osoitteessa %s:"); //chat name at chaturl
define("L_EMAIL_VAL_41", "Olet juuri muuttanut tärkeää tietoa chatissa %s osoitteessa %s (tunnuksesi: %s)."); //chat name at chaturl (username)
define("L_EMAIL_VAL_5", "Sinun - %s – tunnustietosi chattiin %s"); //username - chatname
define("L_EMAIL_VAL_51", "Sinun - %s – päivitetyt tunnustietosi chatissa %s"); //username - chatname
define("L_EMAIL_VAL_6", "Rekisteröityi %s");
define("L_EMAIL_VAL_61", "Päivitetty %s");
define("L_EMAIL_VAL_7", "Alla näet tunnuksesi %s päivitetyt tiedot:"); //username
define("L_EMAIL_VAL_8", "Tallenna tämä sähköposti tulevaisuutta varten.\nÄlä anna salasanaasi kenellekään.\nKiitos kun liityit! Pidä hauskaa!");
define("L_EMAIL_VAL_81", "Voit vaihtaa salasanasi kirjautumissivuilta täältä \"".L_REG_4."\".");

// admin stuff
define("L_ADM_1", "%s ei ole enää huoneen valvoja.");	// username/nickname
define("L_ADM_2", "Et ole enää rekisteröitynyt käyttäjä.");

// error messages
define("L_ERR_USR_1", "Tämä käyttäjänimi on jo käytössä. Valitse joku toinen.");
define("L_ERR_USR_2", "Sinun on valittava käyttäjänimi.");
define("L_ERR_USR_3", "Tämä käyttäjänimi on rekisteröity.<br />Kirjoita salasanasi tai valitse jokin toinen käyttäjänimi.");
define("L_ERR_USR_4", "Kirjoitit väärän salasanan.");
define("L_ERR_USR_5", "Sinun täytyy kirjoittaa käyttäjänimesi.");
define("L_ERR_USR_6", "Sinun täytyy kirjoittaa salasanasi.");
define("L_ERR_USR_7", "Sinun täytyy kirjoittaa sähköpostiosoitteesi.");
define("L_ERR_USR_8", "Sinun täytyy kirjoittaa oikea sähköpostiosoite.");
define("L_ERR_USR_9", "Tämä käyttäjänimi on jo käytössä.");
define("L_ERR_USR_10", "Väärä käyttäjänimi tai salasana.");
define("L_ERR_USR_11", "Sinun täytyy olla ylläpitäjä.");
define("L_ERR_USR_12", "Olet ylläpitäjä, joten sinua ei voi poistaa.");
define("L_ERR_USR_13", "Luodaksesi oman huoneen, sinun täytyy olla rekisteröitynyt.");
define("L_ERR_USR_14", "Sinun täytyy rekisteröityä ennen kuin voit chattailla.");
define("L_ERR_USR_15", "Kirjoita koko nimesi.");
define("L_ERR_USR_16", "Vain nämä erikoismerkit on sallittu:\\n".$REG_CHARS_ALLOWED."\\nVälilyönnit, pilkut ja sulkumerkit (\\) eivät ole sallittu.\\nTarkista merkistösi.");
define("L_ERR_USR_16a", "Vain nämä erikoismerkit on sallittu:<br />".$REG_CHARS_ALLOWED."<br />Välilyönnit, pilkut tai kauttamerkit (\\) eivät ole sallittuja. Tarkista merkistösi.");
define("L_ERR_USR_17", "Tätä huonetta ei ole etkä saa luoda semmoista.");
define("L_ERR_USR_18", "Kielletty sana löydetty käyttäjänimestä.");
define("L_ERR_USR_19", "Et voi olla useissa huoneissa yhtaikaa.");
define("L_ERR_USR_20", "Sinut on karkoitettu huoneesta tai chatista.");
define("L_ERR_USR_20a", "Sinut on karkoitettu huoneesta tai chatista.<br />Syy: %s");
define("L_ERR_USR_21", "Et ole ollut aktiivinen viimeiseen ".C_USR_DEL." minuuttiin,<br /> niinpä sinut on poistettu huoneesta.");
define("L_ERR_USR_22", "Tämä komento ei ole saatavillöa\\nselaimeen jota käytät (IE selain).");
define("L_ERR_USR_23", "Rekisteröidy jotta voit liittyä yksityiseen huoneeseen.");
define("L_ERR_USR_24", "Rekisteröidy jotta voit luoda yksityisen huoneen.");
define("L_ERR_USR_25", "Vain ylläpito voi käyttää ".$COLORNAME." väriä!<br />Älä yritä käyttää myöskään ".COLOR_CA.", ".COLOR_CA1.", ".COLOR_CA2.", ".COLOR_CM.", ".COLOR_CM1." tai ".COLOR_CM2.".<br />Ne on varattu!");
define("L_ERR_USR_26", "Vain ylläpitäjät ja valvojat voivat käyttää ".$COLORNAME." väriä!<br />Älä yritä käyttää myöskään ".COLOR_CA.", ".COLOR_CA1.", ".COLOR_CA2.", ".COLOR_CM.", ".COLOR_CM1." tai ".COLOR_CM2.".<br />Ne on varattu!");
define("L_ERR_USR_27", "Et voi puhua itsellesi yksityisesti.\\nTee se omassa mielessäsi kiitos...\\nNyt valitse eri käyttäjätunnus.");
define("L_ERR_USR_28", "Pääsysi huoneeseen %s on estetty!<br />Valitse toinen huone."); // room name
define("L_ERR_USR_29", "Täytä syntymäpäiväsi!<br />Keskeneräisiä tietoja ei hyväksytä.");
define("L_ERR_ROM_1", "Huoneen nimessä ei voi olla kauttamerkkejä (\\).");
define("L_ERR_ROM_2", "Yritit luoda huoneen jonka nimessä on kielletty sana.");
define("L_ERR_ROM_3", "Tämä huone on jo olemassa julkisena.");
define("L_ERR_ROM_4", "Huoneen nimi ei kelpaa.");

// users frame or popup
define("L_EXIT", "Poistu chatista");
define("L_DETACH", "Kutista käyttäjälista");
define("L_EXPCOL_ALL", "Laajenna lista");
define("L_CONN_STATE", "Päivitä yhteyden tila");
define("L_CHAT", "Chat");
define("L_USER", "käyttäjä");
define("L_USERS", "käyttäjää");
define("L_LURKER", "hiippari");
define("L_LURKERS", "hiipparia");
define("L_NO_USER", "Ei ketään");
define("L_ROOM", "huone");
define("L_ROOMS", "huoneissa");
define("L_EXPCOL", "Laajenna huoneet");
define("L_BEEP", "Ääni/ei ääntä käyttäjän saapuessa");
define("L_PROFILE", "Näytä profiili");
define("L_NO_PROFILE", "Ei profiilia");

// input frame
define("L_HLP", "Apua");
define("L_MODERATOR", "%s on nyt huoneen valvoja."); 	// username/nickname
define("L_KICKED", "%s on poistettu huoneesta."); 	// username/nickname
define("L_KICKED_REASON", "%s on poistettu huoneesta. (Syy: %s)"); 	// username/nickname and reason
define("L_KICKED_ALL", "Kaikki käyttäjät on poistettu huoneesta.");
define("L_KICKED_ALL_REASON", "Kaikki käyttäjät on poistettu huoneesta. (Syy: %s)");
define("L_BANISHED", "%s on karkotettu."); 	// username/nickname
define("L_BANISHED_REASON", "%s on karkotettu. (Syy: %s)"); 	// username/nickname and reason
define("L_ANNOUNCE", "ILMOITUS");
define("L_INVITE", "%s pyytää sinua liittymään kanssaan <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> huoneeseen."); 	// username/nickname and room name as invitation link
define("L_INVITE_REG", "Sinun täytyy olla rekisteröitynyt.");
define("L_INVITE_DONE", "Kutsusi on lähetetty käyttäjälle %s."); 	// username/nickname
define("L_OK", "Lähetä");
define("L_BUZZ", "Surinagalleria");
define("L_BAD_CMD", "Tätä komentoa ei ole!");
define("L_ADMIN", "%s on jo ylläpitäjä!"); 	// username/nickname
define("L_IS_MODERATOR", "%s on jo valvoja!"); 	// username/nickname
define("L_NO_MODERATOR", "Vain tämän huoneen moderaattori voi käyttää tätä komentoa.");
define("L_NONEXIST_USER", "%s ei ole nykyisessä huoneessa."); 	// username/nickname
define("L_NONREG_USER", "%s ei ole rekisteröitynyt."); 	// username/nickname
define("L_NONREG_USER_IP", "IP on: %s."); 	// IP address
define("L_NO_KICKED", "%s on ylläpitäjä tai moderaattori eikä häntä voi poistaa."); 	// username/nickname
define("L_NO_BANISHED", "%s on ylläpitäjä tai moderaattori eikä häntä voi karkoittaa."); 	// username/nickname
define("L_SVR_TIME", "Aika: ");
define("L_NO_SAVE", "Ei tallennettavia viestejä!");
define("L_NO_ADMIN", "Vain ylläpitäjä voi käyttää tätä komentoa.");
define("L_NO_REG_USER", "Rekisteröidy jotta voit käyttää tätä komentoa.");

// help popup
define("L_HELP_TIT_1", "Hymiöt");
define("L_HELP_TIT_2", "Viestin tekstin muuttaminen");
define("L_HELP_FMT_1", "Voit lihavoida, kursivoida tai alleviivata tekstiä seuraavilla tageilla, jotka tulevat viestin alkuun ja loppuun &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; tai &lt;U&gt; &lt;/U&gt;.<BR>Esimerkiksi, &lt;B&gt;tämä teksti&lt;/B&gt; Tämä tuottaa <B>tämä teksti</B>.");
define("L_HELP_FMT_2", "Luodaksesi hyperlinkin viestiisi (e-mail tai URL), kirjoita haluamasi osoite ilman mitään tageja. Linkki luodaan automaattisesti.");
define("L_HELP_TIT_3", "Komennot"); 
define("L_HELP_NOTE", "Kaikkia komentoja käytetään Englanniksi!");
define("L_HELP_MSG", "viesti");
define("L_HELP_MSGS", "viestit");
define("L_HELP_ROOM", "Huone");
define("L_HELP_BUZZ", "~äänennimi"); //one word
define("L_HELP_BUZZ1", "Surina..."); //alert, sound alert, ring, whirr
define("L_HELP_REASON", "the reason");
define("L_HELP_MR", "herra. %s");
define("L_HELP_MS", "neiti. %s");
define("L_HELP_CMD_0", "{} on vaadituille asetuksille, [] on vaihtoehtoisille."); 
define("L_HELP_CMD_1a", "Aseta viestien näyttömäärä, 5 vähintään.");
define("L_HELP_CMD_1b", "Reload the messages frame and display the n latest messages, minimum and default are 5.");
define("L_HELP_CMD_2a", "Muuta viestien päivitystiheyttä (sekunneissa).<BR>Jos n ei ole määritetty, tai on vähemmän kuin 3, vaihtaa ei päivitystä ja 10 päivityksen välillä.");
define("L_HELP_CMD_2b", "Muokkaa viestien ja käyttäjälistan päivitystiheyttä (sekunneissa).<BR>Jos n ei ole määritetty tai on vähemmän kuin 3, vaihtaa ei päivitystä ja 10 päivityksen välillä.");
define("L_HELP_CMD_3", "Käänteinen viestien järjestys.");
define("L_HELP_CMD_4", "Liity toiseen huoneeseen. Luo uuden huoneen jos huonetta ei ole ja jos olet oikeutettu luomaan uuden huoneen.<BR>n 0 on yksityiselle 1 julkiselle huoneelle. Jos ei määritetty, oletus on 1.");
define("L_HELP_CMD_5", "Poistu chatista vaihtoehtoisen viestin kirjoituksen jälkeen.");
define("L_HELP_CMD_6", "Vältä näyttämästä viestejä, jos käyttäjän nimi on ennalta määrätty.<BR>Aseta hylkäys pois, kun nimi ja - on määritetty , kaikille käyttäjille kun - on mutta nimi ei.<BR>Ilman vaihtoehtoja tämä käsky aukaisee ikkunan, joka näyttää kaikki kielletyt nimet.");
define("L_HELP_CMD_7", "Palauta edellinen kirjoitettu teksti (käsky tai viesti).");
define("L_HELP_CMD_8", "Näytä/Piilota aika viestien alussa."); 
define("L_HELP_CMD_9", "Potki käyttäjä ulos chatista. Tätä komentoa voivat käyttää ainoastaan valvojat ja ylläpitäjät.<br />Vaihtoehtoisesti, [".L_HELP_REASON."] näyttää syyn potkimiselle (mikä tahansa teksti). <br />Jos * optio on käytössä, komento potkii ulos kaikki käyttäjät chatista valvojia ja ylläpitäjiä lukuun ottamatta (vain vieraat ja rekisteröityneet käyttäjät). Tämä on hyödyllistä kun serveriyhteydellä on ongelmia ja kaikkien ihmisten pitäisi ladata chatti uudelleen. Tässä toisessa tapauksessa, [".L_HELP_REASON."] on suositeltavaa kertoa käyttäjille miksi heidät potkittiin.");
define("L_HELP_CMD_10", "Lähetä yksityisviesti määrätylle käyttäjälle (muut käyttäjät eivät näe viestiä).");
define("L_HELP_CMD_11", "Näytä määritetyn käyttäjän tiedot.");
define("L_HELP_CMD_12", "Popup ikkuna käyttäjäprofiilin muokkaukseen.");
define("L_HELP_CMD_13", "Muuttaa käyttäjän poistumis ja saapumis ilmoituksen päälle/pois nykyisestä huoneesta.");
define("L_HELP_CMD_14", "Sallii ylläpitäjän tai valvojan korottaa rekisteröity käyttäjä kyseisen huoneen valvojaksi.");
define("L_HELP_CMD_15", "Tyhjennä viestikehys ja näytä ainoastaan 5 viimeisintä viestiä.");
define("L_HELP_CMD_16", "Tallenna viimeiset n viestiä (huomautukset poislukien) HTML tiedostoon. Jos n ei ole määritetty, kaikki saatavilla olevat viestit tallennetaan.");
define("L_HELP_CMD_17", "Sallii ylläpitäjän lähettää ilmoituksen kaikille käyttäjille riippumatta huoneesta, jossa he keskustelevat.");
define("L_HELP_CMD_18", "Pyydä toisessa huoneessa keskustelevaa liittymään huoneeseen jossa olet."); define("L_HELP_CMD_19", "Sallii huoneen valvojan tai ylläpitäjän karkoittaa \"banish\" käyttäjä huoneesta ylläpitäjän määrittämäksi ajaksi.<BR>Viimeksimainittu voi karkoittaa käyttäjän myös muista huoneista kuin siitä jossa hän itse keskustelee. Lisäksi ylläpitäjä voi käyttää '<B>&nbsp;*&nbsp;</B>' asetusta karkoittaakseen \"ikuisesti\" käyttäjän koko chatista. <br />Vaihtoehtoisesti, [".L_HELP_REASON."] näyttää syyn karkoitukselle (mikä vain haluttu teksti).");
define("L_HELP_CMD_20", "Kuvaile mitä teet ilman että viittaat itseesi.");
define("L_HELP_CMD_21", "Kuuluttaa huoneelle ja käyttäjille jotka yrittävät laittaa sinulle viestiä<br />että olet poissa koneelta. Jos tahdot kirjautua takaisin chattiin, ala vain kirjoittaa.");
define("L_HELP_CMD_22", "Lähettää surina äänen ja vaihtoehtoisesti näyttää viestin kyseisessä huoneessa.<br />- Käyttö:<br />- vanha käyttö: \"/buzz\" tai \"/buzz näytettävä viesti\" – tämä soittaa surinan oletusäänen joka on määritetty ylläpitopaneelista;<br />- laajennettu käyttö: \"/buzz ".L_HELP_BUZZ."\" tai \"/buzz ".L_HELP_BUZZ." viesti\" – tämä soittaa soundname.wav tiedoston plus/sounds kansiosta; huomaa merkki \"~\" jota käytetään toisen sanan alussa, joka on äänitiedoston nimi, ilman .wav päätettä (vain .wav muoto sallittu).<br />Oletusasetuksena, tämä on valvoja/ylläpito komento.");
define("L_HELP_CMD_23", "Lähettää <i>kuiskauksen</i> (yksityisviestin). Viesti tavoittaa määränpäänsä, ei väliä missä huoneessa toinen käyttäjä on. Jos käyttäjä ei ole online tai on asettunut poissaolevaksi, saat tietää siitä.");

define("L_HELP_CMD_24", "Tämä komento vaihtaa huoneen aiheen. Yritä olla ylikirjoittamatta muiden käyttäjien aiheita. Käytä tärkeitä aiheita.<br />Oletuksena tämä on valvojien/ylläpidon komoento.<br />Käyttämällä \"/topic top reset\" komentoa, nykyinen aihe poistuu ja vaihtuu oletukseksi.<br />Vaihtoehtoisesti, \"/topic * {}\" ja \"/topic * top reset\" tekevät täsmälleen saman Asian, mutta kaikille huoneille (yleiset aiheet ja yleisten aiheiden nollaus).");
define("L_HELP_CMD_25", "Noppapeli sattumanvaraisille numeroille.<br />Käyttö: /dice tai /dice [n];<br />n voi olla mikä arvo vain <b>1 ja %s välillä</b> (se esittää nopan numeroa). Jos mitään numeroa ei ole annettu, oletusmäärä noppia käytetään.");
define("L_HELP_CMD_26", "Tämä on monimutkaisempi versio /dice komennosta.<br />Käyttö: /{n1}d[n2] tai /{n1}d;<br />n1 voi olla mikä arvo vain <b>1 ja %s välillä</b> (se esittää nopean numeroa joka heitolla).<br />n2 voi olla mikä arvo vain <b>1 ja %s välillä</b> (se esittää nopean sivujen määrää).");
define("L_HELP_CMD_27", "Korostaa tietyn käyttäjän viestit niin että ne erottaa helpommin muun keskustelun joukosta.<br />Käyttö: /high {user} tai paina pientä <img src=./images/highlightOff.gif> kuvaketta nimimerkin oikealta puolelta (huoneen käyttäjälistalla)");
define("L_HELP_CMD_28", "Sallii lähettää <i>yhden kuvan</i> viestinä.<br />Käyttö: Kuvan on oltava netissä ja vapaasti kaikkien katsottavissa. Älä käytä sivuja joille sinun täytyy kirjautua.<br />Täysi kuvalinkki täytyy antaa! Esim.<b>/img&nbsp;http://ciprianmp.com/images/CIPRIAN.jpg</b><br />Sallitut muodot: .jpg .bmp .gif .png.Kuva linkittyy!<br />VINKKI: kirjoita /img sitten väli ja liitä kuvan osoite laatikkoon; saat kuvan osoitteen nettisivulta, kun klikkaat kuvaa hiiren oikealla napilla, menet asetuksiin, ja kopioit koko osoitteen. Kopioi ja liitä osoite /img tagin jälkeen.<br />Älä käytä kuvia tietokoneeltasi: se vain hajottaa chatti-ikkunan!!!");
define("L_HELP_CMD_29", "Tämä komento sallii valvojan tai ylläpitäjän alentaa jo valmiiksi ylemmässä asemassa ollut käyttäjä takaisin tavalliseksi käyttäjäksi.<br /> * valinta alentaa käyttäjän kaikissa huoneissa.");
define("L_HELP_CMD_30", "Tämä komento tekee saman kuin /me mutta näyttää sinun arvokkaamman tittelisi, riippuen profiilisi sukupuolesta<br />Esim. * ".sprintf(L_HELP_MR, "Ciprian")." katsoo telkkaria tai * ".sprintf(L_HELP_MS, "Dana")." on onnellinen.");
define("L_HELP_CMD_31", "Vaihda järjestys jonka mukaan käyttäjät ovat järjestetty listaan: saapumisajan tai aakkosten mukaan.");
define("L_HELP_CMD_32", "Tämä on kolmas (roolipeli) versio nopista.<br />Käyttö: /d{n1}[tn2] tai /d{n1};<br />n1 voi olla mikä vain arvo <b>1 ja 100 välillä</b> (se edustaa nopan sivujen määrää).<br />n2 voi olla mikä arvo tahansa <b> 1 ja %s välillä</b> (se edustaa vuorolla heitettävien noppien määrää).");
define("L_HELP_CMD_33", "Vaihda chatin tekstin kokoa käyttäjän mielen mukaisiksi (sallitut arvot ovat: <b>7 ja 15 välillä</b>); Pelkkä /size koodi palauttaa fonttikoon oletuskokoon (<b>".$FontSize."</b>).");
define("L_HELP_CMD_34", "Tämä sallii käyttäjän päättää mistä suunnasta tekstiä luetaan (ltr = vasemmalta-oikealle, rtl = oikealta-vasemmalle).");
define("L_HELP_CMD_35", "sallii lähettää <i>yhden videon</i> tai <i>äänitiedoston</i> pienessä Flash soittimessa kerrallaan.<br />Käyttö: Liitä vain lähteen osoite! Esim. <b>/video&nbsp;http://www.youtube.com/watch?v=ypAvUNiZG5k</b><br />Sinulla täytyy olla Shockwave Flash Player asennettuna koneellesi. Linkin on oltava kirjoitettu oikein!<br />VINKKI: kirjoita /video välilyönnin kera ja liitä videon osoite riville.");
define("L_HELP_CMD_35a", "Komento toimii ainoastaan youtubevideoiden kohdalla.<br />Esim. <b>/tube&nbsp;http://www.youtube.com/watch?v=ypAvUNiZG5k</b>");
define("L_HELP_CMD_36", "Sallii lähettää <i>yhden youtube videon</i> pienessä Flash soittimessa.<br />Käyttö: Liitä vain lähdevideon osoite! Esim. <b>/tube&nbsp;http://www.youtube.com/watch?v=ypAvUNiZG5k</b><br />Tarvitset Shockwave Flash Playerin koneellesi jotta tämä toimii. Linkin on oltava kirjoitettu oikein!<br />VINKKI: kirjoita /tube välilyönti ja sitten osoite tekstilaatikkoon.");
define("L_HELP_CMD_37", "Sallii lähettää <i><b>MathJax</b> laskuja ja kaavoja</i> chattiin.<br />Käyttö: Liitä vain TeX tai MathML (alkup.) koodit! Esim. <b>/math&nbsp;\sqrt{3x-1}+(1+x)^2</b><br />Lisää koodiesimerkkejä ja ohjeitä täältä: <a href=\"http://www.mathjax.org/demos/\" target=\"_blank\">http://www.mathjax.org/demos</a>. Kopioi koodi klikkaamalla hiiren oikeaa nappia kaavojen päällä.<br />VINKKI: kirjoita /math välilyönti ja liitä koodi laatikkoon.");
define("L_HELP_CMD_VAR", "Synonyymit (verrannolliset): %s"); // a list of English and/or translated alternatives for each command
define("L_HELP_ETIQ_1", "Chatin säännöt");
define("L_HELP_ETIQ_2", "Haluamme pitää yhteisömme ystävällisenä ja hauskana, joten seuraa näitä ohjeita. Jos et voi seurata ohjeita, joku chattimme valvojista voi potkaista sinut ulos chatista.<br /><br />Kiitos,");
define("L_HELP_ETIQ_3", "Chattimme säännöt ja ohjeet");
define("L_HELP_ETIQ_4", "Älä \"spammaa\" chattia kirjoittamalla roskaposteja.</li>
<li>Älä käytä vAiHtElEvIa merkkejä.</li>
<li>Pidä CAPS LOCKAUS minimissään, se on huutamista.</li>
<li>Ota huomioon että chattisi käyttäjät ovat kaikkialta maailmasta, ja todennäköisesti kohtaat monenlaisia eri arvomaailmoja. Ole kiltti ja kohtelias kaikille ihmisille.</li>
<li>Älä ole suoraan vihamielinen muita jäseniä kohtaan. Yritä välttää kirosanoja kokonaan.</li>
<li>Älä kutsu ihmisiä heidän oikeilla nimillään julkisesti, he eivät välttämättä arvosta sitä. Käytä heidän nimimerkkejään sen sijaan.</li>");

// messages frame
define("L_NO_MSG", "Viestejä ei juuri nyt ole ...");
define("L_TODAY_DWN", "Tänään lähetetyt viestit alhaalla");
define("L_TODAY_UP", "Eilen lähetetyt viestit alhaalla");

// message colors
$TextColors = array("Musta" => "#000000",
				"Punainen" => "#FF0000",
				"Vihreä" => "#009900",
				"Sininen" => "#0000FF",
				"Purppura" => "#9900FF",
				"Tumma punainen" => "#990000",
				"Tumma vihreä" => "#006600",
				"Tumma sininen" => "#000099",
				"Maroon" => "#996633",
				"Syaani" => "#006699",
				"Porkkana" => "#FF6600");

// ignored popup
define("L_IGNOR_TIT", "Torjuttu");
define("L_IGNOR_NON", "Ei torjuttuja käyttäjiä");

// whois popup
define("L_WHOIS_ADMIN", "Ylläpitäjä");
define("L_WHOIS_OWNER", "Omistaja");
define("L_WHOIS_TOPMOD", "Ylin valvoja");
define("L_WHOIS_MODER", "Valvoja");
define("L_WHOIS_MODERS", "Valvojat");
define("L_WHOIS_OTHERS", "Muut käyttäjät");
define("L_WHOIS_USER", "Käyttäjä");
define("L_WHOIS_GUEST", "Vieras");
define("L_WHOIS_REG", "Rekisteröitynyt");
define("L_WHOIS_BOT", "Robotti"); //Robot

// Notification messages of user entrance/exit
define("ENTER_ROM", "%s saapui huoneeseen.");
define("L_EXIT_ROM", "%s poistui huoneesta.");
if ((ALLOW_ENTRANCE_SOUND == "1" || ALLOW_ENTRANCE_SOUND == "3") && ENTRANCE_SOUND) define("L_ENTER_ROM", ENTER_ROM.L_ENTER_SND);
else define("L_ENTER_ROM", ENTER_ROM);
define("L_ENTER_ROM_NOSOUND", ENTER_ROM);

// Clean mod/fix by Ciprian
define("L_BOOT_ROM", "%s on poistettu automaattisesti epäaktiivisuuden takia.");
define("L_CLOSED_ROM", "%s on sulkenut selaimen.");

// Text for /away command notification string:
define("L_AWAY", "%s on poissa...");
define("L_BACK", "%s on palannut!");

// Quick Menu mod
define("L_QUICK", "Pikalinkit");

// Topic Banner mod
define("L_TOPIC", "On asettanut AIHEEKSI:");
define("L_TOPIC_RESET", "on tyhjentänyt AIHEEN");
define("L_HELP_TOP", "ainakin kaksi sanaa aiheeseen");
define("L_BANNER_WELCOME", "Tervetuloa %s!");
define("L_BANNER_TOPIC", "Aihe:");
define("L_DEFAULT_TOPIC_1", "Tämä on oletusaihe.");

// Img cmd mod
define("L_PIC", "Kuvan lähetti");
define("L_PIC_RESIZED", "Pienennetty");
define("L_HELP_IMG", "koonainen osoite kuvaan");
define("L_NO_IMAGE", "Tämä ei ole kelvollinen osoite julkiselle kuvalle.\\nYritä uudestaan!");

// Demote command by Ciprian
define("L_IS_NO_MOD_ALL", "%s ei ole enää minkään huoneen moderaattori.");
define("L_IS_NO_MODERATOR", "%s ei ole moderaattori.");
define("L_ERR_IS_ADMIN", "%s on ylläpitäjä!\\nEt voi muuttaa hänen oikeuksiaan.");

// Info mod by Ciprian - displays a list of all the features & mods, including Bot's name, on the welcome page
define("INFO_CMDS", "Lisäkomennot saatavilla:");
define("INFO_MODS", "Lisätoiminnot saatavilla:");
define("INFO_BOT", "Linjoilla oleva robotti:");

// Profile mod
define("L_PRO_1", "Puhutut kielet");
define("L_PRO_1a", "Kieli");
define("L_PRO_2", "Suosikki linkki 1");
define("L_PRO_3", "Suosikki linkki 2");
define("L_PRO_4", "Kuvaukset");
define("L_PRO_5", "Kuvan URL");
define("L_PRO_6", "Nimen/tekstin väri");

// Avatar mod
define("L_AVATAR", "Avatar");
define("L_ERR_AV", "Osoite ei toimi.");
define("L_TITLE_AV", "Avatarisi nyt: ");
define("L_CHG_AV", "Klikkaa \"".L_REG_16."\" prifiilikentässä<br />tallentaaksesi avatarisi.");
define("L_SEL_NEW_AV", "Valitse uusi avatar");
define("L_EX_AV", "esimerkki");
define("L_URL_AV", "URL: ");
define("L_EXPL_AV", "(Kirjoita osoite ja paina ENTER)");
define("L_CANCEL", "Peruuta");
define("L_AVA_REG", "Sinun täytyy olla rekisteröitynyt\\nvaihtaaksesi avatar kuvasi");
define("L_SEL_NEW_AV_CONFIRM", "Tätä lomaketta ei lähetetty.\\nJos menet avatareihin nyt menetät\\nkaikki muutokset jotka olet nyt tehnyt!\\n\\nOletko varma?");

// PlusBot bot mod (based on Alice bot)
define("BOT_TIPS", "HOX: Botti on aktiivinen tässä huoneessa. Aloita keskustelu sen kanssa, kirjoittamalla <b>hello ".C_BOT_NAME."</b>. Päätä keskustelu kirjoittamalla: <b>bye ".C_BOT_NAME."</b>. (YV: /to <b>".C_BOT_NAME."</b> Viesti)"); //make sure your translation don't go too long here; it must fit to one line on the banner (under topic)
define("BOT_PRIV_TIPS", "HOX: Bot on huoneessa %s . Voit puhua sille yksityisesti klikkaamalla sen nimeä ja kuiskaamalla. (Komento: /wisp <b>".C_BOT_NAME."</b> Viesti)"); //make sure your translation don't go too long here; it must fit to one line on the banner (under topic)
define("BOT_PRIVONLY_TIPS", "HOX: Bot ei ole aktiivinen. Voit puhua sille yksityisesti klikkaamalla sen nimeä. (Komento: /to <b>".C_BOT_NAME."</b> Viesti tai /wisp <b>".C_BOT_NAME."</b> Viesti)"); //make sure your translation don't go too long here; it must fit to one line on the banner (under topic)
define("BOT_STOP_ERROR", "Bot ei ole tässä huoneessa!");
define("BOT_START_ERROR", "Bot on jo tässä huoneessa!");
define("BOT_DISABLED_ERROR", "Bot on estetty ylläpitopaneelista!");

// Dice v.1, v.2 and v.3 modes
define("DICE_RESULTS", "heittää noppaa tuloksin:");
define("DICE_WRONG", "Valitse montako noppaa haluat heittää\\n(valitse numero välillä 1 ja ".MAX_ROLLS.").\\nKiroita /dice heittääksesi kaikki ".MAX_ROLLS." nopat.");
define("DICE2_WRONG", "Valitun arvon on oltava väliltä 1 ja ".MAX_ROLLS.".\\nJätä tyhjäksi heittääksesi kaikki ".MAX_ROLLS." nopat\\n(esim. /".MAX_DICES."d tai /".MAX_DICES."d".MAX_ROLLS.").");
define("DICE2_WRONG1", "Ensimmäisen arvon on oltava välillä 1 ja ".MAX_DICES.".\\n(esim. /".MAX_DICES."d tai /".MAX_DICES."d".MAX_ROLLS.").");
define("DICE3_WRONG", "Ensimmäinen (n) arvo on oltava välillä 1 ja 100.\\nSeuraava arvo on välillä 1 ja ".MAX_ROLLS.".\\nJätä tyhjäksi käyttääksesi kaikki ".MAX_ROLLS." nopat\\n(esim. /d50 tai /d100t".MAX_ROLLS.").");

// Private Message Popup mod by Ciprian
define("L_REG_POPUP", "Avaa pop-upit yksityisviesteille");
define("L_REG_POPUP_NOTE", "Sinun pop-up estosi ei saisi olla päällä!");
define("L_PRIV_POST_MSG", "Lähetä yksityisviesti!");
define("L_PRIV_MSG", "Ei yksityisviestejä vastaanotettu!");
define("L_PRIV_MSGS", "%s yksityisviestiä saapunut!");
define("L_PRIV_MSGSa", "Tässä ovat nsimmäiset 10 viestiä!<br />Käytä linkkiä alhaalla nähdäksesi loput.");
define("L_PRIV_MSG1", "Lähettäjä:");
define("L_PRIV_MSG2", "Huone:");
define("L_PRIV_MSG3", "Vastaanottaja:");
define("L_PRIV_MSG4", "Viesti:");
define("L_PRIV_MSG5", "Lähetetty:");
define("L_PRIV_REPLY", "Vastaa");
define("L_PRIV_READ", "Paina ’".L_REG_25."’ nappia merkitäksesi kaikki luetuksi!");
define("L_PRIV_POPUP", "Voit estää tai sallia tämän pop-up toiminnon million vain<br />muokkaamalla sinun");
define("L_PRIV_POPUP1", "Profiiliasi</a> (vain rekisteröityneet käyttäjät)");
define("L_NOT_ONLINE", "%s ei ole paikalla juuri nyt.");
define("L_PRIV_NOT_ONLINE", "%s ei ole paikalla juuri nyt,\\nmutta saa viestisi kun kirjautuu sisään.");
define("L_PRIV_NOT_INROOM", "%s ei ole tässä huoneessa.\\nJos vielä haluat lähettää viestin tälle käyttäjälle,\\nkäytä komentoa: /wisp %s viesti.");
define("L_PRIV_AWAY", "%s on poissa,\\nmutta saa silti viestisi\\nkun palaa.");
define("PM_DISABLED_ERROR", "Kuiskailu (yksityisviesteily)\\non estetty tässä chatissa.");
define("L_NEXT_PAGE", "Mene seuraavalle sivulle");
define("L_NEXT_READ", "Lue seuraavat %s"); // message / 10 messages
define("L_ROOM_ALL", "Kaikki huoneet");
define("L_PRIV_NO_MSGS", "Ei yksityisviestejä vastaanotettu");
define("L_PRIV_READ_MSG", "1 yksityisviesti vastaanotettu"); //singular
define("L_PRIV_READ_MSGS", "%s yksityisviestiä vastaanotettu"); //plural
define("L_PRIV_MSGS_NEW", "Uusi"); //singular form
define("L_PRIV_MSGS_READ", "Lue"); //singular form
define("L_PRIV_MSG6", "Tila:");
define("L_PRIV_RELOAD", "Päivitä sivu");
define("L_PRIV_MARK_ALL", "Merkitse kaikki luetuksi");
define("L_PRIV_MARK_SEL", "Merkitse valitut luetuksi");
define("L_PRIV_REMOVE", "Poista valitut YVt"); // or selected
define("L_PRIV_PM", "(yksityinen)");
define("L_PRIV_WISP", "(kuiskaus)");

// Color Input Box mod by Ciprian
define("L_ENABLED", "Sallittu");
define("L_DISABLED", "Estetty");
define("L_COLOR_HEAD_SETTINGS", "Tämän palvelimen asetukset:");
define("L_COLOR_HEAD_SETTINGSa", "Oletusvärit:");
define("L_COLOR_HEAD_SETTINGSb", "Oletusväri:");
define("L_COL_HELP_TITLE", "Poimi väri");
define("L_COL_HELP_SUB1", "Käyttö:");
define("L_COL_HELP_P1", "Voit valita itsellesi oman värin profiilistasi (sama väri kuin käyttäjätunnuksesi väri). Voit silti käyttää mitä tahansa muutakin väriä. Vaihtaaksesi takaisin omaan väriisi satunnaisessa käytössä olleesta väristä, sinun täytyy valita oletusväri (ei mitään) – Se on ensimmäinen väri valikossa.");
define("L_COL_HELP_SUB2", "Vinkit:");
define("L_COL_HELP_P2", "<u>Color Range</u><br />Depending on your browser/OS capabilities, it is possible that some of the colors won’t be rendered. Only 16 color names are supported by the W3C HTML 4.0 standard:");
define("L_COL_HELP_P2a", "If a user claims he cannot see your selected color it means he is probably using an older browser.");
define("L_COL_HELP_SUB3", "Settings defined on this chat:");
define("L_COL_HELP_P3", "<u>Värien käyttötasot</u>:<br />1. Ylläpito voi käyttää tiettyjä värejä.<br />Oletusvärit ylläpidolle ovat <SPAN style=\"color:".COLOR_CA."\">".COLOR_CA."</SPAN>.<br />2. Valvojat voivat käyttää mitä vain värejä, mutta <SPAN style=\"color:".COLOR_CA."\">".COLOR_CA."</SPAN> ja <SPAN style=\"color:".COLOR_CA1."\">".COLOR_CA1."</SPAN>.<br />The default color for moderators is <SPAN style=\"color:".COLOR_CM."\">".COLOR_CM."</SPAN>.<br />3. The other users can use any color but <SPAN style=\"color:".COLOR_CA."\">".COLOR_CA."</SPAN>, <SPAN style=\"color:".COLOR_CA1."\">".COLOR_CA1."</SPAN>, <SPAN style=\"color:".COLOR_CM."\">".COLOR_CM."</SPAN> and <SPAN style=\"color:".COLOR_CM1."\">".COLOR_CM1."</SPAN>.");
define("L_COL_HELP_P3a", "The default color is <u><SPAN style=\"color:".COLOR_CD."\">".COLOR_CD."</SPAN></u>.<br /><br /><u>Technical stuff</u>: These colors have been defined by the administrator in admin panel.<br />If anything goes wrong or if there is something you don’t like about the default colors, you should contact the <b>administrator</b> first, not the other users in your room. :-)");
define("L_COL_HELP_USER_STATUS", "Tilasi");
define("L_COL_TUT", "Värillisen tekstin käyttö chatissa");
define("L_NULL", "Ei mitään");
define("L_NULL_F", "Ei mitään"); // feminine word, if it's the case
define("L_ROOM_COLOR", "Huoneen väri");
define("L_PRO_COLOR", "profiilin väri");

// Alert messages on errors for Color Input Box mod by Ciprian
define("COL_ERROR_BOX_MODA", "Vain ylläpitäjä voi käyttää ".COLOR_CA." väriä!\\n\\nVärisi palaa olemaan".COLOR_CM."!\\n\\nOle hyvä ja valitse jokin toinen väri.");
define("COL_ERROR_BOX_USRA", "Vain ylläpitäjä voi käyttää ".COLOR_CA." väriä!\\n\\nÄlä yritä käyttää myöskään ".COLOR_CA.", ".COLOR_CA1.", ".COLOR_CM." tai ".COLOR_CM1.".\\n\\nNämä on varattu ylläpitäjille ja valvojille!\\n\\nTekstisi palaa väriin ".COLOR_CD."!\\n\\n Ole hyvä ja valitse jokin toinen väri.");
define("COL_ERROR_BOX_USRM", "Sinun täytyy olla valvoja käyttääksesi ".COLOR_CM." väriä!\\n\\nÄlä yritä käyttää myöskään ".COLOR_CA.", ".COLOR_CA1.", ".COLOR_CM." tai ".COLOR_CM1.".\\n\\nNämä on varattu ylläpidolle ja valvojille!\\n\\nVärisi palaa ".COLOR_CD."!\\n\\n Ole hyvä ja valitse jokin toinen väri.");

//Welcome message to be displayed on login
define("L_WELCOME_MSG", "Tervetuloa chattiin. Noudata netikettiä kun chattaat: <I>Yritä olla kohtelias ja ystävällinen</I>.");
if ((ALLOW_ENTRANCE_SOUND == "2" || ALLOW_ENTRANCE_SOUND == "3") && WELCOME_SOUND) define("WELCOME_MSG", L_WELCOME_MSG . L_WELCOME_SND);
else define("WELCOME_MSG", L_WELCOME_MSG);
define("WELCOME_MSG_NOSOUND", L_WELCOME_MSG); 

// Send alert to users in chat when important settings are changed in admin panel
define("L_RELOAD_CHAT", "Chatin asetuksia on juuri muutettu. Välttääksesi virheet ja ongelmat, kirjaudu ulos ja päivitä sivu uudelleen (F5 napista).");

//Size command error by Ciprian
define("L_ERR_SIZE", "Tekstin koon arvo voi olla vain\\ntyhjä (nollaamiseksi) tai välillä 7 ja 15");

// Password reset form by Ciprian
define("L_PASS_0", "Salasanan pyytäminen");
define("L_PASS_1", "Salainen kysymys");
define("L_PASS_2", "Mikä oli ensimmäinen autosi?"); // Don't change this question! Just translate it! And keep it short!
define("L_PASS_3", "Mikä on lemmikkisi nimi?"); // Don't change this question! Just translate it! And keep it short!
define("L_PASS_4", "Mikä on lempijuomasi?"); // Don't change this question! Just translate it! And keep it short!
define("L_PASS_5", "Milloin olet syntynyt?"); // Don't change this question! Just translate it! And keep it short!
define("L_PASS_6", "Salainen vastaus");
define("L_PASS_7", "Pyydä salasana");
define("L_PASS_8", "Salasanasi on uusittu.");
define("L_PASS_9", "Uusi salasanasi chattiin");
define("L_PASS_10", "Salasanasi chattiin %s");
define("L_PASS_11", "Tervetuloa takaisin chattiserverillemme!");
define("L_PASS_12", "Valitse kysymyksesi ...");
define("L_ERR_PASS_1", "Väärä käyttäjänimi! Valitse omasi.");
define("L_ERR_PASS_2", "Väärä sähköposti! Yritä uudelleen.");
define("L_ERR_PASS_3", "Väärä salainen kysymys.<br />Vastaa tähän alla olevaan!");
define("L_ERR_PASS_4", "Väärä salainen vastaus. Yritä uudelleen!");
define("L_ERR_PASS_5", "Et ole määrittänyt yksityisiä/salaisia tietojasi.");
define("L_ERR_PASS_6", "Et ole määrittänyt yksityisiä/salaisia tietojasi.<br />Et voi käyttää tätä lomaketta. Ota yhteyttä ylläpitäjään!");

// admin stuff - added for administrators promotions/demotions in admin panel - by Ciprian
define("L_ADM_3", "%s on tullut tämän chatin ylläpitäjäksi.");
define("L_ADM_4", "%s ei ole enää ylläpitäjänä tässä chatissa.");

// Open Schedule by Ciprian
define("L_DAILY", "Päivittäin");
define("L_ALWAYS", "aina");
define("L_OPEN", "Avoin");
define("L_CLOSED", "Suljettu");
define("L_OPEN_PUB", "AVOIN KAIKILLE");
define("L_CLOSED_PUB", "SULJETTU VIERAILTA");

// Links popup page by Alex
define("L_LINKS_1", "Lähetetyt linkit");
define("L_LINKS_2", "Täältä pääset katsomaan lähetettyjä linkkejä");

// Javascript Status/title messages on links/images mouseover
define("L_CLICKS", "Klikkaa tästä %s %s");
define("L_CLICK", "Klikkaa tästä %s");
define("L_LINKS_3", "avataksesi linkin");
define("L_LINKS_4", "avataksesi tekijän sivun");
define("L_LINKS_5", "lisätäksesi tämän smilen");
define("L_LINKS_6", "ottaaksesi yhteyttä");
define("L_LINKS_7", "vieraillaksesi %s kotisivuilla"); //phpMyChat or other websites
define("L_LINKS_8", "liittyäksesi %s ryhmään"); //phpMyChat
define("L_LINKS_9", "lähettääksesi palautetta");
define("L_LINKS_10", "ladataksesi %s"); //phpMyChat or other resources
define("L_LINKS_11", "tarkistaaksesi ketkä chattailevat");
define("L_LINKS_12", "avataksesi chatin kirjautumissivu");
define("L_LINKS_13", "lähettääksesi surina"); // can also be translated as "to play this sound"
define("L_LINKS_14", "käyttääksesi tätä komentoa");
define("L_LINKS_15", "avataksesi");
define("L_LINKS_16", "Hymiögalleria");
define("L_LINKS_17", "järjestääksesi nousevasti");
define("L_LINKS_18", "järjestääksesi laskevasti");
define("L_LINKS_19", "muokataksesi Gravatariasi"); // do not translate the word "Gravatar"!
define("L_LINKS_20", "Lähetetyt kysymykset");
define("L_SWITCH", "Vaihda %s"); // E.g. "Switch to Italian" (Country Flags mouseover / Language switching)
define("L_SELECTED", "valitut"); // E.g. "French (selected)" (Country Flags mouseover / Language switching)
define("L_SELECTED_F", "valitut"); // feminine word, if it's the case
define("L_NOT_SELECTED", "ei valittu");
define("L_NOT_SELECTED_F", "ei valittu"); // feminine word, if it's the case
define("L_EMAIL_1", "lähettääksesi mailia");
define("L_FULLSIZE_PIC", "avataksesi täysikokoisen kuvan");
define("L_PRIVACY", "lukeaksesi Käyttöehtomme"); //Click here to…
define("L_AUTHOR", "tekijä"); //Phrase will look like this: L_CLICK." ".L_LINKS_6." ".L_AUTHOR == Click here - to contact - the author
define("L_DEVELOPER", "chatin luoja"); //same here
define("L_OWNER", "chatin omistaja"); //same here
define("L_TRANSLATOR", "kääntäjä"); //same here

// Counter on login
define("L_VISITOR_REPORT", "... vierailijaa %s lähtien");

// Status bar messages
define("L_JOIN_ROOM", "Liity tähän huoneeseen");
define("L_USE_NAME", "Käytä tätä nimeä");
define("L_USE_NAME1", "Osoita tälle käyttäjänimelle");
define("L_WHSP", "Kuiskaa");
define("L_SEND_WHSP", "Lähetä kuiskaus");
define("L_SEND_PM_1", "Lähetä YV");
define("L_SEND_PM_2", "Lähetä yksityisviesti");
define("L_HIGHLIGHT", "Korosta/poista korostus");
define("L_HIGHLIGHT_SB", "Korosta/poista korostus tämän käyttäjän viesteistä");

//Lurking frame popup
define("L_LURKING_2", "Hiipparien sivu");
define("L_LURKING_3", "hiipparoi");
define("L_LURKING_4", "liittyi");
define("L_LURKING_5", "Tuntematon");

// Extra options by Ciprian // keep all these lines as short as possible. they have to fit into the Users frame width!
define("L_EXTRA_OPT", "Lisäasetukset");
define("L_ARCHIVE", "Avaa arkisto");
define("L_SOUNDFIX_IE_1", "Äänikorjaus IElle");
define("L_SOUNDFIX_IE_2", "Lataa äänten korjaus IElle");
define("L_LURKING_1", "Avaa hiipparien sivu");
define("L_REG_BRB", "brb (rekisteröidy ensin)");
define("L_DEL_BYE", "älä jää odottamaan minua");
define("L_EXTRA_PRIV1", "Luo YVt"); // means: "Read your PMs" - link to open the pm manager if there are any old/read pms.
define("L_EXTRA_PRIV2", "Uudet YVt"); // link to open the pm manager if there are new pms

// Set the first day of the week in your language (0 for Sunday, 1 for Monday)
define("FIRST_DAY", "1");

// Months Long Names
define("L_JAN", "tammikuu");
define("L_FEB", "helmikuu");
define("L_MAR", "maaliskuu");
define("L_APR", "huhtikuu");
define("L_MAY", "toukokuu");
define("L_JUN", "kesäkuu");
define("L_JUL", "heinäkuu");
define("L_AUG", "elokuu");
define("L_SEP", "syyskuu");
define("L_OCT", "lokakuu");
define("L_NOV", "marraskuu");
define("L_DEC", "joulukuu");
// Months Short Names
define("L_S_JAN", "tammi");
define("L_S_FEB", "helmi");
define("L_S_MAR", "maalis");
define("L_S_APR", "huhti");
define("L_S_MAY", "touko");
define("L_S_JUN", "kessä");
define("L_S_JUL", "heinä");
define("L_S_AUG", "elo");
define("L_S_SEP", "syys");
define("L_S_OCT", "loka");
define("L_S_NOV", "marras");
define("L_S_DEC", "joulu");
// Week days Long Names
define("L_MON", "maanantai");
define("L_TUE", "tiistai");
define("L_WED", "keskiviikko");
define("L_THU", "torstai");
define("L_FRI", "perjantai");
define("L_SAT", "lauantai");
define("L_SUN", "sunnuntai");
# Dates - genitive
define("L_JANG", "tammikuuta");
define("L_FEBG", "helmikuuta");
define("L_MARG", "maaliskuuta");
define("L_APRG", "huhtikuuta");
define("L_MAYG", "toukokuuta");
define("L_JUNG", "kesäkuuta");
define("L_JULG", "heinäkuuta");
define("L_AUGG", "elokuuta");
define("L_SEPG", "syyskuuta");
define("L_OCTG", "lokakuuta");
define("L_NOVG", "marraskuuta");
define("L_DECG", "joulukuuta");
// Week days Short Names
define("L_S_MON", "ma");
define("L_S_TUE", "ti");
define("L_S_WED", "ke");
define("L_S_THU", "to");
define("L_S_FRI", "pe");
define("L_S_SAT", "la");
define("L_S_SUN", "su");

// Localized date format
if (stristr(PHP_OS,'win')) {
setlocale(LC_ALL, "fi_fi.UTF-8", "fi_FI@euro", "fi_FI.UTF-8", "Finnish_Finland", "finnish.UTF-8", "finnish");
} else {
setlocale(LC_ALL, "fi_FI.UTF-8", "fi_FI.UTF-8@euro", "fi_fi.UTF-8", "finnish.UTF-8", "fin.UTF-8", "fi.UTF-8", "fi_FI@euro", "fi_FI", "Finnish.UTF-8"); // For FI formats
}
define("L_LANG", "fi_FI");
define("ISO_DEFAULT", "iso-8859-1");
define("WIN_DEFAULT", "windows-1252");
define("L_SHORT_DATE", "%d.%m.%Y"); //Change this to your local desired format (keep the short form)
define("L_LONG_DATE", "%A %d %B %Y"); //Change this to your local desired format (keep the long form)
define("L_SHORT_DATETIME", "%d.%m.%Y %H.%M.%S"); //Change this to your local desired format (keep the short form)
define("L_LONG_DATETIME", "%A %d %B %Y %H.%M.%S"); //Change this to your local desired format (keep the long form)
define("L_CAL_FORMAT", "%d %B %Y"); // Calendar format

// Chat Activity displayed on remote web pages
define("LOGIN_LINK", "<A HREF='".C_CHAT_URL."?L=".$L."' TITLE='".sprintf(L_CLICK,L_LINKS_12)."' onMouseOver=\"window.status='".sprintf(L_CLICK,L_LINKS_12).".'; return true;\" TARGET=_blank>");
define("NB_USERS_IN", "käyttäjät ovat ".LOGIN_LINK."chattailemassa</A> juuri nyt.");
define("USERS_LOGIN", "1 käyttäjä on ".LOGIN_LINK."chattailemassa</A> juuri nyt.");
define("NO_USER", "Kukaan ei ole ".LOGIN_LINK."chattailemassa</A> juuri nyt.");
define("L_PRIV_REPLY_LOGIN", "Kirjaudu chattiin jos haluat ".LOGIN_LINK."vastata</A> yllä oleviin viesteihin.");

// Language names
define("L_LANG_AR", "Argentiinan Espanja");
define("L_LANG_BG", "Bulgaria");
define("L_LANG_BR", "Brasilian Portugali");
define("L_LANG_CA", "Catalan");
define("L_LANG_CNS", "Kiina (helppo)");
define("L_LANG_CNT", "Kiina (perinteinen)");
define("L_LANG_CZ", "Tsekki");
define("L_LANG_DA", "Tanska");
define("L_LANG_DE", "Saksa");
define("L_LANG_EN", "Englanti"); // for admin panel only
define("L_LANG_ENUK", "Englanti UK"); // for UK formats and flags
define("L_LANG_ENUS", "Englanti US"); // for US formats and flags
define("L_LANG_ES", "Espanja");
define("L_LANG_FA", "Persia"); //Pakistan language
define("L_LANG_FI", "Suomi");
define("L_LANG_FR", "Ranska");
define("L_LANG_GR", "Kreikka");
define("L_LANG_HE", "Heprea");
define("L_LANG_HI", "Hindi");
define("L_LANG_HU", "Unkari");
define("L_LANG_ID", "Indonesia");
define("L_LANG_IT", "Italia");
define("L_LANG_JA", "Japani");
define("L_LANG_KA", "Georgian");
define("L_LANG_NB", "Norja (Bokmål)");
define("L_LANG_NN", "Norja (Nynorsk)");
define("L_LANG_NE", "Nepali");
define("L_LANG_NL", "Hollanti");
define("L_LANG_PL", "Puola");
define("L_LANG_PT", "Portugali");
define("L_LANG_RO", "Romania");
define("L_LANG_RU", "Venjä");
define("L_LANG_SK", "Slovakia");
define("L_LANG_SRC", "Serbia - kyrilliset");
define("L_LANG_SRL", "Serbia - Latin");
define("L_LANG_SV", "Ruotsi");
define("L_LANG_TH", "Thaimaa");
define("L_LANG_TR", "Turkki");
define("L_LANG_UK", "Ukraina - Cyrillic");
define("L_LANG_UR", "Urdu"); //Pakistan language
define("L_LANG_VI", "Vietnam");
define("L_LANG_YO", "Yoruba"); // Nigeria&Congo language

//Skins preview page
define("L_SKINS_TITLE", "Esikatsele ulkoasuja");
define("L_SKINS_TITLE1", "Ulkoasut %s aina %s asti, esikatsele"); // Skins 1 to 4 preview
define("L_SKINS_AV", "Käytössä olevat ulkoasut");
define("L_SKINS_NONAV", "Tyylejä ei ole määritelty \"skins\" kansioon");
define("L_SKINS_COPY", "&copy; %s Tyylit on tehnyt %s"); //year - author

// Swap image titles by Ciprian
define("L_GEN_ICON", "Sukupuoli kuvake");

// Ghost mode by Ciprian
define("L_GHOST", "Haamu");
define("L_SUPER_GHOST", "Super haamu");
define("L_NO_GHOST", "Näkyvä");

// Sorting options by Ciprian
define("L_ASC", "Nouseva");
define("L_DESC", "Laskeva");

// Returning visitors counter on profiles by Ciprian
define("L_LOGIN_COUNT", "Vierailut yhteensä");

// Gravatar from email mod by Ciprian
define("L_GRAV_USE", "käytä Gravataria"); // do not translate the word "Gravatar"!

// Uploader mod by Ciprian
define("L_UPLOAD", "Lataa %s");
define("L_UPLOAD_IMG", "Kuvatiedosto");
define("L_UPLOAD_SND", "Äänitiedosto");
define("L_UPLOAD_FLS", "Tiedostot");
define("L_UPLOAD_SUCCESS", "%s onnistuneesti ladattu %s.");
define("L_FILES_TITLE", "Latausten hallinta");

// Room restriction mod by Ciprian
define("L_RESTRICTED", "Estetty");
define("L_RESTRICTED_ROM", "%s on estetty huoneesta.");

// OpenID login mod by Ciprian
define("L_OPID_SIGN", "Kirjaudu sisään OpenID tunnuksilla");
define("L_OPID_REG", "Tuo OpenID profiilisi");

// Support buttons
define("L_SUPP_WARN", "Olet päättänyt antaa tukesi ilmaiselle palvelulle nimeltä ".APP_NAME." tekemällä lahjoituksen kehittäjälle.\\nKiitos tuestasi!\\n\\nHuom: Vastaanottaja ei ole tämän chatin omistaja.\\nAnna summa seuraavalta sivulta.\\n\\nHaluatko jatkaa?");
define("L_SUPP_ALT", "Voit tukea PayPalilla ohjelmaa ".APP_NAME." – se on Nopeaa, Ilmaista ja Turvallista!");

// Video & Audio & Youtube cmds (Embevi & YouTube player class) – same approach as in // Img cmd mod section!
define("L_AUDIO", "Äänitiedoston lähetti");
define("L_VIDEO", "Videon lähetti");
define("L_HELP_VIDEO", "Video tai äänitiedoston täysi polku");
define("L_NO_VIDEO", "Osoitetta ei voi liittää.\\nTämä ei ole hyväksytty osoite videolle tai äänitiedostolle.\\nYritä uudelleen!");
define("L_ORIG_VIDEO", "avataksesi alkuperäisen lähteen sivun"); //it sounds like: Click here to open the…
// Same approach as in L_HELP_CMD_28

// Birthday mod - by Ciprian
define("L_PRO_7", "Syntymäaika");
define("L_PRO_8", "näytä syntymäpäivä julkisesti");
define("L_PRO_9", "näytä ikä julkisesti");
define("L_PRO_10", "Ikä");
define("L_PRO_11", "%1\$d vuotta, %2\$d kuukautta ja %3\$d päivää"); //you can also change the order here, but 1 stands for years, 2 for months and 3 for days
define("L_DOB_TIT_1", "Syntymäpäivien lista");
$L_DOB_SUBJ = "Hyvää syntymäpäivää %s!"; // username

// MathJax (MathML/TeX) formulas rendering in chat - by Ciprian
define("L_EQUATION", "Tasaaminen");
define("L_MATH", "%s lähettänyt %s"); //e.g. "Equation posted by username" (defined above); the word "Equation" will render as a url to show popup with the posted formulas
?>