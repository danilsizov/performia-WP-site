<?php
/*
Plugin Name: Главная Программа
Plugin URI: 
Description: Редактировать Главную Программу
Version: 1.0
Author: Woxed 
Author URI: 
License: GPLv2
*/

add_action( 'init', 'create_main_programm' );

function create_main_programm() {
    register_post_type( 'main_programm',
        array(
            'labels' => array(
                'name' => 'Главная Программа',
                'singular_name' => 'Главная Программа',
                'add_new' => 'Добавить новый',
                'add_new_item' => 'Добавить новую Главную Программу',
                'edit' => 'Редактировать',
                'edit_item' => 'Редактировать Главную Программу',
                'new_item' => 'Новая Главная Программа',
                'view' => 'Посмотреть',
                'view_item' => 'Посмотреть Главную Программу',
                'search_items' => 'Найти Главную Программу',
                'not_found' => 'Главная Программа не найдена',
                'not_found_in_trash' => 'Главная Программа не найдена в мусоре',
                'parent' => 'Родительская Главная Программа'
            ),
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

add_action( 'admin_init', 'my_main_admin' );

function my_main_admin() {
    add_meta_box( 'main_programm_meta_box',
        'Главная Программа детали',
        'display_main_programm_meta_box',
        'main_programm', 'normal', 'high'
    );

     add_meta_box( 'main_programm_author_meta_box',
        'Ведущий Главная Программа',
        'display_main_programm_author_meta_box',
        'main_programm', 'normal', 'high'
    );

    add_meta_box( 'main_programm_block_1_meta_box',
        'Блок 1',
        'display_main_programm_block_1_meta_box',
        'main_programm', 'normal', 'high'
    );

    add_meta_box( 'main_programm_block_2_meta_box',
        'Блок 2',
        'display_main_programm_block_2_meta_box',
        'main_programm', 'normal', 'high'
    );

    add_meta_box( 'main_programm_block_3_meta_box',
        'Блок 3',
        'display_main_programm_block_3_meta_box',
        'main_programm', 'normal', 'high'
    );
}


function display_main_programm_block_1_meta_box( $main_programm ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $main_programm_li_1_1 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_1_1', true ) );
    $main_programm_li_1_2 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_1_2', true ) );
    $main_programm_li_1_3 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_1_3', true ) );
    $main_programm_li_1_4 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_1_4', true ) );
    $main_programm_li_1_5 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_1_5', true ) );
    $main_programm_li_1_6 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_1_6', true ) );
    $main_programm_li_1_7 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_1_7', true ) );
    $main_programm_li_1_8 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_1_8', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_1_1_d" value="<?php echo $main_programm_li_1_1; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_1_2_d" value="<?php echo $main_programm_li_1_2; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_1_3_d" value="<?php echo $main_programm_li_1_3; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_1_4_d" value="<?php echo $main_programm_li_1_4; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_1_5_d" value="<?php echo $main_programm_li_1_5; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_1_6_d" value="<?php echo $main_programm_li_1_6; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_1_7_d" value="<?php echo $main_programm_li_1_7; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_1_8_d" value="<?php echo $main_programm_li_1_8; ?>" /></td>
        </tr>
    </table>
    <?php
}

function display_main_programm_block_2_meta_box( $main_programm ) {
    $main_programm_li_2_1 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_2_1', true ) );
    $main_programm_li_2_2 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_2_2', true ) );
    $main_programm_li_2_3 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_2_3', true ) );
    $main_programm_li_2_4 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_2_4', true ) );
    $main_programm_li_2_5 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_2_5', true ) );
    $main_programm_li_2_6 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_2_6', true ) );
    $main_programm_li_2_7 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_2_7', true ) );
    $main_programm_li_2_8 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_2_8', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_2_1_d" value="<?php echo $main_programm_li_1_1; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_2_2_d" value="<?php echo $main_programm_li_1_2; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_2_3_d" value="<?php echo $main_programm_li_1_3; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_2_4_d" value="<?php echo $main_programm_li_1_4; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_2_5_d" value="<?php echo $main_programm_li_1_5; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_2_6_d" value="<?php echo $main_programm_li_1_6; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_2_7_d" value="<?php echo $main_programm_li_1_7; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_2_8_d" value="<?php echo $main_programm_li_1_8; ?>" /></td>
        </tr>
    </table>
    <?php
}

function display_main_programm_block_3_meta_box( $main_programm ) {
    $main_programm_li_3_1 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_3_1', true ) );
    $main_programm_li_3_2 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_3_2', true ) );
    $main_programm_li_3_3 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_3_3', true ) );
    $main_programm_li_3_4 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_3_4', true ) );
    $main_programm_li_3_5 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_3_5', true ) );
    $main_programm_li_3_6 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_3_6', true ) );
    $main_programm_li_3_7 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_3_7', true ) );
    $main_programm_li_3_8 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_li_3_8', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_3_1_d" value="<?php echo $main_programm_li_1_1; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_3_2_d" value="<?php echo $main_programm_li_1_2; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_3_3_d" value="<?php echo $main_programm_li_1_3; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_3_4_d" value="<?php echo $main_programm_li_1_4; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_3_5_d" value="<?php echo $main_programm_li_1_5; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_3_6_d" value="<?php echo $main_programm_li_1_6; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_3_7_d" value="<?php echo $main_programm_li_1_7; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Пункт программы</td>
            <td><input type="text" size="180" name="main_programm_li_3_8_d" value="<?php echo $main_programm_li_1_8; ?>" /></td>
        </tr>
    </table>
    <?php
}

function display_main_programm_meta_box( $main_programm ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $main_programm_price_block_1 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_1', true ) );
    $main_programm_price_block_1_quetion = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_1_quetion', true ) );
    $main_programm_time_block_1 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_time_block_1', true ) );


    $main_programm_price_block_2 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_2', true ) );
    $main_programm_price_block_2_quetion = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_2_quetion', true ) );
    $main_programm_time_block_2 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_time_block_2', true ) );


    $main_programm_price_block_3 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_3', true ) );
    $main_programm_price_block_3_quetion = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_3_quetion', true ) );
    $main_programm_time_block_3 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_time_block_3', true ) );


    $main_programm_price_block_1_2 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_1_2', true ) );
    $main_programm_price_block_1_2_quetion = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_1_2_quetion', true ) );
    $main_programm_time_block_1_2 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_time_block_1_2', true ) );
    $main_programm_economy_block_1_2 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_economy_block_1_2', true ) );


    $main_programm_price_block_1_2_3 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_1_2_3', true ) );
    $main_programm_price_block_1_2_3_quetion = esc_html( get_post_meta( $main_programm->ID, 'main_programm_price_block_1_2_3_quetion', true ) );
    $main_programm_time_block_1_2_3 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_time_block_1_2_3', true ) );
    $main_programm_economy_block_1_2_3 = esc_html( get_post_meta( $main_programm->ID, 'main_programm_economy_block_1_2_3', true ) );


    $main_programm_data = esc_html( get_post_meta( $main_programm->ID, 'main_programm_data', true ) );
    $main_programm_time = esc_html( get_post_meta( $main_programm->ID, 'main_programm_time', true ) );
    $main_programm_place = esc_html( get_post_meta( $main_programm->ID, 'main_programm_place', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Цена Блок 1</td>
            <td><input type="text" size="180" name="main_programm_price_block_1_d" value="<?php echo $main_programm_price_block_1; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Цена Блок 1 (с вопросиком)</td>
            <td><input type="text" size="180" name="main_programm_price_block_1_quetion_d" value="<?php echo $main_programm_price_block_1_quetion; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Блок 1 Длительность</td>
            <td><input type="text" size="180" name="main_programm_time_block_1_d" value="<?php echo $main_programm_time_block_1; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Цена Блок 2</td>
            <td><input type="text" size="180" name="main_programm_price_block_2_d" value="<?php echo $main_programm_price_block_2; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Цена Блок 2 (с вопросиком)</td>
            <td><input type="text" size="180" name="main_programm_price_block_2_quetion_d" value="<?php echo $main_programm_price_block_2_quetion; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Блок 2 Длительность</td>
            <td><input type="text" size="180" name="main_programm_time_block_2_d" value="<?php echo $main_programm_time_block_2; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Цена Блок 3</td>
            <td><input type="text" size="180" name="main_programm_price_block_3_d" value="<?php echo $main_programm_price_block_3; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Цена Блок 3 (с вопросиком)</td>
            <td><input type="text" size="180" name="main_programm_price_block_3_quetion_d" value="<?php echo $main_programm_price_block_3_quetion; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Блок 3 Длительность</td>
            <td><input type="text" size="180" name="main_programm_time_block_3_d" value="<?php echo $main_programm_time_block_3; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Цена Блок 1 и 2</td>
            <td><input type="text" size="180" name="main_programm_price_block_1_2_d" value="<?php echo $main_programm_price_block_1_2; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Цена Блок 1 и 2 (с вопросиком)</td>
            <td><input type="text" size="180" name="main_programm_price_block_1_2_quetion_d" value="<?php echo $main_programm_price_block_1_2_quetion; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Блок 1 и 2 Длительность</td>
            <td><input type="text" size="180" name="main_programm_time_block_1_2_d" value="<?php echo $main_programm_time_block_1_2; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Блок 1 и 2 Экономия </td>
            <td><input type="text" size="180" name="main_programm_economy_block_1_2_d" value="<?php echo $main_programm_economy_block_1_2; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Цена Блок 1, 2, 3</td>
            <td><input type="text" size="180" name="main_programm_price_block_1_2_3_d" value="<?php echo $main_programm_price_block_1_2_3; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Цена Блок 1, 2, 3 (с вопросиком)</td>
            <td><input type="text" size="180" name="main_programm_price_block_1_2_3_quetion_d" value="<?php echo $main_programm_price_block_1_2_3_quetion; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Блок 1, 2, 3 Длительность</td>
            <td><input type="text" size="180" name="main_programm_time_block_1_2_3_d" value="<?php echo $main_programm_time_block_1_2_3; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Блок 1, 2, 3 Экономия </td>
            <td><input type="text" size="180" name="main_programm_economy_block_1_2_3_d" value="<?php echo $main_programm_economy_block_1_2_3; ?>" /></td>
        </tr>
    </table>
    Прим* - Пример
    <?php
}

function display_main_programm_author_meta_box( $main_programm ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $main_programm_author_name = esc_html( get_post_meta( $main_programm->ID, 'main_programm_author_name', true ) );
    $main_programm_author_position = esc_html( get_post_meta( $main_programm->ID, 'main_programm_author_position', true ) );
    $main_programm_author_about = esc_html( get_post_meta( $main_programm->ID, 'main_programm_author_about', true ) );
    $main_programm_author_photo = esc_html( get_post_meta( $main_programm->ID, 'main_programm_author_photo', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Имя ведущего</td>
            <td><input type="text" size="180" name="main_programm_author_name_d" value="<?php echo $main_programm_author_name; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Должность</td>
            <td><input type="text" size="180" name="main_programm_author_position_d" value="<?php echo $main_programm_author_position; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Информация про ведущего</td>
            <td><textarea type="text" cols="181" rows="5" name="main_programm_author_about_d"><?php echo $main_programm_author_about; ?></textarea></td>
        </tr>
    </table>
    <?php
}


add_action( 'save_post', 'add_main_programm_fields', 10, 2 );

function add_main_programm_fields( $main_programm_id, $main_programm ) {
    // Check post type for movie reviews
    if ( $main_programm->post_type == 'main_programm' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['main_programm_price_block_1_d'] ) && $_POST['main_programm_price_block_1_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_1', $_POST['main_programm_price_block_1_d'] );
        }
        if ( isset( $_POST['main_programm_price_block_1_quetion_d'] ) && $_POST['main_programm_price_block_1_quetion_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_1_quetion', $_POST['main_programm_price_block_1_quetion_d'] );
        }
        if ( isset( $_POST['main_programm_time_block_1_d'] ) && $_POST['main_programm_time_block_1_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_time_block_1', $_POST['main_programm_time_block_1_d'] );
        }


        if ( isset( $_POST['main_programm_price_block_2_d'] ) && $_POST['main_programm_price_block_2_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_2', $_POST['main_programm_price_block_2_d'] );
        }
        if ( isset( $_POST['main_programm_price_block_2_quetion_d'] ) && $_POST['main_programm_price_block_2_quetion_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_2_quetion', $_POST['main_programm_price_block_2_quetion_d'] );
        }
        if ( isset( $_POST['main_programm_time_block_2_d'] ) && $_POST['main_programm_time_block_2_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_time_block_2', $_POST['main_programm_time_block_2_d'] );
        }


        if ( isset( $_POST['main_programm_price_block_3_d'] ) && $_POST['main_programm_price_block_3_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_3', $_POST['main_programm_price_block_3_d'] );
        }
        if ( isset( $_POST['main_programm_price_block_3_quetion_d'] ) && $_POST['main_programm_price_block_3_quetion_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_3_quetion', $_POST['main_programm_price_block_3_quetion_d'] );
        }
        if ( isset( $_POST['main_programm_time_block_3_d'] ) && $_POST['main_programm_time_block_3_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_time_block_3', $_POST['main_programm_time_block_3_d'] );
        }


        if ( isset( $_POST['main_programm_price_block_1_2_d'] ) && $_POST['main_programm_price_block_1_2_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_1_2', $_POST['main_programm_price_block_1_2_d'] );
        }
        if ( isset( $_POST['main_programm_price_block_1_2_quetion_d'] ) && $_POST['main_programm_price_block_1_2_quetion_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_1_2_quetion', $_POST['main_programm_price_block_1_2_quetion_d'] );
        }
        if ( isset( $_POST['main_programm_time_block_1_2_d'] ) && $_POST['main_programm_time_block_1_2_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_time_block_1_2', $_POST['main_programm_time_block_1_2_d'] );
        }
        if ( isset( $_POST['main_programm_economy_block_1_2_d'] ) && $_POST['main_programm_economy_block_1_2_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_economy_block_1_2', $_POST['main_programm_economy_block_1_2_d'] );
        }


        if ( isset( $_POST['main_programm_price_block_1_2_3_d'] ) && $_POST['main_programm_price_block_1_2_3_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_1_2_3', $_POST['main_programm_price_block_1_2_3_d'] );
        }
        if ( isset( $_POST['main_programm_price_block_1_2_3_quetion_d'] ) && $_POST['main_programm_price_block_1_2_3_quetion_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_price_block_1_2_3_quetion', $_POST['main_programm_price_block_1_2_3_quetion_d'] );
        }
        if ( isset( $_POST['main_programm_time_block_1_2_3_d'] ) && $_POST['main_programm_time_block_1_2_3_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_time_block_1_2_3', $_POST['main_programm_time_block_1_2_3_d'] );
        }
        if ( isset( $_POST['main_programm_economy_block_1_2_3_d'] ) && $_POST['main_programm_economy_block_1_2_3_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_economy_block_1_2_3', $_POST['main_programm_economy_block_1_2_3_d'] );
        }


        if ( isset( $_POST['main_programm_li_3_1_d'] ) && $_POST['main_programm_li_3_1_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_3_1', $_POST['main_programm_li_3_1_d'] );
        }
        if ( isset( $_POST['main_programm_li_3_2_d'] ) && $_POST['main_programm_li_3_2_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_3_2', $_POST['main_programm_li_3_2_d'] );
        }
        if ( isset( $_POST['main_programm_li_3_3_d'] ) && $_POST['main_programm_li_3_3_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_3_3', $_POST['main_programm_li_3_3_d'] );
        }
        if ( isset( $_POST['main_programm_li_3_4_d'] ) && $_POST['main_programm_li_3_4_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_3_4', $_POST['main_programm_li_3_4_d'] );
        }
        if ( isset( $_POST['main_programm_li_3_5_d'] ) && $_POST['main_programm_li_3_5_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_3_5', $_POST['main_programm_li_3_5_d'] );
        }
        if ( isset( $_POST['main_programm_li_3_6_d'] ) && $_POST['main_programm_li_3_6_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_3_6', $_POST['main_programm_li_3_6_d'] );
        }
        if ( isset( $_POST['main_programm_li_3_7_d'] ) && $_POST['main_programm_li_3_7_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_3_7', $_POST['main_programm_li_3_7_d'] );
        }
        if ( isset( $_POST['main_programm_li_3_8_d'] ) && $_POST['main_programm_li_3_8_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_3_8', $_POST['main_programm_li_3_8_d'] );
        }


        if ( isset( $_POST['main_programm_li_2_1_d'] ) && $_POST['main_programm_li_2_1_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_2_1', $_POST['main_programm_li_2_1_d'] );
        }
        if ( isset( $_POST['main_programm_li_2_2_d'] ) && $_POST['main_programm_li_2_2_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_2_2', $_POST['main_programm_li_2_2_d'] );
        }
        if ( isset( $_POST['main_programm_li_2_3_d'] ) && $_POST['main_programm_li_2_3_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_2_3', $_POST['main_programm_li_2_3_d'] );
        }
        if ( isset( $_POST['main_programm_li_2_4_d'] ) && $_POST['main_programm_li_2_4_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_2_4', $_POST['main_programm_li_2_4_d'] );
        }
        if ( isset( $_POST['main_programm_li_2_5_d'] ) && $_POST['main_programm_li_2_5_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_2_5', $_POST['main_programm_li_2_5_d'] );
        }
        if ( isset( $_POST['main_programm_li_2_6_d'] ) && $_POST['main_programm_li_2_6_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_2_6', $_POST['main_programm_li_2_6_d'] );
        }
        if ( isset( $_POST['main_programm_li_2_7_d'] ) && $_POST['main_programm_li_2_7_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_2_7', $_POST['main_programm_li_2_7_d'] );
        }
        if ( isset( $_POST['main_programm_li_2_8_d'] ) && $_POST['main_programm_li_2_8_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_2_8', $_POST['main_programm_li_2_8_d'] );
        }


        if ( isset( $_POST['main_programm_li_1_1_d'] ) && $_POST['main_programm_li_1_1_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_1_1', $_POST['main_programm_li_1_1_d'] );
        }
        if ( isset( $_POST['main_programm_li_1_2_d'] ) && $_POST['main_programm_li_1_2_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_1_2', $_POST['main_programm_li_1_2_d'] );
        }
        if ( isset( $_POST['main_programm_li_1_3_d'] ) && $_POST['main_programm_li_1_3_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_1_3', $_POST['main_programm_li_1_3_d'] );
        }
        if ( isset( $_POST['main_programm_li_1_4_d'] ) && $_POST['main_programm_li_1_4_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_1_4', $_POST['main_programm_li_1_4_d'] );
        }
        if ( isset( $_POST['main_programm_li_1_5_d'] ) && $_POST['main_programm_li_1_5_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_1_5', $_POST['main_programm_li_1_5_d'] );
        }
        if ( isset( $_POST['main_programm_li_1_6_d'] ) && $_POST['main_programm_li_1_6_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_1_6', $_POST['main_programm_li_1_6_d'] );
        }
        if ( isset( $_POST['main_programm_li_1_7_d'] ) && $_POST['main_programm_li_1_7_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_1_7', $_POST['main_programm_li_1_7_d'] );
        }
        if ( isset( $_POST['main_programm_li_1_8_d'] ) && $_POST['main_programm_li_1_8_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_li_1_8', $_POST['main_programm_li_1_8_d'] );
        }


        if ( isset( $_POST['main_programm_data_d'] ) && $_POST['main_programm_data_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_data', $_POST['main_programm_data_d'] );
        }
        if ( isset( $_POST['main_programm_place_d'] ) && $_POST['main_programm_place_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_place', $_POST['main_programm_place_d'] );
        }
        if ( isset( $_POST['main_programm_time_d'] ) && $_POST['main_programm_time_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_time', $_POST['main_programm_time_d'] );
        }
        if ( isset( $_POST['main_programm_author_name_d'] ) && $_POST['main_programm_author_name_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_author_name', $_POST['main_programm_author_name_d'] );
        }
        if ( isset( $_POST['main_programm_author_position_d'] ) && $_POST['main_programm_author_position_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_author_position', $_POST['main_programm_author_position_d'] );
        }
        if ( isset( $_POST['main_programm_author_about_d'] ) && $_POST['main_programm_author_about_d'] != '' ) {
            update_post_meta( $main_programm_id, 'main_programm_author_about', $_POST['main_programm_author_about_d'] );
        }
        if ( isset( $_POST['main_programm_author_photo_d'] ) && $_POST['main_programm_author_photo_d'] != '' ) {
            update_post_meta( $main_programm_id, 'author_photo', $_POST['main_programm_author_photo_d'] );
        }

    }
}
?>