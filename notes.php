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