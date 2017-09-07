<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'tariq86\\countrylist\\countrylist' => '/Tariq86/CountryList/CountryList.php',
                'tariq86\\countrylistfacade' => '/Tariq86/CountryList/CountryListFacade.php',
                'tariq86\\countrylistserviceprovider' => '/Tariq86/CountryList/CountryListServiceProvider.php',
                'tariq86\\countrynotfoundexception' => '/Tariq86/CountryList/CountryNotFoundException.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd