<?php
//    $word = $_GET['word'];
//    $word = 'time';

    function get_response($word) {
        $youdao_url = "http://fanyi.youdao.com/openapi.do?keyfrom=rainman&key=973586758&type=data&doctype=json&version=1.1&q=".$word;
        $json = file_get_contents($youdao_url);
        return $json;
    }

    function print_zh($zh) {
        global $first_sec;
        $first_sec .= "[1;31m" . $zh[0];
        for ($i = 1; isset($zh[$i]); $i++) {
            $first_sec .= "、" . $zh[$i];
        }
        $first_sec .= "[0m | ";
    }
    
    function print_phonetic($phonetic) {
        global $first_sec;
        $first_sec .= "\033[34m" . "[".$phonetic["phonetic"]."]\033[0m";
    }

    function print_explains($explains) {
        global $second_sec;
        foreach ($explains["explains"] as $key => $value) {
            $second_sec[$key] = $value;
        }
    }
    
    function print_web($web) {
        global $third_sec;
        foreach ($web as $id => $value) {
            $third_sec[$id] = "\033[31m" . $value->key . "\033[0m"  . ": ";
            $third_sec[$id] .= $value->value[0];
            for ($i = 1; isset($value->value[$i]); $i++) {
                $third_sec[$id] .= "、".$value->value[$i];
            }
        }
    }

    function print_space($len) {
        $str = "";
        for ($i = 0; $i < $len; $i++) {
            $str .= " ";
        }
        return $str;
    }
    
    function print_dash($len) {
        $str = "";
        for ($i = 0; $i < $len; $i++) {
            $str .= "-";
        }
        return $str;
    }
    
    function eline() {
        global $maxlen;
        return "    " . print_space($maxlen) . "\n";
    }
    
    function length($str) {
        return strlen(mb_convert_encoding($str, "gb2312", "utf-8"));
    }

    $first_sec = "";
    $second_sec = array();
    $third_sec = array();
    $json = json_decode(get_response($word));

    print_zh($json->translation); print_phonetic((array)$json->basic);
    print_explains((array)$json->basic);
    print_web($json->web);

    $maxlen = length($first_sec) - 11;
    foreach ($second_sec as $value) $maxlen = max($maxlen, length($value));
    foreach ($third_sec as $value) $maxlen = max($maxlen, length($value) - 9);

    echo "\n    " . print_dash($maxlen + 2) . "\n";
    echo "     " . $first_sec /*. print_space($maxlen - length($first_sec)) */. " \n"; echo eline();
    foreach ($second_sec as $value) echo "     " . $value /*. print_space($maxlen - length($value)) */." \n"; echo eline();
    foreach ($third_sec as $value) echo "     " . $value /*. print_space($maxlen - length($value)) */." \n";
    echo "    " . print_dash($maxlen + 2) . "\n\n";
?>
