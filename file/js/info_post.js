var page=0;send("./get_idols.php","page="+page);function next_friends(){page=page+30;if(document.getElementById("null")){page=0}if (document.getElementById("return_page")) {page = 30;}send("./get_idols.php","page="+page)}function my_on_submit(A){var B=document.getElementById("my_nick").value;if(B==""){alert("名字不能为空哦~~");document.getElementById("my_nick").focus();return false}if(B.length>7){alert("名字超过7个字了哦~");document.getElementById("my_nick").focus();return false}on_submit(A,B)}function on_submit(A,C){document.getElementById("t_name").value=A;document.getElementById("t_nick").value=C;if(document.getElementById("is_follow")){if(document.getElementById("is_follow").checked==true){document.getElementById("follow").value="1"}}var B=document.getElementById("form1");B.submit()}function createXMLHttpRequest(){if(window.ActiveXObject){xmlHttp=new ActiveXObject("Microsoft.XMLHTTP")}else{if(window.XMLHttpRequest){xmlHttp=new XMLHttpRequest()}}return xmlHttp}function send(B,A){document.getElementById("next_friends").innerHTML="请稍后.....";var C=createXMLHttpRequest();C.open("POST",B,true);C.onreadystatechange=function(){get_result(C)};C.setRequestHeader("Content-Type","application/x-www-form-urlencoded");C.send(A)}function get_result(B){if(B.readyState==4&&B.status==200){var A=B.responseText;document.getElementById("friends_conts").innerHTML=A;document.getElementById("next_friends").innerHTML=">>下一批"}};