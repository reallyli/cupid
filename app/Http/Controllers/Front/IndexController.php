<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 17/8/30
 * Time: 下午6:14
 */

 namespace App\Http\Controllers\Front;

 use App\Http\Controllers\Controller;

 class IndexController extends Controller
 {
     /**
      * Method description:mySkillsChart
      *
      * @author reallyli <zlisreallyli@outlook.com>
      * @param 
      * @return void
      * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
      */
     public function mySkillsChart()
     {
        $mySkills =  ["Laravel" => 20, "Yaf" => 18, "thinkphp" => 15, "yii2.0" => 13];

        return json_encode($mySkills);
     }
 }