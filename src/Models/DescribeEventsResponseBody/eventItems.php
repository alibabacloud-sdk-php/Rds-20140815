<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponseBody;

use AlibabaCloud\Tea\Model;

class eventItems extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponseBody\eventItems\eventItems[]
     */
    public $eventItems;
    protected $_name = [
        'eventItems' => 'EventItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventItems) {
            $res['EventItems'] = [];
            if (null !== $this->eventItems && \is_array($this->eventItems)) {
                $n = 0;
                foreach ($this->eventItems as $item) {
                    $res['EventItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventItems'])) {
            if (!empty($map['EventItems'])) {
                $model->eventItems = [];
                $n                 = 0;
                foreach ($map['EventItems'] as $item) {
                    $model->eventItems[$n++] = null !== $item ? \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponseBody\eventItems\eventItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
