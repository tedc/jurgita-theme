<?php
    function icl_selector(){
        $langs = '<ul class="menu-language">';
        $other_langs = '';
        $languages = icl_get_languages('skip_missing=0');
        $lang = "'lang'";
        if(!empty($languages)){
            $langs .= '<li class="menu-item lang-menu-item menu-item-has-children"><i class="icon-lang"></i>';
            foreach($languages as $l){
                $language_link = $l['url'];
                $language_code = $l['language_code'];
                if($language_code != ICL_LANGUAGE_CODE) {
                    $other_langs .= '<li class="menu-item" ><a href="'.$language_link.'">'.$language_code.'</a></li>';
                }
            }
            foreach($languages as $l){
                $language_link = $l['url'];
                $language_code = $l['language_code'];
                if($language_code == ICL_LANGUAGE_CODE) {
                    $langs .= '<a href="'.$language_link.'">'.$language_code.'</a><ul class="sub-menu">'.$other_langs.'</ul></li>';
                }
            }
        }
        $langs.="</ul>";
        echo $langs;
    }
