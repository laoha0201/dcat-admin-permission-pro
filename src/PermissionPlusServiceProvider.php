<?php

namespace DcatAdmin\PermissionPlus;

use Dcat\Admin\Extend\ServiceProvider;

class PermissionPlusServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	protected $menu = [
        'title' => '权限导入',
        'uri'  => 'permission-plus',
        'icon'  => 'feather icon-lock',
    ];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//
		
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
