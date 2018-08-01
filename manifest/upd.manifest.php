<?php

class Manifest_upd
{
    public function __construct()
    {
        $config = include 'addon.setup.php';
        $this->module_name = $config['name'];
        $this->version = $config['version'];
    }

    public function install()
    {
        ee()->db->insert('modules', array(
            'module_name'        => $this->module_name,
            'module_version'     => $this->version,
        ));

        return true;
    }

    public function uninstall()
    {
        ee()->db->where('module_name', $this->module_name);
        ee()->db->delete('modules');

        return true;
    }
}
