<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeCrossRegionBackupsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalRecordCount;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var items
     */
    public $items;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'totalRecordCount' => 'TotalRecordCount',
        'pageRecordCount'  => 'PageRecordCount',
        'endTime'          => 'EndTime',
        'requestId'        => 'RequestId',
        'pageNumber'       => 'PageNumber',
        'startTime'        => 'StartTime',
        'items'            => 'Items',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCrossRegionBackupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
