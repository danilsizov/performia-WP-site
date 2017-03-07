<?php
/*
Plugin Name: Мероприятие ы
Plugin URI: 
Description: Создавайте свои Мероприятие ы
Version: 1.0
Author: Сизов Данил
Author URI: 
License: GPLv2
*/

add_action( 'init', 'create_events' );

function create_events() {
    register_post_type( 'events',
        array(
            'labels' => array(
                'name' => 'Мероприятие ы',
                'singular_name' => 'Мероприятие ы',
                'add_new' => 'Добавить новый',
                'add_new_item' => 'Добавить новый Мероприятие ',
                'edit' => 'Редактировать',
                'edit_item' => 'Редактировать Мероприятие ',
                'new_item' => 'Новый Мероприятие ',
                'view' => 'Посмотреть',
                'view_item' => 'Посмотреть Мероприятие ',
                'search_items' => 'Найти Мероприятие ',
                'not_found' => 'Мероприятие  не найден',
                'not_found_in_trash' => 'Мероприятие  не найден в мусоре',
                'parent' => 'Родительский Мероприятие '
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

add_action( 'admin_init', 'my_event_admin' );

function my_event_admin() {
    add_meta_box( 'events_meta_box',
        'Ближайшая встреча',
        'display_events_meta_box',
        'events', 'normal', 'high'
    );
}


function display_events_meta_box( $events ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $events_price = esc_html( get_post_meta( $events->ID, 'events_price', true ) );
    $events_data = esc_html( get_post_meta( $events->ID, 'events_data', true ) );
    $events_time = esc_html( get_post_meta( $events->ID, 'events_time', true ) );
    $events_city = esc_html( get_post_meta( $events->ID, 'events_city', true ) );
    $events_tittle = esc_html( get_post_meta( $events->ID, 'events_tittle', true ) );
    $events_about = esc_html( get_post_meta( $events->ID, 'events_about', true ) );
    $events_link = esc_html( get_post_meta( $events->ID, 'events_link', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Цена Мероприятия</td>
            <td><input type="text" size="180" name="events_price_name" value="<?php echo $events_price; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Дата проведения (Прим* 28 окт)</td>
            <td><input type="text" size="180" name="events_data_name" value="<?php echo $events_data; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Время проведения (Прим* с 19 до 21)</td>
            <td><input type="text" size="180" name="events_time_name" value="<?php echo $events_time; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Место проведения (Прим* Одесса)</td>
            <td><input type="text" size="180" name="events_city_name" value="<?php echo $events_city; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Название мероприятия</td>
            <td><input type="text" size="180" name="events_tittle_name" value="<?php echo $events_tittle; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Описание</td>
            <td><input type="text" size="180" name="events_about_name" value="<?php echo $events_about; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Ссылка на событие в Фейсбук</td>
            <td><input type="text" size="180" name="events_link_name" value="<?php echo $events_link; ?>" /></td>
        </tr>
    </table>
    Прим* - Пример
    <?php
}


add_action( 'save_post', 'add_events_fields', 10, 2 );

function add_events_fields( $events_id, $events ) {
    // Check post type for movie reviews
    if ( $events->post_type == 'events' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['events_price_name'] ) && $_POST['events_price_name'] != '' ) {
            update_post_meta( $events_id, 'events_price', $_POST['events_price_name'] );
        }
        if ( isset( $_POST['events_data_name'] ) && $_POST['events_data_name'] != '' ) {
            update_post_meta( $events_id, 'events_data', $_POST['events_data_name'] );
        }
        if ( isset( $_POST['events_time_name'] ) && $_POST['events_time_name'] != '' ) {
            update_post_meta( $events_id, 'events_time', $_POST['events_time_name'] );
        }
        if ( isset( $_POST['events_city_name'] ) && $_POST['events_city_name'] != '' ) {
            update_post_meta( $events_id, 'events_city', $_POST['events_city_name'] );
        }
        if ( isset( $_POST['events_tittle_name'] ) && $_POST['events_tittle_name'] != '' ) {
            update_post_meta( $events_id, 'events_tittle', $_POST['events_tittle_name'] );
        }
        if ( isset( $_POST['events_about_name'] ) && $_POST['events_about_name'] != '' ) {
            update_post_meta( $events_id, 'events_about', $_POST['events_about_name'] );
        }
        if ( isset( $_POST['events_link_name'] ) && $_POST['events_link_name'] != '' ) {
            update_post_meta( $events_id, 'events_link', $_POST['events_link_name'] );
        }
    }
}
?>