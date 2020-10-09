<?php


class View{

    public function render($tmpl,$pageData = []){
        include ROOT. "views/". $tmpl .".php";
    }

}