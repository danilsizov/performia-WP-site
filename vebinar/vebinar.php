<?php
/*
Plugin Name: Вебинары
Plugin URI: 
Description: Создавайте свои вебинары
Version: 1.0
Author: Сизов Данил
Author URI: 
License: GPLv2
*/

add_action( 'init', 'create_vebinar' );

function create_vebinar() {
    register_post_type( 'vebinar',
        array(
            'labels' => array(
                'name' => 'Вебинары',
                'singular_name' => 'Вебинары',
                'add_new' => 'Добавить новый',
                'add_new_item' => 'Добавить новый вебинар',
                'edit' => 'Редактировать',
                'edit_item' => 'Редактировать вебинар',
                'new_item' => 'Новый вебинар',
                'view' => 'Посмотреть',
                'view_item' => 'Посмотреть вебинар',
                'search_items' => 'Найти вебинар',
                'not_found' => 'Вебинар не найден',
                'not_found_in_trash' => 'Вебинар не найден в мусоре',
                'parent' => 'Родительский вебинар'
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

add_action( 'admin_init', 'my_admin' );

function my_admin() {
    add_meta_box( 'vebinar_meta_box',
        'Вебинар детали',
        'display_vebinar_meta_box',
        'vebinar', 'normal', 'high'
    );

     add_meta_box( 'author_meta_box',
        'Ведущий вебинара',
        'display_author_meta_box',
        'vebinar', 'normal', 'high'
    );
}


function display_vebinar_meta_box( $vebinar ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $vebinar_price = esc_html( get_post_meta( $vebinar->ID, 'vebinar_price', true ) );
    $vebinar_data = esc_html( get_post_meta( $vebinar->ID, 'vebinar_data', true ) );
    $vebinar_time = esc_html( get_post_meta( $vebinar->ID, 'vebinar_time', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Цена вебинара (Прим* 250)</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $vebinar_price; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Дата проведения (Прим* 28 окт)</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $vebinar_data; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Время проведения (Прим* с 19 до 21)</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $vebinar_time; ?>" /></td>
        </tr>
    </table>
    Прим* - Пример
    <?php
}

function display_author_meta_box( $vebinar ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $author_name = esc_html( get_post_meta( $vebinar->ID, 'vebinar_price', true ) );
    $author_position = esc_html( get_post_meta( $vebinar->ID, 'vebinar_data', true ) );
    $author_about = esc_html( get_post_meta( $vebinar->ID, 'vebinar_time', true ) );
    $author_photo = esc_html( get_post_meta( $vebinar->ID, 'vebinar_time', true ) );
    ?>
    <table>
    	<tr>
            <td style="width: 100%">Фото ведущего</td>
            <td><input type="file" size="180" name="movie_review_director_name" value="<?php echo $author_photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Имя ведущего</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $author_name; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Должность</td>
            <td><input type="text" size="180" name="movie_review_director_name" value="<?php echo $author_position; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Информация про ведущего</td>
            <td><textarea type="text" cols="181" rows="5" name="movie_review_director_name" value="<?php echo $author_about; ?>"></textarea></td>
        </tr>
    </table>
    <?php
}


add_action( 'save_post', 'add_vebinar_fields', 10, 2 );

function add_vebinar_fields( $vebinar_id, $vebinar ) {
    // Check post type for movie reviews
    if ( $vebinar->post_type == 'vebinar' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['vebinar_price_name'] ) && $_POST['vebinar_price_name'] != '' ) {
            update_post_meta( $movie_review_id, 'vebinar_price', $_POST['vebinar_price_name'] );
        }
        if ( isset( $_POST['vebinar_data_name'] ) && $_POST['vebinar_data_name'] != '' ) {
            update_post_meta( $movie_review_id, 'vebinar_data', $_POST['vebinar_data_name'] );
        }
        if ( isset( $_POST['vebinar_time_name'] ) && $_POST['vebinar_time_name'] != '' ) {
            update_post_meta( $movie_review_id, 'vebinar_time', $_POST['vebinar_time_name'] );
        }
        if ( isset( $_POST['vebinar_author_name'] ) && $_POST['vebinar_author_name'] != '' ) {
            update_post_meta( $movie_review_id, 'author_name', $_POST['vebinar_author_name'] );
        }
        if ( isset( $_POST['vebinar_author_position'] ) && $_POST['vebinar_author_position'] != '' ) {
            update_post_meta( $movie_review_id, 'author_position', $_POST['vebinar_author_position'] );
        }
        if ( isset( $_POST['vebinar_author_about'] ) && $_POST['vebinar_author_about'] != '' ) {
            update_post_meta( $movie_review_id, 'author_about', $_POST['vebinar_author_about'] );
        }
        if ( isset( $_POST['vebinar_author_photo'] ) && $_POST['vebinar_author_photo'] != '' ) {
            update_post_meta( $movie_review_id, 'author_photo', $_POST['vebinar_author_photo'] );
        }

    }
}
?>