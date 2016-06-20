<?php

/**
 +------------------------------------------------------------------------------
 * Cookie管理类
 +------------------------------------------------------------------------------
 */
class Cookie {
    // 判断Cookie是否存在
    static function is_set($name) {
        return isset($_COOKIE['vceshi'.$name]);
    }

    // 获取某个Cookie值
    static function get($name) {
        $value   = $_COOKIE['vceshi'.$name];
        $value   =  unserialize(base64_decode($value));
        return $value;
    }

    // 设置某个Cookie值
    static function set($name,$value,$expire='',$path='',$domain='') {
        if($expire=='') {
            $expire =   3600;
        }
        if(empty($path)) {
            $path = '/';
        }
        if(empty($domain)) {
            $domain =   '';
        }
        $expire =   !empty($expire)?    time()+$expire   :  0;
        $value   =  base64_encode(serialize($value));
        setcookie('vceshi'.$name, $value,$expire,$path,$domain);
        $_COOKIE['vceshi'.$name]  =   $value;
    }

    // 删除某个Cookie值
    static function delete($name) {
        Cookie::set($name,'',-3600);
        unset($_COOKIE['vceshi'.$name]);
    }

    // 清空Cookie值
    static function clear() {
        unset($_COOKIE);
    }
}