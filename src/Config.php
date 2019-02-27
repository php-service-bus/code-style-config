<?php

/**
 * PHP Service Bus code style config
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
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
        return [
            '@PSR1'                                       => true,
            '@PSR2'                                       => true,
            'combine_consecutive_unsets'                  => true,
            'no_unused_imports'                           => true,
            'no_useless_else'                             => true,
            'no_useless_return'                           => true,
            'no_whitespace_before_comma_in_array'         => true,
            'normalize_index_brace'                       => true,
            'phpdoc_summary'                              => true,
            'phpdoc_types'                                => true,
            'single_blank_line_before_namespace'          => true,
            'class_keyword_remove'                        => false,
            'array_indentation'                           => true,
            'compact_nullable_typehint'                   => true,
            'concat_space'                                => false,
            'declare_strict_types'                        => true,
            'encoding'                                    => true,
            'fully_qualified_strict_types'                => true,
            'is_null'                                     => true,
            'logical_operators'                           => true,
            'lowercase_cast'                              => true,
            'lowercase_constants'                         => true,
            'lowercase_keywords'                          => true,
            'lowercase_static_reference'                  => true,
            'magic_constant_casing'                       => true,
            'magic_method_casing'                         => true,
            'modernize_types_casting'                     => true,
            'new_with_braces'                             => true,
            'no_blank_lines_after_class_opening'          => true,
            'yoda_style'                                  => true,
            'void_return'                                 => true,
            'short_scalar_cast'                           => true,
            'line_ending'                                 => true,
            'simplified_null_return'                      => false,
            'no_spaces_after_function_name'               => true,
            'no_unneeded_final_method'                    => true,
            'whitespace_after_comma_in_array'             => true,
            'single_import_per_statement'                 => true,
            'method_chaining_indentation'                 => true,
            'trim_array_spaces'                           => true,
            'trailing_comma_in_multiline_array'           => true,
            'phpdoc_inline_tag'                           => true,
            'no_whitespace_in_blank_line'                 => true,
            'no_trailing_whitespace'                      => true,
            'no_trailing_comma_in_singleline_array'       => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_leading_namespace_whitespace'             => true,
            'elseif'                                      => true,
            'no_blank_lines_after_phpdoc'                 => true,
            'phpdoc_separation'                           => true,
            'phpdoc_order'                                => true,
            'function_typehint_space'                     => true,
            'php_unit_set_up_tear_down_visibility'        => true,
            'php_unit_strict'                             => true,
            'no_trailing_comma_in_list_call'              => true,
            'array_syntax'                                => ['syntax' => 'short'],
            'cast_spaces'                                 => ['space' => 'single'],
            'ordered_imports'                             => ['imports_order' => ['function', 'class', 'const']],
            'return_type_declaration'                     => ['space_before' => 'none'],
            'align_multiline_comment'                     => ['comment_type' => 'all_multiline'],
            'class_attributes_separation'                 => ['elements' => ['const', 'method', 'property']],
            'phpdoc_types_order'                          => ['null_adjustment' => 'always_last'],
            'single_line_comment_style'                   => ['comment_types' => ['asterisk']],
            'multiline_comment_opening_closing'           => true,
            'function_declaration'                        => ['closure_function_spacing' => 'none'],
            'braces'                                      => [
                'allow_single_line_closure'                   => true,
                'position_after_control_structures'           => 'next',
                'position_after_anonymous_constructs'         => 'next',
                'position_after_functions_and_oop_constructs' => 'next'
            ],
            'blank_line_before_statement'                 => [
                'statements' => ['continue', 'do', 'die', 'exit', 'goto', 'if', 'return', 'switch', 'throw', 'try']
            ],
            'no_extra_blank_lines'                        => [
                'tokens' => [
                    'continue', 'curly_brace_block', 'extra', 'parenthesis_brace_block', 'return', 'square_brace_block',
                    'throw', 'use', 'use_trait', 'switch', 'case', 'default'
                ]
            ],

        ];
    }
}
