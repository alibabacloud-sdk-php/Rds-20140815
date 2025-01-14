<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DetachRCDiskRequest extends Model
{
    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The ID of the disk that you want to detach.
     *
     * This parameter is required.
     * @example rcd-f8zh55g5gbk1byjr****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rc-dh2jf9n6j4s14926****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'deleteWithInstance' => 'DeleteWithInstance',
        'diskId'             => 'DiskId',
        'instanceId'         => 'InstanceId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachRCDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}