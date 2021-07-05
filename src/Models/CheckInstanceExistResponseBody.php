<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckInstanceExistResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isExistInstance;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isExistInstance' => 'IsExistInstance',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isExistInstance) {
            $res['IsExistInstance'] = $this->isExistInstance;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckInstanceExistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsExistInstance'])) {
            $model->isExistInstance = $map['IsExistInstance'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
