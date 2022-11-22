<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\paramGroup;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\relatedCustinsInfo;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupResponseBody extends Model
{
    /**
     * @var paramGroup
     */
    public $paramGroup;

    /**
     * @var relatedCustinsInfo
     */
    public $relatedCustinsInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paramGroup'         => 'ParamGroup',
        'relatedCustinsInfo' => 'RelatedCustinsInfo',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramGroup) {
            $res['ParamGroup'] = null !== $this->paramGroup ? $this->paramGroup->toMap() : null;
        }
        if (null !== $this->relatedCustinsInfo) {
            $res['RelatedCustinsInfo'] = null !== $this->relatedCustinsInfo ? $this->relatedCustinsInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamGroup'])) {
            $model->paramGroup = paramGroup::fromMap($map['ParamGroup']);
        }
        if (isset($map['RelatedCustinsInfo'])) {
            $model->relatedCustinsInfo = relatedCustinsInfo::fromMap($map['RelatedCustinsInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
