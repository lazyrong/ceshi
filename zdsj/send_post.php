<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

if($num>33)
{
	$num=ceil($num/3);
}

switch($num)
{
	case 0:$str="你会在2015年5月9日这\n一天中500万大奖。";break;
	case 1:$str="你会在2015年5月9日这\n一天中500万大奖。";break;
	case 2:$str="你会在2015年7月11日这\n一天捡到一元硬币。";break;
	case 3:$str="你会在2015年4月23日这\n一天从浴室滑倒，并摔\n伤了屁股。";break;
	case 4:$str="你会在2015年11月9日这\n一天突然被同性告白。";break;
	case 5:$str="你会在2015年6月19日这\n天扶起了一个老奶奶，\n但被老奶奶敲诈。";break;
	case 6:$str="你会在2015年7月13日这\n一天中被一个不认识的\n人强吻。";break;
	case 7:$str="你会在2015年9月30日这\n天邂逅了梦中情人，然\n后闹钟就响了。";break;
	case 8:$str="你会在2015年9月23日这\n天捡到一张被折成纸飞\n机的诺亚方舟船票。";break;
	case 9:$str="你会在2015年8月19日这\n天演了你人生中的第一\n部电影，角色：死尸。";break;
	case 10:$str="你会在2015年12月21日这\n一天拯救全世界。";break;
	case 11:$str="你会在2015年12月1日这\n天因为贩卖诺亚方舟假\n船票被警察请去喝茶。";break;
	case 12:$str="你会在2015年11月3日这\n一天连续被三个陌生人\n强吻。";break;
	case 13:$str="2015年8月24日这一天，\n你跟暗恋已久的人表白\n被拒绝了。";break;
	case 14:$str="你会在2015年9月19日这\n一天发现跟你相恋半年\n的恋人居然是双性恋。";break;
	case 15:$str="你会在2015年6月23日这\n一天跟朋友游泳时突然\n发现游泳裤掉不见了。";break;
	case 16:$str="你会在2015年5月17日这\n一天被喜欢的人表白，\n并正式开始交往。";break;
	case 17:$str="2015年10月26日这天你跟\n最喜欢的偶像拥抱了，\n还把鼻涕蹭在他身上。";break;
	case 18:$str="你在2015年5月17日这天\n会发生一段美丽的邂逅。";break;
	case 19:$str="你会在2015年4月13日这\n一天跟一名网友正式开\n始网恋。";break;
	case 20:$str="你会在2015年7月21日这\n一天遇到你生命中最重\n要的人。";break;
	case 21:$str="你会在2015年5月30日这\n一天被一个非常要好的\n异性朋友告白了。";break;
	case 22:$str="你会在2015年4月10日这\n一天中20万大奖。";break;
	case 23:$str="你会在2015年8月22日这\n一天捡到一个山寨版\nIphone5。";break;
	case 24:$str="2015年5月30日，你跟刚\n交往的恋人去看恐怖片，\n并被吓得失声大哭。";break;
	case 25:$str="2015年2月14日，因为找\n不到过节的人，你跟前\n任复合了。";break;
	case 26:$str="2015年11月11日，跟同样\n光棍的死党喝了一晚上\n啤酒。";break;
	case 27:$str="2015年10月30日，你抛弃\n家人，朋友，揣着105块\n钱跟Ta私奔了。";break;
	case 28:$str="2015年7月3日，一位5岁\n的小朋友跟你说：我长\n大了要跟你结婚。";break;
	case 29:$str="2015年5月23日，你收到\n一封情书，激动地看完\n后发现是送错了。";break;
	case 30:$str="你会在2015年5月22日这\n一天捡到一张100块钱的\n假币。";break;
	case 31:$str="你会在2015年8月19日这\n一天突然被同性告白。";break;
	case 32:$str="2015年10月23日这一天，\n你从街边买了一张800块\n钱的诺亚方舟船票。";break;
	case 33:$str="你会在12月22日这一天掉\n进地震大裂缝。";break;
}

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,30,100,13,0,15,'790');
$img=createImg($img,$str,30,160,0,0,20,'f37','katong');

$content='经过预测，'.$name.'在2015年居然会发生这样的重大事件~~太不可思议了。。/偷笑。。快来算算#2015年你会遇到什么重大事件#吧~地址：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->2015年你会遇到什么重大事件";
$pagrams[summary] = "2015，注定是不平凡的一年。快来预测下2015年你会遇到什么重大事件吧~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info ['result_title'] = '【'.$str.'】';