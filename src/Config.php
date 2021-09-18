<?php

/**
 * PHP Service Bus code style config
 *
 * @author  Maksim Masiukevich <contacts@desperado.dev>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\CodeStyle;

use PhpCsFixer\Config as PhpCsFixerConfig;

/**
 *
 */
final class Config extends PhpCsFixerConfig
{
    public function __construct()
    {
        parent::__construct('PHP Service Bus');
    }

    public function getRules(): array
    {
        return [
            '@PSR12'                     => true,
            'braces'                      => [
                'allow_single_line_closure'                   => true,
                'position_after_control_structures'           => 'next',
                'position_after_anonymous_constructs'         => 'next',
                'position_after_functions_and_oop_constructs' => 'next'
            ],
            'blank_line_before_statement' => [
                'statements' => ['continue', 'do', 'die', 'exit', 'goto', 'if', 'return', 'switch', 'throw', 'try']
            ],
            'yoda_style'                  => false
        ];
    }
}
