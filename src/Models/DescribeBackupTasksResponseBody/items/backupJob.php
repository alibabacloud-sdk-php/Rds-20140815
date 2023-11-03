<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupTasksResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupJob extends Model
{
    /**
     * @description The ID of the backup set that is generated by the backup task.
     *
     * >  If the value of the **BackupStatus** parameter is **Finished**, you can view the backup set ID only if you configure the **BackupJobId** parameter.
     * @example 346650271
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The ID of the backup task.
     *
     * @example 4762614
     *
     * @var string
     */
    public $backupJobId;

    /**
     * @description The status of the backup program. Valid values:
     *
     *   **NoStart**
     *   **Preparing**
     *   **Waiting**
     *   **Uploading**
     *   **Checking**
     *   **Finished**
     *
     * @example NoStart
     *
     * @var string
     */
    public $backupProgressStatus;

    /**
     * @description The status of the backup task. Valid values:
     *
     *   **NoStart**
     *   **Checking**
     *   **Preparing**
     *   **Waiting**
     *   **Uploading**
     *   **Finished**
     *   **Failed**
     *
     * >  This parameter is returned only after a backup task is run.
     * @example NoStart
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description The backup mode. Valid values:
     *
     *   **Automated**
     *   **Manual**
     *
     * @example Automated
     *
     * @var string
     */
    public $jobMode;

    /**
     * @description The progress of the task in percentage.
     *
     * @example 25
     *
     * @var string
     */
    public $process;

    /**
     * @description The type of the task. Valid values:
     *
     *   **TempBackupTask**: The backup task is an adhoc backup task.
     *   **NormalBackupTask**: The backup task is a common backup task.
     *
     * @example NormalBackupTask
     *
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'backupId'             => 'BackupId',
        'backupJobId'          => 'BackupJobId',
        'backupProgressStatus' => 'BackupProgressStatus',
        'backupStatus'         => 'BackupStatus',
        'jobMode'              => 'JobMode',
        'process'              => 'Process',
        'taskAction'           => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupJobId) {
            $res['BackupJobId'] = $this->backupJobId;
        }
        if (null !== $this->backupProgressStatus) {
            $res['BackupProgressStatus'] = $this->backupProgressStatus;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->jobMode) {
            $res['JobMode'] = $this->jobMode;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupJobId'])) {
            $model->backupJobId = $map['BackupJobId'];
        }
        if (isset($map['BackupProgressStatus'])) {
            $model->backupProgressStatus = $map['BackupProgressStatus'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['JobMode'])) {
            $model->jobMode = $map['JobMode'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
