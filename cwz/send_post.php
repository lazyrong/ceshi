<?
$infos = get_user_info ();
$name = $infos ['name'];
$nick = $infos ['nick'];
$url = $infos ['url'];
$left_px = get_left_px ( $nick );
$num = str_to_num ( $nick, $app_name );

if ($num > 50) {
	$num = ceil ( $num / 2 );
}
$len = 10; // 字符长度
$v_size = 50; // 价值
$f_size = 20; // 注解
if ($num == 0) {
	$num = 1;
}
switch ($num) {
	case 1 :
		$t_value = '20000$';
		$str = '你的初吻价值2万美元！后悔了咩？来不及了…';
		break;
	case 2 :
		$t_value = '一个棒棒糖';
		$v_size = 30;
		$str = '你的初吻早就被人用一个5毛钱的棒棒糖骗走了...';
		break;
	case 3 :
		$t_value = '一枚钻戒';
		$v_size = 30;
		$str = '你的初吻价值一枚钻戒，如果有人送你钻戒就赶紧卖了吧...';
		break;
	case 4 :
		$t_value = 'Iphone 4s';
		$len = 14;
		$v_size = 30;
		$f_size = 16;
		$str = '你的初吻价值一部iPhone4s，赶快去苹果专卖店找售货员kiss吧！';
		break;
	case 5 :
		$t_value = '一套房子';
		$v_size = 30;
		$f_size = 19;
		$len = 11;
		$str = '你的初吻价值一套房子，当然前提是你得先找到一个愿意为你付钱的笨蛋…';
		break;
	case 6 :
		$t_value = ' 500￥';
		$str = '你的初吻价值500人民币，你想用它换来什么？';
		break;
	case 7 :
		$t_value = '一套房子';
		$v_size = 30;
		$str = '你的初吻价值一套10平的房子，满足吧，毕竟是不动产…';
		break;
	case 8 :
		$t_value = '2000￥';
		$str = '你的初吻价值2千人民币。看吧，跟老爸要钱时撒点娇对你有好处…';
		break;
	case 9 :
		$t_value = '5000￥';
		$str = '你的初吻价值5000人民币，可是…可是…你个混蛋还有初吻呐？';
		break;
	case 10 :
		$t_value = '一盒杜蕾斯';
		$v_size = 30;
		$str = '你的初吻价值一盒杜蕾斯。知足吧，怎么说也是tt中的高档货了…';
		break;
	case 11 :
		$t_value = '3000$';
		$str = '你的初吻价值3千美元。可你为什么要去亲邻居家那条吉娃娃呐！！';
		break;
	case 12 :
		$t_value = '一部手机';
		$v_size = 30;
		$str = '你的初吻价值一部手机。别误会，我的意思是你要送对方一台手机…';
		break;
	case 13 :
		$t_value = '一辆QQ车';
		$v_size = 30;
		$str = '你的初吻价值一辆QQ车。不过省省吧，你的初吻早就被你爸妈夺走了…';
		break;
	case 14 :
		$t_value = '1条白金项链';
		$v_size = 30;
		$str = '你的初吻价值一条白金项链，如果你的初吻还在的话…';
		break;
	case 15 :
		$t_value = '1束狗尾巴草';
		$v_size = 30;
		$str = '你的初吻价值一束狗尾巴草。真杯具，一束狗尾巴草就把你初吻骗走了…';
		break;
	case 16 :
		$t_value = '999朵玫瑰';
		$v_size = 30;
		$str = '你的初吻价值999朵红玫瑰。好羡慕啊！不过…你的初吻还在咩？';
		break;
	case 17 :
		$t_value = '1000￥';
		$str = '你的初吻价值一千人民币。虽然很可能是对方咬破你嘴唇的医药费…';
		break;
	case 18 :
		$t_value = '一个耳光';
		$v_size = 30;
		$str = '你的初吻价值一个耳光。谁让你去强吻的啊！你个杯具…！';
		break;
	case 19 :
		$t_value = '1顿肯德基';
		$v_size = 30;
		$str = '你的初吻价值一顿肯德基。三天内谁请你吃肯德基就给谁吧…';
		break;
	case 20 :
		$t_value = '-100￥';
		$str = '你的初吻价值100人民币，我的意思是说你付给对方100人民币…';
		break;
	case 21 :
		$t_value = '30000';
		$str = '恭喜你，你的初吻价值3万！.......虽然单位是韩元...';
		break;
	case 22 :
		$t_value = '120000';
		$str = '你的初吻价值12万，但你个悲催的，干嘛没事要去亲你姐姐？…！';
		break;
	case 23 :
		$t_value = '一朵玫瑰';
		$v_size = 30;
		$str = '你的初吻价值一朵玫瑰。很不错了，表那么物资嘛…';
		break;
	case 24 :
		$t_value = '一顿饭';
		$v_size = 30;
		$str = '你的初吻价值一顿饭。如果最近有人请你吃饭，那你就要小心了…';
		break;
	case 25 :
		$t_value = '800￥';
		$str = '你的初吻价值8百人民币。如果你还不尽快用掉很可能被贬值到80…';
		break;
	case 26 :
		$t_value = '30000$';
		$str = '你的初吻价值3万美元。混蛋，你还有初吻么！！有么！！…';
		break;
	case 27 :
		$t_value = '10000￥';
		$str = '你的初吻价值一万人民币。恭喜你花了一万人民币终于把初吻送出去了！';
		break;
	case 28 :
		$t_value = '1顿肯德基';
		$v_size = 30;
		$str = '你的初吻价值一顿肯德基，前提是你得找到这个愿意为你付钱的二货…';
		break;
	case 29 :
		$t_value = '一盒杜蕾斯';
		$v_size = 30;
		$str = '你的初吻价值一盒杜蕾斯。知足吧，怎么说也是世界名牌tt…';
		break;
	case 30 :
		$t_value = '8000￥';
		$str = '你的初吻价值8千人民币。赶快去街上随便扯个人kiss吧！！';
		break;
	case 31 :
		$t_value = '7000$';
		$str = '你的初吻价值7千美元，前提是对方也是初吻~快去幼稚园找吧~';
		break;
	case 32 :
		$t_value = '一台电脑';
		$v_size = 30;
		$str = '你的初吻价值一台笔记本电脑，别误会，我是说你送对方一台~';
		break;
	case 33 :
		$t_value = '一台电脑';
		$v_size = 30;
		$str = '你的初吻价值一台苹果电脑。当然，前提是对方是苹果的售货员~';
		break;
	case 34 :
		$t_value = '一辆mini车';
		$v_size = 30;
		$str = '你的初吻价值一辆mini车。亲，你真的还有初吻咩？？';
		break;
	case 35 :
		$t_value = '一煲鸡汤';
		$v_size = 30;
		$str = '你的初吻价值一煲鸡汤。知足吧，已经很温馨了！';
		break;
	case 36 :
		$t_value = '11朵玫瑰';
		$v_size = 30;
		$str = '你的初吻价值11朵红玫瑰。知足吧，总比什么都没有好是吧~';
		break;
	case 37 :
		$t_value = '一条人命';
		$v_size = 30;
		$str = '你的初吻救了一条人命，向你致敬！对了~人工呼吸是什么感觉？';
		break;
	case 38 :
		$t_value = ' 999$';
		$str = '你的初吻价值999美元。混蛋，你还有初吻么！！有么！！…';
		break;
	case 39 :
		$t_value = '一个棉花糖';
		$v_size = 30;
		$str = '你的初吻早在7岁时就被人用一个棉花糖骗走了…';
		break;
	case 40 :
		$t_value = '一栋别墅';
		$v_size = 30;
		$str = '你的初吻价值一栋豪华别墅。亲，快去求包养吧~~~';
		break;
	case 41 :
		$t_value = '60000￥';
		$str = '你的初吻价值6万人民币，恭喜，完全是你的人品太好了~~~';
		break;
	case 42 :
		$t_value = '500万';
		$f_size = 18;
		$len = 12;
		$str = '你的初吻价值500万人民币。后悔了吧？谁让你读幼儿园时就已经强吻了别人!';
		break;
	case 43 :
		$t_value = '一个冰淇淋';
		$v_size = 30;
		$str = '你的初吻价值一个冰淇淋。还记得8岁时那个给你吃冰淇淋的人么…';
		break;
	case 44 :
		$t_value = '5元人民币';
		$v_size = 30;
		$str = '你的初吻价值5元人民币，并且正在以每天降一元的速度贬值…';
		break;
	case 45 :
		$t_value = '2元人民币';
		$v_size = 30;
		$str = '你的初吻价值2元人民币。也不错啦，可以买瓶酸酸奶喝…';
		break;
	case 46 :
		$t_value = '100000￥';
		$v_size = 40;
		$f_size = 18;
		$len = 12;
		$str = '你的初吻价值十万人民币。但你用这钱换了10个价值一万的初吻…你还是赚了…';
		break;
	case 47 :
		$t_value = '100万$';
		$v_size = 30;
		$f_size = 18;
		$len = 12;
		$str = '你的初吻价值一百万美元，但你用这钱换了100个价值一万美元的初吻…你赚大了…';
		break;
	case 48 :
		$t_value = '一辆法拉利';
		$v_size = 30;
		$f_size = 18;
		$len = 12;
		$str = '你的初吻价值一辆法拉利跑车。但你的初吻早在10岁溺水时就被人工呼吸了…';
		break;
	case 49 :
		$t_value = '1000$';
		$str = '你的初吻价值一千美元。但是价值是一回事，有没有人要是另一回事…';
		break;
	case 50 :
		$t_value = '一套房子';
		$v_size = 30;
		$f_size = 18;
		$len = 12;
		$str = '你的初吻价值一套300平的房子。但会在1小时后失效…赶紧去街上随便扯个人kiss吧！';
		break;
}

$img_path = './imgs/cwz.png';
$img = getImgType ( $img_path );
$img = createImg ( $img, $nick, 120, 120, 11, 0, 17, '790' );
$img = createImg ( $img, $t_value, 110, 200, 11, 3, $v_size, 'f37', 'katong' );
$img = createImg ( $img, $str, 70, 260, $len, 5, $f_size );

$content = '经过测试，原来' . $name . '的初吻居然这么值钱啊~哈哈~！初吻是一个人一生中最美妙的事情之一，你知道#你的初吻值多少钱#吗？快来测测吧~~地址：' . $url;
$content = $content . ' ，你也试试吧！';
$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'png';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你的初吻值多少钱";
$pagrams [summary] = "据说初吻是人一生中最美妙的事情之一...你知道自己的初吻值多少钱吗？快来测测吧~" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $str . '】';