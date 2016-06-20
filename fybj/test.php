<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='fybj';
setcookie('v_appname',$app_name, time()+3000, '/');

$questionAnswerList = array(
		array('question'=>'鸡贼的意思是',
				'answers'=>array(
						array('option'=>'小偷小摸的人', 'value'=>'0' ),
						array('option'=>'贪吃贪嘴的人', 'value'=>'0' ),
						array('option'=>'胆量很大的人', 'value'=>'0' ),
						array('option'=>'小气吝啬的人', 'value'=>'4' ),
				)),
		array('question'=>'果儿的意思是',
				'answers'=>array(
						array('option'=>'没心眼儿的男人', 'value'=>'0' ),
						array('option'=>'被泡的女孩', 'value'=>'4' ),
						array('option'=>'生病的老人', 'value'=>'0' ),
						array('option'=>'不听话的孩子', 'value'=>'0' ),
				)),
		array('question'=>'尖果的意思是',
				'answers'=>array(
						array('option'=>'尖刻的男人', 'value'=>'0' ),
						array('option'=>'尖刻的女人', 'value'=>'0' ),
						array('option'=>'漂亮的男人', 'value'=>'0' ),
						array('option'=>'漂亮的女孩', 'value'=>'4' ),
				)),
		array('question'=>'傍家儿（音尖儿）的意思是',
				'answers'=>array(
						array('option'=>'亲人', 'value'=>'0' ),
						array('option'=>'从小一起长大的朋友', 'value'=>'0' ),
						array('option'=>'情妇(俗称二奶)', 'value'=>'4' ),
						array('option'=>'邻居', 'value'=>'0' ),
				)),
		array('question'=>'摔咧子的意思是',
				'answers'=>array(
						array('option'=>'摔东西', 'value'=>'0' ),
						array('option'=>'发脾气', 'value'=>'4' ),
						array('option'=>'甩手不管了', 'value'=>'0' ),
						array('option'=>'遭到挫折,失败,摔跟头', 'value'=>'0' ),
				)),
		array('question'=>'拉了胯的意思是',
				'answers'=>array(
						array('option'=>'把胯部拉伤了', 'value'=>'0' ),
						array('option'=>'丢面子了', 'value'=>'0' ),
						array('option'=>'拉人后腿了', 'value'=>'0' ),
						array('option'=>'服软了', 'value'=>'4' ),
				)),
		array('question'=>'底儿掉的意思是',
				'answers'=>array(
						array('option'=>'摸清对方底细', 'value'=>'4' ),
						array('option'=>'露了底了', 'value'=>'0' ),
						array('option'=>'粗制滥造', 'value'=>'0' ),
						array('option'=>'发生彻底变化', 'value'=>'0' ),
				)),
		array('question'=>'把不住边的意思是',
				'answers'=>array(
						array('option'=>'形容宽阔,无边无际', 'value'=>'0' ),
						array('option'=>'形容事物难以驾御', 'value'=>'0' ),
						array('option'=>'形容说话云山雾罩,胡说八道', 'value'=>'4' ),
						array('option'=>'形容做事道行不够', 'value'=>'0' ),
				)),
		array('question'=>'炸庙的意思是',
				'answers'=>array(
						array('option'=>'袭击警察局', 'value'=>'0' ),
						array('option'=>'一种游戏', 'value'=>'0' ),
						array('option'=>'咋咋唿唿的', 'value'=>'0' ),
						array('option'=>'惊愕、急眼', 'value'=>'4' ),
				)),
		array('question'=>'撂高儿的意思是',
				'answers'=>array(
						array('option'=>'一种游戏', 'value'=>'0' ),
						array('option'=>'把东西放在顶端', 'value'=>'0' ),
						array('option'=>'叠罗汉', 'value'=>'0' ),
						array('option'=>'观察,考察', 'value'=>'4' ),
				)),
		array('question'=>'掉链子的意思是',
				'answers'=>array(
						array('option'=>'由于意外无法兑现承诺', 'value'=>'4' ),
						array('option'=>'自行车坏了', 'value'=>'0' ),
						array('option'=>'背后说别人坏话，告状', 'value'=>'0' ),
						array('option'=>'利用某项权力或地位暗中欺负人', 'value'=>'0' ),
				)),
		array('question'=>'瞎了的意思是',
				'answers'=>array(
						array('option'=>'看不清东西', 'value'=>'0' ),
						array('option'=>'倒霉了、完了', 'value'=>'4' ),
						array('option'=>'累死了', 'value'=>'0' ),
						array('option'=>'白费劲了', 'value'=>'0' ),
				)),
		array('question'=>'勺上的意思是',
				'answers'=>array(
						array('option'=>'连带着把他也给打了', 'value'=>'4' ),
						array('option'=>'勺子的上面', 'value'=>'0' ),
						array('option'=>'年轻的时候', 'value'=>'0' ),
						array('option'=>'有时间就去', 'value'=>'0' ),
				)),
		array('question'=>'末了儿的意思是',
				'answers'=>array(
						array('option'=>'最后一名', 'value'=>'0' ),
						array('option'=>'最终', 'value'=>'4' ),
						array('option'=>'非常小的东西', 'value'=>'0' ),
						array('option'=>'不可能的事情', 'value'=>'0' ),
				)),
		array('question'=>'点儿背的意思是',
				'answers'=>array(
						array('option'=>'指路', 'value'=>'0' ),
						array('option'=>'天气不好', 'value'=>'0' ),
						array('option'=>'运气不好', 'value'=>'4' ),
						array('option'=>'糟蹋', 'value'=>'0' ),
				)),
		array('question'=>'北京人说的号（儿）里指得是',
				'answers'=>array(
						array('option'=>'歌剧院', 'value'=>'0' ),
						array('option'=>'餐馆', 'value'=>'0' ),
						array('option'=>'监狱', 'value'=>'4' ),
						array('option'=>'邮政局', 'value'=>'0' ),
				)),
		array('question'=>'猫着的意思是',
				'answers'=>array(
						array('option'=>'身手矫健', 'value'=>'0' ),
						array('option'=>'性情懒惰', 'value'=>'0' ),
						array('option'=>'躲藏着', 'value'=>'4' ),
						array('option'=>'为人奔走', 'value'=>'0' ),
				)),
		array('question'=>'你大爷的意思是',
				'answers'=>array(
						array('option'=>'你父亲的哥哥', 'value'=>'0' ),
						array('option'=>'你爷爷辈里行大的', 'value'=>'0' ),
						array('option'=>'不带脏字的骂人', 'value'=>'4' ),
						array('option'=>'统指长辈', 'value'=>'0' ),
				)),
		array('question'=>'哪一出儿通常出现在',
				'answers'=>array(
						array('option'=>'看戏的时候', 'value'=>'0' ),
						array('option'=>'结果出乎意料的时候', 'value'=>'4' ),
						array('option'=>'买东西的时候', 'value'=>'0' ),
						array('option'=>'事情进展顺利的时候', 'value'=>'0' ),
				)),
		array('question'=>'北京话说一个人轴，是指着个人',
				'answers'=>array(
						array('option'=>'脾气倔', 'value'=>'4' ),
						array('option'=>'说话办事不给人留余地', 'value'=>'0' ),
						array('option'=>'办事情不动脑子', 'value'=>'0' ),
						array('option'=>'爽快大方', 'value'=>'0' ),
				)),
		array('question'=>'北京话雁么虎说的是',
				'answers'=>array(
						array('option'=>'老虎', 'value'=>'0' ),
						array('option'=>'蝙蝠', 'value'=>'4' ),
						array('option'=>'壁虎', 'value'=>'0' ),
						array('option'=>'眼屎', 'value'=>'0' ),
				)),
		array('question'=>'北京话捞人说的是',
				'answers'=>array(
						array('option'=>'有人落水进行打捞', 'value'=>'0' ),
						array('option'=>'帮人经营赚钱', 'value'=>'0' ),
						array('option'=>'泛指见义勇为的人', 'value'=>'0' ),
						array('option'=>'通过不正当手段把被拘留的人弄出来', 'value'=>'4' ),
				)),
		array('question'=>'北京话发小儿说的是',
				'answers'=>array(
						array('option'=>'黄发小儿的意思', 'value'=>'0' ),
						array('option'=>'从小一块长大的', 'value'=>'4' ),
						array('option'=>'留着短发', 'value'=>'0' ),
						array('option'=>'老家里人', 'value'=>'0' ),
				)),
		array('question'=>'北京话老家雀儿是什么意思',
				'answers'=>array(
						array('option'=>'泛指成年的鸟类', 'value'=>'0' ),
						array('option'=>'经验丰富的人', 'value'=>'0' ),
						array('option'=>'对老人不尊重的虐称', 'value'=>'4' ),
						array('option'=>'成年的麻雀', 'value'=>'0' ),
				)),
		array('question'=>'北京话中与叫板意思相近的是',
				'answers'=>array(
						array('option'=>'叫花子', 'value'=>'0' ),
						array('option'=>'炝火', 'value'=>'4' ),
						array('option'=>'没熘儿', 'value'=>'0' ),
						array('option'=>'作兴', 'value'=>'0' ),
				)),
);
reset_appstatus ( $app_name );

if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>