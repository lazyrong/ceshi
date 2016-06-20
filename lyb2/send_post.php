<?
$infos = get_user_info ();
$name = $infos ['name'];
$nick = $infos ['nick'];
$url = $infos ['url'];
$num = str_to_num ( $nick, $app_name );
$sex = get_sex ();

$resultlist = array ();
if ($sex == '2') // 如果为女
{
	$folder='boy';

$resultlist = array (
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/cfc7b00b9737a4cc26e4/2000' ,
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg08uhskcj20b409rdgp.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/2615f775728ea6e2ee10/2000' ,
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg08v6nbwj20b409rq3u.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/4e8a52d225b9580d4af4/2000' ,
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg08y33l2j20b409r756.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/2b007da9f2b2dc84ef9e/2000' ,
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg08e5obrj20b409rjs7.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/6c65f9a1d18907f0d862/2000' ,
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg08i1uqqj20b409raaw.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/7a7d92b27762239b47cc/2000' ,
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg089npj1j20b409rt9l.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/e9b15ac6d1987b67869a/2000' ,
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg08qtjqrj20b409rdgq.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/c47621d9b74eb7cdd630/2000' ,
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg08bbo4oj20b409rjs9.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/b9d79d7649daf712c034/2000' ,
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg08o2yw6j20b409rt9k.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/cc4bebfad454fdb2e1b0/2000' ,
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg08ex0ocj20b409r0tn.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/fafe210f14d99eecdd8c/2000' ,
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg08kzz5dj20b409rwfe.jpg'
		),
		array (
				'pic' => 'http://t1.qpic.cn/mblogpic/6a5186c18378f1ee5bd8/2000' ,
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg08tpq74j20b409rq3s.jpg'
		)
);
} else {
	$folder='girl';
	$resultlist = array (
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/764397a836f48e39b2a4/2000' ,
					'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg09h9l71j20b409rwfe.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/b6f30a28d70669e7848c/2000' ,
					'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebg09icdqbj20b409rjs9.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/d6b6ab1c69407fd5b30c/2000' ,
					'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg09jfns0j20b409rgmf.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/f53ac666b213ab2acd3e/2000' ,
					'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg091i4wvj20b409r3zc.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/7b30c2d00ca5ba86c08a/2000' ,
					'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg097r7dmj20b409rgmg.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/9ee0197451ac27a6299c/2000' ,
					'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg09317kmj20b409rmy1.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/cc696051c806f513de5e/2000' ,
					'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg098tvb8j20b409r754.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/65ec3fbe5b6ee0b6e2a0/2000' ,
					'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg095qs1vj20b409raax.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/e1bea6ebcb217b94dd9a/2000' ,
					'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg09bmb7qj20b409rmy1.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/1b699da586b625aeca0c/2000' ,
					'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg090poxnj20b409rq3u.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/f9f86d82fbdb2531ce7a/2000' ,
					'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg096rezkj20b409raax.jpg'
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/936fdc6a855f4e609322/2000' ,
					'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebg09ede0wj20b409r3zd.jpg'
			) 
	);
}
$num = $num % count ( $resultlist );
$result = $resultlist [$num];
if (! $result) {
	$num = array_rand ( $resultlist );
	$result = $resultlist [$num];
}
if ($num == 0) $num = 1;
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img_path='./imgs/'.$folder.'/'.$num.'.jpg';
$img=getImgType($img_path);
$img=createImg($img,$nick,80,38,13,0,15,'790');

$content = '哇！原来' . $name . '未来的另一半长这样呀，还不错哦！/偷笑 想知道你未来的另一半长什么样吗？快来测测吧！#测测你另一半长什么样#最新版出来了！测试地址：' . $url;
$content = $content . ' ，你也试试吧！';

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->测测你未来的另一半长什么样（最新版）";
$pagrams [summary] = "测测你另一半长什么样最新版出来了，想不想知道你未来的另一半长什么样子？赶快预测一下~马上知晓啦！" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_img'] = $result ['pic'];