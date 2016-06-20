<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

if($num>25)
{
	$num=ceil($num/4);
}

$sex=get_sex();

if($sex=='2')//如果为女
{
	$folder='boy';
}
else
{
	$folder='girl';
}
if($num==0){$num=1;}
$img_path='./imgs/'.$folder.'/'.$num.'.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,80,38,13,0,15,'790');

$content='/偷笑，我刚刚预测出了'.$name.'未来的另一半长什么样子了~~~信不信由你，反正我是相信了！快来#测测你另一半的长相#吧！：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->测测你另一半长什么样";
$pagrams[summary] = "想不想知道你未来的另一半长什么样子？赶快预测一下~马上知晓啦！（心理承受能力低的慎测哦~）".$pagrams[url];
$rt_info=post_send2($pagrams);