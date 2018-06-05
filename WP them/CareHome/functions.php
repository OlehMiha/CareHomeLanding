<?php 

//Стили
function register_styles() {
    /* CSS */
    
    wp_register_style('bootstrap.min.css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap.min.css');

    wp_register_style('font-awesome.min.css', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome.min.css');
    
    wp_register_style('googlefonts', "https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700,800&amp;subset=cyrillic,cyrillic-ext");
    wp_enqueue_style('googlefonts');

    wp_register_style('cssreset.css', get_template_directory_uri() . '/css/cssreset.css');
    wp_enqueue_style('cssreset.css');

    wp_register_style('animate.css', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('animate.css');

    wp_register_style('jquery.mCustomScrollbar.css', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css');
    wp_enqueue_style('jquery.mCustomScrollbar.css');

    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');

    wp_register_style('media-queries.css', get_template_directory_uri() . '/css/media-queries.css');
    wp_enqueue_style('media-queries.css');
}

function load_my_style_script_header() {
    /* JS */

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('jquery');
}

function load_my_style_script_footer() {  
    /* JS */

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('jquery');
    
    wp_register_script('popper.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    wp_enqueue_script('popper.min.js');

    wp_register_script('bootstrap.min.js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap.min.js');
    
    wp_register_script('jquery.malihu.PageScroll2id.min.js', get_template_directory_uri() . '/js/jquery.malihu.PageScroll2id.min.js');
    wp_enqueue_script('jquery.malihu.PageScroll2id.min.js');
    
    wp_register_script('jquery.mCustomScrollbar.concat.min.js', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js');
    wp_enqueue_script('jquery.mCustomScrollbar.concat.min.js');
    
    wp_register_script('custom.js', get_template_directory_uri() . '/js/custom.js');
    wp_enqueue_script('custom.js');
}

//Регистрация Css и Js в footer для GoogleSpeed
add_action( 'wp_enqueue_scripts', 'register_styles' );
// add_action( 'get_header', 'load_my_style_script_header' );
add_action('get_footer', 'load_my_style_script_footer');

//Меню
register_nav_menu('menu' , 'topmenu');
    
//Количество цитаты
function new_excerpt_length($length) {
    return 22;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', function($more) {
    return '...';
});

//Миниатюра
add_theme_support('post-thumbnails');

//Боковая панель
if( function_exists('acf_add_options_page')){
    acf_add_options_page(array(
		'page_title' 	=> 'Header & Footer',
		'menu_title'	=> 'Header & Footer',
		'menu_slug' 	=> 'theme-general-settings',
        'capability'    => 'edit_posts',
		'icon_url'	=> 'dashicons-share-alt2',
        'position' => '80.0101',
		'redirect'		=> false
	));
}

// Зона для виджетов (сайтбар)
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name' => __('Left sidebar', 'unconference'),
        'description' => __('Left sidebar', 'unconference'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}


//get_template_part( 'block1_widget' );

if( is_admin() ){
    // отключим проверку обновлений при любом заходе в админку...
    remove_action( 'admin_init', '_maybe_update_core' );
    remove_action( 'admin_init', '_maybe_update_plugins' );
    remove_action( 'admin_init', '_maybe_update_themes' );

    // отключим проверку обновлений при заходе на специальную страницу в админке...
    remove_action( 'load-plugins.php', 'wp_update_plugins' );
    remove_action( 'load-themes.php', 'wp_update_themes' );

    // оставим принудительную проверку при заходе на страницу обновлений...
    remove_action( 'load-update-core.php', 'wp_update_plugins' );
    remove_action( 'load-update-core.php', 'wp_update_themes' );

    // внутренняя страница админки "Update/Install Plugin" или "Update/Install Theme" - оставим не мешает...
    remove_action( 'load-update.php', 'wp_update_plugins' );
    remove_action( 'load-update.php', 'wp_update_themes' );

    // событие крона не трогаем, через него будет проверяться наличие обновлений - тут все отлично!
    remove_action( 'wp_version_check', 'wp_version_check' );
    remove_action( 'wp_update_plugins', 'wp_update_plugins' );
    remove_action( 'wp_update_themes', 'wp_update_themes' );

    /**
     * отключим проверку необходимости обновить браузер в консоли - мы всегда юзаем топовые браузеры!
     * эта проверка происходит раз в неделю...
     * @see https://wp-kama.ru/function/wp_check_browser_version
     */
    add_filter( 'pre_site_transient_browser_'. md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_true' );
}

// Добавляет ссылку на страницу всех настроек в пункт меню админки "Настройки"
function all_settings_link(){
    add_options_page( __('All Settings'), __('All Settings'), 'manage_options', 'options.php');
}
add_action('admin_menu', 'all_settings_link');

function true_remove_default_widget() {
    unregister_widget('WP_Widget_Archives'); // Архивы
    unregister_widget('WP_Widget_Calendar'); // Календарь
    unregister_widget('WP_Widget_Categories'); // Рубрики
    unregister_widget('WP_Widget_Meta'); // Мета
    unregister_widget('WP_Widget_Pages'); // Страницы
    unregister_widget('WP_Widget_Recent_Comments'); // Свежие комментарии
    unregister_widget('WP_Widget_Recent_Posts'); // Свежие записи
    unregister_widget('WP_Widget_RSS'); // RSS
    unregister_widget('WP_Widget_Search'); // Поиск
    unregister_widget('WP_Widget_Tag_Cloud'); // Облако меток
    unregister_widget('WP_Widget_Text'); // Текст
    unregister_widget('WP_Nav_Menu_Widget'); // Произвольное меню
}
 
add_action( 'widgets_init', 'true_remove_default_widget', 20 );


//загрузка новых типов медиафайлов start
function wph_add_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wph_add_mime_types');


## Добавляет миниатюры записи в таблицу записей в админке
if(1){
    add_action('init', 'add_post_thumbs_in_post_list_table', 20 );
    function add_post_thumbs_in_post_list_table(){
        // проверим какие записи поддерживают миниатюры
        $supports = get_theme_support('post-thumbnails');

        $ptype_names = array('post'); // указывает типы для которых нужна колонка отдельно

        // Определяем типы записей автоматически
        if( ! isset($ptype_names) ){
            if( $supports === true ){
                $ptype_names = get_post_types(array( 'public'=>true ), 'names');
                $ptype_names = array_diff( $ptype_names, array('attachment') );
            }
            // для отдельных типов записей
            elseif( is_array($supports) ){
                $ptype_names = $supports[0];
            }
        }

        // добавляем фильтры для всех найденных типов записей
        foreach( $ptype_names as $ptype ){
            add_filter( "manage_{$ptype}_posts_columns", 'add_thumb_column' );
            add_action( "manage_{$ptype}_posts_custom_column", 'add_thumb_value', 10, 2 );
        }
    }

    // добавим колонку
    function add_thumb_column( $columns ){
        // подправим ширину колонки через css
        add_action('admin_notices', function(){
            echo '
            <style>
                .column-thumbnail{ width:80px; text-align:center; }
            </style>';
        });

        $num = 1; // после какой по счету колонки вставлять новые

        $new_columns = array( 'thumbnail' => __('Thumbnail') );

        return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
    }

    // заполним колонку
    function add_thumb_value( $colname, $post_id ){
        if( 'thumbnail' == $colname ){
            $width  = $height = 45;

            // миниатюра
            if( $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true ) ){
                $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
            }
            // из галереи...
            elseif( $attachments = get_children( array(
                'post_parent'    => $post_id,
                'post_mime_type' => 'image',
                'post_type'      => 'attachment',
                'numberposts'    => 1,
                'order'          => 'DESC',
            ) ) ){
                $attach = array_shift( $attachments );
                $thumb = wp_get_attachment_image( $attach->ID, array($width, $height), true );
            }

            echo empty($thumb) ? ' ' : $thumb;
        }
    }
}

/*
// заменим слово "записи" на "посты" для типа записей 'post'
add_filter('post_type_labels_post', 'rename_posts_labels');
function rename_posts_labels( $labels ){
    // заменять автоматически нельзя: Запись = Портфолио, а в тексте получим "Просмотреть статья"

    $new = array(
        'name'                  => 'Пост',
        'singular_name'         => 'Пост',
        'add_new'               => 'Добавить пост',
        'add_new_item'          => 'Добавить пост',
        'edit_item'             => 'Редактировать пост',
        'new_item'              => 'Новый пост',
        'view_item'             => 'Просмотреть пост',
        'search_items'          => 'Поиск постов',
        'not_found'             => 'Посты не найдены.',
        'not_found_in_trash'    => 'Посты в корзине не найдены.',
        'parent_item_colon'     => '',
        'all_items'             => 'Все посты',
        'archives'              => 'Архивы постов',
        'insert_into_item'      => 'Вставить в пост',
        'uploaded_to_this_item' => 'Загруженные для этого поста',
        'featured_image'        => 'Миниатюра поста',
        'filter_items_list'     => 'Фильтровать список постов',
        'items_list_navigation' => 'Навигация по списку постов',
        'items_list'            => 'Список постов',
        'menu_name'             => 'Блог',
        'name_admin_bar'        => 'Блог', // пункте "добавить"
    );

    return (object) array_merge( (array) $labels, $new );
}


//Свой пункт в админке
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page(){
    add_menu_page('Настойка блоков', 'Блоки сайта', 'edit_others_posts', 'edit.php?post_type=shortcodesultimate', '', 'dashicons-tagcloud', 21 );
}

//Свой пункт в админке
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page(){
    //add_menu_page('Настойка блоков', 'Блоки сайта', 'block_options_my', 'edit.php?post_type=shortcodesultimate', '', '', 21 );
    //add_submenu_page( 'index.php', 'Блоки сайта', 'Настойка блоков', '', 'block_options_my_iner', 'edit.php?post_type=shortcodesultimate' );
    add_submenu_page( 'edit.php?post_type=page', 'Блоки сайта', 'Настойка блоков', '', 'block_options_my_iner', 'edit.php?post_type=shortcodesultimate' );
}
*/
?>