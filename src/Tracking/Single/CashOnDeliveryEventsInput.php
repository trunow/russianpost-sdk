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

class CashOnDeliveryEventsInput
{
    /** @var string */
    public $Barcode;

    /** @var string */
    public $Language;

    public function __construct($Barcode = null, $Language = null)
    {
        $this->Barcode = $Barcode;
        $this->Language = $Language;
    }
}
