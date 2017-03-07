<?php
/*
Plugin Name: Конгресс
Plugin URI: 
Description: Создавайте свой конгресс
Version: 1.0
Author: Woxed 
Author URI: 
License: GPLv2
*/

add_action( 'init', 'create_congress' );

function create_congress() {
    register_post_type( 'congress',
        array(
            'labels' => array(
                'name' => 'Конгресс',
                'singular_name' => 'Конгрессы',
                'add_new' => 'Добавить новый',
                'add_new_item' => 'Добавить новый конгресс',
                'edit' => 'Редактировать',
                'edit_item' => 'Редактировать конгресс',
                'new_item' => 'Новый конгресс',
                'view' => 'Посмотреть',
                'view_item' => 'Посмотреть конгресс',
                'search_items' => 'Найти конгресс',
                'not_found' => 'Конгресс не найден',
                'not_found_in_trash' => 'Конгресс не найден в мусоре',
                'parent' => 'Родительский конгресс'
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

add_action( 'admin_init', 'my_con_admin' );

function my_con_admin() {
    add_meta_box( 'congress_meta_box',
        'Конгресс детали',
        'display_congress_meta_box',
        'congress', 'normal', 'high'
    );

     add_meta_box( 'congress_author_meta_box',
        'Ведущий конгресс',
        'display_congress_author_meta_box',
        'congress', 'normal', 'high'
    );
}


function display_congress_meta_box( $congress ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $congress_price = esc_html( get_post_meta( $congress->ID, 'congress_price', true ) );
    $congress_data = esc_html( get_post_meta( $congress->ID, 'congress_data', true ) );
    $congress_time = esc_html( get_post_meta( $congress->ID, 'congress_time', true ) );
    $congress_place = esc_html( get_post_meta( $congress->ID, 'congress_place', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Цена вебинара (Прим* 250)</td>
            <td><input type="text" size="180" name="congress_price_d" value="<?php echo $congress_price; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Дата проведения (Прим* 28 окт)</td>
            <td><input type="text" size="180" name="congress_data_d" value="<?php echo $congress_data; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Время проведения (Прим* с 19 до 21)</td>
            <td><input type="text" size="180" name="congress_time_d" value="<?php echo $congress_time; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Город (Прим* Одесса)</td>
            <td><input type="text" size="180" name="congress_place_d" value="<?php echo $congress_place; ?>" /></td>
        </tr>
    </table>
    Прим* - Пример
    <?php
}

function display_congress_author_meta_box( $congress ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $congress_author_name = esc_html( get_post_meta( $congress->ID, 'congress_author_name', true ) );
    $congress_author_position = esc_html( get_post_meta( $congress->ID, 'congress_author_position', true ) );
    $congress_author_about = esc_html( get_post_meta( $congress->ID, 'congress_author_about', true ) );
    $congress_author_photo = esc_html( get_post_meta( $congress->ID, 'congress_author_photo', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Имя ведущего</td>
            <td><input type="text" size="180" name="congress_author_name_d" value="<?php echo $congress_author_name; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Должность</td>
            <td><input type="text" size="180" name="congress_author_position_d" value="<?php echo $congress_author_position; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Информация про ведущего</td>
            <td><textarea type="text" cols="181" rows="5" name="congress_author_about_d"><?php echo $congress_author_about; ?></textarea></td>
        </tr>
    </table>
    <?php
}


add_action( 'save_post', 'add_congress_fields', 10, 2 );

function add_congress_fields( $congress_id, $congress ) {
    // Check post type for movie reviews
    if ( $congress->post_type == 'congress' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['congress_price_d'] ) && $_POST['congress_price_d'] != '' ) {
            update_post_meta( $congress_id, 'congress_price', $_POST['congress_price_d'] );
        }
        if ( isset( $_POST['congress_data_d'] ) && $_POST['congress_data_d'] != '' ) {
            update_post_meta( $congress_id, 'congress_data', $_POST['congress_data_d'] );
        }
        if ( isset( $_POST['congress_place_d'] ) && $_POST['congress_place_d'] != '' ) {
            update_post_meta( $congress_id, 'congress_place', $_POST['congress_place_d'] );
        }
        if ( isset( $_POST['congress_time_d'] ) && $_POST['congress_time_d'] != '' ) {
            update_post_meta( $congress_id, 'congress_time', $_POST['congress_time_d'] );
        }
        if ( isset( $_POST['congress_author_name_d'] ) && $_POST['congress_author_name_d'] != '' ) {
            update_post_meta( $congress_id, 'congress_author_name', $_POST['congress_author_name_d'] );
        }
        if ( isset( $_POST['congress_author_position_d'] ) && $_POST['congress_author_position_d'] != '' ) {
            update_post_meta( $congress_id, 'congress_author_position', $_POST['congress_author_position_d'] );
        }
        if ( isset( $_POST['congress_author_about_d'] ) && $_POST['congress_author_about_d'] != '' ) {
            update_post_meta( $congress_id, 'congress_author_about', $_POST['congress_author_about_d'] );
        }
        if ( isset( $_POST['congress_author_photo_d'] ) && $_POST['congress_author_photo_d'] != '' ) {
            update_post_meta( $congress_id, 'author_photo', $_POST['congress_author_photo_d'] );
        }

    }
}
?>