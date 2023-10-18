<?php

add_action('wp_enqueue_scripts', function () {








    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css');
    wp_enqueue_style('fancybox', "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css");
    wp_enqueue_style('formstyler', get_template_directory_uri() . '/assets/css/jquery.formstyler.css');
    wp_enqueue_style('formstylertheme', get_template_directory_uri() . '/assets/css/jquery.formstyler.theme.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('headerd', get_template_directory_uri() . '/assets/css/me.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    if (is_page_template("home.php")) {
        wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/home.css');
    };
    if (is_page_template("cnfg.php")) {
        wp_enqueue_style('confstyle', get_template_directory_uri() . '/assets/css/conf-style.css');
    };
    if (is_page_template("templates/cottage.php")) {
        wp_enqueue_style('cottage', get_template_directory_uri() . '/assets/css/cottage.css');
    };
    if (is_page_template("templates/interior.php")) {
        wp_enqueue_style('interior', get_template_directory_uri() . '/assets/css/interior.css');
    };
    if (is_page_template("templates/partitions.php")) {
        wp_enqueue_style('partitions', get_template_directory_uri() . '/assets/css/partitions.css');
    };
    if (is_page_template("templates/dealers.php")) {
        wp_enqueue_style('dealers', get_template_directory_uri() . '/assets/css/dealers.css');
    };
    if (is_page_template("templates/work.php")) {
        wp_enqueue_style('work', get_template_directory_uri() . '/assets/css/work.css');
    };
    if (is_page_template("templates/designers.php")) {
        wp_enqueue_style('deisgners', get_template_directory_uri() . '/assets/css/designers.css');
    };
    if (is_page_template("templates/catalog.php")) {
        wp_enqueue_style('catalog', get_template_directory_uri() . '/assets/css/catalog.css');
    };
    if (is_page_template("templates/gallery.php")) {
        wp_enqueue_style('gallery', get_template_directory_uri() . '/assets/css/gallery.css');
    };
    if (is_page_template("templates/contacts.php")) {
        wp_enqueue_style('contacts', get_template_directory_uri() . '/assets/css/contacts.css');
    };
    if (is_page_template("templates/collections.php")) {
        wp_enqueue_style('collections', get_template_directory_uri() . '/assets/css/collections.css');
    };
    if (is_page_template("templates/collection.php")) {
        wp_enqueue_style('collection', get_template_directory_uri() . '/assets/css/collection.css');
    };
    if (is_page_template("templates/project.php")) {
        wp_enqueue_style('project', get_template_directory_uri() . '/assets/css/project.css');
    };
    if (is_page_template("templates/doorpage.php")) {
        wp_enqueue_style('doorpage', get_template_directory_uri() . '/assets/css/doorpage.css');
    };
    if (is_page_template("templates/projects.php")) {
        wp_enqueue_style('projects', get_template_directory_uri() . '/assets/css/projects.css');
    };
   

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js');
    wp_enqueue_script('jquery');
    if (is_page_template('templates/gallery.php')) {
        wp_enqueue_script('mouse', "https://res.cloudinary.com/veseylab/raw/upload/v1684982764/magicmouse-2.0.0.cdn.min.js", array('jquery'), 'null', true);
    };
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), 'null', true);
    wp_enqueue_script('fancybox', "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js", array('jquery'), 'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
    wp_enqueue_script('mainme', get_template_directory_uri() . '/assets/js/me.js', array('jquery'), 'null', true);
    if (is_page(10)) {
        wp_enqueue_script('conf-script', get_template_directory_uri() . '/assets/js/conf-main.js', array('jquery'), 'null', true);
    };
    if (is_page_template("templates/collections.php")) {
        wp_enqueue_script('collections', get_template_directory_uri() . '/assets/js/collections.js', array('jquery'), 'null', true);
    };
    if (is_page_template("templates/doorpage.php")) {
        wp_enqueue_script('doorpage', get_template_directory_uri() . '/assets/js/doorpage.js', array('jquery'), 'null', true);
    };
    if (is_page_template("templates/gallery.php")) {
        wp_enqueue_script('gallery', get_template_directory_uri() . '/assets/js/gallery.js', array('jquery'), 'null', true);
    };
    if (is_page_template("templates/project.php")) {
        wp_enqueue_script('project', get_template_directory_uri() . '/assets/js/project.js', array('jquery'), 'null', true);
    };
    if (is_page_template("templates/work.php")) {
        wp_enqueue_script('work', get_template_directory_uri() . '/assets/js/work.js', array('jquery'), 'null', true);
    };
});



