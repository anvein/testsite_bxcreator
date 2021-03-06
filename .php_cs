<?php
$finder = PhpCsFixer\Finder::create()
    ->exclude([__DIR__ . '/templates'])
    ->in(__DIR__);

$rules = [
    '@Symfony' => true,
    'new_with_braces' => false,
    'phpdoc_inline_tag' => false,
    'concat_space' => ['spacing' => 'one'],
    'array_syntax' => ['syntax' => 'short'],
];
if (class_exists('\\PhpCsFixer\\Fixer\\ControlStructure\\YodaStyleFixer')) {
    $rules['yoda_style'] = false;
}
return PhpCsFixer\Config::create()->setRules($rules)->setFinder($finder)->setUsingCache(false);