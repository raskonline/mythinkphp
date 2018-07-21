<?php

namespace Admin\Controller;

class IndexController extends BaseController
{
    public function index()
    {
//        var_dump(__MODULE__);
//        var_dump(__CONTROLLER__);
//        var_dump(__ACTION__);
//        var_dump(__SELF__);
//        die();

        $this->display();
    }

    public function head()
    {
        $this->display();
    }

    public function left()
    {
        $this->display();
    }

    public function right()
    {
        $this->display();
    }
}