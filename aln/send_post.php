<?
$infos = get_user_info ();
$name = $infos ['name'];
$nick = $infos ['nick'];
$url = $infos ['url'];
$left_px = get_left_px ( $nick );
$num = str_to_num ( $nick, $app_name);

$img_path = './imgs/app_img.png';
$img = getImgType ( $img_path );
// $img=createImg($img,'@'.$nick,$left_px,80,13,0,14,'fff');
$img = createImg ( $img, $nick, $left_px, 80, 13, 0, 14, 'fff' );
$img = createImg ( $img, $num . '人', 65, 183, 13, 0, 60, 'fff', 'katong' );

$content = '/偷笑 OMG，原来有' . $num . '人暗恋着' . $name . '，太不可思议了！快来看看#有多少人暗恋你#吧~：' . $url;
$content = $content . ' ，你也试试吧！';
$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'png';
$pagrams [url] = $url;
$pagrams [title] = "点击测试->有多少人暗恋你";
$pagrams [summary] = "你知不知道从小到大，在你的周围有多少人暗恋你？系统可以根据你的微博信息分析出来哦~~~" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $num . '】';