<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBProxyEndpointAddressRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @var string
     */
    public $DBProxyNewConnectStringPort;

    /**
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'regionId'                    => 'RegionId',
        'DBInstanceId'                => 'DBInstanceId',
        'DBProxyEndpointId'           => 'DBProxyEndpointId',
        'connectionStringPrefix'      => 'ConnectionStringPrefix',
        'DBProxyNewConnectStringPort' => 'DBProxyNewConnectStringPort',
        'DBProxyConnectStringNetType' => 'DBProxyConnectStringNetType',
        'VPCId'                       => 'VPCId',
        'vSwitchId'                   => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBProxyNewConnectStringPort) {
            $res['DBProxyNewConnectStringPort'] = $this->DBProxyNewConnectStringPort;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBProxyEndpointAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBProxyNewConnectStringPort'])) {
            $model->DBProxyNewConnectStringPort = $map['DBProxyNewConnectStringPort'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
