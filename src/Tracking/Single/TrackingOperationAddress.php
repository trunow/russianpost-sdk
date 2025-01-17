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

class TrackingOperationAddress
{
    /** @var int */
    private $Index;

    /** @var string */
    private $Description;

    /**
     * Почтовый индекс места проведения операции (Index).
     * Не возвращается для зарубежных операций.
     *
     * @return int
     */
    public function getIndex(): int
    {
        return $this->Index;
    }

    /**
     * Адрес и/или название места проведения операции (Description).
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }
}
