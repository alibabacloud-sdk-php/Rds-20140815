<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\AddTagsToResourceRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The TagKey of the first tag that you want to bind. Each tag consists of a TagKey and a TagValue. You can specify up to five tags in a single request. The TagKey is required, and the TagValue is optional.
     *
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The TagValue of the first tag that you want to bind. Each tag consists of a TagKey and a TagValue. You can specify up to five tags in a single request. The TagKey is required, and the TagValue is optional.
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'key',
        'value' => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
