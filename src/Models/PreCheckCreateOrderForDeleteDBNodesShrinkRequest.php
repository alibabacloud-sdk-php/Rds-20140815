<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class PreCheckCreateOrderForDeleteDBNodesShrinkRequest extends Model
{
    /**
     * @description Specifies whether to automatically complete the payment. Valid values:
     *
     * 1.  **true**: automatically completes the payment. You must make sure that your account balance is sufficient.
     * 2.  **false**: does not automatically complete the payment. An unpaid order is generated.
     *
     * >  The default value is true. If your account balance is insufficient, you can set the AutoPay parameter to false to generate an unpaid order. Then, you can log on to the ApsaraDB RDS console to complete the payment.
     * @example True
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The additional business information about the instance.
     *
     * @example {\\"promotion_input_param\\":\\"{\\\\\\"promotionFilter\\\\\\":{},\\\\\\"promotionOptionCode\\\\\\":\\\\\\"youhui_quan\\\\\\"}\\"}
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the generated token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOC****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The commodity code. Valid value:
     *
     *   **bards**: The instance is a pay-as-you-go primary instance.
     *   **rds**: The instance is a subscription primary instance.
     *   **rords**: The instance is a pay-as-you-go read-only instance.
     *   **rds_rordspre_public_cn**: The instance is a subscription read-only instance.
     *   **bards_intl**: The instance is a pay-as-you-go primary instance.
     *   **rds_intl**: The instance is a subscription primary instance.
     *   **rords_intl**: The instance is a pay-as-you-go read-only instance.
     *   **rds_rordspre_public_intl**: The instance is a subscription read-only instance.
     *
     * This parameter is required.
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The instance ID.
     *
     * @example rm-wz9rziy3he051if82
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The node IDs.
     *
     * @var string
     */
    public $DBNodeIdShrink;

    /**
     * @description The major engine version of the destination instance. The value of this parameter varies based on the value of **Engine**.
     *
     *   Valid values when Engine is set to MySQL: **5.5, 5.6, 5.7, and 8.0**
     *   Valid values when Engine is set to SQLServer: **2008r2, 08r2_ent_ha, 2012, 2012_ent_ha, 2012_std_ha, 2012_web, 2014_std_ha, 2016_ent_ha, 2016_std_ha, 2016_web, 2017_std_ha, 2017_ent, 2019_std_ha, and 2019_ent**
     *   Valid values when Engine is set to PostgreSQL: **10.0, 11.0, 12.0, 13.0, 14.0, and 15.0**
     *
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The type of the database node. Valid value:
     *
     *   **Master**: the primary node
     *   **Slave**: the secondary node
     *
     * @example Master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The coupon code.
     *
     * @example aliwood-1688-mobile-promotion
     *
     * @var string
     */
    public $promotionCode;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/26243.html) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource of the instance.
     *
     * @example buy
     *
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'commodityCode'        => 'CommodityCode',
        'DBInstanceId'         => 'DBInstanceId',
        'DBNodeIdShrink'       => 'DBNodeId',
        'engineVersion'        => 'EngineVersion',
        'nodeType'             => 'NodeType',
        'ownerId'              => 'OwnerId',
        'promotionCode'        => 'PromotionCode',
        'regionId'             => 'RegionId',
        'resource'             => 'Resource',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBNodeIdShrink) {
            $res['DBNodeId'] = $this->DBNodeIdShrink;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreCheckCreateOrderForDeleteDBNodesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBNodeId'])) {
            $model->DBNodeIdShrink = $map['DBNodeId'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
