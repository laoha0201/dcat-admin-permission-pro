<?php

namespace DcatAdmin\PermissionPro\Annotations;

use Doctrine\Common\Annotations\Annotation\Required;

/**
 * @Annotation
 * Class Permission
 * @package DcatAdmin\PermissionPro\Annotations
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
