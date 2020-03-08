<?php
declare(strict_types=1);

/**
 * This file is part of TwigView.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cake\TwigView\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class Basic.
 *
 * @internal
 */
final class Basic extends AbstractExtension
{
    /**
     * Get declared filters.
     *
     * @return \Twig\TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('debug', 'debug'),
            new TwigFilter('pr', 'pr'),
            new TwigFilter('low', 'strtolower'),
            new TwigFilter('up', 'strtoupper'),
            new TwigFilter('env', 'env'),
            new TwigFilter('count', 'count'),
            new TwigFilter('h', 'h'),
            new TwigFilter('null', function () {
                return '';
            }),
        ];
    }

    /**
     * Get extension name.
     *
     * @return string
     */
    public function getName(): string
    {
        return 'basic';
    }
}