<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponseBody\items\item\restoreRegions;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var int
     */
    public $crossBackupId;

    /**
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @var string
     */
    public $consistentTime;

    /**
     * @var restoreRegions
     */
    public $restoreRegions;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $crossBackupSetLocation;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $crossBackupDownloadLink;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $backupSetStatus;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $crossBackupSetFile;

    /**
     * @var int
     */
    public $backupSetScale;

    /**
     * @var int
     */
    public $crossBackupSetSize;

    /**
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $backupMethod;
    protected $_name = [
        'crossBackupId'           => 'CrossBackupId',
        'DBInstanceStorageType'   => 'DBInstanceStorageType',
        'consistentTime'          => 'ConsistentTime',
        'restoreRegions'          => 'RestoreRegions',
        'backupStartTime'         => 'BackupStartTime',
        'backupType'              => 'BackupType',
        'crossBackupSetLocation'  => 'CrossBackupSetLocation',
        'backupEndTime'           => 'BackupEndTime',
        'crossBackupDownloadLink' => 'CrossBackupDownloadLink',
        'instanceId'              => 'InstanceId',
        'backupSetStatus'         => 'BackupSetStatus',
        'engineVersion'           => 'EngineVersion',
        'crossBackupSetFile'      => 'CrossBackupSetFile',
        'backupSetScale'          => 'BackupSetScale',
        'crossBackupSetSize'      => 'CrossBackupSetSize',
        'crossBackupRegion'       => 'CrossBackupRegion',
        'category'                => 'Category',
        'engine'                  => 'Engine',
        'backupMethod'            => 'BackupMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossBackupId) {
            $res['CrossBackupId'] = $this->crossBackupId;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->restoreRegions) {
            $res['RestoreRegions'] = null !== $this->restoreRegions ? $this->restoreRegions->toMap() : null;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->crossBackupSetLocation) {
            $res['CrossBackupSetLocation'] = $this->crossBackupSetLocation;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->crossBackupDownloadLink) {
            $res['CrossBackupDownloadLink'] = $this->crossBackupDownloadLink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->backupSetStatus) {
            $res['BackupSetStatus'] = $this->backupSetStatus;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->crossBackupSetFile) {
            $res['CrossBackupSetFile'] = $this->crossBackupSetFile;
        }
        if (null !== $this->backupSetScale) {
            $res['BackupSetScale'] = $this->backupSetScale;
        }
        if (null !== $this->crossBackupSetSize) {
            $res['CrossBackupSetSize'] = $this->crossBackupSetSize;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
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
        if (isset($map['CrossBackupId'])) {
            $model->crossBackupId = $map['CrossBackupId'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['RestoreRegions'])) {
            $model->restoreRegions = restoreRegions::fromMap($map['RestoreRegions']);
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['CrossBackupSetLocation'])) {
            $model->crossBackupSetLocation = $map['CrossBackupSetLocation'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['CrossBackupDownloadLink'])) {
            $model->crossBackupDownloadLink = $map['CrossBackupDownloadLink'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BackupSetStatus'])) {
            $model->backupSetStatus = $map['BackupSetStatus'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['CrossBackupSetFile'])) {
            $model->crossBackupSetFile = $map['CrossBackupSetFile'];
        }
        if (isset($map['BackupSetScale'])) {
            $model->backupSetScale = $map['BackupSetScale'];
        }
        if (isset($map['CrossBackupSetSize'])) {
            $model->crossBackupSetSize = $map['CrossBackupSetSize'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        return $model;
    }
}