add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter('upload_mimes', 'svg_upload_allow');

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}





add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    // WP 5.1 +
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    } else {
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    }

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if ($dosvg) {

        // разрешим
        if (current_user_can('manage_options')) {

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext']  = false;
            $data['type'] = false;
        }
    }

    return $data;
}


function true_apply_categories_for_pages()
{
    add_meta_box('categorydiv', 'Категории', 'post_categories_meta_box', 'page', 'side', 'normal'); // добавляем метабокс категорий для страниц
    register_taxonomy_for_object_type('category', 'page'); // регистрируем рубрики для страниц
}
// обязательно вешаем на admin_init
add_action('admin_init', 'true_apply_categories_for_pages');

function true_expanded_request_category($q)
{
    if (isset($q['category_name'])) // если в запросе присутствует параметр рубрики
        $q['post_type'] = array('post', 'page'); // то, помимо записей, выводим также и страницы
    return $q;
}

add_filter('request', 'true_expanded_request_category');






add_action(
    'init',
    function () {

        register_post_type('sales', array(
            'labels' => array(
                'name' => 'Заявки',
                'singular_name' => 'Заявки',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавление',
                'edit_item' => 'Редактирование',
                'new_item' => 'Новый элемент',
                'view_item' => 'Посмотреть',
                'search_items' => 'Найти',
                'not_found' =>    'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'parent_item_colon' => '',
                'menu_name' => 'Заявки'
            ),
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => false,
            'rest_base' => null,
            'menu_position' => 35,
            'capability_type' => 'post',
            //'capabilities' => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap' => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'), //'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies' => array('sales-cat'),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
        ));

        register_taxonomy('sales-cat', array('sales'), array(
            'labels' => array(
                'name' => _x('Категории заявок', 'taxonomy general name'),
                'singular_name' => _x('Заявки', 'taxonomy singular name'),
                'search_items' => __('Найти'),
                'all_items' => __('Все заявки'),
                'view_item' => __('Посмотреть'),
                'parent_item' => __('Родитель'),
                'parent_item_colon' => __('Родитель'),
                'edit_item' => __('Редактировать'),
                'update_item' => __('Обновить'),
                'add_new_item' => __('Добавить'),
                'new_item_name' => __('Название'),
                'menu_name' => __('Категории заявок'),
            ),
            'hierarchical' => true,
            'show_ui' => true,
            'query_var' => true,
            'show_in_rest' => false,
            'rest_base' => null,
            'rewrite' => array('slug' => 'sales-cat', 'with_front' => true),
        ));
    },
    19
); //+        



add_action(
    'init',
    function () {

        register_post_type('references', array(
            'labels' => array(
                'name' => 'Справочники',
                'singular_name' => 'Справочники',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавление',
                'edit_item' => 'Редактирование',
                'new_item' => 'Новый элемент',
                'view_item' => 'Посмотреть',
                'search_items' => 'Найти',
                'not_found' =>    'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'parent_item_colon' => '',
                'menu_name' => 'Справочники'
            ),
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => false,
            'rest_base' => null,
            'menu_position' => 35,
            'capability_type' => 'post',
            //'capabilities' => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap' => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'), //'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies' => array('references-cat'),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
        ));

        register_taxonomy('references-cat', array('references'), array(
            'labels' => array(
                'name' => _x('Категории справочников', 'taxonomy general name'),
                'singular_name' => _x('Справочники', 'taxonomy singular name'),
                'search_items' => __('Найти'),
                'all_items' => __('Все заявки'),
                'view_item' => __('Посмотреть'),
                'parent_item' => __('Родитель'),
                'parent_item_colon' => __('Родитель'),
                'edit_item' => __('Редактировать'),
                'update_item' => __('Обновить'),
                'add_new_item' => __('Добавить'),
                'new_item_name' => __('Название'),
                'menu_name' => __('Категории справочников'),
            ),
            'hierarchical' => true,
            'show_ui' => true,
            'query_var' => true,
            'show_in_rest' => false,
            'rest_base' => null,
            'rewrite' => array('slug' => 'references-cat', 'with_front' => true),
        ));
    },
    19
); //+                



