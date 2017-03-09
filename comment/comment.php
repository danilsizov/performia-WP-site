<?php
/*
Plugin Name: Отзывы
Plugin URI: 
Description: Добавляйте отзывы
Version: 1.0
Author: Woxed 
Author URI: 
License: GPLv2
*/

add_action( 'init', 'create_comment' );

function create_comment() {
    register_post_type( 'comment',
        array(
            'labels' => array(
                'name' => 'Отзывы',
                'singular_name' => 'Отзывы',
                'add_new' => 'Добавить новый',
                'add_new_item' => 'Добавить новый отзыв',
                'edit' => 'Редактировать',
                'edit_item' => 'Редактировать отзыв',
                'new_item' => 'Новый отзыв',
                'view' => 'Посмотреть',
                'view_item' => 'Посмотреть отзыв',
                'search_items' => 'Найти отзыв',
                'not_found' => 'отзыв не найден',
                'not_found_in_trash' => 'отзыв не найден в мусоре',
                'parent' => 'Родительский отзыв'
            ),
            'public' => true,
            'menu_position' => 15,
            'supports' => array( '' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

add_action( 'admin_init', 'my_com_admin' );

function my_com_admin() {
    add_meta_box( 'comment_meta_box',
        'Отзыв детали',
        'display_comment_meta_box',
        'comment', 'normal', 'high'
    );

    add_meta_box( 'comment_view_meta_box',
        'Отображение на страницах',
        'display_comment_view_meta_box',
        'comment', 'normal', 'high'
    );
}


function display_comment_meta_box( $comment ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $comment_author_name = esc_html( get_post_meta( $comment->ID, 'comment_author_name', true ) );
    $comment_author_position = esc_html( get_post_meta( $comment->ID, 'comment_author_position', true ) );
    $comment_text = esc_html( get_post_meta( $comment->ID, 'comment_text', true ) );
    $comment_type = esc_html( get_post_meta( $comment->ID, 'comment_type', true ) );
    $comment_file = esc_html( get_post_meta( $comment->ID, 'comment_file', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Ф.И.О</td>
            <td><input type="text" size="180" name="comment_author_name_d" value="<?php echo $comment_author_name; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Должность</td>
            <td><input type="text" size="180" name="comment_author_position_d" value="<?php echo $comment_author_position; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Текст</td>
            <td><textarea type="text" cols="181" rows="5" name="comment_text_d" style="margin-left:1px" value="<?php echo $comment_text; ?>"></textarea>
        </tr>
        <tr>
            <td style="width: 100%">Тип медиaфайла</td>
           <td>
                <select style="width: 100px; color:black" name="comment_type_d">
                    <option value="photo">Фото</option>
                    <option value="video">Видео</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 100%">Файл</td>
            <td><input type="file" size="180" name="comment_file_d" value="<?php echo $comment_file; ?>" /></td>
        </tr>
    </table>
    <?php
}

function display_comment_view_meta_box( $comment ) {
     $comment_author_name = esc_html( get_post_meta( $comment->ID, 'comment_author_name', true ) );
    ?>
    <style>
    .text-hi{
        opacity:0.05;
        font-size: 16px;
        background: #284ecd;
        color:white;
        cursor:pointer;
        padding:2px;
    }

    .text-hi:hover{
        opacity:1;
    }
    </style>
    <table>
        <div style="height:1100px">
            <div style="width:32%; height:500px; background:#EEEEEE; float:left;">
                <p style="text-align:center; font-size:24px; margin-top:10px">Главная страница</p>
                <div style="margin-top:100px; text-align:left">
                    <ol style="font-size:16px; padding:5px;">
                        <li style="padding:5px;">Первое видео - <span id='com1'>Вася Петренко</span><span id='com1t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(1)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com2'>Андрей Гаврилович</span><span id='com2t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(2)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com3'>Паша Пьянак</span><span id='com3t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(3)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com4'>Ваня Морозов</span><span id='com4t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(4)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com5'>Андрюша Шапка</span><span id='com5t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(5)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com6'>Лена Милова</span><span id='com6t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(6)"><- Поставить сюда</span></li>
                    </ol>
                </div>
            </div>
            <div style="width:32%; margin-left:1%; height:500px; background:#EEEEEE; float:left;">
                <p style="text-align:center; font-size:24px; margin-top:10px">Главная программа</p>
                <div style="margin-top:100px; text-align:left">
                    <ol style="font-size:16px; padding:5px;">
                        <li style="padding:5px;"><span id='com7'>Вася Петренко</span><span id='com7t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(7)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com8'>Андрей Гаврилович</span><span id='com8t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(8)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com9'>Паша Пьянак</span><span id='com9t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(9)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com10'>Ваня Морозов</span><span id='com10t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(10)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com11'>Андрюша Шапка</span><span id='com11t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(11)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com12'>Лена Милова</span><span id='com12t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(12)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com101'></span><span id='com101t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(101)"><- Поставить сюда</span></li>
                    </ol>
                </div>
            </div>
            <div style="width:32%; margin-left:1%; height:500px; background:#EEEEEE; float:left;">
                <p style="text-align:center; font-size:24px; margin-top:10px">Технология</p>
                <div style="margin-top:100px; text-align:left">
                    <ol style="font-size:16px; padding:5px;">
                        <li style="padding:5px;"><span id='com13'>Вася Петренко</span><span id='com13t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(13)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com14'>Андрей Гаврилович</span><span id='com14t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(14)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com15'>Паша Пьяна</span><span id='com15t' style="display:none"><?php echo $comment_author_name; ?></span>к<span class="text-hi" onclick="chooseItPlace(15)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com16'>Ваня Морозов</span><span id='com16t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(16)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com17'>Андрюша Шапка</span><span id='com17t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(17)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com18'>Лена Милова</span><span id='com18t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(18)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com100'></span><span id='com100t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(100)"><- Поставить сюда</span></li>
                    </ol>
                </div>
            </div>
            <div style="width:44%; margin-top:30px; height:550px; background:#EEEEEE; float:left; padding:10px">
                <p style="text-align:center; font-size:24px; margin-top:10px">Первые 10 отзывов на странице "Отзывы"</p>
                <div style="margin-top:100px; text-align:left">
                    <ol style="font-size:16px; padding:5px;">
                        <li style="padding:5px;"><span id='com19'>Вася Петренко</span><span id='com19t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(19)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com20'>Андрей Гаврилович</span><span id='com20t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(20)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com21'>Паша Пьянак</span><span id='com21t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(21)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com22'>Ваня Морозов</span><span id='com22t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(22)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com23'>Андрюша Шапка</span><span id='com23t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(23)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com24'>Лена Милова</span><span id='com24t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(24)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com25'>Паша Пьянак</span><span id='com25t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(25)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com26'>Ваня Морозов</span><span id='com26t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(26)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com27'>Андрюша Шапка</span><span id='com27t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(27)"><- Поставить сюда</span></li>
                        <li style="padding:5px;"><span id='com28'>Лена Милова</span><span id='com28t' style="display:none"><?php echo $comment_author_name; ?></span><span class="text-hi" onclick="chooseItPlace(28)"><- Поставить сюда</span></li>
                    </ol>
                    <button>11-20</button>
                </div>
            </div>
        </div>
    </table>
    <script>
        var chooseItPlace = function(num){
            document.getElementById('com'+num).style.display='none';
            document.getElementById('com'+num+'t').style.display='inline';
        }
    </script>
    <?php
}


add_action( 'save_post', 'add_comment_fields', 10, 2 );

function add_comment_fields( $comment_id, $comment ) {
    // Check post type for movie reviews
    if ( $comment->post_type == 'comment' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['comment_author_name_d'] ) && $_POST['comment_author_name_d'] != '' ) {
            update_post_meta( $comment_id, 'comment_author_name', $_POST['comment_author_name_d'] );
        }
        if ( isset( $_POST['comment_author_position_d'] ) && $_POST['comment_author_position_d'] != '' ) {
            update_post_meta( $comment_id, 'comment_author_position', $_POST['comment_author_position_d'] );
        }
        if ( isset( $_POST['comment_text_d'] ) && $_POST['comment_text_d'] != '' ) {
            update_post_meta( $comment_id, 'comment_text', $_POST['comment_text_d'] );
        }
        if ( isset( $_POST['comment_type_d'] ) && $_POST['comment_type_d'] != '' ) {
            update_post_meta( $comment_id, 'comment_type', $_POST['comment_type_d'] );
        }
        if ( isset( $_POST['comment_file_d'] ) && $_POST['comment_file_d'] != '' ) {
            update_post_meta( $comment_id, 'comment_file', $_POST['comment_file_d'] );
        }
    }
}