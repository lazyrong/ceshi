<?
$infos=get_user_info();
$name=$_COOKIE['v_name'];
$nick=$_COOKIE['v_nick'];
$url=$infos['url'];
$nick_len=mb_strlen($nick,'UTF8');


$age=0;
$i=1;
while($i<9)
{
	$age=$age+$_POST['i'.$i];
	$i++;
}

$result = array (
		0 => array (
				'500'=>array('pic'=>'http://t2.qpic.cn/mblogpic/fd5b166ccf18a05ea4ee/2000',
						'score'=>'500分',
						'img'=>'./imgs/500.jpg'
				),
		),
		1 => array (
				'500'=>array('pic'=>'http://t2.qpic.cn/mblogpic/fd5b166ccf18a05ea4ee/2000',
						'score'=>'500分',
						'img'=>'./imgs/500.jpg'
				),
		),
		2 => array (
				'500'=>array('pic'=>'http://t2.qpic.cn/mblogpic/fd5b166ccf18a05ea4ee/2000',
						'score'=>'500分',
						'img'=>'./imgs/500.jpg'
				),
		),
		3 => array (
				'500'=>array('pic'=>'http://t2.qpic.cn/mblogpic/fd5b166ccf18a05ea4ee/2000',
						'score'=>'500分',
						'img'=>'./imgs/500.jpg'
				),
		),
		4 => array (
				'517'=>array('pic'=>'http://t2.qpic.cn/mblogpic/cfbb3697f0993355c78a/2000',
						'score'=>'517分',
						'img'=>'./imgs/517.jpg'
				),
		),
		5 => array (
				'520'=>array('pic'=>'http://t2.qpic.cn/mblogpic/f48f9d3343a2035b24d8/2000',
						'score'=>'520分',
						'img'=>'./imgs/520.jpg'
				),
				'532'=>array('pic'=>'http://t2.qpic.cn/mblogpic/5d76742ba4a48bc086d4/2000',
						'score'=>'532分',
						'img'=>'./imgs/532.jpg'
				),
		),
		6 => array (
				'557'=>array('pic'=>'http://t2.qpic.cn/mblogpic/36747f348cd60b28b696/2000',
						'score'=>'557分',
						'img'=>'./imgs/557.jpg'
				),
				'568'=>array('pic'=>'http://t2.qpic.cn/mblogpic/d6dcd33c12c0424134da/2000',
						'score'=>'568分',
						'img'=>'./imgs/568.jpg'
				),
				'579'=>array('pic'=>'http://t2.qpic.cn/mblogpic/3c575434b5eac79f4738/2000',
						'score'=>'579分',
						'img'=>'./imgs/579.jpg'
				),
		),
		7 => array (
				'592'=>array('pic'=>'http://t2.qpic.cn/mblogpic/aa36a4409ac644022c00/2000',
						'score'=>'592分',
						'img'=>'./imgs/592.jpg'
				),
				'604'=>array('pic'=>'http://t2.qpic.cn/mblogpic/a771180b2aa4c180db56/2000',
						'score'=>'604分',
						'img'=>'./imgs/604.jpg'
				),
				'617'=>array('pic'=>'http://t2.qpic.cn/mblogpic/0af7b15873767a07f16c/2000',
						'score'=>'617分',
						'img'=>'./imgs/617.jpg'
				),
				'626'=>array('pic'=>'http://t2.qpic.cn/mblogpic/6cc865d0f13a82bb782e/2000',
						'score'=>'626分',
						'img'=>'./imgs/626.jpg'
				),
		),
		8 => array (
				'638'=>array('pic'=>'http://t2.qpic.cn/mblogpic/e0489b3a6f02f4881118/2000',
						'score'=>'638分',
						'img'=>'./imgs/638.jpg'
				),
				'648'=>array('pic'=>'http://t2.qpic.cn/mblogpic/1e99594944450ef2bc34/2000',
						'score'=>'648分',
						'img'=>'./imgs/648.jpg'
				),
				'656'=>array('pic'=>'http://t2.qpic.cn/mblogpic/6c1bd8939e0dae5a6d2a/2000',
						'score'=>'656分',
						'img'=>'./imgs/656.jpg'
				),
				'667'=>array('pic'=>'http://t2.qpic.cn/mblogpic/b21245589fa97ea0f3e0/2000',
						'score'=>'667分',
						'img'=>'./imgs/667.jpg'
				),
		),
		9 => array (
				'673'=>array('pic'=>'http://t2.qpic.cn/mblogpic/6a3e6489f8b02a294472/2000',
						'score'=>'673分',
						'img'=>'./imgs/673.jpg'
				),
				'688'=>array('pic'=>'http://t2.qpic.cn/mblogpic/89cd9cda4410d2183b36/2000',
						'score'=>'688分',
						'img'=>'./imgs/688.jpg'
				),
				'695'=>array('pic'=>'http://t2.qpic.cn/mblogpic/fc9099643e3f000e3190/2000',
						'score'=>'695分',
						'img'=>'./imgs/695.jpg'
				),
				'702'=>array('pic'=>'http://t2.qpic.cn/mblogpic/dc75338e76c23b0ca08c/2000',
						'score'=>'702分',
						'img'=>'./imgs/702.jpg'
				),
		),
		10 => array (
				'717'=>array('pic'=>'http://t2.qpic.cn/mblogpic/923e64691ae4b9b6dada/2000',
						'score'=>'717分',
						'img'=>'./imgs/717.jpg'
				),
				'728'=>array('pic'=>'http://t2.qpic.cn/mblogpic/3f27f5f69c26bf02720e/2000',
						'score'=>'728分',
						'img'=>'./imgs/728.jpg'
				),
				'733'=>array('pic'=>'http://t2.qpic.cn/mblogpic/03a74159745650f1725a/2000',
						'score'=>'733分',
						'img'=>'./imgs/733.jpg'
				),
		),
		11 => array (
				'742'=>array('pic'=>'http://t2.qpic.cn/mblogpic/c6e7ead10f3d8ee9b984/2000',
						'score'=>'742分',
						'img'=>'./imgs/742.jpg'
				),
				'749'=>array('pic'=>'http://t2.qpic.cn/mblogpic/06d1ced8dcd49089f3be/2000',
						'score'=>'749分',
						'img'=>'./imgs/749.jpg'
				),
		),
		12 => array (
				'750'=>array('pic'=>'http://t2.qpic.cn/mblogpic/e39d388da9e68a0325ca/2000',
						'score'=>'750分',
						'img'=>'./imgs/750.jpg'
				),
		),
		13 => array (
				'750'=>array('pic'=>'http://t2.qpic.cn/mblogpic/e39d388da9e68a0325ca/2000',
						'score'=>'750分',
						'img'=>'./imgs/750.jpg'
				),
		),
		14 => array (
				'750'=>array('pic'=>'http://t2.qpic.cn/mblogpic/e39d388da9e68a0325ca/2000',
						'score'=>'750分',
						'img'=>'./imgs/750.jpg'
				),
		),
		15 => array (
				'750'=>array('pic'=>'http://t2.qpic.cn/mblogpic/e39d388da9e68a0325ca/2000',
						'score'=>'750分',
						'img'=>'./imgs/750.jpg'
				),
		),
		16 => array (
				'750'=>array('pic'=>'http://t2.qpic.cn/mblogpic/e39d388da9e68a0325ca/2000',
						'score'=>'750分',
						'img'=>'./imgs/750.jpg'
				),
		),
);    

$randresult = $result[$age];
if (empty($randresult)) {
	$randresult = $result[array_rand($result)];
}
$scoreresult = $randresult[array_rand($randresult)];

$img=getImgType($scoreresult['img']);	


$content='经过测试，我的高考成绩居然是 '.$scoreresult['score'].' ！想知道未来你高考能考多少分吗？完成8个测试题就能知道结果，快来试试吧！：'.$url;
$pagrams = array();
$pagrams[content] = $content;
$pagrams['pic'] = $scoreresult['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->测试你的高考分数";
$pagrams[summary] = "回答8个问题，试试最后能得到多少分~";
$rt_info=post_send2($pagrams);

$rt_info ['result_title'] = '【得分：'.$scoreresult['score'].'，总分750分】';