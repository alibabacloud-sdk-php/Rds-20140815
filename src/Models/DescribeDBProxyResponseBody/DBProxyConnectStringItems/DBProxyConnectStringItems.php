<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyConnectStringItems;

use AlibabaCloud\Tea\Model;

class DBProxyConnectStringItems extends Model
{
    /**
     * @var string
     */
    public $DBProxyConnectStringNetWorkType;

    /**
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @var string
     */
    public $DBProxyVpcInstanceId;

    /**
     * @var string
     */
    public $DBProxyEndpointName;

    /**
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @var string
     */
    public $DBProxyConnectStringPort;

    /**
     * @var string
     */
    public $DBProxyConnectString;
    protected $_name = [
        'DBProxyConnectStringNetWorkType' => 'DBProxyConnectStringNetWorkType',
        'DBProxyConnectStringNetType'     => 'DBProxyConnectStringNetType',
        'DBProxyVpcInstanceId'            => 'DBProxyVpcInstanceId',
        'DBProxyEndpointName'             => 'DBProxyEndpointName',
        'DBProxyEndpointId'               => 'DBProxyEndpointId',
        'DBProxyConnectStringPort'        => 'DBProxyConnectStringPort',
        'DBProxyConnectString'            => 'DBProxyConnectString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyConnectStringNetWorkType) {
            $res['DBProxyConnectStringNetWorkType'] = $this->DBProxyConnectStringNetWorkType;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }
        if (null !== $this->DBProxyVpcInstanceId) {
            $res['DBProxyVpcInstanceId'] = $this->DBProxyVpcInstanceId;
        }
        if (null !== $this->DBProxyEndpointName) {
            $res['DBProxyEndpointName'] = $this->DBProxyEndpointName;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->DBProxyConnectStringPort) {
            $res['DBProxyConnectStringPort'] = $this->DBProxyConnectStringPort;
        }
        if (null !== $this->DBProxyConnectString) {
            $res['DBProxyConnectString'] = $this->DBProxyConnectString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBProxyConnectStringItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBProxyConnectStringNetWorkType'])) {
            $model->DBProxyConnectStringNetWorkType = $map['DBProxyConnectStringNetWorkType'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if (isset($map['DBProxyVpcInstanceId'])) {
            $model->DBProxyVpcInstanceId = $map['DBProxyVpcInstanceId'];
        }
        if (isset($map['DBProxyEndpointName'])) {
            $model->DBProxyEndpointName = $map['DBProxyEndpointName'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DBProxyConnectStringPort'])) {
            $model->DBProxyConnectStringPort = $map['DBProxyConnectStringPort'];
        }
        if (isset($map['DBProxyConnectString'])) {
            $model->DBProxyConnectString = $map['DBProxyConnectString'];
        }

        return $model;
    }
}
