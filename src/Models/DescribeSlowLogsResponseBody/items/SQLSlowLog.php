<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowLog extends Model
{
    /**
     * @var int
     */
    public $slowLogId;

    /**
     * @var string
     */
    public $SQLHASH;

    /**
     * @var string
     */
    public $SQLIdStr;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $mySQLTotalExecutionCounts;

    /**
     * @var int
     */
    public $mySQLTotalExecutionTimes;

    /**
     * @var int
     */
    public $totalLockTimes;

    /**
     * @var int
     */
    public $maxLockTime;

    /**
     * @var int
     */
    public $parseTotalRowCounts;

    /**
     * @var int
     */
    public $parseMaxRowCount;

    /**
     * @var int
     */
    public $returnTotalRowCounts;

    /**
     * @var int
     */
    public $returnMaxRowCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $SQLServerTotalExecutionCounts;

    /**
     * @var int
     */
    public $SQLServerTotalExecutionTimes;

    /**
     * @var int
     */
    public $totalLogicalReadCounts;

    /**
     * @var int
     */
    public $totalPhysicalReadCounts;

    /**
     * @var string
     */
    public $reportTime;

    /**
     * @var int
     */
    public $maxExecutionTime;

    /**
     * @var int
     */
    public $avgExecutionTime;

    /**
     * @var int
     */
    public $avgPhysicalReadCounts;

    /**
     * @var int
     */
    public $maxPhysicalReadCounts;

    /**
     * @var int
     */
    public $minPhysicalReadCounts;

    /**
     * @var int
     */
    public $avgLogicalReadCounts;

    /**
     * @var int
     */
    public $maxLogicalReadCounts;

    /**
     * @var int
     */
    public $minLogicalReadCounts;

    /**
     * @var int
     */
    public $totalIOWriteCounts;

    /**
     * @var int
     */
    public $avgIOWriteCounts;

    /**
     * @var int
     */
    public $maxIOWriteCounts;

    /**
     * @var int
     */
    public $minIOWriteCounts;

    /**
     * @var int
     */
    public $totalRowsAffectedCounts;

    /**
     * @var int
     */
    public $avgRowsAffectedCounts;

    /**
     * @var int
     */
    public $maxRowsAffectedCounts;

    /**
     * @var int
     */
    public $minRowsAffectedCounts;

    /**
     * @var int
     */
    public $totalLastRowsAffectedCounts;

    /**
     * @var int
     */
    public $avgLastRowsAffectedCounts;

    /**
     * @var int
     */
    public $maxLastRowsAffectedCounts;

    /**
     * @var int
     */
    public $minLastRowsAffectedCounts;

    /**
     * @var int
     */
    public $SQLServerMinExecutionTime;

    /**
     * @var int
     */
    public $SQLServerAvgExecutionTime;

    /**
     * @var int
     */
    public $SQLServerTotalCpuTime;

    /**
     * @var int
     */
    public $SQLServerAvgCpuTime;

    /**
     * @var int
     */
    public $SQLServerMaxCpuTime;

    /**
     * @var int
     */
    public $SQLServerMinCpuTime;
    protected $_name = [
        'slowLogId'                     => 'SlowLogId',
        'SQLHASH'                       => 'SQLHASH',
        'SQLIdStr'                      => 'SQLIdStr',
        'DBName'                        => 'DBName',
        'SQLText'                       => 'SQLText',
        'mySQLTotalExecutionCounts'     => 'MySQLTotalExecutionCounts',
        'mySQLTotalExecutionTimes'      => 'MySQLTotalExecutionTimes',
        'totalLockTimes'                => 'TotalLockTimes',
        'maxLockTime'                   => 'MaxLockTime',
        'parseTotalRowCounts'           => 'ParseTotalRowCounts',
        'parseMaxRowCount'              => 'ParseMaxRowCount',
        'returnTotalRowCounts'          => 'ReturnTotalRowCounts',
        'returnMaxRowCount'             => 'ReturnMaxRowCount',
        'createTime'                    => 'CreateTime',
        'SQLServerTotalExecutionCounts' => 'SQLServerTotalExecutionCounts',
        'SQLServerTotalExecutionTimes'  => 'SQLServerTotalExecutionTimes',
        'totalLogicalReadCounts'        => 'TotalLogicalReadCounts',
        'totalPhysicalReadCounts'       => 'TotalPhysicalReadCounts',
        'reportTime'                    => 'ReportTime',
        'maxExecutionTime'              => 'MaxExecutionTime',
        'avgExecutionTime'              => 'AvgExecutionTime',
        'avgPhysicalReadCounts'         => 'AvgPhysicalReadCounts',
        'maxPhysicalReadCounts'         => 'MaxPhysicalReadCounts',
        'minPhysicalReadCounts'         => 'MinPhysicalReadCounts',
        'avgLogicalReadCounts'          => 'AvgLogicalReadCounts',
        'maxLogicalReadCounts'          => 'MaxLogicalReadCounts',
        'minLogicalReadCounts'          => 'MinLogicalReadCounts',
        'totalIOWriteCounts'            => 'TotalIOWriteCounts',
        'avgIOWriteCounts'              => 'AvgIOWriteCounts',
        'maxIOWriteCounts'              => 'MaxIOWriteCounts',
        'minIOWriteCounts'              => 'MinIOWriteCounts',
        'totalRowsAffectedCounts'       => 'TotalRowsAffectedCounts',
        'avgRowsAffectedCounts'         => 'AvgRowsAffectedCounts',
        'maxRowsAffectedCounts'         => 'MaxRowsAffectedCounts',
        'minRowsAffectedCounts'         => 'MinRowsAffectedCounts',
        'totalLastRowsAffectedCounts'   => 'TotalLastRowsAffectedCounts',
        'avgLastRowsAffectedCounts'     => 'AvgLastRowsAffectedCounts',
        'maxLastRowsAffectedCounts'     => 'MaxLastRowsAffectedCounts',
        'minLastRowsAffectedCounts'     => 'MinLastRowsAffectedCounts',
        'SQLServerMinExecutionTime'     => 'SQLServerMinExecutionTime',
        'SQLServerAvgExecutionTime'     => 'SQLServerAvgExecutionTime',
        'SQLServerTotalCpuTime'         => 'SQLServerTotalCpuTime',
        'SQLServerAvgCpuTime'           => 'SQLServerAvgCpuTime',
        'SQLServerMaxCpuTime'           => 'SQLServerMaxCpuTime',
        'SQLServerMinCpuTime'           => 'SQLServerMinCpuTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slowLogId) {
            $res['SlowLogId'] = $this->slowLogId;
        }
        if (null !== $this->SQLHASH) {
            $res['SQLHASH'] = $this->SQLHASH;
        }
        if (null !== $this->SQLIdStr) {
            $res['SQLIdStr'] = $this->SQLIdStr;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->mySQLTotalExecutionCounts) {
            $res['MySQLTotalExecutionCounts'] = $this->mySQLTotalExecutionCounts;
        }
        if (null !== $this->mySQLTotalExecutionTimes) {
            $res['MySQLTotalExecutionTimes'] = $this->mySQLTotalExecutionTimes;
        }
        if (null !== $this->totalLockTimes) {
            $res['TotalLockTimes'] = $this->totalLockTimes;
        }
        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }
        if (null !== $this->parseTotalRowCounts) {
            $res['ParseTotalRowCounts'] = $this->parseTotalRowCounts;
        }
        if (null !== $this->parseMaxRowCount) {
            $res['ParseMaxRowCount'] = $this->parseMaxRowCount;
        }
        if (null !== $this->returnTotalRowCounts) {
            $res['ReturnTotalRowCounts'] = $this->returnTotalRowCounts;
        }
        if (null !== $this->returnMaxRowCount) {
            $res['ReturnMaxRowCount'] = $this->returnMaxRowCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->SQLServerTotalExecutionCounts) {
            $res['SQLServerTotalExecutionCounts'] = $this->SQLServerTotalExecutionCounts;
        }
        if (null !== $this->SQLServerTotalExecutionTimes) {
            $res['SQLServerTotalExecutionTimes'] = $this->SQLServerTotalExecutionTimes;
        }
        if (null !== $this->totalLogicalReadCounts) {
            $res['TotalLogicalReadCounts'] = $this->totalLogicalReadCounts;
        }
        if (null !== $this->totalPhysicalReadCounts) {
            $res['TotalPhysicalReadCounts'] = $this->totalPhysicalReadCounts;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->maxExecutionTime) {
            $res['MaxExecutionTime'] = $this->maxExecutionTime;
        }
        if (null !== $this->avgExecutionTime) {
            $res['AvgExecutionTime'] = $this->avgExecutionTime;
        }
        if (null !== $this->avgPhysicalReadCounts) {
            $res['AvgPhysicalReadCounts'] = $this->avgPhysicalReadCounts;
        }
        if (null !== $this->maxPhysicalReadCounts) {
            $res['MaxPhysicalReadCounts'] = $this->maxPhysicalReadCounts;
        }
        if (null !== $this->minPhysicalReadCounts) {
            $res['MinPhysicalReadCounts'] = $this->minPhysicalReadCounts;
        }
        if (null !== $this->avgLogicalReadCounts) {
            $res['AvgLogicalReadCounts'] = $this->avgLogicalReadCounts;
        }
        if (null !== $this->maxLogicalReadCounts) {
            $res['MaxLogicalReadCounts'] = $this->maxLogicalReadCounts;
        }
        if (null !== $this->minLogicalReadCounts) {
            $res['MinLogicalReadCounts'] = $this->minLogicalReadCounts;
        }
        if (null !== $this->totalIOWriteCounts) {
            $res['TotalIOWriteCounts'] = $this->totalIOWriteCounts;
        }
        if (null !== $this->avgIOWriteCounts) {
            $res['AvgIOWriteCounts'] = $this->avgIOWriteCounts;
        }
        if (null !== $this->maxIOWriteCounts) {
            $res['MaxIOWriteCounts'] = $this->maxIOWriteCounts;
        }
        if (null !== $this->minIOWriteCounts) {
            $res['MinIOWriteCounts'] = $this->minIOWriteCounts;
        }
        if (null !== $this->totalRowsAffectedCounts) {
            $res['TotalRowsAffectedCounts'] = $this->totalRowsAffectedCounts;
        }
        if (null !== $this->avgRowsAffectedCounts) {
            $res['AvgRowsAffectedCounts'] = $this->avgRowsAffectedCounts;
        }
        if (null !== $this->maxRowsAffectedCounts) {
            $res['MaxRowsAffectedCounts'] = $this->maxRowsAffectedCounts;
        }
        if (null !== $this->minRowsAffectedCounts) {
            $res['MinRowsAffectedCounts'] = $this->minRowsAffectedCounts;
        }
        if (null !== $this->totalLastRowsAffectedCounts) {
            $res['TotalLastRowsAffectedCounts'] = $this->totalLastRowsAffectedCounts;
        }
        if (null !== $this->avgLastRowsAffectedCounts) {
            $res['AvgLastRowsAffectedCounts'] = $this->avgLastRowsAffectedCounts;
        }
        if (null !== $this->maxLastRowsAffectedCounts) {
            $res['MaxLastRowsAffectedCounts'] = $this->maxLastRowsAffectedCounts;
        }
        if (null !== $this->minLastRowsAffectedCounts) {
            $res['MinLastRowsAffectedCounts'] = $this->minLastRowsAffectedCounts;
        }
        if (null !== $this->SQLServerMinExecutionTime) {
            $res['SQLServerMinExecutionTime'] = $this->SQLServerMinExecutionTime;
        }
        if (null !== $this->SQLServerAvgExecutionTime) {
            $res['SQLServerAvgExecutionTime'] = $this->SQLServerAvgExecutionTime;
        }
        if (null !== $this->SQLServerTotalCpuTime) {
            $res['SQLServerTotalCpuTime'] = $this->SQLServerTotalCpuTime;
        }
        if (null !== $this->SQLServerAvgCpuTime) {
            $res['SQLServerAvgCpuTime'] = $this->SQLServerAvgCpuTime;
        }
        if (null !== $this->SQLServerMaxCpuTime) {
            $res['SQLServerMaxCpuTime'] = $this->SQLServerMaxCpuTime;
        }
        if (null !== $this->SQLServerMinCpuTime) {
            $res['SQLServerMinCpuTime'] = $this->SQLServerMinCpuTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLSlowLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlowLogId'])) {
            $model->slowLogId = $map['SlowLogId'];
        }
        if (isset($map['SQLHASH'])) {
            $model->SQLHASH = $map['SQLHASH'];
        }
        if (isset($map['SQLIdStr'])) {
            $model->SQLIdStr = $map['SQLIdStr'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['MySQLTotalExecutionCounts'])) {
            $model->mySQLTotalExecutionCounts = $map['MySQLTotalExecutionCounts'];
        }
        if (isset($map['MySQLTotalExecutionTimes'])) {
            $model->mySQLTotalExecutionTimes = $map['MySQLTotalExecutionTimes'];
        }
        if (isset($map['TotalLockTimes'])) {
            $model->totalLockTimes = $map['TotalLockTimes'];
        }
        if (isset($map['MaxLockTime'])) {
            $model->maxLockTime = $map['MaxLockTime'];
        }
        if (isset($map['ParseTotalRowCounts'])) {
            $model->parseTotalRowCounts = $map['ParseTotalRowCounts'];
        }
        if (isset($map['ParseMaxRowCount'])) {
            $model->parseMaxRowCount = $map['ParseMaxRowCount'];
        }
        if (isset($map['ReturnTotalRowCounts'])) {
            $model->returnTotalRowCounts = $map['ReturnTotalRowCounts'];
        }
        if (isset($map['ReturnMaxRowCount'])) {
            $model->returnMaxRowCount = $map['ReturnMaxRowCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SQLServerTotalExecutionCounts'])) {
            $model->SQLServerTotalExecutionCounts = $map['SQLServerTotalExecutionCounts'];
        }
        if (isset($map['SQLServerTotalExecutionTimes'])) {
            $model->SQLServerTotalExecutionTimes = $map['SQLServerTotalExecutionTimes'];
        }
        if (isset($map['TotalLogicalReadCounts'])) {
            $model->totalLogicalReadCounts = $map['TotalLogicalReadCounts'];
        }
        if (isset($map['TotalPhysicalReadCounts'])) {
            $model->totalPhysicalReadCounts = $map['TotalPhysicalReadCounts'];
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['MaxExecutionTime'])) {
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if (isset($map['AvgExecutionTime'])) {
            $model->avgExecutionTime = $map['AvgExecutionTime'];
        }
        if (isset($map['AvgPhysicalReadCounts'])) {
            $model->avgPhysicalReadCounts = $map['AvgPhysicalReadCounts'];
        }
        if (isset($map['MaxPhysicalReadCounts'])) {
            $model->maxPhysicalReadCounts = $map['MaxPhysicalReadCounts'];
        }
        if (isset($map['MinPhysicalReadCounts'])) {
            $model->minPhysicalReadCounts = $map['MinPhysicalReadCounts'];
        }
        if (isset($map['AvgLogicalReadCounts'])) {
            $model->avgLogicalReadCounts = $map['AvgLogicalReadCounts'];
        }
        if (isset($map['MaxLogicalReadCounts'])) {
            $model->maxLogicalReadCounts = $map['MaxLogicalReadCounts'];
        }
        if (isset($map['MinLogicalReadCounts'])) {
            $model->minLogicalReadCounts = $map['MinLogicalReadCounts'];
        }
        if (isset($map['TotalIOWriteCounts'])) {
            $model->totalIOWriteCounts = $map['TotalIOWriteCounts'];
        }
        if (isset($map['AvgIOWriteCounts'])) {
            $model->avgIOWriteCounts = $map['AvgIOWriteCounts'];
        }
        if (isset($map['MaxIOWriteCounts'])) {
            $model->maxIOWriteCounts = $map['MaxIOWriteCounts'];
        }
        if (isset($map['MinIOWriteCounts'])) {
            $model->minIOWriteCounts = $map['MinIOWriteCounts'];
        }
        if (isset($map['TotalRowsAffectedCounts'])) {
            $model->totalRowsAffectedCounts = $map['TotalRowsAffectedCounts'];
        }
        if (isset($map['AvgRowsAffectedCounts'])) {
            $model->avgRowsAffectedCounts = $map['AvgRowsAffectedCounts'];
        }
        if (isset($map['MaxRowsAffectedCounts'])) {
            $model->maxRowsAffectedCounts = $map['MaxRowsAffectedCounts'];
        }
        if (isset($map['MinRowsAffectedCounts'])) {
            $model->minRowsAffectedCounts = $map['MinRowsAffectedCounts'];
        }
        if (isset($map['TotalLastRowsAffectedCounts'])) {
            $model->totalLastRowsAffectedCounts = $map['TotalLastRowsAffectedCounts'];
        }
        if (isset($map['AvgLastRowsAffectedCounts'])) {
            $model->avgLastRowsAffectedCounts = $map['AvgLastRowsAffectedCounts'];
        }
        if (isset($map['MaxLastRowsAffectedCounts'])) {
            $model->maxLastRowsAffectedCounts = $map['MaxLastRowsAffectedCounts'];
        }
        if (isset($map['MinLastRowsAffectedCounts'])) {
            $model->minLastRowsAffectedCounts = $map['MinLastRowsAffectedCounts'];
        }
        if (isset($map['SQLServerMinExecutionTime'])) {
            $model->SQLServerMinExecutionTime = $map['SQLServerMinExecutionTime'];
        }
        if (isset($map['SQLServerAvgExecutionTime'])) {
            $model->SQLServerAvgExecutionTime = $map['SQLServerAvgExecutionTime'];
        }
        if (isset($map['SQLServerTotalCpuTime'])) {
            $model->SQLServerTotalCpuTime = $map['SQLServerTotalCpuTime'];
        }
        if (isset($map['SQLServerAvgCpuTime'])) {
            $model->SQLServerAvgCpuTime = $map['SQLServerAvgCpuTime'];
        }
        if (isset($map['SQLServerMaxCpuTime'])) {
            $model->SQLServerMaxCpuTime = $map['SQLServerMaxCpuTime'];
        }
        if (isset($map['SQLServerMinCpuTime'])) {
            $model->SQLServerMinCpuTime = $map['SQLServerMinCpuTime'];
        }

        return $model;
    }
}
