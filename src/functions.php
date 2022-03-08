<?php

namespace WebTheory\WpCliUtil;

function abspath(string $dir): string
{
    return $dir . '/' . WpCliUtil::getInstallPath() . '/';
}
