<?php

namespace WebTheory\WpCliUtil;

function abspath(string $dir): string
{
    return $dir . '/' . WpCliUtil::getInstallPath() . '/';
}

function maybe_define_abspath(string $dir): void
{
    if (!defined('ABSPATH')) {
        define('ABSPATH', abspath($dir));
    }
}
