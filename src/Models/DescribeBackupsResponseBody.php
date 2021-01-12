<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeBackupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalRecordCount;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageRecordCount;

    /**
     * @var int
     */
    public $totalEcsSnapshotSize;

    /**
     * @var items
     */
    public $items;
    protected $_name = [
        'requestId'            => 'RequestId',
        'totalRecordCount'     => 'TotalRecordCount',
        'pageNumber'           => 'PageNumber',
        'pageRecordCount'      => 'PageRecordCount',
        'totalEcsSnapshotSize' => 'TotalEcsSnapshotSize',
        'items'                => 'Items',
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
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->totalEcsSnapshotSize) {
            $res['TotalEcsSnapshotSize'] = $this->totalEcsSnapshotSize;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['TotalEcsSnapshotSize'])) {
            $model->totalEcsSnapshotSize = $map['TotalEcsSnapshotSize'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}
