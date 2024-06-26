<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domain',
    'ad_domain_help'			=> 'Ovo je ponekad isto kao i vaš domen e-pošte, ali ne uvek.',
    'ad_append_domain_label'    => 'Dodaj naziv domena',
    'ad_append_domain'          => 'Dodaj naziv domena polju za korisničko ime',
    'ad_append_domain_help'     => 'Od korisnika se ne traži da piše „korisničko ime@domain.local“, može samo da unese „korisničko ime“.',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'Ako želite da pošaljete kopiju mejlova za prijavu/odjavu koji se šalju korisnicima na dodatni nalog e-pošte, unesite je ovde. U suprotnom ostavite ovo polje praznim.',
    'admin_settings'            => 'Administratorska podešavanja',
    'is_ad'				        => 'Ovo je Active Directory server',
    'alerts'                	=> 'Upozorenja',
    'alert_title'               => 'Podešavanja obaveštenja o nadogradnji',
    'alert_email'				=> 'Pošaljite upozorenja na',
    'alert_email_help'    => 'Adrese e-pošte ili liste distribucije na koje želite da se šalju upozorenja, odvojene zarezima',
    'alerts_enabled'			=> 'Upozorenja na email su omogućena',
    'alert_interval'			=> 'Expiring Alerts Threshold (in days)',
    'alert_inv_threshold'		=> 'Inventory Alert Threshold',
    'allow_user_skin'           => 'Dozvolite prilagođen izgled',
    'allow_user_skin_help_text' => 'Čekiranjem ovog polja omogućava se korisniku da premosti UI \'skin\' sa nekim drugim.',
    'asset_ids'					=> 'Asset IDs',
    'audit_interval'            => 'Interval revizije',
    'audit_interval_help'       => 'Ako ste u obavezi da redovno fizički popisujete imovinu, unesite interval u mesecima. Ako izmenite ovu vrednost, svi "datumi sledećih popisa" za imovinu sa datumima zakazanih popisa će biti ažurirani.',
    'audit_warning_days'        => 'Prag upozorenja za reviziju',
    'audit_warning_days_help'   => 'Koliko dana unapred treba da vas upozorimo kada sredstva dospevaju za reviziju?',
    'auto_increment_assets'		=> 'Generišite oznake sredstava koje se automatski povećavaju',
    'auto_increment_prefix'		=> 'Prefiks (opciono)',
    'auto_incrementing_help'    => 'Prvo omogućite oznake sredstava za automatsko povećanje da biste ovo postavili',
    'backups'					=> 'Rezervne kopije',
    'backups_help'              => 'Kreirajte, preuzmite i vratite rezervne kopije ',
    'backups_restoring'         => 'Vraćanje rezervne kopije',
    'backups_upload'            => 'Učitavanje rezervne kopije',
    'backups_path'              => 'Rezervne kopije se čuvaju na <code>:path</code>',
    'backups_restore_warning'   => 'Koristite dugme za vraćanje <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> da bi ste vratili na raniju rezervnu kopiju. (Ovo trenutno ne radi sa S3 skladištem datoteka ili Docker-om.)<br><br>Vaša <strong>kompletna :app_name baza podataka i sve zakačene datoteke će biti potpuno zamenjene</strong> sa onim što je u rezervnoj kopiji.  ',
    'backups_logged_out'         => 'Svi postojeći korisnici, uključujući i vas, biće odjavljeni kada se vraćanje završi.',
    'backups_large'             => 'Veoma velike rezervne kopije mogu da istekne tokom pokušaja vraćanja i možda će morati da se pokrenu preko komandne linije. ',
    'barcode_settings'			=> 'Podešavanja barkoda',
    'confirm_purge'			    => 'Potvrdite čišćenje',
    'confirm_purge_help'		=> 'Unesite tekst „IZBRIŠI“ u polje ispod da biste obrisali svoje izbrisane zapise. Ova radnja se ne može opozvati i TRAJNO će izbrisati sve meko izbrisane stavke i korisnike. (Trebalo bi prvo da napravite rezervnu kopiju, samo da biste bili sigurni.)',
    'custom_css'				=> 'Podesivi CSS',
    'custom_css_help'			=> 'Unesite sve prilagođene CSS zamene koje želite da koristite. Nemojte uključivati &lt;stile&gt;&lt;/stile&gt; oznake.',
    'custom_forgot_pass_url'	=> 'Promenljivi URL za resetovanje lozinke',
    'custom_forgot_pass_url_help'	=> 'Ovo zamenjuje ugrađeni URL zaboravljene lozinke na ekranu za prijavljivanje, što je korisno za usmeravanje ljudi na internu ili hostovanu LDAP funkciju resetovanja lozinke. To će efikasno onemogućiti funkciju zaboravljene lozinke lokalnog korisnika.',
    'dashboard_message'			=> 'Naziv kontrolne table',
    'dashboard_message_help'	=> 'Ovaj tekst će se pojaviti na kontrolnoj tabli za svakoga ko ima dozvolu da vidi kontrolnu tablu.',
    'default_currency'  		=> 'Podrazumevana valuta',
    'default_eula_text'			=> 'Default EULA',
    'default_language'			=> 'Podrazumevani jezik',
    'default_eula_help_text'	=> 'Takođe možete da povežete prilagođene EULA-e sa određenim kategorijama sredstava.',
    'acceptance_note'           => 'Dodajte napomenu vašoj odluci (opciono)',
    'display_asset_name'        => 'Naziv osnovnog sredstva',
    'display_checkout_date'     => 'Prikaži datum razduženja',
    'display_eol'               => 'Prikažite EOL u prikazu tabele',
    'display_qr'                => 'Prikaži kodove',
    'display_alt_barcode'		=> 'Prikaži 1D barkod',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D tip barkoda',
    'alt_barcode_type'			=> '1D barkod tip',
    'email_logo_size'       => 'Kvadratni logotipi u imejlu izgledaju najbolje. ',
    'enabled'                   => 'Omogućeno',
    'eula_settings'				=> 'EULA Podešavanja',
    'eula_markdown'				=> 'Pravila korišćenja dopuštaju <a href="https://help.github.com/articles/github-flavored-markdown/">Github verziju markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Prihvaćeni tipovi datoteka su ico, png i gif. Drugi formati slika možda neće raditi u svim pretraživačima.',
    'favicon_size'          => 'Faviconi treba da budu slike kvadrvatog oblika, 16x16 piksela.',
    'footer_text'               => 'Dodatni tekst u futeru ',
    'footer_text_help'          => 'Ovaj tekst će se pojaviti u desnom podnožju. Veze su dozvoljene korišćenjem <a href="https://help.github.com/articles/github-flavored-markdovn/">Github flavored markdovn</a>. Prelomi redova, zaglavlja, slike itd. mogu dovesti do nepredvidivih rezultata.',
    'general_settings'			=> 'Osnovna podešavanja',
    'general_settings_keywords' => 'podrška kompanije, potpis, prihvatanje, format e-poruke, format korisničkog imena, slike, po stranici, sličica, ugovor o korišćenju, gravatar, uslovi usluga, komandna tabla, privatnost',
    'general_settings_help'     => 'Podrazumevani EULA i još mnogo toga',
    'generate_backup'			=> 'Generiši rezervnu kopiju',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Boja zaglavlja',
    'info'                      => 'Ova podešavanja vam omogućavaju da prilagodite određene aspekte vaše instalacije.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Kvadratni logotipi izgledaju najbolje – biće prikazani u gornjem desnom uglu svake oznake sredstva. ',
    'laravel'                   => 'Laravel verzija',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Predefinisana grupa dozvola',
    'ldap_default_group_info'   => 'Izaberite grupu kojoj ćete dodeliti nove sinhrinizovane korisnike. Zapamtite da korisnik preuzima dozvole grupe kojoj je dodeljen.',
    'no_default_group'          => 'Nema predefinisane grupe',
    'ldap_help'                 => 'LDAP/Aktivni direktorijum',
    'ldap_client_tls_key'       => 'LDAP Klijent TLS Ključ',
    'ldap_client_tls_cert'      => 'LDAP klijentskiTLS sertifikat',
    'ldap_enabled'              => 'LDAP omogućen',
    'ldap_integration'          => 'LDAP integracija',
    'ldap_settings'             => 'LDAP podešavanja',
    'ldap_client_tls_cert_help' => 'TLS sertifikat i ključ na strani klijenta za LDAP veze su obično korisni samo u Google Workspace konfiguracijama sa „Secure LDAP-om“. Oba su obavezna.',
    'ldap_location'             => 'LDAP Lokacija',
