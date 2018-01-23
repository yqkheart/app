<?php
class wkindexmain{
    public $s;
    function __construct()
    {
        $this->s=new Smarty();
        $this->s->setTemplateDir("template/index/");
        $this->s->setCompileDir("compile/");
    }
}