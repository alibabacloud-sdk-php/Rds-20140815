<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponseBody\words;
use AlibabaCloud\Tea\Model;

class DescribeInstanceKeywordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var words
     */
    public $words;

    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'requestId' => 'RequestId',
        'words'     => 'Words',
        'key'       => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->words) {
            $res['Words'] = null !== $this->words ? $this->words->toMap() : null;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceKeywordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Words'])) {
            $model->words = words::fromMap($map['Words']);
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
