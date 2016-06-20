<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

if($num==0){$str='还是回妈妈肚子吧.. Orz';}
if($num>0&&$num<18){$str='你可以怪系统故障的..= =!!';}
if($num>=18&&$num<25){$str='亲,趁现在赶紧去找个对象..';}
if($num>=25&&$num<40){$str='矮油，看来你还是潜力股..';}
if($num>=40&&$num<50){$str='接下来几十年努力奋斗吧..';}
if($num>=50&&$num<70){$str='富豪榜上的都这年龄哈哈..';}
if($num>=70&&$num<80){$str='好歹这辈子也算有个盼头..';}
if($num>=80&&$num<90){$str='这辈子还是指望儿孙们吧..';}
if($num>=90){$str='系统对这个结果也很纠结..';}

$img_path='./imgs/30.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,30,80,13,0,13,'19f');
$img=createImg($img,$num.'岁',62,180,13,0,60,'f37','katong');
$img=createImg($img,$str,42,269,17,0,13,'a60');

$content='OMG，经过预测，这个居然就是'.$name.'一生中最辉煌的年龄~/惊恐。。。想不想知道你#一生中最辉煌的年龄#是多少岁？快来预测一下吧：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->一生中最辉煌的年龄";
$pagrams[summary] = "人生起起伏伏...想不想知道你一生中最辉煌的年龄是多少？快来预测一下吧~~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info ['result_title'] = '【'.$num.'岁】';