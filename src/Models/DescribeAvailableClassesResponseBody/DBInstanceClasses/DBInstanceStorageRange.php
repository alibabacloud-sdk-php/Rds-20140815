<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponseBody\DBInstanceClasses;

use AlibabaCloud\Tea\Model;

class DBInstanceStorageRange extends Model
{
    /**
     * @var int
     */
    public $step;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var int
     */
    public $maxValue;
    protected $_name = [
        'step'     => 'Step',
        'minValue' => 'MinValue',
        'maxValue' => 'MaxValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceStorageRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        return $model;
    }
}
