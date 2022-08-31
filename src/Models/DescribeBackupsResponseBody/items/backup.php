<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items\backup\backupDownloadLinkByDB;
use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @var backupDownloadLinkByDB
     */
    public $backupDownloadLinkByDB;

    /**
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupInitiator;

    /**
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $checksum;

    /**
     * @var int
     */
    public $consistentTime;

    /**
     * @var string
     */
    public $copyOnlyBackup;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $encryption;

    /**
     * @var string
     */
    public $hostInstanceID;

    /**
     * @var int
     */
    public $isAvail;

    /**
     * @var string
     */
    public $metaStatus;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $storeStatus;
    protected $_name = [
        'backupDownloadLinkByDB'    => 'BackupDownloadLinkByDB',
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupInitiator'           => 'BackupInitiator',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupMethod'              => 'BackupMethod',
        'backupMode'                => 'BackupMode',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'backupType'                => 'BackupType',
        'checksum'                  => 'Checksum',
        'consistentTime'            => 'ConsistentTime',
        'copyOnlyBackup'            => 'CopyOnlyBackup',
        'DBInstanceId'              => 'DBInstanceId',
        'encryption'                => 'Encryption',
        'hostInstanceID'            => 'HostInstanceID',
        'isAvail'                   => 'IsAvail',
        'metaStatus'                => 'MetaStatus',
        'resourceGroupId'           => 'ResourceGroupId',
        'storageClass'              => 'StorageClass',
        'storeStatus'               => 'StoreStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDownloadLinkByDB) {
            $res['BackupDownloadLinkByDB'] = null !== $this->backupDownloadLinkByDB ? $this->backupDownloadLinkByDB->toMap() : null;
        }
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupInitiator) {
            $res['BackupInitiator'] = $this->backupInitiator;
        }
        if (null !== $this->backupIntranetDownloadURL) {
            $res['BackupIntranetDownloadURL'] = $this->backupIntranetDownloadURL;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->copyOnlyBackup) {
            $res['CopyOnlyBackup'] = $this->copyOnlyBackup;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->metaStatus) {
            $res['MetaStatus'] = $this->metaStatus;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->storeStatus) {
            $res['StoreStatus'] = $this->storeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDownloadLinkByDB'])) {
            $model->backupDownloadLinkByDB = backupDownloadLinkByDB::fromMap($map['BackupDownloadLinkByDB']);
        }
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupInitiator'])) {
            $model->backupInitiator = $map['BackupInitiator'];
        }
        if (isset($map['BackupIntranetDownloadURL'])) {
            $model->backupIntranetDownloadURL = $map['BackupIntranetDownloadURL'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['CopyOnlyBackup'])) {
            $model->copyOnlyBackup = $map['CopyOnlyBackup'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['MetaStatus'])) {
            $model->metaStatus = $map['MetaStatus'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['StoreStatus'])) {
            $model->storeStatus = $map['StoreStatus'];
        }

        return $model;
    }
}
