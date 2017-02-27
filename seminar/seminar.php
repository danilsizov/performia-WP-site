<?php
/*
Plugin Name: Семинары
Plugin URI: 
Description: Создавайте свои семинары
Version: 1.0
Author: Woxed 
Author URI: 
License: GPLv2
*/

add_action( 'init', 'create_seminar' );

function create_seminar() {
    register_post_type( 'seminar',
        array(
            'labels' => array(
                'name' => 'Семинары',
                'singular_name' => 'Семинары',
                'add_new' => 'Добавить новый',
                'add_new_item' => 'Добавить новый семинар',
                'edit' => 'Редактировать',
                'edit_item' => 'Редактировать семинар',
                'new_item' => 'Новый семинар',
                'view' => 'Посмотреть',
                'view_item' => 'Посмотреть семинар',
                'search_items' => 'Найти семинар',
                'not_found' => 'Семинар не найден',
                'not_found_in_trash' => 'Семинар не найден в мусоре',
                'parent' => 'Родительский семинар'
            ),
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor'),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

add_action( 'admin_init', 'my_sem_admin' );

function my_sem_admin() {
    add_meta_box( 'seminar_meta_box',
        'Семинар детали',
        'display_seminar_meta_box',
        'seminar', 'normal', 'high'
    );

     add_meta_box( 'seminar_author_meta_box',
        'Ведущий семинара',
        'display_seminar_author_meta_box',
        'seminar', 'normal', 'high'
    );
}


function display_seminar_meta_box( $seminar ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $seminar_price = esc_html( get_post_meta( $seminar->ID, 'seminar_price', true ) );
    $seminar_data = esc_html( get_post_meta( $seminar->ID, 'seminar_data', true ) );
    $seminar_time = esc_html( get_post_meta( $seminar->ID, 'seminar_time', true ) );
    $seminar_place = esc_html( get_post_meta( $seminar->ID, 'seminar_place', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Цена вебинара (Прим* 250)</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $seminar_price; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Дата проведения (Прим* 28 окт)</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $seminar_data; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Время проведения (Прим* с 19 до 21)</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $seminar_time; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Город (Прим* Одесса)</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $seminar_place; ?>" /></td>
        </tr>
    </table>
    Прим* - Пример
    <?php
}

function display_seminar_author_meta_box( $seminar ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $seminar_author_name = esc_html( get_post_meta( $seminar->ID, 'seminar_author_name', true ) );
    $seminar_author_position = esc_html( get_post_meta( $seminar->ID, 'seminar_author_position', true ) );
    $seminar_author_about = esc_html( get_post_meta( $seminar->ID, 'seminar_author_about', true ) );
    $seminar_author_photo = esc_html( get_post_meta( $seminar->ID, 'seminar_author_photo', true ) );
    ?>
    <table>
    	<tr>
            <td style="width: 100%">Фото ведущего</td>
            <td><input type="file" size="180" name="movie_review_director_name" value="<?php echo $seminar_author_photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Имя ведущего</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $seminar_author_name; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Должность</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $seminar_author_position; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Информация про ведущего</td>
            <td><textarea type="text" cols="181" rows="5" name="movie_review_director_name" value="<?php echo $seminar_author_about; ?>"></textarea></td>
        </tr>
    </table>
    <?php
}


add_action( 'save_post', 'add_seminar_fields', 10, 2 );

function add_seminar_fields( $seminar_id, $seminar ) {
    // Check post type for movie reviews
    if ( $seminar->post_type == 'seminar' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['seminar_price_name'] ) && $_POST['seminar_price_name'] != '' ) {
            update_post_meta( $semainar_id, 'seminar_price', $_POST['seminar_price_name'] );
        }
        if ( isset( $_POST['seminar_data_name'] ) && $_POST['seminar_data_name'] != '' ) {
            update_post_meta( $semainar_id, 'seminar_data', $_POST['seminar_data_name'] );
        }
        if ( isset( $_POST['seminar_time_name'] ) && $_POST['seminar_time_name'] != '' ) {
            update_post_meta( $semainar_id, 'seminar_time', $_POST['seminar_time_name'] );
        }
        if ( isset( $_POST['seminar_author_name'] ) && $_POST['seminar_author_name'] != '' ) {
            update_post_meta( $semainar_id, 'author_name', $_POST['seminar_author_name'] );
        }
        if ( isset( $_POST['seminar_author_position'] ) && $_POST['seminar_author_position'] != '' ) {
            update_post_meta( $semainar_id, 'author_position', $_POST['seminar_author_position'] );
        }
        if ( isset( $_POST['seminar_author_about'] ) && $_POST['seminar_author_about'] != '' ) {
            update_post_meta( $semainar_id, 'author_about', $_POST['seminar_author_about'] );
        }
        if ( isset( $_POST['seminar_author_photo'] ) && $_POST['seminar_author_photo'] != '' ) {
            update_post_meta( $semainar_id, 'author_photo', $_POST['seminar_author_photo'] );
        }

    }
}
?>