<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponseBody\collationTimeZones;
use AlibabaCloud\Tea\Model;

class DescribeCollationTimeZonesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var collationTimeZones
     */
    public $collationTimeZones;
    protected $_name = [
        'requestId'          => 'RequestId',
        'collationTimeZones' => 'CollationTimeZones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->collationTimeZones) {
            $res['CollationTimeZones'] = null !== $this->collationTimeZones ? $this->collationTimeZones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCollationTimeZonesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CollationTimeZones'])) {
            $model->collationTimeZones = collationTimeZones::fromMap($map['CollationTimeZones']);
        }

        return $model;
    }
}
