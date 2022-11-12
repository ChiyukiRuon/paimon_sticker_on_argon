<?php
/**
 * Plugin Name: paimon's work
 * Plugin URI:  https://github.com/ChiyukiRuon/paimon_sticker_on_argon
 * Text Domain: paimon_stickers_on_agron
 * Description: 米游舍派蒙的画作部分表情包。图源米游舍
 * Version:     1.0
 * Author:      ChiyukiRuon
 * Author URI:  https://chiyukiruon.top
 */
function add_stickers($stickersList) {
    $stickers_dir = plugins_url('res/', __FILE__);
    $stickersList[] = array(
        'groupname' => '派蒙的画作',
        'list' => array(
            array('type' => 'sticker', 'code' => '派蒙-吃惊', 'src' => $stickers_dir . '吃惊.png'),
            array('type' => 'sticker', 'code' => '派蒙-哼哼', 'src' => $stickers_dir . '哼哼.png'),
            array('type' => 'sticker', 'code' => '派蒙-出货吧', 'src' => $stickers_dir . '出货吧.png'),
            array('type' => 'sticker', 'code' => '派蒙-该吃饭了', 'src' => $stickers_dir . '该吃饭了.png'),
            array('type' => 'sticker', 'code' => '派蒙-小事一桩', 'src' => $stickers_dir . '小事一桩.png'),
            array('type' => 'sticker', 'code' => '派蒙-问号', 'src' => $stickers_dir . '问号.png'),
            array('type' => 'sticker', 'code' => '派蒙-安详', 'src' => $stickers_dir . '安详.png'),
            array('type' => 'sticker', 'code' => '派蒙-黑线', 'src' => $stickers_dir . '黑线.png'),
            array('type' => 'sticker', 'code' => '派蒙-伪装', 'src' => $stickers_dir . '派蒙-伪装.png'),
            array('type' => 'sticker', 'code' => '荧-请投币', 'src' => $stickers_dir . '请投币.png'),
            array('type' => 'sticker', 'code' => '安柏-救救我', 'src' => $stickers_dir . '救救我.png'),
            array('type' => 'sticker', 'code' => '安柏-不要啊', 'src' => $stickers_dir . '不要啊.png'),
            array('type' => 'sticker', 'code' => '七七-暗中观察', 'src' => $stickers_dir . '七七-暗中观察.png'),
            array('type' => 'sticker', 'code' => '七七-倒', 'src' => $stickers_dir . '七七-倒.png'),
            array('type' => 'sticker', 'code' => '刻晴-晚安', 'src' => $stickers_dir . '刻晴-晚安.png'),
            array('type' => 'sticker', 'code' => '刻晴-点赞', 'src' => $stickers_dir . '刻晴-点赞.png'),
            array('type' => 'sticker', 'code' => '刻晴-赌气', 'src' => $stickers_dir . '刻晴-赌气.png'),
            array('type' => 'sticker', 'code' => '刻晴-夜宵', 'src' => $stickers_dir . '刻晴-夜宵.png'),
            array('type' => 'sticker', 'code' => '刻晴-祝贺', 'src' => $stickers_dir . '刻晴-祝贺.png'),
            array('type' => 'sticker', 'code' => '刻晴-疑问', 'src' => $stickers_dir . '刻晴-疑问.png'),
            array('type' => 'sticker', 'code' => '烟绯-得意', 'src' => $stickers_dir . '烟绯-得意.png'),
            array('type' => 'sticker', 'code' => '烟绯-睡不着', 'src' => $stickers_dir . '烟绯-睡不着.png'),
            array('type' => 'sticker', 'code' => '芭芭拉-害羞', 'src' => $stickers_dir . '芭芭拉-害羞.png'),
            array('type' => 'sticker', 'code' => '芭芭拉-嘘', 'src' => $stickers_dir . '芭芭拉-嘘.png'),
            array('type' => 'sticker', 'code' => '宵宫-抱歉', 'src' => $stickers_dir . '宵宫-抱歉.png'),
            array('type' => 'sticker', 'code' => '宵宫-没问题', 'src' => $stickers_dir . '宵宫-没问题.png'),
            array('type' => 'sticker', 'code' => '宵宫-喂', 'src' => $stickers_dir . '宵宫-喂.png'),
            array('type' => 'sticker', 'code' => '神里凌华-乖巧', 'src' => $stickers_dir . '神里凌华-乖巧.png'),
            array('type' => 'sticker', 'code' => '太郎丸-开始营业', 'src' => $stickers_dir . '太郎丸-开始营业.png'),
            array('type' => 'sticker', 'code' => '太郎丸-wink', 'src' => $stickers_dir . '太郎丸-wink.png'),
        )
    );
    return $stickersList;
}


add_filter('argon_emotion_list' , 'add_stickers');