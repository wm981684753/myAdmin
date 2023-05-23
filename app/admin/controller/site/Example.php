<?php

namespace app\admin\controller\site;

use app\common\controller\AdminController;
use think\App;

class Example extends AdminController
{

    use \app\admin\traits\Curd;

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\ExampleModel();

    }
}