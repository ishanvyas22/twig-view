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

use Cake\I18n\Time as CakeTime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class Time.
 *
 * @internal
 */
final class Time extends AbstractExtension
{
    /**
     * Get declared functions.
     *
     * @return \Twig\TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('time', function ($time = null, $timezone = null) {
                return new CakeTime($time, $timezone);
            }),
            new TwigFunction('timezones', 'Cake\I18n\Time::listTimezones'),
        ];
    }

    /**
     * Get extension name.
     *
     * @return string
     */
    public function getName(): string
    {
        return 'time';
    }
}