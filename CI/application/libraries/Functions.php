<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: XY
 * Date: 13-2-20
 * Time: 下午5:03
 * 公共方法
 */
 class Functions {
     /*
      * 防注入安全字符处理
      */
     function safeString($string){
         $keywords = htmlspecialchars(trim($string));
         $keywords = addslashes($keywords);
         $keywords = str_replace("_","\_",$keywords);//转义掉”_”
         $keywords = str_replace("%","\%",$keywords);//转义掉”%”
         return $keywords;
     }

     /*日期转换时间戳*/
     function dateToTime($date)
     {
         $year=((int)substr($date,0,4));//取得年份

         $month=((int)substr($date,5,2));//取得月份

         $day=((int)substr($date,8,2));//取得几号

         return mktime(0,0,0,$month,$day,$year);
     }

     /*文件单位互相转换*/
     function setupSize($fileSize){
         $size = sprintf("%u", $fileSize);
         if($size == 0){
             return("0 Bytes");
         }
         $sizename = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
         return round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $sizename[$i];
     }

     public function test(){
         echo "this is functions";
     }
 }