<?php
// +------------------------------------------------------------------------+
// | class.upload.fi_FI.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) ShadowKiro 2015. All rights reserved.                        |
// | Version       0.28                                                     |
// | Last modified 23/08/2015                                               |
// | Email         shadowkiro@gmail.com                                     |
// | Web           http://www.shadowkiro.com                                |
// +------------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify   |
// | it under the terms of the GNU General Public License version 2 as      |
// | published by the Free Software Foundation.                             |
// |                                                                        |
// | This program is distributed in the hope that it will be useful,        |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of         |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          |
// | GNU General Public License for more details.                           |
// |                                                                        |
// | You should have received a copy of the GNU General Public License      |
// | along with this program; if not, write to the                          |
// |   Free Software Foundation, Inc., 59 Temple Place, Suite 330,          |
// |   Boston, MA 02111-1307 USA                                            |
// |                                                                        |
// | Please give credit on sites that use class.upload and submit changes   |
// | of the script so other people can use them as well.                    |
// | This script is free to use, don't abuse.                               |
// +------------------------------------------------------------------------+

/**
 * Class upload finnish translation
 *
 * @version   0.28
 * @author    ShadowKiro (shadowkiro@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright ShadowKiro
 * @package   cmf
 * @subpackage external
 * Do not use ' but use ’ instead (utf-8 edit bug) or comment it out like \'
 */

    $translation = array();
    $translation['file_error']                  = 'Tiedostovirhe, yritä uudelleen.';
    $translation['local_file_missing']          = 'Tiedostoa ei ole olemassa.';
    $translation['local_file_not_readable']     = 'Tiedostoa ei voi lukea.';
    $translation['uploaded_too_big_ini']        = 'Tiedoston lataus virhe (ladattu tiedosto ylittää %s - latauksen upload_max_filesize asetus löytyy php.ini tiedostosta).';
    $translation['uploaded_too_big_html']       = 'Tiedoston lataus virhe (ladattu tiedosto ylittää %s - latauksen MAX_FILE_SIZE rajan joka on määritetty latauslomakkeessa).';
    $translation['uploaded_partial']            = 'Tiedoston lataus virhe  (tiedosto latautui vain osittain).';
    $translation['uploaded_missing']            = 'Tiedoston lataus virhe  (tiedostoa ei ladattu).';
    $translation['uploaded_no_tmp_dir']         = 'Tiedoston lataus virhe  (väliaikainen kansio puuttuu).';
    $translation['uploaded_cant_write']         = 'Tiedoston lataus virhe (tiedostoa ei voitu tallentaa).';
    $translation['uploaded_err_extension']      = 'Tiedoston lataus virhe (laajennusta ei voi ladata).';
    $translation['uploaded_unknown']            = 'Tiedoston lataus virhe (tuntematon virhe).';
    $translation['try_again']                   = 'Tiedoston lataus virhe Yritä uudestaan.';
    $translation['file_too_big']                = 'Tiedosto liian suuri (%s).';
    $translation['no_mime']                     = 'MIME tyyppiä ei havaittu.';
    $translation['incorrect_file']              = 'Väärä tiedostomuoto.';
    $translation['image_too_wide']              = 'Kuva on liian leveä (<= %s).';
    $translation['image_too_narrow']            = 'Kuva on liian kapea (>= %s).';
    $translation['image_too_high']              = 'Kuva on liian korkea (<= %s).';
    $translation['image_too_short']             = 'Kuva on liian lyhyt (>= %s).';
    $translation['ratio_too_high']              = 'Kuvan koko on liian suuri (kuva on liian leveä) (<= %s).';
    $translation['ratio_too_low']               = 'Kuvan koko on liian pieni (kuva on liian kapea) (>= %s).';
    $translation['too_many_pixels']             = 'Kuvassa on liikaa pikseleitä (<= %s).';
    $translation['not_enough_pixels']           = 'Kuvassa ei ole tarpeeksi pikseleitä (>= %s).';
    $translation['file_not_uploaded']           = 'Tiedostoa ei ladattu, prosessia ei voi jatkaa.';
    $translation['already_exists']              = '%s on jo olemassa. Vaihda tiedoston nimi.';
    $translation['temp_file_missing']           = 'Ei ole oikea lähdetiedosto. Prosessia ei voi jatkaa.';
    $translation['source_missing']              = 'Ei ole oikea lähdetiedosto. Prosessia ei voi jatkaa.';
    $translation['destination_dir']             = 'Kohdekansiota ei voitu luoda. Prosessia ei voi jatkaa.';
    $translation['destination_dir_missing']     = 'Kohdekansiota ei ole. Prosessia ei voi jatkaa.';
    $translation['destination_path_not_dir']    = 'Kohdepolku ei ole kansio. Prosessia ei voi jatkaa.';
    $translation['destination_dir_write']       = 'Kohdekansiota ei voi tehdä kirjoitettavaksi. Prosessia ei voi jatkaa.';
    $translation['destination_path_write']      = 'Kohdekansio ei ole kirjoitettavissa. Prosessia ei voi jatkaa.';
    $translation['temp_file']                   = 'Väliaikaista tiedostoa ei voitu luoda. Prosessia ei voi jatkaa.';
    $translation['source_not_readable']         = 'Lähdetiedosto ei ole luettavissa. Prosessia ei voi jatkaa.';
    $translation['no_create_support']           = 'Luontia %s ei tuettu.';
    $translation['create_error']                = 'Virhe luodessa %s kuvaa lähteestä.';
    $translation['source_invalid']              = 'Kuvan lähdettä ei voi lukea. Se ei ole kuva?';
    $translation['gd_missing']                  = 'Tukipalvelin ei ole pystyssä.';
    $translation['watermark_no_create_support'] = 'Ei tuettu %s luontia, vesileimaa ei voitu lukea.';
    $translation['watermark_create_error']      = 'Ei %s lukutukea, vesileimaa ei voitu asettaa.';
    $translation['watermark_invalid']           = 'Tuntematon tiedostomuoto, vesileimaa ei voi lukea.';
    $translation['file_create']                 = 'Ei %s luo tukea.';
    $translation['no_conversion_type']          = 'Käännöstyyppiä ei asetettu.';
    $translation['copy_failed']                 = 'Virhe kopioidessa tiedostoa palvelimelle. copy() epäonnistui.';
    $translation['reading_failed']              = 'Virhe luettaessa tiedostoa.';   

?>