add_action('wp_ajax_edit_appl', 'edit_appl_func');
add_action('wp_ajax_nopriv_edit_appl', 'edit_appl_func');

add_action('wp_ajax_create_appl', 'create_appl_func');
add_action('wp_ajax_nopriv_create_appl', 'create_appl_func');



function edit_appl_func()
{

    $uid = $_POST['uid'];
    $usr = $_POST['usr'];

    $p1 = get_field('p1', $uid);
    $p2 = get_field('p2', $uid);
    $p3 = get_field('p3', $uid);
    $p4 = get_field('p4', $uid);

    $de = json_decode($p1);
?>
    <div class="user_config">
        <div class="z_pol">
            Параметры пользователя
        </div>
        <div class="all_p">

            <?php

            /*$model = $de->model;
   $leaf = $de->leaf;
   $leafdooritems_single = $de->leafdooritems_single;
   $frameglasscol = $de->frameglasscol;
   $furnitureextragrid1check = $de->furniture_extra-grid1_check;
   $furnitemextragrid1 = $de->furnitem_extra-grid1;
   $outdoorstyles = $de->outdoorstyles;
   $furnitembaguette = $de->furnitem_baguette;
   $hinges = $de->hinges;
   $metalcolin = $de->metalcolin;
   $metalcolout = $de->metalcolout;
   $indoorstylespanel = $de->indoorstylespanel;
   $classicmilled = $de->classicmilled;
   $doorcolout = $de->doorcolout;
   $furnituredoorsteptype = $de->furnituredoorsteptype;
   $furniturelisttypecheck = $de->furniture_listtype_check;
   $furniturelisttype = $de->furniturelisttype;
   $furniture_closer_check = $de->furniture_closer_check; 
   $furnitem_closer = $de->furnitem_closer; 
   $furniture_platband_check = $de->furniture_platband_check; 
   $furnitem_platband = $de->furnitem_platband; 
   $furniture_dodings_check = $de->furniture_dodings_check; 
   $furnitem_dodings = $de->furnitem_dodings; 
   $extracornice_check = $de->extra-cornice_check; 
   $furnitem_extragrid2 = $de->furnitem_extra-grid2; 
   $furniturecol = $de->furniturecol; 
   $locknumber = $de->locknumber; 
   $lockitems = $de->lockitems; 
   $furnituretype = $de->furnituretype;
   $furnitem_size = $de->furnitem_size;
   $furnitem_side = $de->furnitem_side;
   $furnitem_met = $de->furnitem_met;
*/





            $door_cfg = json_decode($p1, true);
            //      print_r($door_cfg);
            $total_cost = 0;
            $total_cost_old = 0;

            $door_left = '';
            $door_right = '';

            foreach ($door_cfg as $door) {

                $total_cost = $total_cost + $door['price'];
            }

            $total_cost_old = $total_cost + ($total_cost / 100 * 10);





            ?>

            <section class="cheque-1">
                <table border="0" cellpadding="0" cellspacing="0">

                    <tr class="cheque__table">
                        <th class="cheque__table-left">
                            <table class="table-transparent">
                                <tr>
                                    <th colspan="2" class="cheque__table-title">Основная конструкция двери</th>
                                </tr>

                                <?php if ($door_cfg['model']['value'] == 1) : ?>

                                    <tr>
                                        <th class="cheque__table-name">База</th>
                                        <th class="cheque__table-cost"><?= $door_cfg['model']['price'] ?> ₽</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Termo</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['model']['value'] == 2) : ?>

                                    <tr>
                                        <th class="cheque__table-name">База</th>
                                        <th class="cheque__table-cost"><?= $door_cfg['model']['price'] ?> ₽</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Termo Plus</th>
                                    </tr>

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Конструкция</th>
                                </tr>

                                <?php if ($door_cfg['leaf']['value'] == 'single') : ?>

                                    <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem1') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_single']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Одностворчатая: Тип I</th>
                                        </tr>

                                    <?php endif; ?>


                                    <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem2') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_single']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Одностворчатая: Тип II</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem3') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_single']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Одностворчатая: Тип III</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['leaf']['value'] == 'double') : ?>

                                    <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem1') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_double']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?= $door_cfg['leafdooritems_double']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Двустворчатая: Тип I</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem2') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_double']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?= $door_cfg['leafdooritems_double']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Двустворчатая: Тип II</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem3') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_double']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?= $door_cfg['leafdooritems_double']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Двустворчатая: Тип II</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ((isset($door_cfg['leafdooritems_single']['value']) and $door_cfg['leafdooritems_single']['value'] != 'slditem1') or (isset($door_cfg['leafdooritems_double']['value']) and $door_cfg['leafdooritems_double']['value'] != 'dlditem1')) : ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item1') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Прозрачное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item2') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item3') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Угольное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item4') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Серебряное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item5') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Серебряное матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item6') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Полосатое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item7') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Белое матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item8') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Голубое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item9') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Бронзовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item10') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Бронзовое матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item11') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Зеленое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item12') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Золотое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if (isset($door_cfg['furniture_extra-grid1_check']['value']) and $door_cfg['furniture_extra-grid1_check']['value'] == 1) : ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item1-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></th>
                                                </tr>
                                            <?php else : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Asia</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item2-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></th>
                                                </tr>
                                            <?php else : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Англия</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item3-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></th>
                                                </tr>
                                            <?php else : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 1</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item4-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></th>
                                                </tr>
                                            <?php else : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 2</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item5-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?= $door_cfg['furnitem_extra-grid1d']['price'] . ' ₽' ?></th>
                                                </tr>
                                            <?php else : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 3</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item6-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></th>
                                                </tr>
                                            <?php else : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 4</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item7-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></th>
                                                </tr>
                                            <?php else : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 5</th>
                                            </tr>

                                        <?php endif; ?>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Внешняя панель</th>
                                </tr>

                                <?php if ($door_cfg['outdoorstyles']['value'] == 'classic') : ?>

                                    <?php if (!empty($door_cfg['outdoorstyles']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Отделка</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['outdoorstyles']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Отделка</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Металл без отделки</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['outdoorstyles']['value'] == 'baguette') : ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item1-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 001</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item2-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 002</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item3-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 002</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item4-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 007</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item5-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 008</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item6-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 010</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item7-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 011</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item8-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: I</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item9-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: II</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item10-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: III</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item10-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: III</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['outdoorstyles']['value'] == 'glazed') : ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item1-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 001</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item2-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 002</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item3-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 003</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item4-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 004</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item5-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 005</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item6-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 009</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item7-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 010</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item8-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 011</th>
                                        </tr>

                                    <?php endif; ?>


                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item9-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 012</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item10-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 013</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item11-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 014</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item1') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Прозрачное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item2') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Угольное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item3') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Серебряное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item4') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Серебряное матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item5') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Полосатое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item6') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Белое матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item7') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Голубоее</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item8') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Бронзовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item9') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Бронзовое матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item10') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Золотое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item11') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Зеленое</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol1') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Bronze</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol2') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Silver</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol3') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Vesuvio</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol4') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Tobacco</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol5') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 9003</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol6') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Patina</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol7') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 8017</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol8') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Del Mare</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol9') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 9005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol10') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7043</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol11') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7009</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol12') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 6005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol13') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 6028</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol14') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 8025</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol16') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7006</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol17') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 3005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol18') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 3031</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol19') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 5005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol20') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7004</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol21') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7024</th>
                                    </tr>

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Внутренняя панель</th>
                                </tr>
                                <tr>
                                    <th class="cheque__table-name">Отделка</th>
                                    <th class="cheque__table-base">Включено в базу</th>
                                </tr>
                                <tr>
                                    <th class="cheque__table-descr">Металл без отделки</th>
                                </tr>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout1') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Bronze</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout2') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Silver</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout3') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Vesuvio</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout4') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Tobacco</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout5') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 9003</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout6') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Patina</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout7') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 8017</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout8') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Del Mare</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout10') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 9005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout11') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7009</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout12') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 6005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout13') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 6028</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout14') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 8025</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout15') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7006</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout16') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 1019</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout17') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 3005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout18') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 3031</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout19') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 5005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout20') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7004</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout21') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7024</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout22') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7024</th>
                                    </tr>

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Фурнитура</th>
                                </tr>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-1') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Хром</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-2') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Хром матовый</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-2') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Хром матовый</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-3') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Бронза</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-4') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Золото</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-5') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Черный</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-1') : ?>

                                    <?php if (!empty($door_cfg['furnituretype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Venera</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-2') : ?>

                                    <?php if (!empty($door_cfg['furnituretype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Garda</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-3') : ?>

                                    <?php if (!empty($door_cfg['furnituretype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Trendy</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['hinges']['value'] == 'furn-hinges-item1') : ?>

                                    <?php if (!empty($door_cfg['hinges']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Тип петель</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['hinges']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Тип петель</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Стандартный</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['hinges']['value'] == 'furn-hinges-item2') : ?>

                                    <?php if (!empty($door_cfg['hinges']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Тип петель</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['hinges']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Тип петель</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Скрытые петли</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if (isset($door_cfg['furniture_listtype_check']['value']) and $door_cfg['furniture_listtype_check']['value'] == '1') : ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-1') : ?>

                                        <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furniturelisttype']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Sparta серебро</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-2') : ?>

                                        <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furniturelisttype']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Vizantia золото</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-3') : ?>

                                        <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furniturelisttype']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Vizantia бронза</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-4') : ?>

                                        <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furniturelisttype']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Черная</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item1') : ?>

                                    <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnituredoorsteptype']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Стандартный</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item2') : ?>

                                    <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnituredoorsteptype']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Накладной порог Sparta Хром</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item3') : ?>

                                    <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnituredoorsteptype']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Накладной порог Vizantia Золото</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item4') : ?>

                                    <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnituredoorsteptype']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Цельнопрофильный порог Матовый Хром</th>
                                    </tr>

                                <?php endif; ?>
                            </table>
                        </th>
                        <th class="cheque__table-right">
                            <table class="table-transparent">
                                <tr>
                                    <th colspan="2" class="cheque__table-title">Замковая система</th>
                                </tr>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item1') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Россия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item2') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Турция</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item3') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Италия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item4') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Турция</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item5') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Россия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item6') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Россия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item7') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Турция</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item8') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Турция</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item9') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Россия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item10') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Италия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item11') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Италия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item1') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item2') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale сувальдный</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item3') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Securemme сувальдный</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item4') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale цилиндровый</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item5') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Guardian, электро-механический</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item6') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Biocode</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item7') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale сувальдные</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item8') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale цилинд. и сувальд.</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item9') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Guardian Revolution</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item10') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Securemme сувальдные</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item10') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">CISA Revolution</th>
                                    </tr>

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Дополнительные опции</th>
                                </tr>

                                <?php if (isset($door_cfg['furniture_closer_check']['value']) and $door_cfg['furniture_closer_check']['value'] == 1) : ?>

                                    <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item1-step_6') : ?>

                                        <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_closer']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Черный (внешний)</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item2-step_6') : ?>

                                        <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_closer']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Коричневый (внешний)</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item3-step_6') : ?>

                                        <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_closer']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Серебристый (внешний)</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if (isset($door_cfg['furniture_vent_check']['value']) and $door_cfg['furniture_vent_check']['value'] == 1) : ?>

                                    <?php if ($door_cfg['furnitem_vent']['value'] == 'vent-item1-step_7') : ?>

                                        <?php if (!empty($door_cfg['furnitem_vent']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Вентиляционная решетка</th>
                                                <th class="cheque__table-cost"><?= $door_cfg['furnitem_vent']['price'] . ' ₽' ?></th>
                                            </tr>
                                        <?php else : ?>
                                            <tr>
                                                <th class="cheque__table-name">Вентиляционная решетка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Да</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_side']['value'] == 'side-item1-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_side']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Сторона открывания</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnitem_side']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Сторона открывания</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Внешнее</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_side']['value'] == 'side-item2-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_side']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Сторона открывания</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnitem_side']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Сторона открывания</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Левая</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item1-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnitem_size']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Не знаю</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item2-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnitem_size']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">960 х 2050 мм</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item3-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnitem_size']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">860 х 2050 мм</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item4-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnitem_size']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Свой размер, мм</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item5-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnitem_size']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Свой размер, мм</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_met']['value'] == 'met-item1-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_met']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Металл двери</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnitem_met']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Металл двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Холоднокатаная сталь</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_met']['value'] == 'met-item2-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_met']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Металл двери</th>
                                            <th class="cheque__table-cost"><?= $door_cfg['furnitem_met']['price'] . ' ₽' ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th class="cheque__table-name">Металл двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Нержавеющая сталь</th>
                                    </tr>

                                <?php endif; ?>

                            </table>
                        </th>
                    </tr>
                </table>
            </section>
            <section class="cheque-2">
                <table border="0" cellpadding="0" cellspacing="0" style="font-family : DejaVu Sans">


                    <tr class="cheque__space"></tr>
                    <tr class="cheque__total">
                        <th rowspan="2" class="cheque__total-cost">Общая стоимость</th>
                        <th class="cheque__total-old-cost"><?= $total_cost_old ?> ₽</th>

                    </tr>
                    <tr class="cheque__total">
                        <th class="cheque__total-current-cost"><?= $total_cost ?> ₽</th>
                    </tr>
                    <tr class="cheque__total">


                        <?php if ($door_cfg['model']['value'] == 1) : ?>
                            <th class="cheque__total-title">Termo</th>
                        <?php endif; ?>

                        <?php if ($door_cfg['model']['value'] == 2) : ?>
                            <th class="cheque__total-title">Termo Plus</th>
                        <?php endif; ?>

                    </tr>
                    <tr class="cheque__total">
                        <th class="cheque__total-name">Дата создания двери:</th>
                    </tr>
                    <tr class="cheque__total">
                        <th class="cheque__total-descr"><?= date('d.m.Y H:i') ?></th>
                    </tr>
                </table>
            </section>
        </div>

    </div>
    <div class="user_edit_manager">
        <?php $ai = get_field('p1after', $uid);
        if ($ai != '') {
            echo '<h3>Параметры редактирования менеджером</h3>';
            $pio = json_decode($ai, true);
            $iot = 0;
            foreach ($pio as $pio) {
                echo '<div class="ll_p">';
                if ($iot == 0) {
                    echo '<div class="llp">Форма двери  - ' . $pio['value'] . '</div>';
                }
                if ($iot == 1) {
                    echo '<div class="llp">Панель МДФ  - ' . $pio['value'] . '</div>';
                }
                if ($iot > 1) {
                    $iud = $pio['datapid'];
                    $ti = get_the_title($iud);
                    echo '<div class="ll0">' . $ti . '</div>';
                    echo '<div class="llp">Класс - ' . $pio['value'] . '</div>';
                    if ($pio['text'] != '') {
                        echo '<div class="rrp">Параметр - ' . $pio['text'] . '</div>';
                    }
                }
                echo '</div>';
        ?>

        <?php $iot++;
            }
        }
        ?>
        <div class="actionsb">

            <?php if ($ai == '') {
            ?>
                <span class="edd_f">Реактировать</span>
            <?php } ?>
            <a href="#" data-edit="<?php echo $uid; ?>" data-usr="1" class="sends">Отправить в 1С</a>
            <a href="#" data-edit="<?php echo $uid; ?>" data-usr="1" class="endis">Отменить редактирование</a>
        </div>
        <form data-e="<?php echo $uid; ?>" class="fsave" id="form<?php echo $uid; ?>" action="#" method="POST">
            <div data-e="<?php echo $uid; ?>" class="h_block">
                <div class="pala">
                    <h3>Форма двери - Стиль</h3>
                    <div class="select_typ">
                        <div class="select_typ_one active" data-o="Металл/МДФ">Металл/МДФ</div>
                        <div class="select_typ_one" data-o="Остекление">Остекление</div>
                        <div class="select_typ_one" data-o="Рамка">Рамка</div>

                    </div>
                    <div class="nonet">
                        <h3>Панель МДФ - стиль</h3>
                        <div class="select_typ_uot">
                            <div id="starti" class="select_typ_uot_on active" data-o="Фрезерованная">Фрезерованная
                            </div>
                            <div class="select_typ_uot_on" data-o="Панель гладкая">Панель гладкая
                            </div>
                            <div class="select_typ_uot_on" data-o="С зеркалом">С зеркалом
                            </div>

                        </div>
                    </div>

                </div>
                <div class="user_edit_manager_all">
                    <?php $args1 = array(
                        'post_type' => 'references',
                        'post_per_page' =>  -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    );
                    $q = new WP_Query($args1);
                    while ($q->have_posts()) : $q->the_post();

                        $idsk = get_the_id();
                        $rep1 = get_field('rep1', $idsk);
                        $param = '';
                        $hidd = 'hidd';
                        if (
                            $idsk == 144 || $idsk == 142 || $idsk == 140 || $idsk == 138 || $idsk == 136 || $idsk == 134
                            || $idsk == 132 || $idsk == 130 || $idsk == 128 || $idsk == 126 || $idsk == 124
                            || $idsk == 89  || $idsk == 112  || $idsk == 110  || $idsk == 108  || $idsk == 116  || $idsk == 114
                        ) {
                            $hidd = '';
                        }
                        //  if ($idsk == 118 || $idsk == 120 || $idsk == 122  ) {$param = 'zerkalo'; $hidd = 'hidd';}
                        //             if ($idsk == 106 || $idsk == 104 || $idsk == 102  ) {$param = 'steklo'; $hidd = 'hidd';}
                        //  if ($idsk == 116 || $idsk == 114 ) {$param = 'frezer'; $hidd = 'hidd';}
                        //           if ($idsk == 100 ) {$param = 'fuzi'; $hidd = 'hidd';}
                        //             if ($idsk == 92 || $idsk == 94 ) {$param = 'framuga'; $hidd = 'hidd';}
                        //           if ($idsk == 98 ) {$param = 'ramka'; $hidd = 'hidd';}
                        if ($idsk != 96) {
                    ?>
                            <div id="param<?php echo $idsk; ?>" data-p="<?php echo $idsk; ?>" class="user_edit_manager_all_one <?php echo $hidd; ?>">
                                <div class="user_edit_manager_all_one_top">
                                    <?php $idsk = get_the_id();
                                    echo get_the_title($idsk);
                                    ?>
                                    <div style="color: red;font-size: 13px"><?php echo $idsk; ?></div>
                                </div>
                                <div class="user_edit_manager_all_one_top_select">

                                    <div id="param<?php echo $idsk; ?>">
                                        <div data-idsk="<?php echo $idsk; ?>" data-p="0" class="none">--Выбрать значение--</div>

                                        <div class="hidd_pra">
                                            <?php foreach ($rep1 as $rep1) { ?>
                                                <div data-p="<?php echo $rep1['rep12'] ?>" data-v="<?php echo $rep1['rep11'] ?>" class="<?php echo $rep1['rep12'] ?>"><img src="<?php echo $rep1['rep13'] ?>" /><?php echo $rep1['rep11'] ?></div>
                                            <?php } ?>
                                            <div data-p="--Выбрать значение--" data-v="0">--Выбрать значение--</div>
                                        </div>
                                        <input type="hidden" id="ih<?php echo $idsk; ?>" name="value<?php echo $idsk; ?>" value="" />
                                    </div>
                                </div>

                            </div>

                    <?php }
                    endwhile;      ?>
                </div>
                <div class="sava_param">
                    <a data-form="<?php echo $uid; ?>" href="#">Сохранить результаты</a>
                </div>
            </div>
        </form>
    </div>

