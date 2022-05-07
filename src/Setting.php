<?php

namespace DcatAdmin\PermissionPlus;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function form()
    {
        $this->text('box_title', '盒子标题');
        $this->text('box_help', '盒子帮助文字');
        $this->text('box_log_start', '日志开始文字');
        $this->text('box_log_end', '日志结束文字');
        $this->text('box_btn', '导入按钮文字');
    }
}
