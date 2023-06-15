<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The number of unit nodes that are created by calling this operation.
     *
     * @example 2
     *
     * @var string
     */
    public $createCount;

    /**
     * @description The ID of the global active database cluster.
     *
     * @example gad-rm-bp1npi2j8********
     *
     * @var string
     */
    public $gadInstanceName;
    protected $_name = [
        'createCount'     => 'CreateCount',
        'gadInstanceName' => 'GadInstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createCount) {
            $res['CreateCount'] = $this->createCount;
        }
        if (null !== $this->gadInstanceName) {
            $res['GadInstanceName'] = $this->gadInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateCount'])) {
            $model->createCount = $map['CreateCount'];
        }
        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
        }

        return $model;
    }
}
