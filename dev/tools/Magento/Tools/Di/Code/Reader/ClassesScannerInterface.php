<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Tools\Di\Code\Reader;

/**
 * Interface ClassesScannerInterface
 *
 * @package Magento\Tools\Di\Code\Reader
 */
interface ClassesScannerInterface
{

    /**
     * Retrieves list of classes for given path
     *
     * @param string $path path to dir with files
     *
     * @return array
     */
    public function getList($path);
}
