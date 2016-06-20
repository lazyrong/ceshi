<?
$infos=get_user_info();
$url=$infos['url'];
$name1=mb_substr($_POST['name1'], 0, 3, 'utf-8');
$name2=mb_substr($_POST['name2'], 0, 3, 'utf-8');
$get_nick_num=$name1.$name2;
if($_POST['is_hide']=='1')
{
	$name2_len=mb_strlen($name2,'UTF8');
	switch($name2_len)
	{
		case 1:$name2='*';break;
		case 2:$name2='**';break;
		case 3:$name2='***';break;
	}
}
$nick=$name1.' & '.$name2;
$left_px=get_left_px($nick);
$num=str_to_num($get_nick_num,$app_name);

if($num==0)
{
	$num=100;
}
if($num>=11&&$num<20)
{
	$num=$num*5;
}
if($num<11)
{
	$num=$num*8;
}
$num=$num.'%';
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,89,98,13,0,14,'fff');
$img=createImg($img,$num,70,220,13,0,60,'fff','katong');


$content='【姓名缘分指数分析报告】 经过姓名配对分析，【'.$name1.'】和【'.$name2.'】的缘分指数是：'.$num.'！报告来自#姓名缘分指数分析#：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->姓名缘分指数分析";
$pagrams[summary] = "输入你和ta的名字，分析出你们俩的缘分指数（准确率高达98%）".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info ['result_title'] = '【'.$num.'】';