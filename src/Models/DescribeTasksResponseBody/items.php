<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponseBody\items\taskProgressInfo;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var taskProgressInfo[]
     */
    public $taskProgressInfo;
    protected $_name = [
        'taskProgressInfo' => 'TaskProgressInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskProgressInfo) {
            $res['TaskProgressInfo'] = [];
            if (null !== $this->taskProgressInfo && \is_array($this->taskProgressInfo)) {
                $n = 0;
                foreach ($this->taskProgressInfo as $item) {
                    $res['TaskProgressInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskProgressInfo'])) {
            if (!empty($map['TaskProgressInfo'])) {
                $model->taskProgressInfo = [];
                $n                       = 0;
                foreach ($map['TaskProgressInfo'] as $item) {
                    $model->taskProgressInfo[$n++] = null !== $item ? taskProgressInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
