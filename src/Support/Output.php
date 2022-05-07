<?php


namespace DcatAdmin\PermissionPlus\Support;


use Dcat\Admin\Admin;

class Output
{
    public function header()
    {
        header('X-Accel-Buffering: no');
    }

    public function output($msg)
    {

        echo "<script>
parent.document.getElementById('displayContainer').append(\"{$msg} \\n \");
var scrollTop = parent.document.getElementById('displayContainer').scrollHeight;
parent.document.getElementById('displayContainer').scrollTop = scrollTop;
</script>";
        ob_flush();
        flush();
        usleep(10000);
    }

    public function end()
    {
        ob_end_flush();
    }
}
