<?php
function add_sticks($sticksList) {
    $sticks_dir = plugins_url('res/', __FILE__);
    $sticksList[] = array(
        'groupname' => '派蒙的画作',
        'list' => array(
            array('type' => 'sticker', 'code' => '派蒙-吃惊', 'src' => $sticks_dir . '吃惊.png'),
        )
    );
    return $sticksList;
}