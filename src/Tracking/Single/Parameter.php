<?php

/**
 * This file is part of RussianPost SDK package.
 *
 * © Appwilio (http://appwilio.com), greabock (https://github.com/greabock), JhaoDa (https://github.com/jhaoda)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Appwilio\RussianPostSDK\Tracking\Single;

class Parameter
{
    /** @var int */
    private $Id;

    /** @var string */
    private $Name;

    /**
     * Код/идентификатор (Id).
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Название (Name).
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
}
