<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyReadonlyInstanceDelayReplicationTimeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $readSQLReplicationTime;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId'              => 'RequestId',
        'DBInstanceId'           => 'DBInstanceId',
        'readSQLReplicationTime' => 'ReadSQLReplicationTime',
        'taskId'                 => 'TaskId',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->readSQLReplicationTime) {
            $res['ReadSQLReplicationTime'] = $this->readSQLReplicationTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyReadonlyInstanceDelayReplicationTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ReadSQLReplicationTime'])) {
            $model->readSQLReplicationTime = $map['ReadSQLReplicationTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
