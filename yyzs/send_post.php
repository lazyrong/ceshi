<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$day=date("d",time());
$num=str_to_num($day.$nick,$app_name);

if($num==0){$str='。。。。谢谢参与。。。。。【无限同情中】....';}
if($num==1){$str='上看下看，左看右看，都是光棍一条....';}
if($num==2){$str='曾经伤心流泪，也曾经黯然心碎，这就是"2"的代价...';}
if($num==3){$str='上帝为您叹息，丘比特为您啜泣...';}
if($num>=3&&$num<10){$str='再跟我谈艳遇，我就装死给你看...';}
if($num>=10&&$num<18){$str='爱神给我一双翅膀，我却把它放在锅里煮汤...';}
if($num>=18&&$num<25){$str='众里寻ta千百度，暮然回首，那人依旧对我不屑一顾...';}
if($num>=25&&$num<32){$str='好不容易有次艳遇，TMD居然是在梦里...';}
if($num>=32&&$num<40){$str='人生没有艳遇，有的只是寂寞....';}
if($num>=40&&$num<50){$str='悲催的人生不需要解释..';}
if($num>=50&&$num<60){$str='再牛逼的肖邦，也弹不出我的悲伤，求艳遇啊！！';}
if($num>=60&&$num<70){$str='艳遇无限好，只是上哪找..';}
if($num>=70&&$num<80){$str='三千城管也挡不住您艳遇的脚步...';}
if($num>=80&&$num<90){$str='桃花潭水深千尺，不及您的艳遇史..';}
if($num>=90){$str='如果艳遇是星辰，那您的生活真是漫天繁星..';}
if($num==99){$str='您走到哪里，哪里就死一片。。。';}

$img_path='./imgs/460.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,50,65,10,0,14,'790');
$img=createImg($img,$num,85,163,13,0,60,'f37','katong');
$img=createImg($img,$str,15,220,13,0,13,'fff','katong');

$content='【今日艳遇测试报告】经过专业分析，'.$name.'今天的艳遇值竟然是'.$num.'！怎么可能？想知道你今天的艳遇值吗？快来测试一下吧！~~~#今日艳遇测试#：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;

$pagrams[title] = "点击测试->今日艳遇测试";
$pagrams[summary] = "今天的你会不会有一段美妙的艳遇呢？快来测测你今日的艳遇指数吧~~记住每日必测哦~~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info ['result_title'] = '【'.$num.'】';