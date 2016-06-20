<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);
$left_px=get_left_px($nick);
$left_px+=25;
$sex=get_sex();
$resultlist = array();
if ($sex == 2) {

	$resultlist = array (
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/fb448c5ab68be8a228c0/2000',
					'pic_sina' => '',
					'jieguo' => 'Chrystal酒店继承人【刘莱茜】',
					'img'=>'./imgs/result/girl/1.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/7343c18ec9d3057df45c/2000',
					'pic_sina' => '',
					'jieguo' => 'Mega娱乐继承人【李宝娜】',
					'img'=>'./imgs/result/girl/2.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/54a1d892998b3c383b4e/2000',
					'pic_sina' => '',
					'jieguo' => '帝国高中老师【全贤珠】',
					'img'=>'./imgs/result/girl/3.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/19459ddb7a553e04da3a/2000',
					'pic_sina' => '',
					'jieguo' => '贫穷继承人【车恩尚】',
					'img'=>'./imgs/result/girl/4.jpg'
			),
	);
} else {

	$resultlist = array (
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/4b56d48f3c63119bfa76/2000',
					'pic_sina' => '',
					'jieguo' => '帝国集团继承人【金湠】',
					'img'=>'./imgs/result/boy/1.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/a61d49c39b39c9f06930/2000',
					'pic_sina' => '',
					'jieguo' => '车恩尚的青梅竹马【尹灿荣】',
					'img'=>'./imgs/result/boy/2.jpg'
			),

			array (
					'pic' => 'http://app.qpic.cn/mblogpic/81f7764dcf9ffe58d8d0/2000',
					'pic_sina' => '',
					'jieguo' => '权利继承人【李孝信】',
					'img'=>'./imgs/result/boy/3.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/07a51cf9220204bdbefc/2000',
					'pic_sina' => '',
					'jieguo' => 'Welcome度假村继承人【崔永道】',
					'img'=>'./imgs/result/boy/4.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/b6b60e1a66fe333bc474/2000',
					'pic_sina' => '',
					'jieguo' => '帝国集团社长【金源】',
					'img'=>'./imgs/result/boy/5.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/81f7764dcf9ffe58d8d0/2000',
					'pic_sina' => '',
					'jieguo' => '权利继承人【李孝信】',
					'img'=>'./imgs/result/boy/6.jpg'
			),
	);
}
$num = $num % count($resultlist);
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}
$img=getImgType($result['img']);
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$content = '哈哈，经过专业分析，【' . $name . '】在《继承者们》里面居然会是' . $result ['jieguo'] . '，赶快来测测你会是《继承者们》里面的谁！测试地址：' . $url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams['pic'] = $result['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你是《继承者们》里的谁？";
$pagrams[summary] = "小伙伴们快来测测你是《继承者们》里的谁吧！测试地址：".$pagrams[url];
$rt_info=post_send2($pagrams);

$rt_info['result_img'] = $result['pic'];
$rt_info['result_title'] = $result ['jieguo'];