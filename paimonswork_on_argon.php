<?php
/**
 * Plugin Name: paimon's work
 * Plugin URI:  https://github.com/ChiyukiRuon/paimon_sticker_on_argon
 * Text Domain: paimon_stickers_on_agron
 * Description: 图源 米游社
 * Version:     1.0
 * Author:      ChiyukiRUon
 * Author URI:  https://chiyukiruon.top
 */
function add_stickers($sticksList) {
    $sticks_dir = plugins_url('res/', __FILE__);
    $sticksList[] = array(
        'groupname' => '派蒙的画作',
        'list' => array(
            array('type' => 'sticker', 'code' => '派蒙-吃惊', 'src' => $sticks_dir . '吃惊.png'),
        )
    );
    return $sticksList;
}


add_filter('argon_emotion_list' , 'add_stickers');