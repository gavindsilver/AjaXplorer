<?
//---------------------------------------------------------------------------------------------------
//							
//	WebJeff - FileManager v1.6
//	
//	Jean-Fran�ois GAZET
//	http://www.webjeff.org
//	webmaster@webjeff.org	
//
//---------------------------------------------------------------------------------------------------

$mess=array(
"0" => "Laatste versie",
"1" => "Bestandsnaam",
"2" => "Grote",
"3" => "Type",
"4" => "Gewijzigd",
"5" => "Acties",
"6" => "Hernoem",
"7" => "Verwijder",
"8" => "Map",
"9" => "Midi bestand",
"10" => "Tekst bestand",
"11" => "Javascript",
"12" => "GIF afbeelding",
"13" => "JPG afbeelding",
"14" => "HTML pagina",
"15" => "HTML pagina",
"16" => "REAL bestand",
"17" => "REAL bestand",
"18" => "PERL script",
"19" => "ZIP archief",
"20" => "WAV geluid",
"21" => "PHP script",
"22" => "PHP script",
"23" => "Bestand",
"24" => "Parent directory",
"25" => "Upload een of meerdere bestanden (max. ".ConfService::getConf('UPLOAD_MAX_NUMBER').") in the directory : ",
"26" => "Maak een nieuwe map in : ",
"27" => "Upload",
"28" => "Maak een nieuwe bestand in : ",
"29" => "Maak",
"30" => "Type een naam voor het bestand, klik daarna op &quot;Maak&quot;",
"31" => "Je moet een bestand selecteren",
"32" => "Ga terug",
"33" => "Fout bij het uploaden van het bestand!",
"34" => "Het bestand",
"35" => "is succesvol aangemaakt in de map",
"36" => "De bestandsgrote is",
"37" => "Je moet een geldige naam typen",
"38" => "De map",
"39" => "is aangemaakt in",
"40" => "Een map met deze naam bestaat al (namen zijn hoofdletter ongevoelig)",
"41" => "moet worden gehernoemd",
"42" => "naar",
"43" => "bestaat al (namen zijn hoofdletter ongevoelig)",
"44" => "is verwijderd",
"45" => "map",
"46" => "bestand",
"47" => "Wil je echt verwijderen",
"48" => "OK",
"49" => "CANCEL",
"50" => "Exe bestand",
"51" => "Wijzig",
"52" => "Wijzigen bestand",
"53" => "Opslaan",
"54" => "Cancel",
"55" => "is gewijzigd",
"56" => "BMP afbeelding",
"57" => "PNG afbeelding",
"58" => "CSS bestand",
"59" => "MP3 geluid",
"60" => "RAR archief",
"61" => "GZ bestand",
"62" => "Hoofdmap",
"63" => "Log off",
"64" => "XLS document",
"65" => "Word document",
"66" => "Kopieer",
"67" => "Geselecteerd bestand",
"68" => "Plakken in",
"69" => "Of selecteer een andere map",
"70" => "Verplaatsen",
"71" => "Dit bestand bestaat al (namen zijn hoofdletter ongevoelig)",
"72" => "De hoofdmap is niet correct. Controleer deze in het conf/conf.php bestand",
"73" => "is naar de map gekopieerd",
"74" => "is naar de map verplaatst",
"75" => "Het bestand users.txt is niet aanwezig in de map prive",
"76" => "Dit bestand is verwijderd",
"77" => "Verzonden",
"78" => "Passwoord",
"79" => "PDF document",
"80" => "MOV video",
"81" => "AVI video",
"82" => "MPG video",
"83" => "MPEG video",
"84" => "Help",
"85" => "Refresh",
"86" => "Sluit",
"87" => "Search",
"88" => "Download",
"89" => "Niet mogelijk om het bestand te openen",
"90" => "Print",
"91" => "FLASH bestand",
"92" => "Taal",
"93" => "Om een taal te kiezen moet je browser cookies accepteren.",
"94" => "Login",
"95" => "Selecteer je taal:",
"96" => "Selecteer de bestemmingsmap in de mappenlijst: ",
"97" => "Upload bestand",
"98" => "Klik ergens in deze box om hem te sluiten.",
"99" => "is niet schrijfbaar. Er is misschien een probleem met de rechten, check dit bij de administrator.", 
"100"=> "Kan het bestand niet vinden ",
"101"=> "De originele map en bestemmingsmap zijn het zelfde!",
"102"=> "Fout bij het maken van bestand:", 
"103"=> "Kan de map niet vinden ", 
"104"=> "Ga naar de opgegeven locatie", 
"105"=> "Email een URL om direct toegang te krijgen tot deze locatie.", 
"106"=> "Verstuur mail",
"107"=> "Jouw naam en/of emailadres", 
"108"=> "Het bestemmings emailadres", 
"109"=> "Klikbare URL", 
"110"=> "Voeg commantaar toe", 
"111"=> "De volgende email is verstuurd:",
"112"=> "Versturen email is mislukt: ",
"113"=> "De selectie is leeg!", 
"114"=> "Onbekende fout tijdens het kopieren!",
"115"=> "Het bestand is succesvol opgeslagen", 
"116"=> "bestanden", 
"117"=> "De map",
"118"=> "Download meerdere bestanden",
"119"=> "Klik op elk bestand om het te downloaden.",
"120"=> "Het is niet toegestaan om het hele arborescence te verwijderen!",
"121"=> "Afbeeldings bestand", 
"122"=> "Prullenbak",
"123"=> "is verplaatst naar ", 
"124"=> "Bestaande bestanden overschrijven?", 
"125"=> "Een bestand/map deze naam bestaat al (namen zijn hoofdletterongevoelig). Kies een andere naam!", 
"126"=> "Thumbnails", 
"127"=> "Grote",
"128"=> "bestanden geselecteerd.",
"129"=> "Bekijk",
"130"=> "Mappen", 
"131"=> "Details", 
"132"=> "Geen bestand geselecteerd", 
"133"=> "Naam",
"134"=> "Type",
"135"=> "Afmetingen",
"136"=> "Bekijk grotere afbeelding",
"138"=> "Laatst aangepast",
"139"=> "Bewerk online", 
"140"=> "Speel hele map", 
"141"=> "Map lezen", 
"142"=> "Gelogd als ",
"143"=> "Gast browsen. Log in.",
"144"=> "Niet ingelogged.",
"145"=> "Mijn Bookmarks",
"146"=> "Verwijder Bookmark",
"147"=> "Bookmarks", 
"148"=> "Ouder", 
"149"=> "Vernieuw",
"150"=> "Toon",
"151"=> "Verander display modus...",
"152"=> "Bookmark",
"153"=> "Voeg locatie toe aan Mijn Bookmarks",
"154"=> "N. Map",
"155"=> "Maak nieuwe map",
"156"=> "N. Bestand",
"157"=> "Maak nieuw leeg bestand",
"158"=> "Hernoem geselecteerd bestand of map",
"159"=> "Kopieer selectie naar...",
"160"=> "Verplaats selectie naar...",
"161"=> "Verwijder geselecteerde bestanden.",
"162"=> "Bewerk online text bestanden of bekijk grotere afbeelding.",
"163"=> "Log in",
"164"=> "Log uit",
"165"=> "Instellingen",
"166"=> "Over",
"167"=> "Over AjaXplorer",
"168" => "Verbind met AjaXplorer",
"169" => "Verbreek verbinding met AjaXplorer",
"170" => "Huidige map",
"parent_access_key" => "O",
"refresh_access_key" => "V",
"list_access_key" => "L",
"thumbs_access_key" => "T",
"bookmarks_access_key" => "B",
"upload_access_key" => "U",
"folder_access_key" => "M",
"file_access_key" => "N",
"rename_access_key" => "H",
"copy_access_key" => "K",
"move_access_key" => "p",
"delete_access_key" => "w",
"edit_access_key" => "z",
"view_access_key" => "i",
"download_access_key" => "o",
"settings_access_key" => "s",
"about_access_key" => "e", 
"empty_recycle_access_key" => "y", 
"restore_access_key" => "o", 
"171" => "Browse je computer",
"172" => "Jouw selectie",
"173" => "Nieuwe map naam",
"174" => "Nieuwe bestandsnaam",
"175" => "Selecteer doelmap",
"176" => "De geselecteerde bestanden worden naar de Prullenbak verplaatst.",
"177" => "Weet je zeker dat je de geselecteerde bestanden permanent wil verwijderen?",
"178" => "Vorige",
"179" => "Volgende", 
"180" => "Typ login/passwoord",
"181" => "Login",
"182" => "Passwoord",
"183" => "Selecteer een doelmap die anders is dan de originele doelmap!",
"184" => "Zoek in huidige en submappen",
"185" => "Stop zoeken",
"186" => "Afbeelding Voorstelling", 
"187" => "Online Editie - ", 
"189" => "Edit Mijn Instellingen",
"190" => "Taal", 
"191" => "Standaard Weergave", 
"192" => "Detail Lijst", 
"193" => "Thumbnails", 
"194" => "Verander Passwoord",
"195" => "Gebruikers Voorkeuren", 
"196" => "Jouw taal instelling is anders dan die van de huidige!\\n Wil je de pagina verversen om de taal te veranderen?", 
"197" => "Gebruikers voorkeuren succesvol veranderd! \\n\\n. Als je je passwoord hebt veranderd verandert dat pas nadat je bent uitgelogd. \\n\\n. Als je de taal veranderd hebt, ververs dan de pagina (F5).", 
"198" => "Nieuw",
"199" => "Bevestig",
"200" => "Wijzig bestandsdepot naar...",
"201" => "Warning, some changes are unsaved!\\n Are you sure you want to close?",
"202" => "Warning, recursive copy!",
"203" => "Destintation folder is the same as original folder!",
/* GROUPED SENTENCE : 'the file "filename.ext" exceeds size limit (1Mb)\nIt will not be uploaded.*/
"204" => "The file \"",
"205" => "\" exceeds size limit (",
"206" => "Mb).\\nIt will not be uploaded.",
/* END SENTENCE */
"207" => "You have no write permission on this folder",
"208" => "You have no read permission on this folder", 
"209" => "Internal server error, please contact Administrator!",
"210" => "Upload failed", 
"211" => "The file is too big!", 
"212" => "No file found on server!", 
"213" => "Error while copying file to current folder", 
"214" => "Browse files", 
"215" => "Start Upload", 
"216" => "Clear Queue", 
"217" => "Clear Completed", 
"218" => "Remove from queue", 
"219" => "Completed",
"220" => "Empty", 
"221" => "Empty Recycle Bin", 
"222" => "Restore", 
"223" => "Restore file to its original location", 
"224" => "Go to", 
"225" => "Rename bookmark", 
"226" => "Lijst",
"227" => "Detail Lijst",
"228" => "Thumbs",
"229" => "Thumbnails"
);
?>