'ldap_location_help'             => 'LDAP Lokacija polje treba koristiti ukoliko <strong>se ne koristi OU u Korenski DN za pretragu.</strong> Ostavite polje prazno ukoliko se OU koristi za pretragu.',
    'ldap_login_test_help'      => 'Unesite važeće LDAP korisničko ime i lozinku iz osnovnog DN-a koji ste naveli iznad da biste proverili da li je vaša LDAP prijava ispravno konfigurisana. PRVO MORATE SAČUVATI VAŠA AŽURIRANA LDAP PODEŠAVANJA.',
    'ldap_login_sync_help'      => 'Ovo samo testira da LDAP može ispravno da se sinhronizuje. Ako vaš upit za LDAP autentifikaciju nije tačan, korisnici možda i dalje neće moći da se prijave. PRVO MORATE SAČUVATI VAŠA AŽURIRANA LDAP PODEŠAVANJA.',
    'ldap_manager'              => 'LDAP Menadžer',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Ovo bi trebalo da počne sa ldap:// (za nešifrovani ili TLS) ili ldaps:// (za SSL)',
    'ldap_server_cert'			=> 'LDAP SSL validacija sertifikata',
    'ldap_server_cert_ignore'	=> 'Dopusti neispravne SSL sertifikate',
    'ldap_server_cert_help'		=> 'Označite ovo polje za potvrdu ako koristite samopotpisani SSL sertifikat i želite da prihvatite nevažeći SSL sertifikat.',
    'ldap_tls'                  => 'Koristite TLS',
    'ldap_tls_help'             => 'Ovo treba proveriti samo ako koristite STARTTLS na svom LDAP serveru. ',
    'ldap_uname'                => 'LDAP Bind korisničko ime',
    'ldap_dept'                 => 'LDAP Odeljenje',
    'ldap_phone'                => 'LDAP Broj telefona',
    'ldap_jobtitle'             => 'LDAP radno mesto',
    'ldap_country'              => 'LDAP Zemlja',
    'ldap_pword'                => 'LDAP Bind lozinka',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP sinhronizacija lozinke',
    'ldap_pw_sync_help'         => 'Poništite izbor ovog polja ako ne želite da LDAP lozinke budu sinhronizovane sa lokalnim lozinkama. Onemogućavanje ovoga znači da vaši korisnici možda neće moći da se prijave ako je vaš LDAP server iz nekog razloga nedostupan.',
    'ldap_username_field'       => 'Polje za korisničko ime',
    'ldap_lname_field'          => 'Prezime',
    'ldap_fname_field'          => 'LDAP Ime',
    'ldap_auth_filter_query'    => 'LDAP upit autentifikacije',
    'ldap_version'              => 'LDAP verzija',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'Ova vrednost određuje da li sinhronizovani korisnik može da se prijavi u Snipe-IT. <strong>To ne utiče na mogućnost zaduživanja i razduživanja stavki prema njima</strong>, i trebao bi biti <strong>naziv atributa</strong> u okviru vašeg AD/LDAP-a, <strong>ne vrednost</strong>. <br><br>Ukoliko je ovo polje podešeno na naziv polja koje ne postoji u vašem AD/LDAP-u, ili je vrednost u AD/LDAP polju podešena na <code>0</code> ili <code>false</code>, <strong>prijava korisniku će biti onemogućena</strong>. Ukoliko je vrednost u AD/LDAP polju podešena na <code>1</code> ili <code>true</code> ili <em>bilo koji drugi tekst</em> znači da korisnik može da se prijavi. Kada je polje prazno u vašem AD-u, mi poštujemo <code>userAccountControl</code> atribut, koji obično omogućava nedeaktiviranim korisnicima da se prijave.',
    'ldap_emp_num'              => 'LDAP broj zaposlenog',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP sinhronizaciju',
    'license'                   => 'Licence za softver',
    'load_remote'               => 'Koristi Gravatar',
    'load_remote_help_text'		=> 'Isključi ovo polje ako tvoja instalacija ne može da učita skripte izvan interneta. Ovo će sprečiti Snipe-IT od pokušaja da učita slike sa Gravatara.',
    'login'                     => 'Pokušaj logovanja',
    'login_attempt'             => 'Pokušaj logovanja',
    'login_ip'                  => 'IP adresa',
    'login_success'             => 'Uspešno?',
    'login_user_agent'          => 'Korisnički agent',
    'login_help'                => 'Spisak pokušaja logovanja',
    'login_note'                => 'Poruka prilikom prijave',
    'login_note_help'           => 'Opciono uključite nekoliko rečenica na ekran za prijavu, na primer da biste pomogli ljudima koji su pronašli izgubljeni ili ukradeni uređaj. Ovo polje prihvata <a href="https://help.github.com/articles/github-flavored-markdovn/">Github flavored markdovn</a>',
    'login_remote_user_text'    => 'Opcije za prijavu udaljenog korisnika',
    'login_remote_user_enabled_text' => 'Omogućite prijavu pomoću zaglavlja udaljenog korisnika',
    'login_remote_user_enabled_help' => 'Ova opcija omogućava autentifikaciju preko zaglavlja REMOTE_USER prema „Common Gatevai Interface (rfc3875)“',
    'login_common_disabled_text' => 'Onemogućite druge mehanizme autentifikacije',
    'login_common_disabled_help' => 'Ova opcija onemogućava druge mehanizme autentifikacije. Samo omogućite ovu opciju ako ste sigurni da vaša REMOTE_USER prijava već funkcioniše',
    'login_remote_user_custom_logout_url_text' => 'Podesiva URL adresa za odjavu',
    'login_remote_user_custom_logout_url_help' => 'Ako se ovde navede url, korisnici će biti preusmereni na ovu URL adresu nakon što se korisnik odjavi sa Snipe-IT-a. Ovo je korisno za pravilno zatvaranje korisničkih sesija vašeg dobavljača autentikacije.',
    'login_remote_user_header_name_text' => 'Zaglavlje prilagođenog korisničkog imena',
    'login_remote_user_header_name_help' => 'Koristite navedeno zaglavlje umesto REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Koristite u štampanju',
    'logo_print_assets_help'    => 'Koristite brendiranje na listama sredstava za štampanje ',
    'full_multiple_companies_support_help_text' => 'Ograničavanje korisnika (uključujući administratore) dodeljenih kompanijama na imovinu njihove kompanije.',
    'full_multiple_companies_support_text' => 'Potpuna podrška za više kompanija',
    'show_in_model_list'   => 'Prikaži u padajućim menijima modela',
    'optional'					=> 'opciono',
    'per_page'                  => 'Rezultati po stranici',
    'php'                       => 'PHP verzija',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP sistem info',
    'php_gd_info'               => 'Morate da instalirate php-gd da biste prikazali QR kodove, pogledajte uputstva za instalaciju.',
    'php_gd_warning'            => 'PHP Image Processing i GD dodatak NIJE instaliran.',
    'pwd_secure_complexity'     => 'Složenost lozinke',
    'pwd_secure_complexity_help' => 'Izaberite koja god pravila složenosti lozinke želite da primenite.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Lozinka ne može biti isto što i ime, prezime, imejl ili korisničko ime',
    'pwd_secure_complexity_letters' => 'Zahtevajte najmanje jedno slovo',
    'pwd_secure_complexity_numbers' => 'Zahtevajte najmanje jedan broj',
    'pwd_secure_complexity_symbols' => 'Zahtevajte najmanje jedan simbol',
    'pwd_secure_complexity_case_diff' => 'Zahtevajte najmanje jedno veliko i jedno malo slovo',
    'pwd_secure_min'            => 'Minimalan broj karaktera lozinke',
    'pwd_secure_min_help'       => 'Minimalna dozvoljena vrednost je 8',
    'pwd_secure_uncommon'       => 'Sprečite uobičajene lozinke',
    'pwd_secure_uncommon_help'  => 'Ovo će onemogućiti korisnicima da koriste uobičajene lozinke iz prvih 10.000 lozinki prijavljenih kao kršenja.',
    'qr_help'                   => 'Prvo omogućite QR kodove da biste ovo postavili',
    'qr_text'                   => 'QR kod tekst',
    'saml'                      => 'SAML',
    'saml_title'                => 'Obnovite SAML podešavanja',
    'saml_help'                 => 'SAML podešavanja',
    'saml_enabled'              => 'SAML omogućen',
    'saml_integration'          => 'SAML integracija',
    'saml_sp_entityid'          => 'ID entiteta',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Javni sertifikat',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'Možete specificirati IdP metadatakorišćenjem URL ili XML fajla.',
    'saml_attr_mapping_username' => 'Mapiranje atributa - Korisničko ime',
    'saml_attr_mapping_username_help' => 'NameID će se koristiti ukoliko je mapiranje atributa neodovarajuće.',
    'saml_forcelogin_label'     => 'Primoraj SAML prijavu',
    'saml_forcelogin'           => 'Neka SAML bude podrazumevani nalog',
    'saml_forcelogin_help'      => 'Možete koristiti \'/login?nosaml\' kako biste dobili normalnu stranicu za prijavljivanje.',
    'saml_slo_label'            => 'SAML Single odjavljivanje',
    'saml_slo'                  => 'Pošaljite LogoutRequest IdP prilikom odjavljivanja',
    'saml_slo_help'             => 'Ovo će dovesti do toga da korisnik prvo bude preusmeren na IdP pri odjavi. Ostavite neoznačeno ako IdP ne podržava ispravno SAML SLO koji je pokrenuo SP.',
    'saml_custom_settings'      => 'SAML promenjiva podešavanja',
    'saml_custom_settings_help' => 'Možete odrediti dodatna podešavanja biblioteci onelogin/php-saml. Koristite na vlastitu odgovornost.',
    'saml_download'             => 'Preuzmite Metadata',
    'setting'                   => 'Podešavanja',
    'settings'                  => 'Podešavanja',
    'show_alerts_in_menu'       => 'Prikaži upozorenja u gornjem meniju',
    'show_archived_in_list'     => 'Arhivirana sredstva',
    'show_archived_in_list_text'     => 'Prikaži arhivirana sredstva na listi „sva sredstva“',
    'show_assigned_assets'      => 'Prikaži sredstva dodeljena sredstvima',
    'show_assigned_assets_help' => 'Prikažite sredstva koja su dodeljena drugim sredstvima u Viev User -> Assets, Viev User -> Info -> Print All Assigned i u Account -> Viev Assigned Assets.',
    'show_images_in_email'     => 'Prikaži slike u imejlovima',
    'show_images_in_email_help'   => 'Poništite izbor u ovom polju za potvrdu ako je vaša Snipe-IT instalacija iza VPN-a ili zatvorene mreže i korisnici van mreže neće moći da učitavaju slike koje se serviraju iz ove instalacije u svoje imejlove.',
    'site_name'                 => 'Naziv sajta',
    'integrations'               => 'Integracije',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Opšta veb zakačka',
    'ms_teams'                  => 'Majkrosoft Tims',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Testiraj da sačuvaš',
    'webhook_title'               => 'Obnovite podešavanja veb zakački',
    'webhook_help'                => 'Podešavanje integracija',
    'webhook_botname'             => ':app naziv bota',
    'webhook_channel'             => ':app kanal',
    'webhook_endpoint'            => ':app krajnja tačka',
    'webhook_integration'         => ':app podešavanja',
    'webhook_test'                 =>'Testiraj :app integraciju',
    'webhook_integration_help'    => ':app integracija je opciona, međutim krajnja tačka i kanal su neophodni ako želite da je koristitie. Da bi ste podesili :app integraciju, prvo morate da <a href=":webhook_link" target="_new" rel="noopener">napravite dolaznu veb zakačku</a> na vašem :app nalogu. Kliknite na <strong>Testiraj :app integraciju</strong> dugme da bi ste potvrdili da su podešavanja ispravna pre čuvanja. ',
    'webhook_integration_help_button'    => 'Onda kada sačuvate :app informacije, dugme za testiranje će se pojaviti.',
    'webhook_test_help'           => 'Testirajte da li je vaša integracija sa :app uspešno podešena. PRVO MORATE DA SAČUVATE IZMENJENA :app PODEŠAVANJA.',
    'snipe_version'  			=> 'Snipe-IT verzija',
    'support_footer'            => 'Podška za linkove u podnožju ',
    'support_footer_help'       => 'Navedite ko vidi veze do informacija o podršci za Snipe-IT i korisničkog priručnika',
    'version_footer'            => 'Verzija u podnožju ',
    'version_footer_help'       => 'Navedite ko vidi verziju Snipe-IT-a i broj verzije.',
    'system'                    => 'Informacije o sistemu',
    'update'                    => 'Obnovite podešavanja',
    'value'                     => 'Vrednost',
    'brand'                     => 'Brendiranje',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, naziv sajta',
    'web_brand'                 => 'Tip veb brendiranja',
    'about_settings_title'      => 'O podešavanjima',
    'about_settings_text'       => 'Ova podešavanja vam omogućavaju da prilagodite određene aspekte vaše instalacije.',
    'labels_per_page'           => 'Etiketa po strani',
    'label_dimensions'          => 'Dimenzije etikete (inči)',
    'next_auto_tag_base'        => 'Sledeće automatsko povećanje',
    'page_padding'              => 'Margine stranice (inči)',
    'privacy_policy_link'       => 'Link ka politici privatnosti',
    'privacy_policy'            => 'Politika privatnosti',
    'privacy_policy_link_help'  => 'Ako je URL ovde uključen, veza do vaše politike privatnosti će biti uključena u podnožje aplikacije i u sve imejlove koje sistem šalje, u skladu sa GDPR-om. ',
    'purge'                     => 'Očistite izbrisane zapise',
    'purge_deleted'             => 'Obrisano ',
    'labels_display_bgutter'    => 'Donja margina etikete',
    'labels_display_sgutter'    => 'Bočna margina etikete',
    'labels_fontsize'           => 'Veličina slova na etiketi',
    'labels_pagewidth'          => 'Širina lista za etikete',
    'labels_pageheight'         => 'Visina lista za etikete',
    'label_gutters'        => 'Razmak između etiketa (inči)',
    'page_dimensions'        => 'Dimenzije lista (inči)',
    'label_fields'          => 'Vidljivo polje etikete',
    'inches'        => 'inči',
    'width_w'        => 'š',
    'height_h'        => 'v',
    'show_url_in_emails'                => 'Link ka Snipe-IT in emailovima',
    'show_url_in_emails_help_text'      => 'Poništite izbor u ovom polju za potvrdu ako ne želite da se vratite na svoju Snipe-IT instalaciju u podnožju e-pošte. Korisno ako se većina vaših korisnika nikada ne prijavi. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maksimalna visina sličice',
    'thumbnail_max_h_help'   => 'Maksimalna visina u pikselima koju sličice mogu prikazati u prikazu liste. Min 25, max 500.',
    'two_factor'        => 'Dvofaktorska autentifikacija',
    'two_factor_secret'        => 'Dvofaktorski kod',
    'two_factor_enrollment'        => 'Dvofaktorska prijava',
    'two_factor_enabled_text'        => 'Omoguci dvofaktorsku proveru identiteta',
    'two_factor_reset'        => 'Resetuj dvofaktorski ključ',
    'two_factor_reset_help'        => 'Ovo će primorati korisnika da ponovo registruje svoj uređaj u aplikaciji za autentifikaciju. Ovo može biti korisno ako je njihov trenutno registrovan uređaj izgubljen ili ukraden. ',
    'two_factor_reset_success'          => 'Dvofaktorski uređaj je uspešno resetovan',
    'two_factor_reset_error'          => 'Resetovanje uređaja sa dva faktora nije uspelo',
    'two_factor_enabled_warning'        => 'Omogućavanje dvofaktorske autentifikacije, ako trenutno nije omogućeno, odmah će vas primorati da se autentifikujete pomoću uređaja koji je registrovan za Google Auth. Imaćete mogućnost da registrujete svoj uređaj ako trenutno nije prijavljen.',
    'two_factor_enabled_help'        => 'Ovo će uključiti dvofaktorsku autentifikaciju pomoću Google Authenticator-a.',
    'two_factor_optional'        => 'Selektivno (Korisnici mogu omogućiti ili onemogućiti ako je dozvoljeno)',
    'two_factor_required'        => 'Obavezno za sve korisnike',
    'two_factor_disabled'        => 'Onemogućeno',
    'two_factor_enter_code'	=> 'Dvofaktorski kod',
    'two_factor_config_complete'	=> 'Potvrdi Kod',
    'two_factor_enabled_edit_not_allowed' => 'Administrator vam ne dozvoljava da uređujete ovo podešavanje.',
    'two_factor_enrollment_text'	=> "Potrebna je dvofaktorska autentifikacija, ali vaš uređaj još nije registrovan. Otvorite aplikaciju Google Authenticator i skenirajte QR kod u nastavku da biste registrovali svoj uređaj. Kada registrujete svoj uređaj, unesite kod ispod",
    'require_accept_signature'      => 'Zahtevan potpis',
    'require_accept_signature_help_text'      => 'Omogućavanje ove funkcije će zahtevati od korisnika da se fizički odjave za prihvatanje sredstva.',
    'left'        => 'levo',
    'right'        => 'desno',
    'top'        => 'gore',
    'bottom'        => 'dole',
    'vertical'        => 'vertikalno',
    'horizontal'        => 'horizontalno',
    'unique_serial'                => 'Jedinstveni serijski broj',
    'unique_serial_help_text'                => 'Označavanje ovog polja će primeniti ograničenje jedinstvenosti na serijske materijale',
    'zerofill_count'        => 'Dužina oznake sredstva, uključujući i popunu nulama',
    'username_format_help'   => 'Ovo podešavanje će se koristiti u procesu uvoza samo ako korisničko ime nije navedeno i mi moramo da generišemo korisničko ime za vas.',
    'oauth_title' => 'OAuth API podešavanje',
    'oauth_clients' => 'OAuth klijenti',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint podešavanja',
    'oauth_no_clients' => 'Još uvek niste kreirali nijedan OAuth klijenat.',
    'oauth_secret' => 'Tajna',
    'oauth_authorized_apps' => 'Autorizovane aplikacije',
    'oauth_redirect_url' => 'URL adresa za redirekciju',
    'oauth_name_help' => ' Nešto što će vaši korisnici prepoznati i čemu će verovati.',
    'oauth_scopes' => 'Opsezi',
    'oauth_callback_url' => 'Povratna adresa za autorizaciju vaše aplikacije.',
    'create_client' => 'Napravi klijenta',
    'no_scopes' => 'Nema opsega',
    'asset_tag_title' => 'Obnovite podešavanja upozorenja',
    'barcode_title' => 'Obnovite Slack podešavanja',
    'barcodes' => 'Barkodovi',
    'barcodes_help_overview' => 'Barkod &amp; QR podešavanja',
    'barcodes_help' => 'Ovo podešavanje će se koristiti u procesu uvoza samo ako korisničko ime nije navedeno i mi moramo da generišemo korisničko ime za vas.',
    'barcodes_spinner' => 'Pokušaj brisanja datoteka...',
    'barcode_delete_cache' => 'Brisanje keša barkoda',
    'branding_title' => 'Obnovite Slack podešavanja',
    'general_title' => 'Obnovite podešavanja upozorenja',
    'mail_test' => 'Pošalji test poruku',
    'mail_test_help' => 'Ovo će pokušati da pošalje probnu poštu na :replito.',
    'filter_by_keyword' => 'Filtrirajte po podešavanju ključne reči',
    'security' => 'Bezbednost',
    'security_title' => 'Obnovite bezbednosna podešavanja',
    'security_keywords' => 'lozinka, lozinke, zahtevi, dva faktora, dva faktora, uobičajene lozinke, daljinsko prijavljivanje, odjava, autentifikacija',
    'security_help' => 'Dvofaktorska autentifikacija, ograničenja lozinkom',
    'groups_keywords' => 'dozvole, grupe dozvola, ovlašćenje',
    'groups_help' => 'Grupe dozvola naloga',
    'localization' => 'Lokalizacija',
    'localization_title' => 'Obnovi podešavanja lokalizacije',
    'localization_keywords' => 'okalizacija, valuta, lokalni, lokal, vremenska zona, vremenska zona, međunarodna, internacionalizacija, jezik, jezici, prevod',
    'localization_help' => 'Jezik, prikaz datuma',
    'notifications' => 'Obaveštenja',
    'notifications_help' => 'Obaveštenja e-poštom i podešavanja popisa',
    'asset_tags_help' => 'Povećavanje i prefiksi',
    'labels' => 'Oznake',
    'labels_title' => 'Obnovite podešavanja oznaka',
    'labels_help' => 'Veličina oznake &amp; podešavanja',
    'purge_keywords' => 'trajno brisanje',
    'purge_help' => 'Očistite izbrisane zapise',
    'ldap_extension_warning' => 'Ne izgleda da je LDAP ekstenzija instalirana ili omogućena na ovom serveru. I dalje možete da sačuvate svoja podešavanja, ali ćete morati da omogućite LDAP ekstenziju za PHP pre nego što LDAP sinhronizacija ili prijavljivanje budu funkcionisali.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Broj zaposlenog',
    'create_admin_user' => 'Kreiraj korisnika ::',
    'create_admin_success' => 'Uspešno! Vaš admin korisnik je dodat!',
    'create_admin_redirect' => 'Kliknite ovde da biste otišli ​​na prijavu u aplikaciju!',
    'setup_migrations' => 'Prebacivanje baze podataka::',
    'setup_no_migrations' => 'Ovde nije bilo šta da se seli. Vaše tabele baze podataka su već postavljene!',
    'setup_successful_migrations' => 'Vaše tabele baze podataka su kreirane',
    'setup_migration_output' => 'Rezultat migracije:',
    'setup_migration_create_user' => 'Sledeće: Kreirajte korisnika',
    'ldap_settings_link' => 'LDAP podešavanja stranice',
    'slack_test' => 'Testirajte <i class="fab fa-slack"></i> integraciju',
    'label2_enable'           => 'Novi sistem nalepnica',
    'label2_enable_help'      => 'Pređite na novi sistem nalepnica. <b>Napomena: Moraćete da sačuvate ovo podešavanje pre podešavanja ostalih.</b>',
    'label2_template'         => 'Šablon',
    'label2_template_help'    => 'Izaberite koji će se šablon koristiti za generisanje oznaka',
    'label2_title'            => 'Naslov',
    'label2_title_help'       => 'Naslov za prikaz na nalepnicama koje ga podržavaju',
    'label2_title_help_phold' => 'Polje <code>{COMPANY}</code> će biti zamenjeno sa asset&apos;s imenom kompanije',
    'label2_asset_logo'       => 'Koristite logo imovine',
    'label2_asset_logo_help'  => 'Koristi logo kompanije kojoj je dodeljena imovina, umesto vrednosti u <code>setting_name</code>',
    'label2_1d_type'          => 'Vrsta 1D barkoda',
    'label2_1d_type_help'     => 'Format za 1D barkodove',
    'label2_2d_type'          => 'Vrsta 2D barkoda',
    'label2_2d_type_help'     => 'Format za 2D barkodove',
    'label2_2d_target'        => '2D barkod meta',
    'label2_2d_target_help'   => 'URL adresa gde cilja 2D barkod kada se skenira',
    'label2_fields'           => 'Definicija polja',
    'label2_fields_help'      => 'Polja mogi biti dodata, uklonjena i presložena u levoj koloni. Za svako polje, višestruko opcija za Naziv i IzvorPodataka mogu biti dodato, uklonjeno i presloženo u desnoj koloni.',
    'help_asterisk_bold'    => 'Tekst unet kao <code>**tekst**</code> biće prikazan podebljan',
    'help_blank_to_use'     => 'Ostavite prazno da bi se koristila vrednost iz <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> će koristiti vrednost iz <code>:setting_name</code>. <br>Upamtite da vrednost barkoda mora da se usaglasi sa specifikacijom odgovarajućeg barkoda da bi bio uspešno generisan. Molim vas pogledajte <a href="https://snipe-it.readme.io/docs/barcodes">dokumentaciju <i class="fa fa-external-link"></i></a> za više detalja. ',
    'default'               => 'Podrazumevano',
    'none'                  => 'Ništa',
    'google_callback_help' => 'Ovo treba uneti kao pozivna URL adresa u vašim Google OAuth podešavanjima aplikacije u vašoj organizaciji <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer konzole <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Podešavanja prijava sa Google Workspace',
    'enable_google_login'  => 'Omogućiti prijavu korisnicima sa Google Workspace',
    'enable_google_login_help'  => 'Korisnici neće automatski biti opskrbljeni. Moraju imati postojeći nalog ovde I ISTOVREMENO u Google Workspace-u, i njihovo korisničko ime se mora poklapati sa adresom e-pošte u Google Workspace-u. ',
    'mail_reply_to' => 'Adresa e-pošte za odgovor',
    'mail_from' => 'Adresa e-pošte pošiljaoca',
    'database_driver' => 'Drajver Baze Podataka',
    'bs_table_storage' => 'Skladište tabele',
    'timezone' => 'Vremenska zona',
    'profile_edit'          => 'Izmeni profil',
    'profile_edit_help'          => 'Dozvoli korisnicima da izmene svoje profile.',

];
