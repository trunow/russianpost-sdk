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

class TrackingOperationFinanceParameters
{
    /** @var int */
    private $Payment;

    /** @var int */
    private $Value;

    /** @var int */
    private $MassRate;

    /** @var int */
    private $InsrRate;

    /** @var int */
    private $AirRate;

    /** @var int */
    private $Rate;

    /** @var int */
    private $CustomDuty;

    /**
     * Сумма наложенного платежа в копейках.
     *
     * @return int
     */
    public function getPayment(): int
    {
        return $this->Payment;
    }

    /**
     * Сумма объявленной ценности в копейках.
     *
     * @return int
     */
    public function getDeclaredValue(): int
    {
        return $this->Value;
    }

    /**
     * Сумма платы за объявленную ценность в копейках.
     *
     * @return int
     */
    public function getInsuranceRate(): int
    {
        return $this->InsrRate;
    }

    /**
     * Общая сумма платы за пересылку наземным и воздушным транспортом в копейках.
     *
     * @return int
     */
    public function getMassRate(): int
    {
        return $this->MassRate;
    }

    /**
     * Выделенная сумма платы за пересылку воздушным транспортом из общей суммы платы за пересылку в копейках.
     *
     * @return int
     */
    public function getAirRate(): int
    {
        return $this->AirRate;
    }

    /**
     * Сумма дополнительного тарифного сбора в копейках.
     *
     * @return int
     */
    public function getExtraRate(): int
    {
        return $this->Rate;
    }

    /**
     * Сумма таможенного платежа в копейках.
     *
     * @return int
     */
    public function getCustomsDuty(): int
    {
        return $this->CustomDuty;
    }
}
