<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net CP Capture Request
 */
class CPCaptureRequest extends CaptureRequest
{
    protected $liveEndpoint = 'https://cardpresent.authorize.net/gateway/transact.dll';

    public function getData()
    {
        $data    = parent::getData();
        $cp_data = array(
            'x_cpversion'   => $this->getCPVersion(),
            'x_market_type' => $this->getMarketType(),
            'x_device_type' => $this->getDeviceType()
        );

        return array_merge($data, $cp_data);
    }
}
