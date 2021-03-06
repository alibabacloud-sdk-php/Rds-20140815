<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBInstanceExpireTime extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $lockMode;
    protected $_name = [
        'expireTime'            => 'ExpireTime',
        'payType'               => 'PayType',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'lockMode'              => 'LockMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceExpireTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        return $model;
    }
}
