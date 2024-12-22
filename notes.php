Пути картинок
<?php echo get_template_directory_uri() ?>/img/

Вывод обычного поля
<?php the_field('field') ?>


Вывод изображений с URL и ALT
<?php echo get_field('header_logo')['url'] ?>

<?php echo get_field('header_logo')['alt'] ?>


Вывод для кнопки
<?php echo get_field('hero_btn')['url'] ?>
<?php echo get_field('hero_btn')['title'] ?>

Повторитель
<?php
if (have_rows('repeater_field_name')):
    while (have_rows('repeater_field_name')) : the_row(); ?>

        <?php the_sub_field('sub_field'); ?>

<?php endwhile;
else :
    echo 'Ошибка: поля не найдены';
endif;
?>

Создание страницы настроек
<?php
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'Основные настройки',
        'menu_title'    => 'Настройки темы',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Настройки шапки',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Настройки подвала',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
} ?>

Регистрация меню
<?php
register_nav_menus(array(
    'header'    => 'Header',    //Название месторасположения меню в шаблоне
    'footer' => 'Footer'      //Название другого месторасположения меню в шаблоне
)); ?>

Вывод меню
<?php
wp_nav_menu(array(
    'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
    // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
    'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
    'container_class' => '',              // (string) class контейнера (div тега)
    'container_id'    => '',              // (string) id контейнера (div тега)
    'menu_class'      => 'menu',          // (string) class самого меню (ul тега)
    'menu_id'         => '',              // (string) id самого меню (ul тега)
    'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
    'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
    'before'          => '',              // (string) Текст перед <a> каждой ссылки
    'after'           => '',              // (string) Текст после </a> каждой ссылки
    'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
    'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
    'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
    'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
    'theme_location'  => ''               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
)); ?>