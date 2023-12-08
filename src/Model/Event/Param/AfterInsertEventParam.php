<?php

declare(strict_types=1);

namespace Imi\Model\Event\Param;

use Imi\Event\EventParam;

class AfterInsertEventParam extends EventParam
{
    /**
     * 模型.
     *
     * @var \Imi\Model\BaseModel|null
     */
    public $model;

    /**
     * 初始化数据.
     *
     * @var \Imi\Util\LazyArrayObject
     */
    public $data;

    /**
     * 查询结果.
     *
     * @var \Imi\Db\Query\Interfaces\IResult
     */
    public $result;
}
