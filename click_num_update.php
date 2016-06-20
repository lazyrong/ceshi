<?php 
$cntkey = $_REQUEST['code'];
if ($cntkey) {
	$c = new SaeCounter();
	if (!$c->get($cntkey)) {
// 		$c->create($cntkey,1);
	} else {
		$c->incr($cntkey);
	}
	echo $c->get($cntkey);
}

?>