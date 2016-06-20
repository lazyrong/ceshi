<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

if($num>33)
{
	$num=ceil($num/3);
}
$str_left=60;
switch($num)
{
	case 0:$str='洛阳';break;
	case 1:$str='上海';break;
	case 2:$str='北京'; break;
	case 3:$str='重庆';break;
	case 4:$str='广州';break;
	case 5:$str='深圳';break;
	case 6:$str='天津';break;
	case 7:$str='南京';break;
	case 8:$str='杭州';break;
	case 9:$str='成都';break;
	case 10:$str='大连';break;
	case 11:$str='青岛';break;
	case 12:$str='沈阳';break;
	case 13:$str='武汉';break;
	case 14:$str='重庆';break;
	case 15:$str='西安';break;
	case 16:$str='宁波';break;
	case 17:$str='厦门';break;
	case 18:$str='苏州';break;
	case 19:$str='无锡';break;
	case 20:$str='哈尔滨';$str_left=30;break;
	case 21:$str='长春';break;
	case 22:$str='济南';break;
	case 23:$str='昆明';break;
	case 24:$str='长沙';break;
	case 25:$str='福州';break;
	case 26:$str='海口';break;
	case 27:$str='石家庄';$str_left=30;break;
	case 28:$str='太原';break;
	case 29:$str='郑州';break;
	case 30:$str='合肥';break;
	case 31:$str='南昌';break;
	case 32:$str='兰州';break;
	case 33:$str='上海';break;
}

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,89,90,13,0,14,'fff');
$img=createImg($img,$str,$str_left,190,13,0,60,'fff','katong');



$content='经过预测，'.$name.'将来会在'.$str.'遇到生命中的另一半！快来测测#你会在哪个城市遇到Ta#吧~：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你会在哪个城市遇到Ta";
$pagrams[summary] = "中国大大小小几百个城市，你将来最有可能会在哪个城市遇到生命中的Ta？".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$str.'】';