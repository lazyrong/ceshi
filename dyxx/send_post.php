<?
$infos = get_user_info ();
$name = $infos ['name'];
$nick = $infos ['nick'];
$url = $infos ['url'];
$num = str_to_num ( $nick, $app_name );

$num = 0;
$i = 1;
while ( $i < 2 ) {
	$num = $num + $_POST ['i' . $i];
	$i ++;
}
$num = strval ( $num );
$sex = get_sex ();

if ($sex == '2') // 如果为女
{
	$folder = 'girl';
} else {
	$folder = 'boy';
}
if ($sex == '2' && $num == '1') {
	$pic = 'http://app.qpic.cn/mblogpic/d7b87b0f4c7a0e1cf998/2000';
	$xingzuo = '白羊座';
	$lian = '《失恋33天》的王小贱';
	$num = 1;
}
if ($sex == '2' && $num == '2') {
	$pic = 'http://app.qpic.cn/mblogpic/b6eda38e963fa3533166/2000';
	$xingzuo = '金牛座';
	$lian = '《志明与春娇》的张志明';
	$num = 2;
}
if ($sex == '2' && $num == '3') {
	$pic = 'http://app.qpic.cn/mblogpic/4a7a3789b6dc1ab5bf66/2000';
	$xingzuo = '双子座';
	$lian = '《黑衣人》的Jay';
	$num = 3;
}
if ($sex == '2' && $num == '4') {
	$pic = 'http://app.qpic.cn/mblogpic/22c1115d3134473fccf2/2000';
	$xingzuo = '巨蟹座';
	$lian = '《碟中谍》的韩特';
	$num = 4;
}
if ($sex == '2' && $num == '5') {
	$pic = 'http://app.qpic.cn/mblogpic/40b45d9cd59dbf5e15fa/2000';
	$xingzuo = '狮子座';
	$lian = '《那些年我们一起追的女孩》的柯景腾';
	$num = 5;
}
if ($sex == '2' && $num == '6') {
	$pic = 'http://app.qpic.cn/mblogpic/789f3af233a3e9e9bace/2000';
	$xingzuo = '处女座';
	$lian = '《复仇者联盟》的美国队长';
	$num = 6;
}
if ($sex == '2' && $num == '7') {
	$pic = 'http://app.qpic.cn/mblogpic/d7b87b0f4c7a0e1cf998/2000';
	$xingzuo = '天秤座';
	$lian = '《失恋33天》的王小贱';
	$num = 1;
}
if ($sex == '2' && $num == '8') {
	$pic = 'http://app.qpic.cn/mblogpic/789f3af233a3e9e9bace/2000';
	$xingzuo = '天蝎座';
	$lian = '《复仇者联盟》的美国队长';
	$num = 6;
}
if ($sex == '2' && $num == '9') {
	$pic = 'http://app.qpic.cn/mblogpic/40b45d9cd59dbf5e15fa/2000';
	$xingzuo = '射手座';
	$lian = '《那些年我们一起追的女孩》的柯景腾';
	$num = 5;
}
if ($sex == '2' && $num == '10') {
	$pic = 'http://app.qpic.cn/mblogpic/22c1115d3134473fccf2/2000';
	$xingzuo = '魔羯座';
	$lian = '《碟中谍》的韩特';
	$num = 4;
}
if ($sex == '2' && $num == '11') {
	$pic = 'http://app.qpic.cn/mblogpic/4a7a3789b6dc1ab5bf66/2000';
	$xingzuo = '水瓶座';
	$lian = '《黑衣人》的Jay';
	$num = 3;
}
if ($sex == '2' && $num == '12') {
	$pic = 'http://app.qpic.cn/mblogpic/b6eda38e963fa3533166/2000';
	$xingzuo = '双鱼座';
	$lian = '《志明与春娇》的张志明';
	$num = 2;
}

if ($sex != '2' && $num == '1') {
	$pic = 'http://app.qpic.cn/mblogpic/03eded7e4cff7ee66a2e/2000';
	$xingzuo = '白羊座';
	$lian = '《暮光之城》的贝拉';
	$num = 1;
}
if ($sex != '2' && $num == '2') {
	$pic = 'http://app.qpic.cn/mblogpic/bbb08c430b9327cbecfa/2000';
	$xingzuo = '金牛座';
	$lian = '《山楂树之恋》的静秋';
	$num = 2;
}
if ($sex != '2' && $num == '3') {
	$pic = 'http://app.qpic.cn/mblogpic/2167a553345dfea36a36/2000';
	$xingzuo = '双子座';
	$lian = '《复仇者联盟》的黑寡妇';
	$num = 3;
}
if ($sex != '2' && $num == '4') {
	$pic = 'http://app.qpic.cn/mblogpic/0e3fef55f2275eddcbb0/2000';
	$xingzuo = '巨蟹座';
	$lian = '《那些年我们一起追的女孩》的沈佳宜';
	$num = 4;
}
if ($sex != '2' && $num == '5') {
	$pic = 'http://app.qpic.cn/mblogpic/0d702abac3ff211c9c5c/2000';
	$xingzuo = '狮子座';
	$lian = '《失恋33天》的黄小仙';
	$num = 5;
}
if ($sex != '2' && $num == '6') {
	$pic = 'http://app.qpic.cn/mblogpic/761888bc407b3c113c54/2000';
	$xingzuo = '处女座';
	$lian = '《初恋这件小事》的小水';
	$num = 6;
}
if ($sex != '2' && $num == '7') {
	$pic = 'http://app.qpic.cn/mblogpic/03eded7e4cff7ee66a2e/2000';
	$xingzuo = '天秤座';
	$lian = '《暮光之城》的贝拉';
	$num = 1;
}
if ($sex != '2' && $num == '8') {
	$pic = 'http://app.qpic.cn/mblogpic/761888bc407b3c113c54/2000';
	$xingzuo = '天蝎座';
	$lian = '《初恋这件小事》的小水';
	$num = 6;
}
if ($sex != '2' && $num == '9') {
	$pic = 'http://app.qpic.cn/mblogpic/0d702abac3ff211c9c5c/2000';
	$xingzuo = '射手座';
	$lian = '《失恋33天》的黄小仙';
	$num = 5;
}
if ($sex != '2' && $num == '10') {
	$pic = 'http://app.qpic.cn/mblogpic/0e3fef55f2275eddcbb0/2000';
	$xingzuo = '魔羯座';
	$lian = '《那些年我们一起追的女孩》的沈佳宜';
	$num = 4;
}
if ($sex != '2' && $num == '11') {
	$pic = 'http://app.qpic.cn/mblogpic/2167a553345dfea36a36/2000';
	$xingzuo = '水瓶座';
	$lian = '《复仇者联盟》的黑寡妇';
	$num = 3;
}
if ($sex != '2' && $num == '12') {
	$pic = 'http://app.qpic.cn/mblogpic/bbb08c430b9327cbecfa/2000';
	$xingzuo = '双鱼座';
	$lian = '《山楂树之恋》的静秋';
	$num = 2;
}

$img_path='./imgs/'.$folder.'/'.$num.'.jpg';
$img=getImgType($img_path);

$content = '12星座也有代表各自的电影形象。属于我' . $xingzuo . '的电影形象是' . $lian . '，想知道属于你的电影形象是什么？快来#测测你星座的电影形象#吧！：' . $url;
$content = $content . ' ，你也试试吧！';
$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $pic;
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->属于你的电影形象是什么";
$pagrams [summary] = "测试12星座的电影形象,通过对你的星座进行分析，测试出属于你星座的电影形象~" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_img'] = $pic;
$rt_info ['result_title'] = '【' . $lian . '】';