<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponseBody\deletedBaksetIds;
use AlibabaCloud\Tea\Model;

class DeleteBackupFileResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deletedBaksetIds
     */
    public $deletedBaksetIds;
    protected $_name = [
        'requestId'        => 'RequestId',
        'deletedBaksetIds' => 'DeletedBaksetIds',
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
        if (null !== $this->deletedBaksetIds) {
            $res['DeletedBaksetIds'] = null !== $this->deletedBaksetIds ? $this->deletedBaksetIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBackupFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeletedBaksetIds'])) {
            $model->deletedBaksetIds = deletedBaksetIds::fromMap($map['DeletedBaksetIds']);
        }

        return $model;
    }
}
