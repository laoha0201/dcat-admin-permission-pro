<?php


namespace DcatAdmin\PermissionPro\Annotations;

use Doctrine\Common\Annotations\Annotation\Required;

/**
 * @Annotation
 * Class Module
 * @package DcatAdmin\PermissionPro\Annotations
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
