<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\DBInstanceWeights;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups;
use AlibabaCloud\Tea\Model;

class DBInstanceNetInfo extends Model
{
    /**
     * @description The Tabular Data Stream (TDS) port of the instance for which Babelfish is enabled.
     *
     * > This parameter applies only to ApsaraDB RDS for PostgreSQL instances. For more information about Babelfish for ApsaraDB RDS for PostgreSQL, see [Introduction to Babelfish](~~428613~~).
     * @example 1433
     *
     * @var string
     */
    public $babelfishPort;

    /**
     * @description The endpoints of the instance.
     *
     * @example rm-uf6w*****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The types of the endpoints. Valid values:
     *
     *   **Normal**: regular endpoints
     *   **ReadWriteSplitting**: read/write splitting endpoints
     *
     * @example Normal
     *
     * @var string
     */
    public $connectionStringType;

    /**
     * @description The information about the instance weight.
     *
     * > This parameter is returned only for instances that have read/write splitting endpoints.
     * @var DBInstanceWeights
     */
    public $DBInstanceWeights;

    /**
     * @description The policy that is used to assign read weights. This parameter is returned only for a read/write splitting endpoint. Valid values:
     *
     *   **Standard**: The system automatically assigns read weights to the instance and its read-only instances based on the specifications of these instances.
     *   **Custom**: You must manually assign read weights to the instance and its read-only instances.
     *
     * @example Standard
     *
     * @var string
     */
    public $distributionType;

    /**
     * @description The remaining validity period of the instance in the classic network in hybrid access mode. Unit: seconds.
     *
     * @example 1209534
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The network type.
     *
     *   Valid values when the instance resides in the classic network:
     *
     *   **Inner:**: internal network
     *   **Public**: Internet
     *
     *   Valid values when the instance resides in a virtual private cloud (VPC):
     *
     *   **Private**: internal network
     *   **Public**: Internet
     *
     * @example Public
     *
     * @var string
     */
    public $IPType;

    /**
     * @description The latency threshold. This parameter is returned only for a read/write splitting endpoint. Unit: seconds.
     *
     * > If the latency on a read-only instance exceeds the specified threshold, the system no longer forwards read requests to the read-only instance.
     * @example 12
     *
     * @var string
     */
    public $maxDelayTime;

    /**
     * @description The PgBouncer port.
     *
     * > This parameter is returned only when PgBouncer is enabled for the instance that runs PostgreSQL.
     * @example 6432
     *
     * @var string
     */
    public $PGBouncerPort;

    /**
     * @description The port that is used to connect to the instance.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The details of the IP address whitelist.
     *
     * @var securityIPGroups
     */
    public $securityIPGroups;

    /**
     * @description Indicates whether the IP version can be updated. Valid values:
     *
     *   **Enable**: The IP version can be updated.
     *   **Disabled**: The IP version cannot be updated.
     *
     * > The IP version can be updated from IPv4 to IPv6.
     * @example Disabled
     *
     * @var string
     */
    public $upgradeable;

    /**
     * @description The VPC ID.
     *
     * @example vpc-uf6f7l4fg90*****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-uf6adz52c2p*****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'babelfishPort'        => 'BabelfishPort',
        'connectionString'     => 'ConnectionString',
        'connectionStringType' => 'ConnectionStringType',
        'DBInstanceWeights'    => 'DBInstanceWeights',
        'distributionType'     => 'DistributionType',
        'expiredTime'          => 'ExpiredTime',
        'IPAddress'            => 'IPAddress',
        'IPType'               => 'IPType',
        'maxDelayTime'         => 'MaxDelayTime',
        'PGBouncerPort'        => 'PGBouncerPort',
        'port'                 => 'Port',
        'securityIPGroups'     => 'SecurityIPGroups',
        'upgradeable'          => 'Upgradeable',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->babelfishPort) {
            $res['BabelfishPort'] = $this->babelfishPort;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->connectionStringType) {
            $res['ConnectionStringType'] = $this->connectionStringType;
        }
        if (null !== $this->DBInstanceWeights) {
            $res['DBInstanceWeights'] = null !== $this->DBInstanceWeights ? $this->DBInstanceWeights->toMap() : null;
        }
        if (null !== $this->distributionType) {
            $res['DistributionType'] = $this->distributionType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->maxDelayTime) {
            $res['MaxDelayTime'] = $this->maxDelayTime;
        }
        if (null !== $this->PGBouncerPort) {
            $res['PGBouncerPort'] = $this->PGBouncerPort;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->securityIPGroups) {
            $res['SecurityIPGroups'] = null !== $this->securityIPGroups ? $this->securityIPGroups->toMap() : null;
        }
        if (null !== $this->upgradeable) {
            $res['Upgradeable'] = $this->upgradeable;
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
     * @return DBInstanceNetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BabelfishPort'])) {
            $model->babelfishPort = $map['BabelfishPort'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['ConnectionStringType'])) {
            $model->connectionStringType = $map['ConnectionStringType'];
        }
        if (isset($map['DBInstanceWeights'])) {
            $model->DBInstanceWeights = DBInstanceWeights::fromMap($map['DBInstanceWeights']);
        }
        if (isset($map['DistributionType'])) {
            $model->distributionType = $map['DistributionType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['MaxDelayTime'])) {
            $model->maxDelayTime = $map['MaxDelayTime'];
        }
        if (isset($map['PGBouncerPort'])) {
            $model->PGBouncerPort = $map['PGBouncerPort'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SecurityIPGroups'])) {
            $model->securityIPGroups = securityIPGroups::fromMap($map['SecurityIPGroups']);
        }
        if (isset($map['Upgradeable'])) {
            $model->upgradeable = $map['Upgradeable'];
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
