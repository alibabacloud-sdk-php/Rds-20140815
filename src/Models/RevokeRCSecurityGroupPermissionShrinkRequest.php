<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class RevokeRCSecurityGroupPermissionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $direction;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string
     */
    public $securityGroupRuleIdListShrink;
    protected $_name = [
        'direction'                     => 'Direction',
        'regionId'                      => 'RegionId',
        'securityGroupId'               => 'SecurityGroupId',
        'securityGroupRuleIdListShrink' => 'SecurityGroupRuleIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupRuleIdListShrink) {
            $res['SecurityGroupRuleIdList'] = $this->securityGroupRuleIdListShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupRuleIdList'])) {
            $model->securityGroupRuleIdListShrink = $map['SecurityGroupRuleIdList'];
        }

        return $model;
    }
}
