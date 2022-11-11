<?php
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