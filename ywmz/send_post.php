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

$sex=get_sex();

if($sex=='2')//如果为女
{
	switch($num)
	{
		case 0:$ename='Ada';$zw='艾达';$hanyi="增光；快乐的；\n美丽。";$ename_l=88;break;
		case 1:$ename='Alice';$zw='爱丽丝';$hanyi="尊贵的，真诚的。";$ename_l=75;break;
		case 2:$ename='Amy';$zw='艾咪';$hanyi="最心爱的人，可\n爱的。";$ename_l=90;break;
		case 3:$ename='Arlene';$zw='艾琳娜';$hanyi="誓约、信物。";$ename_l=60;break;
		case 4:$ename='Betty';$zw='贝蒂';$hanyi="上帝是誓约。";$ename_l=65;break;
		case 5:$ename='Blanche';$zw='布兰琪';$hanyi="纯洁无暇的。";$ename_l=40;break;
		case 6:$ename='Carol';$zw='卡萝';$hanyi="欢唱，悦耳欢快\n的歌。";$ename_l=65;break;
		case 7:$ename='Cathy ';$zw='凯丝';$hanyi="纯洁的人。";$ename_l=65;break;
		case 8:$ename='Doris';$zw='多莉丝';$hanyi="来自大海的；海\n洋女神。";$ename_l=75;break;
		case 9:$ename='Diana';$zw='黛安娜';$hanyi="光亮如白画；月\n亮女神。";$ename_l=65;break;
		case 10:$ename='Ella';$zw='艾拉';$hanyi="火炬。";$ename_l=85;break;
		case 11:$ename='Erica';$zw='艾丽卡';$hanyi="有权力的；帝王\n的；统治者。";$ename_l=65;break;
		case 12:$ename='Helen';$zw='海伦';$hanyi="火把；光亮的。";$ename_l=65;break;
		case 13:$ename='Ida';$zw='艾达';$hanyi="快乐的，勤奋的，\n富有的。";$ename_l=95;break;
		case 14:$ename='Jane';$zw='珍';$hanyi="上帝是慈悲的；\n少女。";$ename_l=70;break;
		case 15:$ename='Joanna';$zw='乔安娜';$hanyi="上帝仁慈的赠礼。";$ename_l=45;break;
		case 16:$ename='Judy';$zw='朱蒂';$hanyi="赞美。";$ename_l=75;break;
		case 17:$ename='Linda';$zw='琳达';$hanyi="美丽的人。";$ename_l=65;break;
		case 18:$ename='Lisa';$zw='丽莎';$hanyi="对神奉献。";$ename_l=85;break;
		case 19:$ename='Mona';$zw='梦娜';$hanyi="孤独；高贵；唯\n一的，独特的；";$ename_l=75;break;
		case 20:$ename='Penny';$zw='潘妮';$hanyi="沉默的编织者。";$ename_l=60;break;
		case 21:$ename='Sara';$zw='莎拉';$hanyi="公主。";$ename_l=85;break;
		case 22:$ename='Selena';$zw='萨琳娜';$hanyi="月亮，月光。";$ename_l=55;break;
		case 23:$ename='Susan';$zw='苏珊';$hanyi="一朵小百合。";$ename_l=65;break;
		case 24:$ename='Tina';$zw='蒂娜';$hanyi="娇小玲珑的人。";$ename_l=75;break;
		case 25:$ename='Susanna';$zw='苏珊娜';$hanyi="百合花。";$ename_l=35;break;
		case 26:$ename='Elma';$zw='艾尔玛';$hanyi="富爱心的人，亲\n切的。";$ename_l=75;break;
		case 27:$ename='Betsy';$zw='贝琪';$hanyi="上帝是誓约。";$ename_l=65;break;
		case 28:$ename='Clara';$zw='克莱拉';$hanyi="明亮的；聪明的。";$ename_l=75;break;
		case 29:$ename='Camille';$zw='卡蜜拉';$hanyi="好品性的高贵女\n子。";$ename_l=55;break;
		case 30:$ename='Cherry';$zw='绮莉';$hanyi="仁慈，像樱桃般\n红润的人。";$ename_l=65;break;
		case 31:$ename='Elvira';$zw='艾薇拉';$hanyi="小精灵。";$ename_l=65;break;
		case 32:$ename='Iris';$zw='爱莉丝';$hanyi="彩虹女神；鸢尾\n花。";$ename_l=95;break;
		case 33:$ename='Jenny';$zw='珍妮';$hanyi="少女。";$ename_l=55;break;
	}

}
else
{
	switch($num)
	{
		case 0:$ename='Jo';$zw='乔';$hanyi="上帝还会赐予。";$ename_l=95;break;
		case 1:$ename='William';$zw='威廉';$hanyi="强而有力的战士\n或保卫者。";$ename_l=55;break;
		case 2:$ename='Daniel';$zw='丹尼尔';$hanyi="上帝是审判者。";$ename_l=60;break;
		case 3:$ename='Antonio';$zw='安东尼奥';$hanyi="值得赞美的，备\n受尊崇的。";$ename_l=40;break;
		case 4:$ename='Addison';$zw='艾狄生';$hanyi="亚当的后代。";$ename_l=45;break;
		case 5:$ename='Andy';$zw='安迪';$hanyi="男性的，勇敢的，\n骁勇的。";$ename_l=70;break;
		case 6:$ename='Antony';$zw='安东尼';$hanyi="值得赞美，备受\n尊崇的。";$ename_l=45;break;
		case 7:$ename='Arvin ';$zw='艾文';$hanyi="以平等之心待人\n者。";$ename_l=75;break;
		case 8:$ename='David';$zw='大卫';$hanyi="所爱的人。";$ename_l=65;break;
		case 9:$ename='James';$zw='詹姆士';$hanyi="取而代之者。";$ename_l=55;break;
		case 10:$ename='Jason';$zw='杰森';$hanyi="有丰富知识的人。";$ename_l=55;break;
		case 11:$ename='Jay';$zw='杰';$hanyi="蓝鸟的美丽。";$ename_l=85;break;
		case 12:$ename='Jeff';$zw='杰夫';$hanyi="神圣的和平。";$ename_l=85;break;
		case 13:$ename='Jerry';$zw='杰理';$hanyi="神圣的名字。";$ename_l=75;break;
		case 14:$ename='Jim';$zw='吉姆';$hanyi="取而代之者。";$ename_l=90;break;
		case 15:$ename='Michael';$zw='麦克';$hanyi="像上帝的人。";$ename_l=48;break;
		case 16:$ename='John';$zw='约翰';$hanyi="上帝仁慈的赐恩。";$ename_l=75;break;
		case 17:$ename='Julian';$zw='朱利安';$hanyi="头发柔软的，也\n代表年青人。";$ename_l=55;break;
		case 18:$ename='Kelly';$zw='凯利';$hanyi="战士。";$ename_l=75;break;
		case 19:$ename='Ken';$zw='肯恩';$hanyi="英俊的领导者。";$ename_l=85;break;
		case 20:$ename='Kevin';$zw='凯文';$hanyi="圣人；很男性化\n的；出身很好的。";$ename_l=70;break;
		case 21:$ename='King';$zw='金';$hanyi="统治者。";$ename_l=85;break;
		case 22:$ename='Lance';$zw='蓝斯';$hanyi="等待他人的人。";$ename_l=65;break;
		case 23:$ename='Leo';$zw='利奥';$hanyi="狮子；勇士。";$ename_l=85;break;
		case 24:$ename='Louis';$zw='路易斯';$hanyi="有名气的战士。";$ename_l=65;break;
		case 25:$ename='Mark';$zw='马克';$hanyi="指有侵略性的人。";$ename_l=75;break;
		case 26:$ename='Martin';$zw='马丁';$hanyi="好战的，尚武的。";$ename_l=55;break;
		case 27:$ename='Pete';$zw='皮特';$hanyi="岩石，石头。";$ename_l=75;break;
		case 28:$ename='Virgil';$zw='维吉尔';$hanyi="春天，生物欣欣\n向荣之状。";$ename_l=75;break;
		case 29:$ename='Victor';$zw='维克多';$hanyi="胜利者，征服者。";$ename_l=55;break;
		case 30:$ename='Tony';$zw='汤尼';$hanyi="值得赞美的，很\n受尊重的。";$ename_l=65;break;
		case 31:$ename='Sean';$zw='肖恩';$hanyi="上帝仁慈的赠礼。";$ename_l=75;break;
		case 32:$ename='Robin';$zw='罗宾';$hanyi="辉煌的名声，知\n更鸟。";$ename_l=65;break;
		case 33:$ename='Regan';$zw='里根';$hanyi="帝王的；国王。";$ename_l=55;break;
	}
}

$str='中文：'.$zw."\n".'涵义：'.$hanyi;
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$ename,$ename_l,165,13,0,35,'fff');
$img=createImg($img,$str,15,232,0,0,15,'fff','katong');

$content='HOHO~，刚刚在这个网站分析出最适合'.$name.'的英文名字是'.$ename.'！/鼓掌~你还没有英文名字吗？快来取个#最适合你的英文名字#吧，网站地址：'.$url;
$content=$content.' ，你也试试吧！';

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;

$pagrams[title] = "点击测试->最适合你的英文名字";
$pagrams[summary] = "你还没有英文名字？你out了~登陆后，系统会根据你的名字精确分析出最适合你的英文名字~快来给自己取个英文名吧~！".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info ['result_title'] = '【英文名：'.$ename.'，中文名：'.$zw.'，含义：'.$hanyi.'】';