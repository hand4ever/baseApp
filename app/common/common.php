<?php
/**
 * 调用phalcon的debug方法
 *
 * @param      $o
 * @param bool $cliFlag
 * @param bool $returnFlag
 * @return null|string
 */
function dump($o, $cliFlag=false, $returnFlag=false){
    $out = (new \Phalcon\Debug\Dump())->variable($o);
    if($cliFlag) {
        $out =  strip_tags($out);
    }
    if($returnFlag) {
        return $out;
    } else {
        echo $out;
    }
}