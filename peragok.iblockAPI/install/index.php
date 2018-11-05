<?php

class Peragok_IblockAPI extends CModule
{
    var $MODULE_ID = "peragok.iblockAPI";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;

    function __construct()
    {
        //$arModuleVersion = array();
        $this->MODULE_VERSION = "0.0.1";
        $this->MODULE_VERSION_DATE = "06.11.2018";
        $this->MODULE_NAME = "API Битрикса";
        $this->MODULE_DESCRIPTION = "Модуль, расширяющий API битрикса";
    }

    function DoInstall()
    {
        RegisterModule("peragok.iblockAPI");
        return true;
    }

    function DoUninstall()
    {
        UnRegisterModule("peragok.iblockAPI");
    }

    function InstallEvents()
    {
        return true;
    }

    function UnInstallEvents()
    {
        return true;
    }

    function InstallFiles()
    {
        return true;
    }

    function UnInstallFiles()
    {
        return true;
    }
}
