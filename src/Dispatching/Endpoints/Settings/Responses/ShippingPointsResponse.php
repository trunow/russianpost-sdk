<?php

declare(strict_types = 1);

namespace Appwilio\RussianPostSDK\Dispatching\Endpoints\Settings\Responses;

use JMS\Serializer\Annotation AS JMS;

final class ShippingPointsResponse
{
    /**
     * @JMS\Type("array<Appwilio\RussianPostSDK\Dispatching\Endpoints\Settings\Responses\ShippingPoints>")
     * @JMS\SerializedName("body")
     */
    public $items = [];
}