<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyConnectStringItems;

use AlibabaCloud\Tea\Model;

class DBProxyConnectStringItems extends Model
{
    /**
     * @var string
     */
    public $DBProxyConnectString;

    /**
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @var string
     */
    public $DBProxyConnectStringNetWorkType;

    /**
     * @var string
     */
    public $DBProxyConnectStringPort;

    /**
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @var string
     */
    public $DBProxyEndpointName;

    /**
     * @var string
     */
    public $DBProxyVpcInstanceId;
    protected $_name = [
        'DBProxyConnectString'            => 'DBProxyConnectString',
        'DBProxyConnectStringNetType'     => 'DBProxyConnectStringNetType',
        'DBProxyConnectStringNetWorkType' => 'DBProxyConnectStringNetWorkType',
        'DBProxyConnectStringPort'        => 'DBProxyConnectStringPort',
        'DBProxyEndpointId'               => 'DBProxyEndpointId',
        'DBProxyEndpointName'             => 'DBProxyEndpointName',
        'DBProxyVpcInstanceId'            => 'DBProxyVpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyConnectString) {
            $res['DBProxyConnectString'] = $this->DBProxyConnectString;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }
        if (null !== $this->DBProxyConnectStringNetWorkType) {
            $res['DBProxyConnectStringNetWorkType'] = $this->DBProxyConnectStringNetWorkType;
        }
        if (null !== $this->DBProxyConnectStringPort) {
            $res['DBProxyConnectStringPort'] = $this->DBProxyConnectStringPort;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->DBProxyEndpointName) {
            $res['DBProxyEndpointName'] = $this->DBProxyEndpointName;
        }
        if (null !== $this->DBProxyVpcInstanceId) {
            $res['DBProxyVpcInstanceId'] = $this->DBProxyVpcInstanceId;
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
        if (isset($map['DBProxyConnectString'])) {
            $model->DBProxyConnectString = $map['DBProxyConnectString'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if (isset($map['DBProxyConnectStringNetWorkType'])) {
            $model->DBProxyConnectStringNetWorkType = $map['DBProxyConnectStringNetWorkType'];
        }
        if (isset($map['DBProxyConnectStringPort'])) {
            $model->DBProxyConnectStringPort = $map['DBProxyConnectStringPort'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DBProxyEndpointName'])) {
            $model->DBProxyEndpointName = $map['DBProxyEndpointName'];
        }
        if (isset($map['DBProxyVpcInstanceId'])) {
            $model->DBProxyVpcInstanceId = $map['DBProxyVpcInstanceId'];
        }

        return $model;
    }
}
