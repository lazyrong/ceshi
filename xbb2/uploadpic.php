<?
require_once '../a_include/func/Funcs.inc.php';
require_once './../a_include/read_q_sdk.php';
	
$img_path='../file/imgs/fyall.png';
$pic_type = 'png';
$img=getImgType($img_path);
if (!$_COOKIE['v_o_t_']) {
	header('Location: ./login.php?id=q&app=adj2');exit;
}
if ($pic_type == 'jpg') {
	$img_filename = SAE_TMP_PATH . '/' . $_COOKIE ['v_o_t_'] . '.jpg';
	imagejpeg ($img, $img_filename );
} else {
	$img_filename = SAE_TMP_PATH . '/' . $_COOKIE ['v_o_t_'] . '.png';
	imagepng ( $img, $img_filename );
}
imagedestroy ( $img );
$rt_info3 = OpenSDK_Tencent_SNS2::call ( 't/add_pic_t', array (
		'content' => 'jiecao',
		'pic' => $img_filename
), 'POST', array (
		'pic' => $img_filename
) );
var_dump($rt_info3);
//http://app.qpic.cn/mblogpic/9eb7560f1d9a4c2c34f2/2000


