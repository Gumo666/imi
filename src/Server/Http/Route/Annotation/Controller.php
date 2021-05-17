<?php

declare(strict_types=1);

namespace Imi\Server\Http\Route\Annotation;

use Imi\Bean\Annotation\Base;
use Imi\Bean\Annotation\Parser;

/**
 * 控制器注解.
 *
 * @Annotation
 * @Target("CLASS")
 * @Parser("Imi\Server\Http\Parser\ControllerParser")
 */
#[\Attribute]
class Controller extends Base
{
    /**
     * 只传一个参数时的参数名.
     */
    protected ?string $defaultFieldName = 'prefix';

    /**
     * 路由前缀
     */
    public ?string $prefix = null;

    /**
     * 指定当前控制器允许哪些服务器使用.
     *
     * 支持字符串或数组，默认为 null 则不限制
     *
     * @var string|string[]|null
     */
    public $server = null;

    /**
     * @param string|string[]|null $server
     */
    public function __construct(?array $__data = null, ?string $prefix = null, $server = null)
    {
        parent::__construct(...\func_get_args());
    }
}
