<?
$url=$_GET ['url'];
$showcount=$_GET ['showcount'];;
$summary=$_GET ['summary'];
$desc=$_GET ['desc'];
$site=$_GET ['site'];
$pics=$_GET ['pics'];
$shareresulturl = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='.$url.'&showcount=1&summary='.$showcount.'&title='.$summary.'&desc='.$desc.'&site='.$site.'&pics='.$pics;
?>
<iframe id="if_res" src="<?=$shareresulturl?>" width="562" height="608" frameborder="no" border="0" marginwidth="0"  scrolling="no" allowtransparency="yes"></iframe>