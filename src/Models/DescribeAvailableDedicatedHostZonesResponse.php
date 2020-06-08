<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostZonesResponse\zones;

class DescribeAvailableDedicatedHostZonesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'zones' => 'Zones',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('zones', $this->zones, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAvailableDedicatedHostZonesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Zones'])){
            $model->zones = zones::fromMap($map['Zones']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.zones
     * @var zones
     */
    public $zones;

}
