<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceAutoRenewalAttributeResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled.
     *
     * @example True
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The ID of the instance.
     *
     * @example rm-bpxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The billing cycle of renewal.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the instance.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'autoRenew'    => 'AutoRenew',
        'DBInstanceId' => 'DBInstanceId',
        'duration'     => 'Duration',
        'regionId'     => 'RegionId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
