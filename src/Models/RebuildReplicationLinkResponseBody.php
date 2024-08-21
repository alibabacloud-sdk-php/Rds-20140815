<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RebuildReplicationLinkResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example pgm-bp1trqb4p1xd****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The request ID.
     *
     * @example 65BDA532-28AF-4122-AA39-B382721EEE64
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example 3472****
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The task name.
     *
     * @example test01
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'requestId'    => 'RequestId',
        'taskId'       => 'TaskId',
        'taskName'     => 'TaskName',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebuildReplicationLinkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
