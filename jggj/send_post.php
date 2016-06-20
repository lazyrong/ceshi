<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

if($num>33)
{
	$num=ceil($num/3);
}

$pais[0]='卢森堡,德国';
$pais[1]='挪威,日本,比利时';
$pais[2]='瑞士,奥地利';
$pais[3]='爱尔兰,美国';
$pais[4]='丹麦,新西兰,法国';
$pais[5]='冰岛,韩国';
$pais[6]='瑞典,加拿大';
$pais[7]='英国,比利时';
$pais[8]='奥地利,希腊';
$pais[9]='荷兰,捷克,比利时';
$pais[10]='芬兰,澳大利亚';
$pais[11]='比利时,捷克';
$pais[12]='法国,意大利,挪威';
$pais[13]='德国,墨西哥';
$pais[14]='意大利,加拿大';
$pais[15]='西班牙,日本';
$pais[16]='希腊,印度,新西兰';
$pais[17]='葡萄牙,新加坡';
$pais[18]='美国,澳大利亚';
$pais[19]='加拿大,新西兰';
$pais[20]='日本,荷兰,俄罗斯';
$pais[21]='新加坡,墨西哥';
$pais[22]='澳大利亚,加拿大';
$pais[23]='新西兰,墨西哥';
$pais[24]='印度,爱尔兰';
$pais[25]='韩国,爱尔兰,瑞典';
$pais[26]='捷克,澳大利亚';
$pais[27]='墨西哥,希腊';
$pais[28]='意大利,西班牙';
$pais[29]='加拿大,比利时,葡萄牙';
$pais[30]='法国,加拿大';
$pais[31]='爱尔兰,冰岛';
$pais[32]='西班牙,澳大利亚';
$pais[33]='澳大利亚,英国';

$str=$pais[$num];

$str_l_px=get_left_px($str);
$str_l_px=$str_l_px-10;
	
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,110,13,0,14,'fff');
$img=createImg($img,$str,$str_l_px,175,13,0,20,'fff','katong');

$content='/鼓掌 太好了'.$name.' 这辈子终于有出国旅游的机会了，今后会去这些国家！想知道你这#一生会去几个国家#吗？快来预测一下吧。：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->一生会去几个国家";
$pagrams[summary] = "我相信每个人都有周游世界的梦想。那么你一生中，你会去哪几个国家旅行呢？快来预测一下！".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$str.'】';