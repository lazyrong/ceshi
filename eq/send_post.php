<?
$infos = get_user_info ();
$name = $_COOKIE ['v_name'];
$nick = $_COOKIE ['v_nick'];
$url = $infos ['url'];
$nick_size = 16;
$nick_len = mb_strlen ( $nick, 'UTF8' );
if ($nick_len > 9) {
	$nick_size = 13;
}
$i = 1;
while ( $i < 34 ) {
	$num = $num + $_POST ['i' . $i];
	$i ++;
}

if ($num < 80) {
	$level = '低情商';
}
if ($num >= 80 && $num < 100) {
	$level = '普通情商';
}
if ($num >= 100 && $num < 120) {
	$level = '较高情商';
}
if ($num >= 120 && $num < 150) {
	$level = '高情商';
}
if ($num >= 150) {
	$level = '情商极高';
}

$img_path = './imgs/eq_1.png';
$img = getImgType ( $img_path );
$img = createImg ( $img, $nick, 28, 105, 13, 0, $nick_size, 'a60' );
$img = createImg ( $img, $num, 112, 225, 11, 0, 35, 'f37', 'yahei' );
$img = createImg ( $img, $level, 160, 263, 11, 0, 19, '790' );

$content = '经过33道国际标准情商测试题检验，我的情商居然是：' . $num . '，真有点出乎预料啊！想知道自己的情商是多少吗？快来做个专业测试吧~！ #国际标准情商测试#：' . $url;
$content = $content . ' ，你也试试吧！';

$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'png';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->国际标准情商测试";
$pagrams [summary] = "情商往往比智商更重要，这是一套欧洲非常流行的EQ测试题~可口可乐、麦当劳、诺基亚等世界500强众多企业，曾以此作为员工EQ测试的模板！快来测测你的情商吧~要选择和自己最切合的答案哦~" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $num . '】';