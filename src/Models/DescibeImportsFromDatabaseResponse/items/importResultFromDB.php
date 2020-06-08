<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponse\items;

use AlibabaCloud\Tea\Model;

class importResultFromDB extends Model {
    protected $_name = [
        'importId' => 'ImportId',
        'importDataType' => 'ImportDataType',
        'importDataStatus' => 'ImportDataStatus',
        'importDataStatusDescription' => 'ImportDataStatusDescription',
        'incrementalImportingTime' => 'IncrementalImportingTime',
    ];
    public function validate() {
        Model::validateRequired('importId', $this->importId, true);
        Model::validateRequired('importDataType', $this->importDataType, true);
        Model::validateRequired('importDataStatus', $this->importDataStatus, true);
        Model::validateRequired('importDataStatusDescription', $this->importDataStatusDescription, true);
        Model::validateRequired('incrementalImportingTime', $this->incrementalImportingTime, true);
    }
    public function toMap() {
        $res = [];
        $res['ImportId'] = $this->importId;
        $res['ImportDataType'] = $this->importDataType;
        $res['ImportDataStatus'] = $this->importDataStatus;
        $res['ImportDataStatusDescription'] = $this->importDataStatusDescription;
        $res['IncrementalImportingTime'] = $this->incrementalImportingTime;
        return $res;
    }
    /**
     * @param array $map
     * @return importResultFromDB
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ImportId'])){
            $model->importId = $map['ImportId'];
        }
        if(isset($map['ImportDataType'])){
            $model->importDataType = $map['ImportDataType'];
        }
        if(isset($map['ImportDataStatus'])){
            $model->importDataStatus = $map['ImportDataStatus'];
        }
        if(isset($map['ImportDataStatusDescription'])){
            $model->importDataStatusDescription = $map['ImportDataStatusDescription'];
        }
        if(isset($map['IncrementalImportingTime'])){
            $model->incrementalImportingTime = $map['IncrementalImportingTime'];
        }
        return $model;
    }
    /**
     * @description migrationId
     * @var integer
     */
    public $importId;

    /**
     * @description transferType
     * @var string
     */
    public $importDataType;

    /**
     * @description migrationStatusforDrc
     * @var string
     */
    public $importDataStatus;

    /**
     * @description migrationStatusDescription
     * @var string
     */
    public $importDataStatusDescription;

    /**
     * @description incrementalSyncTime
     * @var string
     */
    public $incrementalImportingTime;

}
