<?php


namespace App\Library;

use function PHPUnit\Framework\matches;

class AutoLink
{
    public static function replace($data = ''){
       $config = json_decode(setting('sys_theme_auto_link'));
        if (count($config)) {

           foreach ($config as $keyword) {
               /*target = 1 (mở tab mới)*/
               $target = $keyword->target == 1 ? 'target="_blank"' : '';

               $dofollow = $keyword->dofollow == 0 ? 'rel="nofollow"' : '';

               /*Xử lý các thẻ a có sẵn trước khi autolink*/
               $tags_a = self::getTextOnTagsA($data,$keyword->title);
               $reg_tag_a = "/<a.*>(?<title>.+)<\/a>/U";
               foreach ($tags_a['title'] as $key => $title) {

                   /*Nếu mà content của thẻ a có nội dung giống như keyword thì replace lại*/
                   if ( strtolower($title) == strtolower($keyword->title)){

                       /*$keyword->link_type = 1 (Internal Link) = 2 (External Link)*/
                       if ($keyword->link_type == 1){

                           $internal_link = $keyword->url;

                           $new_a = '<a href="'.$internal_link.'" '.$target.' '.$dofollow.'>'.$title.'</a>';

                           $data = str_replace($tags_a[0][$key],$new_a,$data);

                       }
                       if ($keyword->link_type == 2){

                           /* 3 keyword đầu sẽ bị replace*/

                           $count_tags_a = count($tags_a['title']);

                           $urls = json_decode($keyword->params_access);

                           $count_tags_a = $count_tags_a >=3 ? 3 : $count_tags_a;

                           for($i=0;$i < $count_tags_a && $i < count($urls);++$i){
                               $external_link = $urls[count($urls) - $i - 1];
                               $new_a = '<a href="'.$external_link.'" '.$target.' '.$dofollow.'>'.$title.'</a>';
                               $data = preg_replace('('.$tags_a[0][$key].')',$new_a,$data,$count_tags_a - $i);
                           }
                       }
                   }
               }

               /*Xử lý các từ khoá được tìm thấy nhưng không nằm trong thẻ a*/
               $reg_not_tag_a = "/($keyword->title)(?![^<a]*>|[^<>]*<\/a>)/i";

               if ($keyword->link_type == 1){
                   $internal_link = $keyword->url;
                   $tag_a = '<a href="'.$internal_link.'" '.$target.' '.$dofollow.'>$1</a>';
                   $data = preg_replace($reg_not_tag_a,$tag_a,$data);
               }
               if ($keyword->link_type == 2){
                   $count_urls = count($urls);
                   $limit_remaining = 3-$count_tags_a > -1 ? 3-$count_tags_a : 0;

                   /* Phải tính thêm cả url chứa keyword có sẵn mà đã được replace ở trên nên phải 3 - $count_tags_a */
                   if ($limit_remaining == 1){
                       if ($count_urls >= 1){
                           $new_a = '<a href="'.$urls[0].'" '.$dofollow.' '.$target.'>$1</a>';
                           $data = preg_replace($reg_not_tag_a,$new_a,$data,1);
                       }
                   }
                   if ($limit_remaining == 2){
                       if ($count_urls == 1){
                           $new_a = '<a href="'.$urls[0].'" '.$dofollow.' '.$target.'>$1</a>';
                           $data = preg_replace($reg_not_tag_a,$new_a,$data,2);
                       }
                       if ($count_urls >= 2){
                           $new_a = '<a href="'.$urls[0].'" '.$dofollow.' '.$target.'>$1</a>';
                           $data = preg_replace($reg_not_tag_a,$new_a,$data,2);
                           $new_a = '<a href="'.$urls[1].'" '.$dofollow.' '.$target.'>$1</a>';
                           $reg_old_a = '/'.str_replace('/','\/',$new_a).'/';
                           $data = preg_replace($reg_old_a,$new_a,$data,1);
                       }
                   }
                   if ($limit_remaining == 3){
                       if ($count_urls == 1){
                           $new_a = '<a href="'.$urls[0].'" '.$dofollow.' '.$target.'>$1</a>';
                           $data = preg_replace($reg_not_tag_a,$new_a,$data,3);
                       }
                       if ($count_urls == 2){
                           $new_a = '<a href="'.$urls[0].'" '.$dofollow.' '.$target.'>$1</a>';
                           $data = preg_replace($reg_not_tag_a,$new_a,$data,3);
                           $new_a = '<a href="'.$urls[1].'" '.$dofollow.' '.$target.'>$1</a>';
                           $reg_old_a = '/'.str_replace('/','\/',$new_a).'/';
                           $data = preg_replace($reg_old_a,$new_a,$data,1);
                       }
                       if ($count_urls >= 3){
                           $new_a = '<a href="'.$urls[0].'" '.$dofollow.' '.$target.'>$1</a>';
                           $data = preg_replace($reg_not_tag_a,$new_a,$data,3);
                           $new_a = '<a href="'.$urls[1].'" '.$dofollow.' '.$target.'>$1</a>';
                           $reg_old_a = '/'.str_replace('/','\/',$new_a).'/';
                           $data = preg_replace($reg_old_a,$new_a,$data,2);
                           $new_a = '<a href="'.$urls[2].'" '.$dofollow.' '.$target.'>$1</a>';
                           $reg_old_a = '/'.str_replace('/','\/',$new_a).'/';
                           $data = preg_replace($reg_old_a,$new_a,$data,1);
                       }
                   }
               }
           }
       }
        return $data;
    }

    private static function getTextOnTagsA($html,$title){

        $reg_tag_a = "/<a.*>(?<title>.+)<\/a>/U";

        preg_match_all($reg_tag_a,$html,$matches);
        foreach ($matches['title'] as $key => $keyword){
            if (strtolower($keyword) != strtolower($title)){
                unset($matches[0][$key]);
                unset($matches[1][$key]);
                unset($matches['title'][$key]);
            }
        }
        return $matches;
    }
}
