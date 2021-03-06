<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class SwitchDBInstanceNetTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $newConnectionString;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $oldConnectionString;
    protected $_name = [
        'newConnectionString' => 'NewConnectionString',
        'requestId'           => 'RequestId',
        'oldConnectionString' => 'OldConnectionString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newConnectionString) {
            $res['NewConnectionString'] = $this->newConnectionString;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->oldConnectionString) {
            $res['OldConnectionString'] = $this->oldConnectionString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchDBInstanceNetTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewConnectionString'])) {
            $model->newConnectionString = $map['NewConnectionString'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OldConnectionString'])) {
            $model->oldConnectionString = $map['OldConnectionString'];
        }

        return $model;
    }
}