<?php die();
}



function create_appl_func()
{

    $uid = $_POST['uid'];
    $da_d = date('d');
    $da_m = date('m');
    $da_y = date('Y');
    $name = 'Заявка от ';
    $postdate = $da_y . '-' . $da_m . '-' . $da_d . ' 00:00:00';

    $post_data = array(
        'post_title'    =>  sanitize_text_field($name . $postdate),
        'post_type'    =>  'sales',
        'post_content'    =>  '',
        'post_status'   => 'publish',
        'post_date'     =>   $postdate,

    );


    $post_id = wp_insert_post($post_data, true);
    update_post_meta($post_id, 'p1', $uid);

    $text = $uid;

    $filename = '/var/www/vhosts/u0826554.plsk.regruhosting.ru/portamia.ru/json/' . $post_id . '.json';
    file_put_contents($filename, $text);


    die();
}

add_action('wp_ajax_sava_ajx', 'sava_ajx_f');
add_action('wp_ajax_nopriv_sava_ajx', 'sava_ajx_f');

function sava_ajx_f()
{
    $idk = $_POST['idk'];
    $jsn = $_POST['fulljs'];
    update_post_meta($idk, 'p1after', $jsn);

    die();
}




add_action('wp_ajax_sava_ajx_man', 'sava_ajx_man_f');
add_action('wp_ajax_nopriv_sava_ajx_man', 'sava_ajx_man_f');

