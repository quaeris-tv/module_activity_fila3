<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNativeCallRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictScalarReturnExprRector;
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths(
        [
<<<<<<< HEAD
<<<<<<< HEAD
            __DIR__,
=======
        __DIR__,
>>>>>>> cd0d628 (up)
=======
            __DIR__,
>>>>>>> 47f534a (Lint)
        ]
    );

    $rectorConfig->skip(
        [
<<<<<<< HEAD
<<<<<<< HEAD
            '*/docs',
            '*/vendor',
=======
        '*/docs',
        '*/vendor',
>>>>>>> cd0d628 (up)
=======
            '*/docs',
            '*/vendor',
>>>>>>> 47f534a (Lint)
        ]
    );

    // register a single rule
    // $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    // $rectorConfig->rule(RedirectRouteToToRouteHelperRector::class);
    $rectorConfig->rules(
        [
<<<<<<< HEAD
<<<<<<< HEAD
            ReturnTypeFromStrictNativeCallRector::class,
            ReturnTypeFromStrictScalarReturnExprRector::class,
=======
        ReturnTypeFromStrictNativeCallRector::class,
        ReturnTypeFromStrictScalarReturnExprRector::class,
>>>>>>> cd0d628 (up)
=======
            ReturnTypeFromStrictNativeCallRector::class,
            ReturnTypeFromStrictScalarReturnExprRector::class,
>>>>>>> 47f534a (Lint)
        ]
    );

    // define sets of rules
    $rectorConfig->sets(
        [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47f534a (Lint)
            PHPUnitLevelSetList::UP_TO_PHPUNIT_100,
            // SetList::DEAD_CODE,
            // SetList::CODE_QUALITY,
            LevelSetList::UP_TO_PHP_81,
            LaravelSetList::LARAVEL_100,
<<<<<<< HEAD

            // SetList::NAMING, //problemi con injuction
            // SetList::TYPE_DECLARATION,
            // SetList::CODING_STYLE,
            // SetList::PRIVATIZATION,//problemi con final
            // SetList::EARLY_RETURN,
            // SetList::INSTANCEOF,
=======
        PHPUnitLevelSetList::UP_TO_PHPUNIT_100,
        // SetList::DEAD_CODE,
        // SetList::CODE_QUALITY,
        LevelSetList::UP_TO_PHP_81,
        LaravelSetList::LARAVEL_100,

        // SetList::NAMING, //problemi con injuction
        // SetList::TYPE_DECLARATION,
        // SetList::CODING_STYLE,
        // SetList::PRIVATIZATION,//problemi con final
        // SetList::EARLY_RETURN,
        // SetList::INSTANCEOF,
>>>>>>> cd0d628 (up)
=======

            // SetList::NAMING, //problemi con injuction
            // SetList::TYPE_DECLARATION,
            // SetList::CODING_STYLE,
            // SetList::PRIVATIZATION,//problemi con final
            // SetList::EARLY_RETURN,
            // SetList::INSTANCEOF,
>>>>>>> 47f534a (Lint)
        ]
    );

    $rectorConfig->importNames();
};
