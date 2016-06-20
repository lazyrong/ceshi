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
$left=40;
switch($num)
{
	case 1:$smb='穿越幻想症';$str='自从看了《步步惊心》后，你开始每天背诵各种历史书籍。。。'; break;
	case 2:$smb='选择性失忆症';$str='每次做了坏事后，第二天你总是说不记得了。。。';$left=25; break;
	case 3:$smb='孤独症';$str='你和人类总是那么不合群，只喜欢跟动物打交道。。。';$left=70; break;
	case 4:$smb='自闭症';$str='每天把自己关在房间里，然后盯着电脑屏幕发呆。。。';$left=70; break;
	case 5:$smb='超级自恋症';$str='每天跪在镜子前对着镜子里的人顶礼膜拜。。。'; break;
	case 6:$smb='自言自语症';$str='每天都在不停地碎碎念，而且从来没有人知道你在念什么。。。'; break;
	case 7:$smb='购物强迫症';$str='一天不买东西，你就烦躁的想自杀。。。'; break;
	case 8:$smb='暴露症';$str='喜欢暴露自己或看别人暴露，你懂的~~~';$left=70; break;
	case 9:$smb='躯体妄想症';$str='你总是不断的怀疑自己患有肺癌、肝癌、大肠癌、胃癌、胰脏癌…'; break;
	case 10:$smb='精神病';$str='你每天都要去邮局寄一封信，而且地址写的是自己家…';$left=70;  break;
	case 11:$smb='强迫性怀疑症';$str='每次出门后，就会不断想自己关门了没有，然后返回去确认。。。';$left=25;  break;
	case 12:$smb='偷窥癖';$str='你5岁就开始偷窥人家洗澡…12岁偷窥人家XXOO…';$left=70; break;
	case 13:$smb='恐高症';$str='每次你站在一个很高的地方，你都有一种想跳下去的冲动。。。';$left=70; break;
	case 14:$smb='精神分裂症';$str='每天晚上夜深人静的时候，你就开始自己和自己说话。。。'; break;
	case 15:$smb='说话职业病';$str='你经常会出现这样的情况：“李先生，请问您贵姓…”';$left=25;  break;
	case 16:$smb='失眠症';$str='每晚睡不着就开始数羊，然后越数越兴奋… ';$left=70; break;
	case 17:$smb='手贱症';$str='明明知道是标题党，可总是忍不住打开，看完又骂自己手贱！手贱！';$left=70; break;
	case 18:$smb='心理饥饿症';$str='一旦开吃就停不住，明明已经撑的不行了，还使劲把东西往嘴里送。。。'; break;
	case 19:$smb='出门恐慌症';$str='常常担心自己出门后会被车撞、被雷劈、被陨石砸……'; break;
	case 20:$smb='睡前尿尿症';$str='睡觉前不管急不急，你一定要去开完小号才上床睡觉……';break;
	case 21:$smb='拖延症';$str='“我真的很忙，上个星期的事情都还没有做。。。”'; $left=70;break;
	case 22:$smb='尿频症';$str='一紧张，你就想上厕所，而且每分钟上一次。。。';$left=70; break;
	case 23:$smb='先天性心脏病';$str='每次你跟人吵架，吵着吵着就不讲卫生随地吐血了。。';$left=25; break;
	case 24:$smb='社交恐惧症';$str='一跟陌生人说话，你就开始结巴，特别是跟异性时……'; break;
	case 25:$smb='幽闭恐惧症';$str='每次独处一个密闭空间时，都会极其紧张、恐惧、甚至尖叫……'; break;
	case 26:$smb='晕车症';$str='每次一坐车你就开始大吐特吐，自行车也是。。。';$left=70; break;
	case 27:$smb='忧郁症';$str='人为什么活着？每次想到这个问题你就有自杀的冲动…';$left=70; break;
	case 28:$smb='选择障碍症';$str='每天早上都会为了先刷牙还是先洗脸纠结半个小时…'; break;
	case 29:$smb='说话混乱症';$str='你经常会这样：“小李啊，你文章写得这么好，不去当厨师太可惜了…”'; break;
	case 30:$smb='老年痴呆症';$str='常把张三当李四，生活不能自理…'; break;
	case 31:$smb='先天性心脏病';$str='每次你跟人吵架，吵着吵着就不讲卫生随地吐血了。。';$left=25; break;
	case 32:$smb='拖延症';$str='“我真的很忙，上个星期的事情都还没有做。。。”'; $left=70;break;
	case 33:$smb='晕车症';$str='每次一坐车你就开始大吐特吐，自行车也是。。。';$left=70; break;
}

$img_path='./imgs/smb.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,15,90,11,0,13.5,'790');
$img=createImg($img,$smb,$left,175,11,5,25,'f37','katong');
$img=createImg($img,$str,16,235,12,0,13.5);

$content='【诊断书】'.$name.' 同志，经诊断，'.'您被查出患有'.$smb.'，典型症状表现为：'.$str.'；为了您的健康着想，请您务必及时到医院治疗。#查查你有什么病#：'.$url;
$content=$content.' ，你也试试吧！';

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->查查你有什么病";
$pagrams[summary] = "每个人都有各种症、各种病...我们只管检查不管治，嘿嘿，查查你有什么病？".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【患有'.$smb.'，症状：'.$str.'】';