function sava_ajx_man_f()
{
    $idk = $_POST['idk'];
    $jsn = $_POST['param'];
    update_post_meta($idk, 'p1after', $jsn);
    die();
}





add_action('wp_ajax_ftp', 'ftp_send');
add_action('wp_ajax_nopriv_ftp', 'ftp_send');

function ftp_send()
{


    $idk = $_POST['idk'];
    $uz = get_field('p1', $idk);
    $uzm = get_field('p1after', $idk);

    if ($uzm != '') {
        $snd = $uzm;
    } else {
        $snd = $uz;
    }

    $ftp_server = '80.237.77.157';
    $ftp_user_name = 'ftp_zavod';
    $ftp_user_pass = 'zmp-123654';

    $conn_id = ftp_connect($ftp_server);

    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
    if ($login_result) {
        echo 'ok';
    }
    ftp_pasv($conn_id, true);
    $text = $snd;
    $file = fopen('php://temp', 'r+');
    fwrite($file, $text);
    rewind($file);
    if (ftp_fput($conn_id, 'usb1-part1/' . $idk . '.txt', $file, FTP_ASCII)) {
        //if (ftp_put($conn_id,  '/usb1-part1/1.json', '	/var/www/vhosts/u0826554.plsk.regruhosting.ru/portamia.ru/1.json', FTP_ASCII)  ) {
        echo 'Файл создан';
    } else {
        echo 'Не удалось создать файл';
    }




    ftp_close($conn_id);


    die();
}








add_action('wp_ajax_mlsme', 'mlsmef');
add_action('wp_ajax_nopriv_mlsme', 'mlsmef');

function mlsmef () {
    $fls = $_POST['file'];
    $mls = $_POST['mls'];
$pt = '/var/www/vhosts/u0826554.plsk.regruhosting.ru/portamia.ru/pdfread/';
$et = str_replace('https://portamia.ru/pdfread/', '', $fls);
$allp = $pt.$et;
$attachments = array(WP_CONTENT_DIR . '/uploads/file_to_attach.zip');
$headers = 'From: My Name <config@portamia.ru>' . "\r\n";
wp_mail($mls, 'Файл конфигурации', 'Файл конфигурации', $headers, $allp);
    
}