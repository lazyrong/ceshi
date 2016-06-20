<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);
$resultlist = array(
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/2c70ca0e4bbf7f10d0fa/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfwzhak7qj208c08cmxq.jpg',
				'jieguo'=>'睿智的头脑',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/4ed87202e8747eda6378/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfwzhuk74j208c08ct9d.jpg',
				'jieguo'=>'不可估量的钱途',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/31df83868233735f8502/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfwzimdacj208c08ct9b.jpg',
				'jieguo'=>'美丽的容貌',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/eefa3503d14d7ac1d8e4/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfwzj1hqxj208c08c3z3.jpg',
				'jieguo'=>'旺盛的生命力',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/0be5d16018f6bb85f5d2/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfwzjtvnjj208c08c0tb.jpg',
				'jieguo'=>'暴强的性欲',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/367bdf7c3687f53fa0b2/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfwzk5zbhj208c08c0ta.jpg',
				'jieguo'=>'色狼的本质',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/08886fd001aae517c178/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfwzkrp8hj208c08cq3g.jpg',
				'jieguo'=>'纯洁的心灵',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/66d8185574bbcc5ea0ae/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfwzl5ropj208c08ct97.jpg',
				'jieguo'=>'悲剧的人生',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/13635fc8567696787728/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfwzli7xcj208c08cq3i.jpg',
				'jieguo'=>'成熟的头脑',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/3331e1204e0eb4f71be2/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfwzns857j208c08caal.jpg',
				'jieguo'=>'优雅的气质',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/d63bbd369375113debcc/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfwzo2bcxj208c08cq3f.jpg',
				'jieguo'=>'丑陋的内心',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/62f091d05530846a8794/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfwzqg5yhj208c08cgm6.jpg',
				'jieguo'=>'闷骚的性格',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/dcf6ebaa31f588cf48b0/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfwzqsp8hj208c08cgma.jpg',
				'jieguo'=>'丰富的情感经历',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/7fc388779e0ae06b6580/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfwzr6vjkj208c08c0ta.jpg',
				'jieguo'=>'平坦的仕途',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/ce63886c2939ed20d850/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfwzrp101j208c08cmxo.jpg',
				'jieguo'=>'猥琐的内心',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/efebce6b9e9ee68baf7c/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfwzs2j47j208c08cq3k.jpg',
				'jieguo'=>'超强的忍耐力',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/a2471acecb2b97c027be/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfwzujbqyj208c08cwf4.jpg',
				'jieguo'=>'大富大贵的前途',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/c1b70ec9b7a4cc1f71ca/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfwzwtd1rj208c08caaj.jpg',
				'jieguo'=>'顺利的一生',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/bf964e1e01d5713506e8/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfwzx977wj208c08caat.jpg',
				'jieguo'=>'浑然天成的王者风范',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/03475f8a096221865130/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfwzxlu55j208c08caal.jpg',
				'jieguo'=>'过人的智商',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/93ff25c5fda2903bd9d8/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfwzy248hj208c08cq3f.jpg',
				'jieguo'=>'善良的内心',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/cba190276e5f7d34f286/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfwzyhp6uj208c08cjrx.jpg',
				'jieguo'=>'单纯的外表',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/4348a2ed8eab29137f1c/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfx00nj68j208c08cwez.jpg',
				'jieguo'=>'色情的内心',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/9bfc975888cc326398e8/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfx02wovlj208c08c3z2.jpg',
				'jieguo'=>'动人的嗓音',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/ad4eb1417827512fa5b2/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfx05c3toj208c08c3z3.jpg',
				'jieguo'=>'幼稚的思想',
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
$img_path='./imgs/'.$num.'.jpg';
$img=getImgType($img_path);

$content='终于知道了，原来'.$name.'的名字的含义是【'.$result['jieguo'].'】，仔细想想还真是这样的，测试地址：'.$url.' 快来测测你名字的含义吧!';

$pagrams = array();
$pagrams[content] = $content;
$pagrams['pic'] = $result['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->测测你名字的含义";
$pagrams[summary] = "名字跟随一个人一生，想知道你的名字的含义吗？快来测试一下吧！ ".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$result['jieguo'].'】';
$rt_info['result_img'] =  $result['pic'];