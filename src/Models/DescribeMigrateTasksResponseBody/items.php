<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponseBody\items\migrateTask;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var migrateTask[]
     */
    public $migrateTask;
    protected $_name = [
        'migrateTask' => 'MigrateTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrateTask) {
            $res['MigrateTask'] = [];
            if (null !== $this->migrateTask && \is_array($this->migrateTask)) {
                $n = 0;
                foreach ($this->migrateTask as $item) {
                    $res['MigrateTask'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['MigrateTask'])) {
            if (!empty($map['MigrateTask'])) {
                $model->migrateTask = [];
                $n                  = 0;
                foreach ($map['MigrateTask'] as $item) {
                    $model->migrateTask[$n++] = null !== $item ? migrateTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
