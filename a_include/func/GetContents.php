<?
function getSpoofingHeader($url, $myIp = null) 
{ 
    // 分解url 
    $temp = parse_url($url); 
    $query = isset($temp['query']) ? $temp['query'] : ''; 
    // 随机ip 
    if (! $myIp) { 
        $myIp = randIp(); 
    } 
     
    $cookies= ''; 
    if(count($_COOKIE)) { 
        foreach($_COOKIE as $cookie_name => $cookie_var) { 
            $cookies .= $cookies != '' ? '; '.$cookie_name.'='.$cookie_var :$cookie_name.'='.$cookie_var; 
        } 
    } 
     
    $path = isset($temp['path']) ? $temp['path'] : '/'; 

    $header = array ( 
        "GET {$path}?{$query} HTTP/1.1", 
        "Host: {$temp['host']}",  
        'Accept: */*',  
        "Referer: http://{$temp['host']}/", 
        "Cookie: $cookies", 
        'User-Agent: Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; SV1)',  
        'via: 1.1 JEJE1:80 (squid/2.5.STABLE4-NT-CVS)', 
        "X-Forwarded-For: {$myIp}", 
        "Connection: Close" 
    ); 

    return $header; 
} 

/** 
 * 获取随机ip 
 * 
 * @return string 
 */ 
function randIp() 
{ 
    $ip2id = round(rand(600000, 2550000) / 10000); //第一种方法，直接生成 
    $ip3id = round(rand(600000, 2550000) / 10000);  
    $ip4id = round(rand(600000, 2550000) / 10000);  

    //下面是第二种方法，在以下数据中随机抽取 
    $arr_1 = array('218','218','66','66','218','218','60','60','202','204','66','66','66','59','61','60','222','221','66','59','60','60','66','218','218','62','63','64','66','66','122','211'); 
    $randarr = mt_rand(0,count($arr_1)-1); 
    $ip1id = $arr_1[$randarr]; 
     
    $ip = $ip1id . '.' . $ip2id . '.' . $ip3id . '.' . $ip4id; 
    return $ip; 
} 


/** 
 * 获取远程链接内容 
 * 
 * @param string $url 远程网址 
 * @param string $charset 目标网页的编码格式 默认为 UTF-8 则无须转码 
 * @param string $spoofing 是否伪造ip网址来源 
 * @return string 
 */ 
function getContents($url, $charset = 'UTF-8', $spoofing = true) 
{ 
    $ch = curl_init(); 
    $timeout = 20; 
     
    // 获取伪造来源ip网址 
    if ($spoofing) { 
        $header = getSpoofingHeader($url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
    } 

    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
    $contents = trim(curl_exec($ch)); 
    curl_close($ch); 
     
    return ($charset == 'UTF-8') ? $contents : iconv($charset, 'UTF-8', $contents); 
    //return ($charset == 'UTF-8') ? $contents : mb_convert_encoding($contents, 'UTF-8', $charset); 
} 

/*$url = 'http://app.qlogo.cn/mbloghead/7a5ce81911b83625f098/100';
echo getContents($url);*/
?>