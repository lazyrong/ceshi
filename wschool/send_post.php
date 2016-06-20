<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);
$left_px=get_left_px($nick);
$left_px+=25;

$resultlist = array (
		0 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/0d61d8db87dd957aac7a/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfotdszbcj208c08cmy7.jpg',
				'jieguo' => '浙江大学',
		),
		1 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/3356b85d77d28ca936de/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfovb2tivj208c08cjsl.jpg',
				'jieguo' => '东南大学',
		),
		2 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/f874195dcdcaf43155fc/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfothjlgqj208c08c75f.jpg',
				'jieguo' => '中国科学技术大学',
		),
		3 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a08e7388e22ce8701014/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebflgm98f3j208c08caba.jpg',
				'jieguo' => '北京大学',
		),
		4 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/226bcc1e41269b9c2770/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebflgn27d3j208c08c75c.jpg',
				'jieguo' => '复旦大学',
		),
		5 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/04ba0bfe29d1e6bfe1ec/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebflgnl0xuj208c08c3zn.jpg',
				'jieguo' => '武汉大学',
		),
		6 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/23cd0806fcbae725cc4e/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebflgo918oj208c08c3zp.jpg',
				'jieguo' => '中国政法大学',
		),
		7 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/fccf0cbf32367eec3724/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebflgonwafj208c08c0tu.jpg',
				'jieguo' => '山东大学',
		),
		8 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/0590da0a2b0a881d70d2/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebflgr0csej208c08c75g.jpg',
				'jieguo' => '四川大学',
		),
		9 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/86003413186968cefe92/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebflgre5bcj208c08cabf.jpg',
				'jieguo' => '上海交通大学',
		),
		10 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/7c7f10c4ddd0c5982a4c/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebflgruzqsj208c08cq42.jpg',
				'jieguo' => '中山大学',
		),
		11 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/358742de893521983e76/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebflgsa78vj208c08ct9y.jpg',
				'jieguo' => '哈尔滨工业大学',
		),
		12 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/daa68daf201007e07702/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebflgun0k7j208c08cjsm.jpg',
				'jieguo' => '北京邮电大学',
		),
		13 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/9d1fae334822424cbe70/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebflgwykyhj208c08cgmt.jpg',
				'jieguo' => '厦门大学',
		),
		14 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/38481619d26d01697918/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebflgxfakfj208c08caba.jpg',
				'jieguo' => '中国人民大学',
		),
		15 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/883b3637c49c38e79e70/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebflgy1x02j208c08c3zp.jpg',
				'jieguo' => '南开大学',
		),
		16 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/c01243ed798e97409692/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebflgygfd6j208c08c3zr.jpg',
				'jieguo' => '西安交通大学',
		),
		17 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/c454fad1de1af2146d7e/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebflgyuy7rj208c08cjsl.jpg',
				'jieguo' => '同济大学',
		),
		18 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/23cd0806fcbae725cc4e/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebflgzb0oaj208c08c3zp.jpg',
				'jieguo' => '中国政法大学',
		),
		19 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/3356b85d77d28ca936de/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebflh1mbrgj208c08cjsl.jpg',
				'jieguo' => '东南大学',
		),
		20 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/358742de893521983e76/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebflh40gj3j208c08ct9y.jpg',
				'jieguo' => '哈尔滨工业大学',
		),
		21 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/bc8bf96587ed6bcde982/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebflh4czytj208c08cdgt.jpg',
				'jieguo' => '南京大学',
		),
		22 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/2db6e4136121aa689686/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebflh4sl9ej208c08c3zt.jpg',
				'jieguo' => '清华大学',
		),
);

$num = $num % count($resultlist);
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img=getImgType('./imgs/'.$num.'.jpg');
$content='每个人心中都有一个名校梦，原来最适合【'.$nick.'】去读的名校是【'.$result['jieguo'].'】，确实蛮不错的！国内哪所名校最适合你，快来测测吧：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams['pic'] = $result['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->国内哪所名校最适合你";
$pagrams[summary] = "不一样的大学，演绎出截然不同的人生。国内哪所名校最适合你？快来测测吧~".$pagrams[url];
$rt_info=post_send2($pagrams);

$rt_info['result_img'] = $result['pic'];
$rt_info['result_title'] = $result ['jieguo'];