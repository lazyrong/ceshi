<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

$resultlist = array(
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/bc3a0c94078f487c984a/2000',
			'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg0npb36zj208c08cjsf.jpg',
			'jieguo'=>'恶魔小丑',
			'text'=>'睿智的头脑',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/ad9b2e3806aedcec0ec4/2000',
			'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg0nsd9foj208c08cq3w.jpg',
			'jieguo'=>'复仇焰魂',
			'text'=>'cd完我会回来继续邪恶的',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/7b1879bd242d94483276/2000',
			'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg0ntdp4jj208c08c3zg.jpg',
			'jieguo'=>'无极剑圣',
			'text'=>'选择并非错误，我只追求速度',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/411a9687a3b69d4ac174/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebg0nuf1ckj208c08cdgt.jpg',
			'jieguo'=>'卡牌大师',
			'text'=>'顺我者昌，逆我者亡',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/5f1ac6271a392d643814/2000',
			'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg0nygpqmj208c08cdgt.jpg',
			'jieguo'=>'麦林炮手',
			'text'=>'我炮娘破的就是你的甲',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/48e231b01d460d6cecea/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebg0nzl3e9j208c08c3zg.jpg',
			'jieguo'=>'蛮族之王',
			'text'=>'不只是5秒的真男人',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/7632cdd633911e3d65ca/2000',
			'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg0o0p141j208c08c0tp.jpg',
			'jieguo'=>'海洋之灾',
			'text'=>'去深海玩的开心的，旱鸭子',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/d15cad811b25bf797caa/2000',
			'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg0o3flzyj208c08ct9s.jpg',
			'jieguo'=>'德邦总管',
			'text'=>'所有说我坑爹的人你们最坑爹',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/190081048869c7f55f02/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebg0o7ihsej208c08c0to.jpg',
			'jieguo'=>'寒冰射手',
			'text'=>'我瞄得很稳，你要来几发么',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/a19954facf8a945d9af8/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebg0oa4b6yj208c08ct9o.jpg',
			'jieguo'=>'深渊巨口',
			'text'=>'用餐时间到了',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/f725d5c9a3420f4911a6/2000',
			'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg0od2d9aj208c08c75a.jpg',
			'jieguo'=>'死亡颂唱者',
			'text'=>'我活着就是让你们受罪',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/9ee5e52909a514d9f8e2/2000',
			'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg0oj14nsj208c08ct9s.jpg',
			'jieguo'=>'寡妇制造者',
			'text'=>'我可能很坏，但我感觉很爽',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/fa96554a9a199cf10ddc/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebg0om0ff7j208c08c3zf.jpg',
			'jieguo'=>'诺克萨瑟之手',
			'text'=>'一把从天而降的巨斧',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/bbb3fb07b74ec5d2e0e0/2000',
			'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg0omxzcwj208c08c3zh.jpg',
			'jieguo'=>'死亡领主',
			'text'=>'走别人的路，让别人无路可走',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/7d5bee1259ffbb47353a/2000',
			'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg0oo7o7nj208c08cmy6.jpg',
			'jieguo'=>'披甲龙龟',
			'text'=>'其实我是只黑道犬，汪',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/d20af47df3e47d3c2362/2000',
			'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg0ot7lejj208c08cwfg.jpg',
			'jieguo'=>'暗夜猎手',
			'text'=>'记住！灵巧不等于猥琐哦',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/d9c42fe4125c7ea994cc/2000',
			'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg0otyjuoj208c08c3zh.jpg',
			'jieguo'=>'殇之木乃伊',
			'text'=>'我的安静是要让你蛋疼',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/60788897486358fa9664/2000',
			'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg0ovwb45j208c08c3zi.jpg',
			'jieguo'=>'蒸汽机器人',
			'text'=>'其实我只是台机器',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/78692c5471b15584ce16/2000',
			'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg0oxtkpvj208c08c3zg.jpg',
			'jieguo'=>'末日使者',
			'text'=>'我没有脑子，但是很快你也会没有',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/9ecc666dd9dc3487c6ce/2000',
			'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg0oz1wl6j208c08c758.jpg',
			'jieguo'=>'德玛西亚之力',
			'text'=>'每个草丛后面都有一个盖伦',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/663d70b30ab27fee3926/2000',
			'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg0p30mytj208c08c0tq.jpg',
			'jieguo'=>'流浪法师',
			'text'=>'靠蓝吃饭的家伙',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/c894bd966a0be7c3cb4e/2000',
			'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg0p5w86oj208c08cmy7.jpg',
			'jieguo'=>'无双剑姬',
			'text'=>'好漂亮的女刺客',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/15c25ade51efc44de820/2000',
			'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg0p78lghj208c08cgmm.jpg',
			'jieguo'=>'沃里克',
			'text'=>'只要不下流，我们就是主流',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/2b43083fb656de78a2ec/2000',
			'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg0p8aih8j208c08cjsd.jpg',
			'jieguo'=>'狂战士',
			'text'=>'我的大斧早已饥渴难耐了',
	),
	array(
			'pic'=>'http://app.qpic.cn/mblogpic/3d32df90a8e2589730ea/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebg0p9deqbj208c08ct9m.jpg',
			'jieguo'=>'黑暗之女',
			'text'=>'你闻起来像烧焦了一样',
	),
);
$num = $num % count($resultlist);
$result = $resultlist[$num];
if (!$result) {
	$num = array_rand($resultlist);
	$result = $resultlist[$num];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img_path='./imgs/'.$num.'.jpg';
$img=getImgType($img_path);

$content='LOL里每个英雄背后都隐藏着一段故事，经过测试，'.$name.'在lol世界里是【'.$result['jieguo'].'】：'.$result['text'].'！测试你是LOL中的哪个英雄。地址：'.$url.' 快来试试吧！';

$pagrams = array();
$pagrams[content] = $content;
$pagrams['pic'] = $result['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试 >你是LOL中的哪个英雄";
$pagrams[summary] = "LOL里每个英雄背后都隐藏着一段故事，在LOL世界里你是lol中的哪个英雄？快来测试一下吧！ ".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$result['jieguo'].'】';
$rt_info['result_img'] =  $result['pic'];