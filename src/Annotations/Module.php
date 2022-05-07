<?php


namespace DcatAdmin\PermissionPlus\Annotations;

use Doctrine\Common\Annotations\Annotation\Required;

/**
 * @Annotation
 * Class Module
 * @package DcatAdmin\PermissionPlus\Annotations
 */
final class Module
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
}
