<?
session_start();
header('Content-Type: text/html; charset=utf-8');
$root_path = dirname ( dirname ( __FILE__) );
require_once $root_path.'/a_include/func/Funcs.inc.php';

if($_REQUEST['page']){$page=intval($_REQUEST['page']);}else{$page=0;}
if($_COOKIE['v_type']=='t')
{
	$app_name=$_COOKIE['v_appname'];
	require_once $root_path.'/a_include/read_t_sdk.php';
	
	getFansList();

	$infos=OpenSDK_Tencent_Weibo::call('friends/fanslist_s', array('reqnum'=>'30','startindex'=>$page));
	$datas=$infos['data'];
	$infos=$infos['data']['info'];
	if($infos)
	{
		foreach($infos as $key=>$info)
		{
			$avatar=$info['head']!=''?$info['head'].'/50':'../file/imgs/no_avatar.jpg';
			$name=$info['name'];
			$nick=$info['nick'];
			$nick=mb_substr($nick, 0, 6, 'utf-8'); 
	?>
			<li onmouseover="this.className='on';" onmouseout="this.className='';"  onclick="on_submit('<?=$name?>','<?=$nick?>');">
			  <img src="<?=$avatar?>" title="查看Ta的，并发送微博" />
			  <div><a href="javascript:void(0);" title="查看Ta的，并发送微博" ><?=$nick?></a></div>
			</li>
	<?  		
			if($datas['hasnext']=='1')
			{
				echo '<p id="null" style="display:none">&nbsp;</p>';
			}
		}
	}
	else
	{
		echo '<p id="null">加载失败，请刷新...</p>';
	}//加载收听的人列表
}//end if($_COOKIE['v_type']=='t')
elseif($_COOKIE['v_type']=='q')
{

	$uinfo = $_COOKIE ['v_o_t_'];
	if (empty ( $uinfo )) {
		echo '<p id="null">加载失败，请登录后重试...</p>';
		exit;
	}
	getFansList();
	$mmc=@memcache_init();
	//$mmc=false;
	if($mmc){
		$idollist =  $mmc->get('idollist'.$_COOKIE ['v_o_t_openid']);
	}
	$datalist = array();
	$last_page = 0;
	$return_page = 0;
	if ($idollist && is_array ( $idollist ) && is_array ( $idollist['page'.$page] )) {
		$datalist = $idollist['page'.$page];
	} else {
		require_once $root_path.'/a_include/read_q_sdk.php';
		$datas=OpenSDK_Tencent_SNS2::call('relation/get_fanslist', array('reqnum'=>'30','startindex'=>$page,'mode'=>0));
		$last_page = $datas['data']['hasnext'];
		$infos=$datas['data']['info'];
		$datalist = array();
		if ($infos && is_array($infos)) {
			foreach($infos as $info){
				$tmpdata = array();
				$tmpdata['head']=$info['head']!=''?$info['head'].'/50':'../file/imgs/no_avatar.jpg';
				$tmpdata['name']=$info['name'];
				$tmpdata['nick']=mb_substr($info['nick'], 0, 6, 'utf-8');
				$datalist[] = $tmpdata;
				unset($tmpdata);
			}
		}
		if ($datalist) {
			if($mmc){
				if (empty($idollist)) {
					$idollist = array();
				}
				$idollist['page'.$page] = $datalist;
				$mmc->set('idollist'.$_COOKIE ['v_o_t_openid'],$idollist,MEMCACHE_COMPRESSED,1000);
			}
		} else {
			
			if($mmc){
				if ($idollist['page0'] && is_array($idollist['page0'])) {
					$datalist = $idollist['page0'];
					$return_page = 1;
				}
			}
		}
	}
	if($datalist)
	{
		foreach($datalist as $key=>$info)
		{
			$avatar=$info['head']!=''?$info['head']:'../file/imgs/no_avatar.jpg';
			$name=$info['name'];
			$nick=$info['nick'];
			$nick=mb_substr($nick, 0, 6, 'utf-8'); 
	?>
			<li onmouseover="this.className='on';" onmouseout="this.className='';"  onclick="on_submit('<?=$name?>','<?=$nick?>');">
			  <img src="<?=$avatar?>" title="查看Ta的，并分享到空间" />
			  <div><a href="javascript:void(0);" title="查看Ta的，并分享到空间" ><?=$nick?></a></div>
			</li>
	<?  		
		}
			if($last_page == '1')
			{
				echo '<p id="null" style="display:none">&nbsp;</p>';
			}
			if($return_page)
			{
				echo '<p id="return_page" style="display:none">&nbsp;</p>';
			}
	}
	else
	{
		echo '<p id="null">加载失败，请刷新...</p>';
	}//加载收听的人列表
}//end if($_COOKIE['v_type']=='t')
elseif($_COOKIE['v_type']=='s')
{
	require_once $root_path.'/a_include/read_s_sdk.php';
	$screen_name=$_COOKIE['v_name'];
	getFansList();

	$datas = OpenSDK_Sina_Weibo2::call('friendships/friends', array('screen_name'=>$screen_name,'count'=>30,'cursor'=>$page));
	$infos=$datas['users'];
	if($infos)
	{
		foreach($infos as $key=>$info)
		{
			$avatar=$info['profile_image_url'];
			$avatar=$avatar!=''?$avatar:'../file/imgs/no_avatar.jpg';
			//$name=$info['id'];
			$name=$info['screen_name'];
			$nick=$info['screen_name'];
			$nick=mb_substr($nick, 0, 6, 'utf-8'); 
	?>
			<li onmouseover="this.className='on';" onmouseout="this.className='';"  onclick="on_submit('<?=$name?>','<?=$nick?>');">
			  <img src="<?=$avatar?>" title="查看Ta的，并发送微博"/>
			  <div><a href="javascript:void(0);" title="查看Ta的，并发送微博" ><?=$nick?></a></div>
			</li>
	<?  		
			if($datas['next_cursor']=='0')
			{
				echo '<p id="null" style="display:none">&nbsp;</p>';
			}
		}
	}
	else
	{
		echo '<p id="null">加载失败，请刷新...</p>';
	}
}
?>
