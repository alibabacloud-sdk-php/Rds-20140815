<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudMigrationResultRequest extends Model
{
    /**
     * @description The ID of the destination instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of the instance.
     *
     * @example pgm-bp102g323jd4****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The private IP address that is used to connect to the self-managed PostgreSQL instance.
     *
     *   If the self-managed PostgreSQL instance resides on an Elastic Compute Service (ECS) instance, enter the private IP address of the ECS instance. For more information about how to obtain the private IP address of an ECS instance, see [View IP addresses](~~273914~~).
     *   If the self-managed PostgreSQL instance resides in a data center, enter the private IP address of the data center.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @description The port number that is used to connect to the self-managed PostgreSQL instance. You can run the netstat -a | grep PGSQL command to obtain the port number.
     *
     * @example 5432
     *
     * @var int
     */
    public $sourcePort;

    /**
     * @description The ID of the task. You can obtain the ID of a task from the response that is returned when you call the [CreateCloudMigrationTask](~~411690~~) operation to create the task.
     *
     * @example 440437220
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the task. You can obtain the ID of a task from the response that is returned when you call the [CreateCloudMigrationTask](~~411690~~) operation to create the task.
     *
     * @example 362c6c7a-4d20-4eac-898c-1495ceab374c
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'DBInstanceName'  => 'DBInstanceName',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIpAddress' => 'SourceIpAddress',
        'sourcePort'      => 'SourcePort',
        'taskId'          => 'TaskId',
        'taskName'        => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIpAddress) {
            $res['SourceIpAddress'] = $this->sourceIpAddress;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
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
     * @return DescribeCloudMigrationResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIpAddress'])) {
            $model->sourceIpAddress = $map['SourceIpAddress'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
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
