<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeReadDBInstanceDelayResponseBody extends Model
{
    /**
     * @description The primary instance ID.
     *
     * @example rm-bp*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The latency of data replication. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description The latency information.
     *
     * @var items
     */
    public $items;

    /**
     * @description The read-only instance ID.
     *
     * @example rr-bp*****
     *
     * @var string
     */
    public $readDBInstanceId;

    /**
     * @description The request ID.
     *
     * @example F1BDDEA8-452D-450B-AB10-CD5C5BAFC5DF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'delayTime'        => 'DelayTime',
        'items'            => 'Items',
        'readDBInstanceId' => 'ReadDBInstanceId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->readDBInstanceId) {
            $res['ReadDBInstanceId'] = $this->readDBInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReadDBInstanceDelayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['ReadDBInstanceId'])) {
            $model->readDBInstanceId = $map['ReadDBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
