<?php
use Think\Controller;
class IndexController extends Controller {
    public function index($name='ThinkPHP') {
        $this->hello    =   'Hello,'.$name.'！';
        $this->display();
    }
}