<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceMajorVersionRequest extends Model
{
    /**
     * @description The time at which the system collects the statistics of the new instance. Valid values:
     *
     *   Before: ApsaraDB RDS collects the statistics of the new instance before the switchover to ensure service stability. If the original instance contains a large amount of data, the upgrade may require a long period of time.
     *   After: ApsaraDB RDS collects the statistics of the new instance after the switchover to accelerate the upgrade. If you access tables for which no statistics are generated, the execution plans that you specify may be inaccurate. In addition, your database service may be unavailable during peak hours.
     *
     * > If you set SwitchOver to false, the value Before of this parameter specifies that ApsaraDB RDS collects the statistics of the new instance before the new instance starts to process read and write requests, and the value After of this parameter specifies that ApsaraDB RDS collects the statistics of the new instance after the new instance starts to process read and write requests.
     * @example After
     *
     * @var string
     */
    public $collectStatMode;

    /**
     * @description The instance type of the new instance. The CPU and memory specifications of the new instance must be higher than or equal to the CPU and memory specifications of the original instance.
     *
     * > For more information about instance types in ApsaraDB RDS for PostgreSQL, see [Primary ApsaraDB RDS for PostgreSQL instance types](~~276990~~).
     * @example pg.n2.medium.2c
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The ID of the original instance.
     *
     * @example pgm-bp1gm3yh0ht1****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The storage capacity of the new instance.
     *
     * Valid values:
     *
     *   Valid values if you use enhanced SSDs (ESSDs) of performance level 1 (PL1): 20 to 3200
     *   Valid values if you use ESSDs of PL2: 500 to 3200
     *   Valid values if you use ESSDs of PL3: 1500 to 3200
     *
     * > If the original instance uses local disks, you can reduce the storage capacity of the instance when you upgrade the major engine version of the instance. For more information about the minimum available storage capacity, see [Upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance](~~203309~~).
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the new instance.
     *
     * Valid values:
     *
     *   cloud_ssd: standard SSDs
     *   cloud_essd: ESSD of PL1
     *   cloud_essd2: ESSD of PL2
     *   cloud_essd3: ESSD of PL3
     *
     * The major engine version upgrade feature is based on cloud disk snapshots. You can select a storage type based on the following conditions:
     *
     *   If the original instance uses standard SSDs, you can set this parameter to cloud_ssd.
     *   If the original instance uses ESSDs, you can set this parameter to cloud_essd, cloud_essd2, or cloud_essd3.
     *   If the original instance uses local disks, you can set this parameter to cloud_essd, cloud_essd2, or cloud_essd3.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The network type of the new instance. Set the value to VPC. The major engine version upgrade feature is supported only for instances that reside in VPCs.
     *
     * If the original instance resides in the classic network, you must migrate the instance to a VPC before you call this operation. For more information about how to view or change the network type of an instance, see [Change the network type of an ApsaraDB RDS for PostgreSQL instance](~~96761~~).
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The billing method of the new instance. Set the value to Postpaid.
     *
     * > For more information about how to change the billing method of an instance after the upgrade, see [Change the billing method of an instance from pay-as-you-go to subscription](~~96743~~).
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The internal IP address of the new instance. You do not need to specify this parameter. The system automatically assigns an internal IP address based on the values of the VPCId and vSwitchId parameters.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether the system automatically switches your workloads over to the new instance after data is migrated to the new instance.
     *
     * Valid values:
     *
     *   true
     *   false Before you perform an upgrade, we recommend that you set this parameter to false to test whether the new major engine version is compatible with your workloads.
     *
     * >
     *
     *   If you set this parameter to true, you must take note of the following information:
     *
     *   After the switchover is complete, you cannot roll your workloads back to the original instance. Proceed with caution.
     *   During the switchover, the original instance processes only read requests. We recommend that you perform the switchover during off-peak hours.
     *   If read-only instances are attached to the original instance, you can set this parameter only to false. In this case, the read-only instances that are attached to the original instance cannot be cloned. After the upgrade is complete, you must create read-only instances for the new instance.
     *
     *   If you set this parameter to false, you must take note of the following information:
     *
     *   The data migration does not interrupt your workloads on the original instance.
     *   After data is migrated to the new instance, you must update the endpoint configuration on your application. This update requires you to replace the endpoint of the original instance with the endpoint of the new instance. For more information about how to view the endpoint of an instance, see [View and change the internal and public endpoints and port numbers of an ApsaraDB RDS for PostgreSQL instance](~~96788~~).
     *
     * @example false
     *
     * @var string
     */
    public $switchOver;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example 2021-07-10T13:15:12Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The time at which the system switches your workloads over to the new instance. This parameter is used together with SwitchOver and takes effect only when you set SwitchOver to true.
     *
     * Valid values:
     *
     *   Immediate: After data is migrated to the new instance, the system immediately switches your workloads over to the new instance.
     *   MaintainTime: After data is migrated to the new instance, the system switches your workloads over to the new instance during the maintenance window that you specify. You can call the [ModifyDBInstanceMaintainTime](~~26249~~) operation to change the maintenance window of an instance.
     *
     * @example Immediate
     *
     * @var string
     */
    public $switchTimeMode;

    /**
     * @description The major engine version of the new instance. The value of this parameter must be the major engine version on which an upgrade check is performed.
     *
     * > You can call the [UpgradeDBInstanceMajorVersionPrecheck](~~330050~~) operation to perform an upgrade check.
     * @example 13.0
     *
     * @var string
     */
    public $targetMajorVersion;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The ID of the VPC in which the original instance resides. You can call the [DescribeDBInstanceAttribute](~~26231~~) operation to query the VPC ID of the instance.
     *
     * @example vpc-bp1opxu1zkhn00gzv****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description *   If the original instance runs RDS Basic Edition, you must enter the vSwitch ID of the new instance.
     *   If the original instance runs RDS High-availability Edition, you must enter the vSwitch ID of the new instance and the vSwitch ID of the secondary instance of the new instance. Make sure that you separate the vSwitch IDs with commas (,).
     *
     * > The vSwitches that you specify must reside in the same zone as the original instance. You can call the [DescribeVSwitches](~~35748~~) operation to query the ID of the vSwitch.
     * @example vsw-bp10aqj6o4lclxdrm****,vsw-bp10aqj6o4lclxdrm****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the new instance. You can call the [DescribeRegions](~~26243~~) operation to query the zone ID.
     *
     * You can select a zone that belongs to the region in which the original instance resides. The zone can be different from the zone of the original instance.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The zone ID of the secondary instance for the new instance. You can specify this parameter only when the original instance runs RDS High-availability Edition.
     *
     * You can call the [DescribeRegions](~~26243~~) operation to query the zone ID.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneIdSlave1;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneIdSlave2;
    protected $_name = [
        'collectStatMode'       => 'CollectStatMode',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'privateIpAddress'      => 'PrivateIpAddress',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'switchOver'            => 'SwitchOver',
        'switchTime'            => 'SwitchTime',
        'switchTimeMode'        => 'SwitchTimeMode',
        'targetMajorVersion'    => 'TargetMajorVersion',
        'usedTime'              => 'UsedTime',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
        'zoneIdSlave1'          => 'ZoneIdSlave1',
        'zoneIdSlave2'          => 'ZoneIdSlave2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectStatMode) {
            $res['CollectStatMode'] = $this->collectStatMode;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->switchOver) {
            $res['SwitchOver'] = $this->switchOver;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }
        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneIdSlave1) {
            $res['ZoneIdSlave1'] = $this->zoneIdSlave1;
        }
        if (null !== $this->zoneIdSlave2) {
            $res['ZoneIdSlave2'] = $this->zoneIdSlave2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceMajorVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectStatMode'])) {
            $model->collectStatMode = $map['CollectStatMode'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SwitchOver'])) {
            $model->switchOver = $map['SwitchOver'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }
        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneIdSlave1'])) {
            $model->zoneIdSlave1 = $map['ZoneIdSlave1'];
        }
        if (isset($map['ZoneIdSlave2'])) {
            $model->zoneIdSlave2 = $map['ZoneIdSlave2'];
        }

        return $model;
    }
}
