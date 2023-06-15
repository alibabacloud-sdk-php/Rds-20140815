<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyActionEventPolicyResponseBody extends Model
{
    /**
     * @description Indicates whether the event history feature is enabled.
     *
     * @example True
     *
     * @var string
     */
    public $enableEventLog;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example BAC0952C-0EB3-4DE7-A567-B83269BFE43F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enableEventLog' => 'EnableEventLog',
        'regionId'       => 'RegionId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableEventLog) {
            $res['EnableEventLog'] = $this->enableEventLog;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyActionEventPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableEventLog'])) {
            $model->enableEventLog = $map['EnableEventLog'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
