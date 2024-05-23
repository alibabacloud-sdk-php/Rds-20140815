<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\GetDBInstanceTopologyResponseBody\data;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-m5ezban**********
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The ID of the dedicated cluster.
     *
     * > : If the instance does not reside in the specified dedicated cluster, no value is returned.
     * @example dhg-4n*****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The host ID of the instance in the dedicated cluster.
     *
     * > : If the instance does not reside in the specified dedicated cluster, no value is returned.
     * @example i-bpxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The ID of the instance.
     *
     * > : The value \\*\\*-1\\*\\* is returned for an instance that does not reside in a dedicated cluster.
     * @example 349054
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The type of the node. The following result is returned:
     *
     *   **Master**: a primary node
     *   **Slave**: a secondary node
     *
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-qingdao-c
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBInstanceName'       => 'DBInstanceName',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHostId'      => 'DedicatedHostId',
        'nodeId'               => 'NodeId',
        'role'                 => 'Role',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
