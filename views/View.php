<?php


class View{

    public function render($tmpl,$pageContent,$pageData = []){
        include ROOT. "views/". $tmpl .".php";
        include ROOT. "views/". $pageContent .".php";
    }

}