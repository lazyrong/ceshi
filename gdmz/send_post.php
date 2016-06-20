<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

if($num>33)
{
	$num=ceil($num/3);
}

$sex=get_sex();

if($sex=='2')//如果为女
{
	switch($num)
	{
		case 0:$gname='柳凝璇';$gsf='贵妃';break;
		case 1:$gname='上官怡夕';$gsf='富家小姐';break;
		case 2:$gname='颜霜儿';$gsf='丫鬟';break;
		case 3:$gname='白芊芊';$gsf='卖艺名妓';break;
		case 4:$gname='慕容灵惜';$gsf='侠女';break;
		case 5:$gname='唐可竹';$gsf='公主';break;
		case 6:$gname='东方婉儿';$gsf='富家千金';break;
		case 7:$gname='南宫云儿 ';$gsf='女捕快';break;
		case 8:$gname='慕容菲菲';$gsf='宫女';break;
		case 9:$gname='公孙梦蝶';$gsf='女医';break;
		case 10:$gname='叶可可';$gsf='婢女';break;
		case 11:$gname='尹舒儿';$gsf='太子妃';break;
		case 12:$gname='欧阳雨纤';$gsf='舞女';break;
		case 13:$gname='唐茹嫣';$gsf='贵妃';break;
		case 14:$gname='柳诗婷';$gsf='小妾';break;
		case 15:$gname='上官雨馨';$gsf='千金小姐';break;
		case 16:$gname='慕容婷婷';$gsf='郡主';break;
		case 17:$gname='东方筱涵';$gsf='歌姬';break;
		case 18:$gname='叶雅婷';$gsf='才女';break;
		case 19:$gname='欧阳紫陌';$gsf='琴师';break;
		case 20:$gname='上官芸儿';$gsf='山寨夫人';break;
		case 21:$gname='叶琪馨';$gsf='女画家';break;
		case 22:$gname='欧阳茹芯';$gsf='女太医';break;
		case 23:$gname='刘嫣儿';$gsf='贵妃';break;
		case 24:$gname='上官可可';$gsf='富家千金';break;
		case 25:$gname='南宫雨轩';$gsf='剑手';break;
		case 26:$gname='石忆芸';$gsf='贴身丫鬟';break;
		case 27:$gname='钟离依云';$gsf='杀手';break;
		case 28:$gname='唐汐儿';$gsf='才女';break;
		case 29:$gname='司空萱儿';$gsf='女护卫';break;
		case 30:$gname='尹诗诗';$gsf='琴师';break;
		case 31:$gname='唐忆茹';$gsf='千金小姐';break;
		case 32:$gname='凌馨儿';$gsf='郡主';break;
		case 33:$gname='司马彩芸';$gsf='江湖女侠';break;
	}
}
else
{
	switch($num)
	{
		case 0:$gname='萧长风';$gsf='孤独剑客';break;
		case 1:$gname='慕容绝言';$gsf='职业杀手';break;
		case 2:$gname='柳逸尘';$gsf='秀才';break;
		case 3:$gname='司马轩宇';$gsf='穷书生';break;
		case 4:$gname='上官云遥';$gsf='大学士';break;
		case 5:$gname='唐天洛';$gsf='将军';break;
		case 6:$gname='东方元永';$gsf='丞相';break;
		case 7:$gname='南宫涵清 ';$gsf='军师';break;
		case 8:$gname='欧阳一凡';$gsf='刀客';break;
		case 9:$gname='公孙枫';$gsf='大财主';break;
		case 10:$gname='叶逍遥';$gsf='武林盟主';break;
		case 11:$gname='尹云言';$gsf='富家公子';break;
		case 12:$gname='欧阳空竹';$gsf='道士';break;
		case 13:$gname='司徒清风';$gsf='算命神棍';break;
		case 14:$gname='西门元海';$gsf='商人';break;
		case 15:$gname='唐青';$gsf='土匪头子';break;
		case 16:$gname='莫永史';$gsf='客栈掌柜';break;
		case 17:$gname='上官永石';$gsf='九品县官';break;
		case 18:$gname='南宫云遥';$gsf='隐士';break;
		case 19:$gname='柳史元';$gsf='师爷';break;
		case 20:$gname='唐子弦';$gsf='乞丐';break;
		case 21:$gname='叶世晴';$gsf='管家';break;
		case 22:$gname='欧阳木灵';$gsf='私塾先生';break;
		case 23:$gname='柳逸才';$gsf='酒馆小二';break;
		case 24:$gname='上官原石';$gsf='仵作';break;
		case 25:$gname='南宫凡隐';$gsf='太医';break;
		case 26:$gname='石才云';$gsf='江湖郎中';break;
		case 27:$gname='慕容展云';$gsf='总镖头';break;
		case 28:$gname='马启才';$gsf='状元';break;
		case 29:$gname='萧胜天';$gsf='护卫';break;
		case 30:$gname='萧易风';$gsf='职业小偷';break;
		case 31:$gname='唐胜云';$gsf='王爷';break;
		case 32:$gname='凌清云';$gsf='捕头';break;
		case 33:$gname='司马逍遥';$gsf='侠客';break;
	}
}

$img_path='./imgs/gdmz.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,28,110,11,0,15,'fff');
$img=createImg($img,$gname,130,170,11,0,18,'fff','katong');
$img=createImg($img,$gsf,130,223,14,0,18,'fff','katong');

$content='原来'.$name.'在古代的名字是'.$gname.'，身份是：'.$gsf.'。。。~哈哈~~太有意思了~~~以后玩游戏就用这个名字吧~/偷笑！我正在玩#你在古代的名字和身份#，地址:'.$url.'快来测测你的吧~';

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你在古代的名字和身份";
$pagrams[summary] = "玩游戏想不到好的名字？快来测测你的专属古代名字吧~还能测试你的古代身份~~而且每个人的测试结果都不一样哦~~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【名字：'.$gname.'，身份：'.$gsf.'】';