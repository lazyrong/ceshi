<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);
/*
if($num>20)
{
	$num=ceil($num/5);
}

$img_path='./imgs/'.$num.'.jpg';
$img=getImgType($img_path);
*/


$resultlist = array(
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/dbb666b7b8a258115e88/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebez0rjvpcj2082096aap.jpg',
				'jieguo'=>'农场主',
				'text'=>'最记仇、为人老实',
				'img' => './imgs/18.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/c64f6af5b61f9fdb7be4/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebez0saozvj2082096gm8.jpg',
				'jieguo'=>'建筑工程师',
				'text'=>'浪漫、多情',
				'img' => './imgs/19.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/e627926af8f1cc6ee552/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebez0vupbuj2082096gm5.jpg',
				'jieguo'=>'陆军少校',
				'text'=>'安稳、喜欢追求学问',
				'img' => './imgs/20.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/301ddccd8bf55b782312/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebez0dcw52j208209674v.jpg',
				'jieguo'=>'摄影师',
				'text'=>'怕不被别人尊重',
				'img' => './imgs/10.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/86ceb8c1b06a695fa236/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebez0kwmh8j2082096gm4.jpg',
				'jieguo'=>'护林员',
				'text'=>'自欺欺人、非常顽固',
				'img' => './imgs/14.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/700a3c12d726546aad76/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebez0ft9sdj2082096gm6.jpg',
				'jieguo'=>'快递员',
				'text'=>'冲动爱冒险、慷慨、天不怕地不怕',
				'img' => './imgs/11.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/e7a32d928498d888af7a/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebez0lbm0vj2082096js0.jpg',
				'jieguo'=>'化妆品经销商',
				'text'=>'有语言天分、最重视自己的面子',
				'img' => './imgs/15.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/62abbbad9ec7c62a1d1c/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebez0lvesdj2082096mxw.jpg',
				'jieguo'=>'石油工人',
				'text'=>'狡猾、残酷、生性多疑',
				'img' => './imgs/16.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/dbb666b7b8a258115e88/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebez0ie10xj2082096aap.jpg',
				'jieguo'=>'农场主',
				'text'=>'最记仇、为人老实',
				'img' => './imgs/12.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/6906b58b1eb6a5a4e980/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebez0anlmbj2082096mxr.jpg',
				'jieguo'=>'园艺师',
				'text'=>'沟通力强、为达目的不折手段',
				'img' => './imgs/21.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/0b20cf28bdccdc2cd6d8/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebez0jfy8ej2082096q3h.jpg',
				'jieguo'=>'小学老师',
				'text'=>'容易浮躁、怕寂寞',
				'img' => './imgs/13.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/5b51d3b73472d2ffc886/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebez0opvqmj2082096wf4.jpg',
				'jieguo'=>'染料厂厂长',
				'text'=>'创新、多变、倔强、反叛',
				'img' => './imgs/17.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/3091cd24f40cac308e66/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebez018jrbj2082096wf5.jpg',
				'jieguo'=>'电信营业员',
				'text'=>'乐观豁达、有语言天赋',
				'img' => './imgs/22.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/f3266a04737bf6b1f0a6/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebez07opeoj2082096js3.jpg',
				'jieguo'=>'出租司机',
				'text'=>'性格严谨、多愁善感',
				'img' => './imgs/22.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/a51c6e827e927eafdcdc/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebeyzw6gvhj2082096q3l.jpg',
				'jieguo'=>'铁炉工',
				'text'=>'外形优雅、亲切善良',
				'img' => './imgs/0.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/e8f2ac30c46d1f3ad800/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebez03ygj1j2082096q3k.jpg',
				'jieguo'=>'农民',
				'text'=>'喜欢赌博性的活动，幽默奔放',
				'img' => './imgs/24.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/c547e3d4c07401923d5e/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebeyzzhs3jj2082096aao.jpg',
				'jieguo'=>'铁匠',
				'text'=>'朋友缘极好、有艺术的品味和能力',
				'img' => './imgs/1.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/dc66ed1d8f75b6d3ae86/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebez04hoz8j2082096gm7.jpg',
				'jieguo'=>'兽医',
				'text'=>'喜爱变化、爱挑战',
				'img' => './imgs/25.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/ce3ca2b4eee28c66a09e/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebez00az0yj2082096mxp.jpg',
				'jieguo'=>'装修包工头',
				'text'=>'忧心忡忡、懂得保护自己',
				'img' => './imgs/26.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/67de0ea93cf3dba4d8ae/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebez077y9aj208209674x.jpg',
				'jieguo'=>'橡胶制品个体户',
				'text'=>'优雅、迷人、喜欢帮助别人',
				'img' => './imgs/27.jpg'
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/64c4d64e24307b370d3e/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebez083wcyj2082096t9a.jpg',
				'jieguo'=>'律师',
				'text'=>'占有欲强、喜欢忙碌',
				'img' => './imgs/28.jpg'
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
$img=getImgType($result['img']);
$str[0]='哈哈。。。';
$str[1]='真是想不到啊。。哈哈。。。';
$str[2]='/偷笑。。。。';
$str[3]='/偷笑。。哈哈。。。';
$str[4]='OMG。。/偷笑。。。';
$str=$str[rand(0,4)];
$content='原来'.$name.'下辈子是做这个的！'.$str.'想知道#下辈子你是做什么的#吗？快来测测吧~：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams['pic'] = $result['pic'];
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->下辈子你是做什么的";
$pagrams[summary] = "想不想知道自己下辈子是做什么的？马上登录测试就能知道！".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] = $result['jieguo'];
$rt_info['result_pic'] = $result['pic'];