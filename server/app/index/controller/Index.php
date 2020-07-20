<?php
namespace app\index\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return json('132');
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }

    public function demo()
    {
        return view();
    }
}
