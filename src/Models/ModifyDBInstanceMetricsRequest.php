<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceMetricsRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $metricsConfig;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceName'  => 'DBInstanceName',
        'scope'           => 'Scope',
        'metricsConfig'   => 'MetricsConfig',
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
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->metricsConfig) {
            $res['MetricsConfig'] = $this->metricsConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['MetricsConfig'])) {
            $model->metricsConfig = $map['MetricsConfig'];
        }

        return $model;
    }
}
