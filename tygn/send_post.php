<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);
/*
if($num>25)
{
	$num=ceil($num/4);
}

$nick_len=mb_strlen($nick,'UTF8');
switch($nick_len)
{
	case 1:$left_px=137;break;
	case 2:$left_px=127;break;
	case 3:$left_px=117;break;
	case 4:$left_px=107;break;
	case 5:$left_px=97;break;
	case 6:$left_px=87;break;
	case 7:$left_px=77;break;
	case 8:$left_px=67;break;
	case 9:$left_px=57;break;
	case 10:$left_px=47;break;
	case 11:$left_px=37;break;
	default:$left_px=25;
}

$img_path='./imgs/'.$num.'.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,70,13,0,15,'a60');
*/


$resultlist = array(
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/444e22161ea89b174e04/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfqrwq1v7j2082099dgi.jpg',
				'jieguo'=>'可以用念力解开女同事的胸罩',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/f9897e56353e3fa6ffde/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfqrz7wk1j208209974z.jpg',
				'jieguo'=>'在梦游时可以穿越英吉利海峡',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/5023786a8287b2ee2044/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfqrzjv97j2082099q3j.jpg',
				'jieguo'=>'生气时看谁一眼谁就能长出浓密的脚毛',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/f374dfedbbb995eb9b1a/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfqs02ve9j20820990td.jpg',
				'jieguo'=>'YY苍老师时，凤姐就会现身',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/85f499c17f13bb54f5ea/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfqs16djjj2082099t9e.jpg',
				'jieguo'=>'胸部在关键时刻可以变成安全气囊',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/8eedf5db05fe2f490ba8/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfqs3ewnnj20820990td.jpg',
				'jieguo'=>'加班多久就让老板菊花痒多久',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/a80f5bcfaea75158615c/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfqs3ucwaj2082099mxq.jpg',
				'jieguo'=>'忘情的咆哮之后会怀孕',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/c3ebc2e05a33f09d4482/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfqs65j2oj2082099q3n.jpg',
				'jieguo'=>'可以过滤任何马赛克',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/471cae145a3af48314c8/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfqs8hl4aj208209974v.jpg',
				'jieguo'=>'瞪谁谁平胸',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/6b94ba4e6332b3ffb036/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfqs8vi8lj2082099wf5.jpg',
				'jieguo'=>'面对美色诱惑仍能专心读书',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/cbb6625f9c9e916e0820/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfqsb75d8j208209974v.jpg',
				'jieguo'=>'便秘后能隐身',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/9b09c6ef628d931d323c/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfqsdlbw0j2082099gm9.jpg',
				'jieguo'=>'可以用脚挖鼻屎',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/c49ead764141e948d45c/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfqse5h1uj2082099wfa.jpg',
				'jieguo'=>'抱歉，你只是个凡人',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/e82b78e7df6637649e68/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfqsgd9o2j2082099q3r.jpg',
				'jieguo'=>'吵架时不控制会让对方爱上你',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/ba3b32460799332d7140/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfqsiulyhj2082099aap.jpg',
				'jieguo'=>'喝下一瓶妇炎洁后，会变成万人迷',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/245d471330bcd665b45a/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfqsl6anxj2082099q3q.jpg',
				'jieguo'=>'每天都能在内裤里捡到钱',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/ce6d6006748b2aeb71ca/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfqslrporj20820990te.jpg',
				'jieguo'=>'每当听到非主流，就会变成折翼的天使',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/639e6a4a66b42660081e/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfqsm8sf3j2082099gme.jpg',
				'jieguo'=>'一声吼，方圆500里的宽带都会掉线',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/bd00ad2a6bae2d33f816/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfqsoo1mgj2082099wf5.jpg',
				'jieguo'=>'抚摸仙人掌后可以点SHI成金',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/6540c3ff7c8e6863c9c2/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfqsr8dcyj2082099750.jpg',
				'jieguo'=>'吃大白兔奶糖可以变成波霸',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/f83c2c8739310744b84a/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfqstqheaj2082099wf4.jpg',
				'jieguo'=>'喊谁名字谁变秃头',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/56e814f3c40ac5fab192/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfqsuc0lxj20820990ti.jpg',
				'jieguo'=>'可以把一年的便便一次性拉光',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/7c836f8ee834acab6668/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfqsuui3tj2082099aaw.jpg',
				'jieguo'=>'可以瞬间吞下50斤铜锣烧',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/fb34bda19d765102688a/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfqsv8y9vj2082099mxx.jpg',
				'jieguo'=>'晚上失眠后可以赤果果的飞到某人的被窝里',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/7e7a4166f0d214ceba00/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfqsvmbe6j2082099q3n.jpg',
				'jieguo'=>'可以隐身偷窥邻居洗澡',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/5d81d3020f2d962ade86/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfqsvy8slj20820990tg.jpg',
				'jieguo'=>'可以用不下垂',
		),
);
$num = $num % count($resultlist);
$result = $resultlist[$num];
if (!$result) {
	$result = $resultlist[array_rand($resultlist)];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}

$img=getImgType('./imgs/'.$num.'.png');
$content='OMG，刚刚在这个网站测出'.$name.'的特异功能居然是【'.$result['jieguo'].'】，强悍！太不可思议了~~~/偷笑。。。。快来测测#你有什么特异功能#吧~！地址：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
$pagrams['pic'] = $result['pic'];
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你有什么特异功能";
$pagrams[summary] = "你身上藏着哪些不为人知的超能力或特异功能？快来测测吧~还能帮朋友们也测测哦~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title']='【'.$result['jieguo'].'】';
$rt_info['result_img']=$result['pic'];