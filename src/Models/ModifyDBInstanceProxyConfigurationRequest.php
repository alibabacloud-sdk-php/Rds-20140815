<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceProxyConfigurationRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $proxyConfigurationKey;

    /**
     * @var string
     */
    public $proxyConfigurationValue;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'DBInstanceId'            => 'DBInstanceId',
        'proxyConfigurationKey'   => 'ProxyConfigurationKey',
        'proxyConfigurationValue' => 'ProxyConfigurationValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->proxyConfigurationKey) {
            $res['ProxyConfigurationKey'] = $this->proxyConfigurationKey;
        }
        if (null !== $this->proxyConfigurationValue) {
            $res['ProxyConfigurationValue'] = $this->proxyConfigurationValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceProxyConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ProxyConfigurationKey'])) {
            $model->proxyConfigurationKey = $map['ProxyConfigurationKey'];
        }
        if (isset($map['ProxyConfigurationValue'])) {
            $model->proxyConfigurationValue = $map['ProxyConfigurationValue'];
        }

        return $model;
    }
}
