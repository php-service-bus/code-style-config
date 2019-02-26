<?php

/**
 * PHP Service Bus code style config
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

use PhpCsFixer\Config as PhpCsFixerConfig;

/**
 *
 */
final class Config extends PhpCsFixerConfig
{
    /**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct('PHP Service Bus');
    }

    /**
     * @inheritdoc
     */
    public function getRules(): array
    {
        return [];
    }
}