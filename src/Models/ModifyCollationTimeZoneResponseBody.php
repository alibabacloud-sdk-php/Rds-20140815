<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyCollationTimeZoneResponseBody extends Model
{
    /**
     * @var string
     */
    public $collation;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'collation'    => 'Collation',
        'DBInstanceId' => 'DBInstanceId',
        'requestId'    => 'RequestId',
        'timezone'     => 'Timezone',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCollationTimeZoneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
