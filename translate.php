<?php
    $word = $_POST['word'];
    function lang($str) {
        return $str;
    }

//    $word = trim('-t zh-cn time off');
    $mode = "";
    $from = "auto";
    $to = "en";
    while ($word[0] == '-') {
        $ch = $word[1];
        if ($ch == 'w' || $ch == 's') {
            if ($mode != "") die("param error...\n");
            $mode = $ch;
            $word = trim(substr($word, 2));
            continue;
        }
        if ($ch == 'f' || $ch == 't') {
            $ch = $word[1];
            $word = trim(substr($word, 2));
            $arr = explode(" ", $word);
            if (!empty($arr[0])) $p = $arr[0];
            if ($ch == 'f') $from = lang($p); else $to = lang($p);
            $word = trim(substr($word, strlen($p)));
            continue;
        }
    }
    if ($mode == "") $mode = (strpos($word, ' ') == null) ? "w" : "s";
    if (mb_strlen($word, "GB2312") != mb_strlen($word, "UTF-8")) $mode = "s";
/*    echo "mode = " . $mode . "\n";*/
    //echo "from = " . $from . "\n";
    //echo "to = " . $to . "\n";
 //   echo $word . "\n";
    if ($mode == "w") {
        require 'word-translate.php';
        exit();
    }
    else if ($mode == "s") {
        require 'sentence-translate.php';
        exit();
    }
?>
