<?php

class Manifest_mcp
{
    public function __construct()
    {
        $config = include 'addon.setup.php';
        $this->module_name = $config['name'];
        $this->version = $config['version'];
    }
}
