<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

if ($num == 0)
{
	$str = "你一定不是人！居然一丁点人品都没有！！";
}
else if ($num > 0 && $num <= 5)
{
	$str = "算了，跟你没什么人品好谈的…";
}
else if ($num > 5 && $num <= 10)
{
	$str = "是我不好…不应该跟你谈人品问题的…";
}
else if ($num > 10 && $num <= 15)
{
	$str = "杀过人没有？放过火没有？你应该无恶不做吧？";
}
else if ($num > 15 && $num <= 20)
{
	$str = "你是不是三岁就开始偷看别人洗澡了…";
}
else if ($num > 20 && $num <= 25)
{
	$str = "你经常做偷偷摸摸的事有木有…";
}
else if ($num > 25 && $num <= 30)
{
	$str = "你的人品太差了！是不是有经常干坏事的嗜好?";
}
else if ($num > 30 && $num <= 35)
{
	$str = "请不要再去超市捏方便面和饼干了！";
}
else if ($num > 35 && $num <= 40)
{
	$str = "你拥有如此差的人品…请经常祈求佛祖保佑你吧…";
}
else if ($num > 40 && $num <= 45)
{
	$str = "老实交待…那个经常在论坛上骂楼主的是不是你?";
}
else if ($num > 45 && $num <= 50)
{
	$str = "你随地大小便之类的事没少干吧?";
}
else if ($num > 50 && $num <= 55)
{
	$str = "你的人品太差了…稍不小心就会去干坏事了吧?";
}
else if ($num > 55 && $num <= 60)
{
	$str = "你的人品很差了…要时刻克制住做坏事的冲动哦…";
}
else if ($num > 60 && $num <= 65)
{
	$str = "你的人品比较差了…要好好的约束自己啊…";
}
else if ($num > 65 && $num <= 70)
{
	$str = "你的人品勉勉强强…要自己好自为之…";
}
else if ($num > 70 && $num <= 75)
{
	$str = "有你这样的人品算是不错了…继续保持！";
}
else if ($num > 75 && $num <= 80)
{
	$str = "你的人品还算可以…奖你三朵小红花！";
}
else if ($num > 80 && $num <= 85)
{
	$str = "你的人品挺不错，是党的好同志！";
}
else if ($num > 85 && $num <= 90)
{
	$str = "你的人品真好，是不是把做好事当成爱好了？";
}
else if ($num > 90 && $num <= 95)
{
	$str = "你的人品太好了！你就是当代活雷锋啊！";
}
else if ($num > 95 && $num <= 99)
{
	$str = "你是全人类的榜样！";
}
else if ($num == 100)
{
	$str = "天啦！你不是人！你是神！！！";
}
else
{
	$str = "你的人品竟然负溢出了…我对你无语…";
}

$img_path='./imgs/rpz.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,85,55,12,0,13.5,'790');
$img=createImg($img,$num,150,135,11,0,70,'f37','katong');
$img=createImg($img,$str,85,187,12,0,13.5,'a60');

$content='【人品分析报告】经过专业分析，'.$name.'的人品值竟然是'.$num.'分！怎么可能？？想知道你人品值是多少吗？快来分析下吧！#人品值分析#：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
$pagrams[url] = $url;
$pagrams[title] = "点击测试->人品值分析";
$pagrams[summary] = "你的人品如何？快来分析下吧！系统会根据你的微博信息精确分析出你的人品值哦~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$num.'分:'.$str.'】';