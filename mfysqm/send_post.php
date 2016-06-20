<?
//jssj('app_main_start');
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$nick=mb_substr($nick, 0, 4, 'utf-8');
$nick_len=mb_strlen($nick,'UTF8');
switch($nick_len)
{
	case 1:$left_px=240;break;
	case 2:$left_px=180;break;
	case 3:$left_px=160;break;
	case 4:$left_px=120;break;
}

function mbStrSplit ($string, $len=1) {
    $start = 0;
    $strlen = mb_strlen($string);
    while ($strlen) {
        $array[] = mb_substr($string,$start,$len,"utf8");
        $string = mb_substr($string, $len, $strlen,"utf8");
        $strlen = mb_strlen($string);
    }
    return $array;
}
$arr = mbStrSplit($nick, 1);
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,270,45,13,0,20,'f37','katong');
//$img=createImg($img,$nick,$left_px,150,13,0,60,'f37','boyang7000');

$familyname1='张巩微許卞';
$familyname2='张褚巩微許';
$middlename1='志盈兆语云章钟彦昭宜愈尧舟章于治圆紫咏鱼宴洋映迎跚耀正元祖佐亦野悠政运资州召茁遥中之玉赵银优宙夜宇颜再又有余永雅玉子翮渝雨艳岳赚颖越杨跃宗亚姿一渊燕贞益跃英勇阳叶月吟义黛依延艺幼悦园毅应仲逸裕莹朱以泽予彦膳周虞忠真源自紫友忆珍芝振智瑶言兆原要哲炎远卓阗';
$middlename2='志盈兆语云珂钟彦昭宜愈尧舟章于治圆紫咏鱼宴洋映迎跚耀正元祖佐亦野悠政运资州召茁遥中之玉赵银优宙夜晏颜再又有余章宇永雅翮渝玉艳岳赚颖越杨跃宗倩姿子梓雨贞益跃英勇阳叶凡月雯睿晟烨义媛依延吟黛艺幼筠潇旻应祥毅仲昕琪裕亚一芷钰楠怡馨胜渊芮瀚燕园逸喆莹以泽予彦婷周奕虞忠启真源倩钲自紫友忆珍芝振智瑶镕言兆芊婕薇原要鑫璐淇芸瀛湖煜京隽炫娣昕茜歆哲炎淼皓泷姗胤钰祺蓓荟侃远卓昱阗昊琛莞珉炜咪骁绮岱';
$lastname1='扬艳燕盈语勇炎钟彦昭宜愈尧舟章于治圆紫咏鱼宴洋映迎跚耀正元祖佐亦野悠政运资州召茁遥中之玉赵银优宙夜宇颜再又有余伊卓雅阳翮渝羽姿岳赚颖越英云跃宗翼源浛志贞永跃哲益依月园亚之莹义镇芗爷周一毅忠璐裕芩岩枝杨业语真珠子振竹征悦震洋友珍雨展仪泽芝智瑶言兆友远逸渊艺原叶仲';
$lastname2='扬艳燕盈语勇瑜钟彦昭宜愈尧舟章于治圆紫咏鱼宴洋映迎跚耀正元祖佐亦野悠政运资州召茁遥中之玉赵银优宙夜炎颜再又有余宇琪伊皓翮渝卓姿岳赚颖越睿云跃宗鑫缘晗璇贞志跃倩萱益依永月烨雯晟岚瑾义梓芮芗钜忠翀爷苒毅柚之周婷滢一璐桦裕菁雅阳昊岩羽嫣业杨英振薇轲震悦翼竹绮源浛楠怡哲园亚泽莹峥珂镇懿炜芩枝语真娅珠玮子圳征钊婵洋衿友曦珍妍雨展晔仪赟潇芝翌昱娴媛琪铮智瑶言兆芊友远妤逸婕琦曌淼璠嵘淇芸瀛煜隽炫娣昕茜歆渊艺泷姗胤钰祺蓓荟侃焜原阗奕琛莞珉炜喆咪骁绮叶仲岱';
if(strstr($familyname1,$arr[0])){$font1='boyang7000';$size=70;}else{$font1='1001';$size=80;}
$img=createImg($img,$arr[0],$left_px-38,150,13,0,$size,'000',$font1);

for($i=1;$i<$nick_len-1;$i++){
	if(strstr($middlename1,$arr[$i])){$font2='boyang7000';$size=70;$offset=20;}else{$font2='1002';$size=80;$offset=0;}
	$img=createImg($img,$arr[$i],$left_px+70+($i-1)*49-$offset,150,13,0,$size,'000',$font2);
}
if(strstr($lastname1,$arr[$i])){$font3='boyang7000';$size=70;}else{$font3='1003';$size=80;}
$img=createImg($img,$arr[$i],$left_px+70+($i-1)*49,150,13,0,$size,'000',$font3);

if(strstr($familyname2,$arr[0])){$font4='boyang7000';$size=70;$rize=25;}else{$font4='2001';$size=80;$rize=0;}
$img=createImg($img,$arr[0],$left_px-35,285-$rize,13,0,$size,'000',$font4);

for($j=1;$j<$nick_len-1;$j++){
	if(strstr($middlename2,$arr[$j])){$font5='boyang7000';$size=70;$rize=15;$offset=20;}else{$font5='2002';$size=80;$rize=0;$offset=0;}
	$img=createImg($img,$arr[$j],$left_px+70+($j-1)*57-$offset,285-$rize,13,0,$size,'000',$font5);
}
if(strstr($lastname2,$arr[$j])){$font6='boyang7000';$size=70;$rize=15;}else{$font6='2003';$size=80;$rize=0;}
$img=createImg($img,$arr[$j],$left_px+70+($j-1)*57,285-$rize,13,0,$size,'000',$font6);

$content='【免费艺术签名】哇！原来 '.$name.' 的艺术签名这么棒！/鼓掌 刚刚在这个网站免费设计的，专属的哦~~网址：'.$url.'快来设计一个吧！';

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击开始->免费艺术签名设计";
$pagrams[summary] = "没有好看的签名？快来免费设计一个吧！登陆后就能马上拥有为您量身设计的绝美艺术签名了！记得帮朋友也设计一个哦~".$pagrams[url];
//jssj('app_main_end');
//sae_debug('ysqm_app_main_time:'.jssj('app_main_start','app_main_end'));
//jssj('app_send_start');
$rt_info=post_send2($pagrams);
//jssj('app_send_end');
//sae_debug('ysqm_app_send_time:'.jssj('app_send_start','app_send_end'));