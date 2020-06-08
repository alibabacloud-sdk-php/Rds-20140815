<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions;

class DescribeDBInstancesOverviewResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'regions' => 'Regions',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regions', $this->regions, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Regions'] = null !== $this->regions ? $this->regions->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBInstancesOverviewResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Regions'])){
            $model->regions = regions::fromMap($map['Regions']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var regions
     */
    public $regions;

}
