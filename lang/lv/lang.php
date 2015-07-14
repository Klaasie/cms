<?php

return [
    'cms_object' => [
        'invalid_file' => 'Nederīgs faila nosaukums: :name. Failu nosaukumi drīkst sastāvēt tikai no cipariem/burtiem, apakšsvītrām, šķērssvītrām un punktiem. Daži pareizi piemēri: lapa.htm, lapa, direktorija/lapa',
        'invalid_property' => "Īpašuma nosaukums ':name' nevar tikt iestatīts",
        'file_already_exists' => "Fails ':name' jau eksistē.",
        'error_saving' => "Kļūda saglabājot failu ':name'. Lūdzu pārbaudiet rakstīšanas tiesības.",
        'error_creating_directory' => 'Kļūda izveidojot direktoriju :name. Lūdzu pārbaudiet rakstīšanas tiesības.',
        'invalid_file_extension'=>'Nederīgs faila tips: :invalid. Atļautie tipi: :allowed.',
        'error_deleting' => "Kūda dzēšot veidnes failu ':name'. Lūdzu pārbaudiet rakstīšanas tiesības.",
        'delete_success' => 'Tika veiksmīgi izdzēstas veidnes: :count.',
        'file_name_required' => 'Faila nosaukuma lauks ir obligāts.'
    ],
    'theme' => [
        'not_found_name' => "Tēma ':name' netika atrasta.",
        'active' => [
            'not_set' => 'Aktīvā tēma netika iestatīta.',
            'not_found' => 'Aktīvā tēma netika atrasta.'
        ],
        'edit' => [
            'not_set' => 'Labotā tēma netika iestatīta.',
            'not_found' => 'Labotā tēma netika atrasta.',
            'not_match' => "Objekts, kuru mēģinat labot nepieder tēmai, kuru šobrīd labojat. Lūdzu pārlādējiet lapu."
        ],
        'settings_menu' => 'Front-end tēma',
        'settings_menu_description' => 'Priekšskatiet instalētās tēmas un izvēlieties aktīvo tēmu.',
        'default_tab' => 'Rekvizīti',
        'name_label' => 'Nosaukums',
        'name_create_placeholder' => 'Jaunas tēmas nosaukums',
        'author_label' => 'Autors',
        'author_placeholder' => 'Personas vai kompānijas nosaukums',
        'description_label' => 'Apraksts',
        'description_placeholder' => 'Tēmas apraksts',
        'homepage_label' => 'Mājaslapa',
        'homepage_placeholder' => 'Mājaslapas URL',
        'code_label' => 'Kods',
        'code_placeholder' => 'Unikāls kods šai tēmai, tiek lietots pārdošanai',
        'dir_name_label' => 'Direktorijas nosaukums',
        'dir_name_create_label' => 'Tēmas mērķdirektorija',
        'theme_label' => 'Tēma',
        'theme_title' => 'Tēmas',
        'activate_button' => 'Aktivizēt',
        'active_button' => 'Aktivizēt',
        'customize_theme' => 'Pielāgot tēmu',
        'customize_button' => 'Pielāgot',
        'duplicate_button' => 'Dublēt',
        'duplicate_title' => 'Dublēt tēmu',
        'duplicate_theme_success' => 'Tēmas dublēšana notika veiksmīgi!',
        'manage_button' => 'Pārvaldīt',
        'manage_title' => 'Pārvaldīt tēmu',
        'edit_properties_title' => 'Tēma',
        'edit_properties_button' => 'Labot iestatījumus',
        'save_properties' => 'Saglabāt iestatījumus',
        'import_button' => 'Importēt',
        'import_title' => 'Importēt tēmu',
        'import_theme_success' => 'Tēmas importēšanas notika veiksmīgi!',
        'import_uploaded_file' => 'Tēmas arhivētais fails',
        'import_overwrite_label' => 'Pārrakstīt esošos failus',
        'import_overwrite_comment' => 'Izņemiet ķeksi, lai importētu tikai jaunos failus',
        'import_folders_label' => 'Mapes',
        'import_folders_comment' => 'Lūdzu izvēlieties tēmas mapes, kuras vēlaties importēt',
        'export_button' => 'Eksportēt',
        'export_title' => 'Eksportēt tēmu',
        'export_folders_label' => 'Mapes',
        'export_folders_comment' => 'Lūdzu izvēlieties tēmas mapes, kuras vēlaties eksportēt',
        'delete_button' => 'Dzēst',
        'delete_confirm' => 'Vai esat pārliecināts, ka vēlaties dzēst šo tēmu? Izmaiņas nevarēs atcelt!',
        'delete_active_theme_failed' => 'Aktīvo tēmu nevar idzēst, vispirms padariet citu tēmu par aktīvo.',
        'delete_theme_success' => 'Tēma veiksmīgi izdzēsta!',
        'create_title' => 'Izveidot tēmu',
        'create_button' => 'Izveidot',
        'create_new_blank_theme' => 'Izveidot jaunu tukšu tēmu',
        'create_theme_success' => 'Tēma tika veiksmīgi izveidota!',
        'create_theme_required_name' => 'Lūdzu norādiet tēmas nosaukumu.',
        'new_directory_name_label' => 'Tēmas mape',
        'new_directory_name_comment' => 'Norādiet mapi priekš dublētās tēmas.',
        'dir_name_invalid' => 'Nosaukums drīkst saturēt tikai skaitļus, Latīņu burtus un sekojošos simbolus: _-',
        'dir_name_taken' => 'Izvēlētā tēmas mape jau pastāv.',
        'find_more_themes' => 'Atrodast vairāk tēmas',
        'saving' => 'Saglabājam tēmu...',
        'return' => 'Atgriezties tēmu sarakstā',
    ],
    'maintenance' => [
        'settings_menu' => 'Apkopes režīms',
        'settings_menu_description' => 'Konfigurējiet apkopes režīma lapu un pielāgojiet iestatījumus.',
        'is_enabled' => 'Iespējot apkopes režīmu',
        'is_enabled_comment' => 'Kad aktivizēts mājaslapas apmeklētāji redzēs zemāk izvēlēto lapu.'
    ],
    'page' => [
        'not_found_name' => "Lapa ':name' netika atrasta",
        'not_found' => [
            'label' => 'Lapa nav atrasta',
            'help' => 'Pieprasītā lapa nav atrasta.'
        ],
        'custom_error' => [
            'label' => 'Lapas kļūda',
            'help' => "Mums žēl, bet kaut kas nogāja greizi un lapa nevar tikt attēlota."
        ],
        'menu_label' => 'Lapas',
        'unsaved_label' => 'Nesaglabāta lapa(s)',
        'no_list_records' => 'Nav lapu',
        'new' => 'Jauna lapa',
        'invalid_url' => 'Nederīgs URL formāts. URL vajadzētu sākties ar šķērssvītras simbolu un tā var saturēt skaitļus, Latīņu burtus un sekojošos simbolus: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Vai tiešām vēlaties idzēst izvēlētās lapas?',
        'delete_confirm_single' => 'Vai tiešām vēlaties dzēst šo lapu?',
        'no_layout' => '-- bez izkārtojuma --'
    ],
    'layout' => [
        'not_found_name' => "Izkārtojums ':name' netika atrasts",
        'menu_label' => 'Izkārtojumi',
        'unsaved_label' => 'Nesaglabāts izkārtojums(i)',
        'no_list_records' => 'Nav izkārtojumu',
        'new' => 'Jauns izkārtojums',
        'delete_confirm_multiple' => 'Vai tiešām vēlaties izdzēst izvēlētos izkārtojumus?',
        'delete_confirm_single' => 'Vai tiešām vēlaties dzēst šo izkārtojumu?'
    ],
    'partial' => [
        'not_found_name' => "Daļa ':name' netika atrasta.",
        'invalid_name' => 'Nederīgs daļas nosaukums: :name.',
        'menu_label' => 'Daļas',
        'unsaved_label' => 'Nesaglabāta daļa(s)',
        'no_list_records' => 'Daļas nav atrastas',
        'delete_confirm_multiple' => 'Vai tiešām vēlaties izdzēst izvēlētās daļas?',
        'delete_confirm_single' => 'Vai tiešām vēlaties dzēst šo daļu?',
        'new' => 'Jauna daļa'
    ],
    'content' => [
        'not_found_name' => "Satura fails ':name' netika atrasts.",
        'menu_label' => 'Saturs',
        'unsaved_label' => 'Nesaglabāts saturs',
        'no_list_records' => 'Nav satura failu',
        'delete_confirm_multiple' => 'Vai tiešām vēlaties izdzēst izbēlētos satura failus vai mapes?',
        'delete_confirm_single' => 'Vai tiešām vēlaties dzēst šo satura failu?',
        'new' => 'Jauns satura fails'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Nederīgs AJAX handler nosaukums: :name.',
        'not_found' => "AJAX handler ':name' netika atrasts."
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Pievienot',
        'search' => 'Meklēt...'
    ],
    'editor' => [
        'settings' => 'Iestatījumi',
        'title' => 'Virsraksts',
        'new_title' => 'Jauns lapas virsraksts',
        'url' => 'URL',
        'filename' => 'Faila nosaukums',
        'layout' => 'Izkārtojums',
        'description' => 'Apraksts',
        'preview' => 'Priekšskatījums',
        'meta' => 'Meta',
        'meta_title' => 'Meta Virsraksts',
        'meta_description' => 'Meta Apraksts',
        'markup' => 'Markup',
        'code' => 'Code',
        'content' => 'Saturs',
        'hidden' => 'Paslēpt',
        'hidden_comment' => 'Paslēptās lapas ir pieejamas tikai autorizētiem back-end lietotājiem.',
        'enter_fullscreen' => 'Pilnkekrāna režīms',
        'exit_fullscreen' => 'Iziet no pilnekrāna režīma'
    ],
    'asset' => [
        'menu_label' => 'Papildinājumi',
        'unsaved_label' => 'Nesaglabāts papildinājums(i)',
        'drop_down_add_title' => 'Pievienot...',
        'drop_down_operation_title' => 'Daarbība...',
        'upload_files' => 'Augšupielādēt failu(us)',
        'create_file' => 'Izveidot failu',
        'create_directory' => 'Izveidot mapi',
        'directory_popup_title' => 'Jauna mape',
        'directory_name' => 'Mapes nosaukums',
        'rename' => 'Pārsaukt',
        'delete' => 'Dzēst',
        'move' => 'Pārvietot',
        'select' => 'Izvēlēties',
        'new' => 'Jauns fails',
        'rename_popup_title' => 'Pārsaukt',
        'rename_new_name' => 'Jauns nosaukums',
        'invalid_path' => 'Ceļš var saturēt tikai skaitļus, Latīņu burtus, atstarpes un sekojošos simbolus: ._-/',
        'error_deleting_file' => 'Kļūda dzēšot failu :name.',
        'error_deleting_dir_not_empty' => 'Kļūda dzēšot mapi :name. Mape nav tukša.',
        'error_deleting_dir' => 'Kļūda dzēšot failu :name.',
        'invalid_name' => 'Nosaukums var saturēt tikai skaitļus, Latīņu burtus, atstarpes un sekojošos simbolus: ._-',
        'original_not_found' => 'Oriģinālais fails vai mape netika atrasts',
        'already_exists' => 'Fails vai mape ar šo nosaukumu jau eksistē',
        'error_renaming' => 'Kļūda pārdēvējot failu vai mapi',
        'name_cant_be_empty' => 'Nosaukums nevar būt tukšums',
        'too_large' => 'Augšupielādētais fails ir pārāk liels. Maksimālais atļautais faila izmērs :max_size',
        'type_not_allowed' => 'Tikai sekojošie failu tipi ir atļauti: :allowed_types',
        'file_not_valid' => 'Fails nav derīgs',
        'error_uploading_file' => "Kļūda augšupielādējot failu ':name': :error",
        'move_please_select' => 'lūdzu izvēlieties',
        'move_destination' => 'Mērķa mape',
        'move_popup_title' => 'Pārvietot papildinājumus',
        'move_button' => 'Pārvietot',
        'selected_files_not_found' => 'Izvēlētie faili nav atrasti',
        'select_destination_dir' => 'Lūdzu izvēlieties mērķdirektoriju',
        'destination_not_found' => 'Mērķdirektorija nav atrasta',
        'error_moving_file' => 'Kļūda pārvietojot failu :file',
        'error_moving_directory' => 'Kļūda pārvietojot mapi :dir',
        'error_deleting_directory' => 'Kļūda dzēšot oriģinālo mapi :dir',
        'path' => 'Ceļš'
    ],
    'component' => [
        'menu_label' => 'Komponenti',
        'unnamed' => 'Nenosaukts',
        'no_description' => 'Apraksts nav norādīts',
        'alias' => 'Saīsinājums',
        'alias_description' => 'Unikāls nosaukums šim komponentam kad tas tiek izmantots lapas vai izkārtojuma kodā.',
        'validation_message' => 'Komponenta saīsinājums ir obligāts un var sastāvēt tikai no Latīņu simboliem, skaitļiem un apakšsvītrām. Saīsinājumiem vajadzētu sākties ar Latīņu simbolu.',
        'invalid_request' => 'The template cannot be saved because of invalid component data.',
        'no_records' => 'Nav komponentu',
        'not_found' => "Komponents ':name' netika atrasts.",
        'method_not_found' => "Komponents ':name' nesatur metodi ':method'."
    ],
    'template' => [
        'invalid_type' => 'Nezināms veidnes tips.',
        'not_found' => 'Pieprasītā veidne nav atrasta.',
        'saved'=> 'Fails tika veiksmīgi saglabāts.'
    ],
    'permissions' => [
        'name' => 'Cms',
        'manage_content' => 'Pārvaldīt saturu',
        'manage_assets' => 'Pārvaldīt papildinājumus',
        'manage_pages' => 'Pārvaldīt lapas',
        'manage_layouts' => 'Pārvaldīt izkārtojumus',
        'manage_partials' => 'Pārvaldīt daļas',
        'manage_themes' => 'Pārvaldīt tēmas',
        'manage_media' => 'Pārvaldīt multividi'
    ],
    'mediafinder' => [
        'default_prompt' => 'Klikšķiniet uz %s pogas, lai atrastu multividi'
    ],
    'media' => [
        'invalid_path' => "Norādīts nederīgs ceļš līdz failam: ':path'.",
        'menu_label' => 'Multimēdija',
        'upload' => 'Augšupielādēt',
        'move' => 'Pārvietot',
        'delete' => 'Dzēst',
        'add_folder' => 'Pievienot mapi',
        'search' => 'Meklēt',
        'display' => 'Attēlot',
        'filter_everything' => 'Viss',
        'filter_images' => 'Attēli',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Dokumenti',
        'library' => 'Bibliotēka',
        'folder_size_items' => 'objekti(s)',
        'size' => 'Izmērs',
        'title' => 'Virsraksts',
        'last_modified' => 'Pēdējoreiz modificēts',
        'public_url' => 'Publiskā URL',
        'click_here' => 'Spiest šeit',
        'thumbnail_error' => 'Kļūda ģenerējot priekšskatījumu.',
        'return_to_parent' => 'Atgriezties vecākmapē',
        'return_to_parent_label' => 'Doties augšup ..',
        'nothing_selected' => 'Nekas nav izvēlēts.',
        'multiple_selected' => 'Vairāki izvēlēti objekti.',
        'uploading_file_num' => 'Augšupielādējam :number failu(us)...',
        'uploading_complete' => 'Augšupielāde pabeigta',
        'order_by' => 'Kārtot pēc',
        'search' => 'Meklēt',
        'folder' => 'Mape',
        'no_files_found' => 'Jūsu pieprasītie faili netika atrasti.',
        'delete_empty' => 'Lūdzu izvēlaties objektus, kurus dzēst.',
        'delete_confirm' => 'Vai tiešām vēlaties izdzēst izvēlēto objektu(us)?',
        'error_renaming_file' => 'Kļūda pārdēvējot objektu.',
        'new_folder_title' => 'Jauna mape',
        'folder_name' => 'Mapes nosaukums',
        'error_creating_folder' => 'Kļūda izveidojot mapi',
        'folder_or_file_exist' => 'Mape vai fails ar izvēlēto nosaukumu jau eksistē.',
        'move_empty' => 'Izvēlēties objektus, kurus pārvietot.',
        'move_popup_title' => 'Pārvietot failus vai mapes',
        'move_destination' => 'Mērķdirektorija',
        'please_select_move_dest' => 'Lūdzu izvēlieties mērķdirektoriju.',
        'move_dest_src_match' => 'Lūdzu izvēlieties citu mērķdirektoriju.',
        'empty_library' => 'Multimēdijas bibliotēka ir tukša. Augšupielādējiet failus vai izveidojat mapes, lai sāktu.',
        'insert' => 'Ievietot',
        'crop_and_insert' => 'Apgriezt un Ievietot',
        'select_single_image' => 'Lūdzu izvēlieties vienu attēlu.',
        'selection_not_image' => 'Izvēlētais objekts nav attēls.',
        'restore' => 'Atcelt visas izmaiņas',
        'resize' => 'Mērogot...',
        'selection_mode_normal' => 'Normāls',
        'selection_mode_fixed_ratio' => 'Fiksēta attiecība',
        'selection_mode_fixed_size' => 'Fiksēts izmērs',
        'height' => 'Augstums',
        'width' => 'Platums',
        'selection_mode' => 'Iezīmēšanas režīms',
        'resize_image' => 'Mērogot attēlu',
        'image_size' => 'Attēla izmērs:',
        'selected_size' => 'Izvēlēts:'
    ]
];
