<style>
.i_conts{margin:30px auto; width:250px; border-top:2px dashed #ddd; margin-bottom:50px;}
.i_conts p{ color:#f60; padding:10px 0 0; text-align:center; }
.i_conts p.send{cursor:pointer;}
</style>
<div class="i_conts">
<form action="./" method="post" id="form1" name="form1">
<p>尊姓大名：<input name="t_nick" id="t_nick" maxLength="6" value="<?=$_COOKIE['v_nick']?>" style="width:120px;font-size:15px;" /><span style="font-size:13px; margin-left:10px;">*名字</span></p>

<p>Q Q号码：<input name="qqhm" id="qqhm" maxLength="10" value="" style="width:120px;font-size:15px;" onKeyUp="value=value.replace(/\D/g,'')" onafterpaste="value=value.replace(/\D/g,'')" /><span style="font-size:13px; margin-left:10px;">*数字</span></p>
     <?
if(islogined())
{
?>
<div class="clear"></div>
<div class="app_ad" id="mid_banner_ad" style="margin-left: -120px;margin-top:20px;margin-bottom:20px;">
<script type="text/javascript">
/*468*60，创建于2013-4-3*/
var cpro_id = "u1252068";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
</div>
<?
}
?>
<p class="send">
<img src="<?=$static_file_path?>/imgs/share.gif" id="btn_submit_img" alt="查看结果" title="查看结果" onclick="on_submit();" />
<img id='load_pic' src='http://app.qpic.cn/mblogpic/240dcbe326654d4738c8/460' style='display:none;'/>
</p>
 <p style="text-align:center;margin-top:20px;">
    
    <?php 
    switch ($at_fans_mode) {
    	case 1:
    		echo '<input type="hidden" id="invite" name="invite" value="1" />';
    		break;
    	case 2:
    		echo '<input type="checkbox" id="invite" name="invite" value="1" checked /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    	case 3:
    		echo '<input type="checkbox" id="invite" name="invite" value="1"  /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    	case 4:
    		
    		break;
    
    	default:
    		echo '<input type="checkbox" id="invite" name="invite" value="1" checked /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    }
    ?>
    </p>
    </form>
</div>
<script>
var btn_enable = 1;
function on_submit()
{
	if(document.getElementById('qqhm').value=='')
	{
		alert('QQ号码不能为空');
		document.getElementById('qqhm').focus();
		return false;
	}
	if(document.getElementById('t_nick').value=='')
	{
		alert('名字不能为空');
		document.getElementById('t_nick').focus();
		return false;
	}
	if (document.getElementById('qqhm').value.length <5) {
        alert("QQ号码不能少于5位数");
        document.getElementById("qqhm").focus();
        return false
    }
	<?php if ($is_control_multi_click == 1) {?>
	if (btn_enable == 0) {
		return;
	} else {
		btn_enable = 0;
		$('#btn_submit_img').hide();$('#load_pic').show();
		setTimeout(function(){btn_enable = 1;$('#load_pic').hide();$('#btn_submit_img').show();},10000);
	}
	<?php }?>
	var form1=document.getElementById('form1');
	form1.submit();
}

</script>