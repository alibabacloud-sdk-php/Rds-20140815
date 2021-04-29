<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CloneDBInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $dbNames;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $restoreTime;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @var string
     */
    public $restoreTable;

    /**
     * @var string
     */
    public $tableMeta;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var string
     */
    public $backupType;
    protected $_name = [
        'resourceOwnerId'       => 'ResourceOwnerId',
        'regionId'              => 'RegionId',
        'zoneId'                => 'ZoneId',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'dbNames'               => 'DbNames',
        'payType'               => 'PayType',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'DBInstanceId'          => 'DBInstanceId',
        'backupId'              => 'BackupId',
        'restoreTime'           => 'RestoreTime',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'privateIpAddress'      => 'PrivateIpAddress',
        'usedTime'              => 'UsedTime',
        'period'                => 'Period',
        'category'              => 'Category',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'restoreTable'          => 'RestoreTable',
        'tableMeta'             => 'TableMeta',
        'dedicatedHostGroupId'  => 'DedicatedHostGroupId',
        'backupType'            => 'BackupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->restoreTable) {
            $res['RestoreTable'] = $this->restoreTable;
        }
        if (null !== $this->tableMeta) {
            $res['TableMeta'] = $this->tableMeta;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['RestoreTable'])) {
            $model->restoreTable = $map['RestoreTable'];
        }
        if (isset($map['TableMeta'])) {
            $model->tableMeta = $map['TableMeta'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        return $model;
    }
}
