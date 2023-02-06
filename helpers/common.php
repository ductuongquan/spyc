<?php

use Nbngr\Yaml\Spyc;

if (!function_exists('spyc_load')) {
    /**
     * Parses YAML to array.
     * @param string $string YAML string.
     * @return array
     */
    function spyc_load($string)
    {
        return Spyc::YAMLLoadString($string);
    }
}

if (!function_exists('spyc_load_file')) {
    /**
     * Parses YAML to array.
     * @param string $file Path to YAML file.
     * @return array
     */
    function spyc_load_file($file)
    {
        return Spyc::YAMLLoad($file);
    }
}

if (!function_exists('spyc_dump')) {
    /**
     * Dumps array to YAML.
     * @param array $data Array.
     * @return string
     */
    function spyc_dump($data)
    {
        return Spyc::YAMLDump($data, false, false, true);
    }
}
