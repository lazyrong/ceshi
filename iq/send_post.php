<?
$infos=get_user_info();
$name=$_COOKIE['v_name'];
$nick=$_COOKIE['v_nick'];
$url=$infos['url'];
$nick_size=16;
$nick_len=mb_strlen($nick,'UTF8');
if($nick_len>9){$nick_size=13;}
$v_time=$_POST['v_time'];
$i=1;
while($i<31)
{
	$num=$num+$_POST['i'.$i];
	$i++;
}

if($num<50){$level='低能儿';}
if($num>=50&&$num<75){$level='接近弱智';}
if($num>=75&&$num<100){$level='正常水平';}
if($num>=100&&$num<120){$level='非常优秀';}
if($num>=120&&$num<140){$level='天才';}
if($num>=140){$level='超级天才';}

$img_path='./imgs/iq_1.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,28,105,13,0,$nick_size,'a60');
$img=createImg($img,$num,112,225,11,0,35,'f37','yahei');
$img=createImg($img,$level,160,263,11,0,19,'790');

$content='经过30道国际标准智商测试题检验，我的智商是：'.$num.'！答题用时'.$v_time.'秒。想知道自己的智商是多少吗？很简单！完成30个智商测试题就能检验出~ #国际标准智商测试#：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->国际标准智商测试";
$pagrams[summary] = "想检验自己的智商是多少吗？很简单！以下就是一份权威的IQ测试题，请在10分钟内完成~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$num.'】';