<?php

namespace DcatAdmin\PermissionPlus\Annotations;

use Doctrine\Common\Annotations\Annotation\Required;

/**
 * @Annotation
 * Class Permission
 * @package DcatAdmin\PermissionPlus\Annotations
 */
final class Permission
{
    /**
     * @var string
     * @Required()
     */
    public $name;

    /**
     * @var string
     * @Required()
     */
    public $slug;

    /**
     * @var string
     * @Required()
     */
    public $action;
}
