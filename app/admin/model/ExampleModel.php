<?php

namespace app\admin\model;

use app\common\model\TimeModel;

class ExampleModel extends TimeModel
{

    protected $name = "example_table";

    protected $deleteTime = false;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        //根据站点操作不同站点的数据表
        $this->name = $this->name . $this->site;
    }


}