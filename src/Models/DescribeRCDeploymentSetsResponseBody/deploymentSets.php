<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet;
use AlibabaCloud\Tea\Model;

class deploymentSets extends Model
{
    /**
     * @var deploymentSet[]
     */
    public $deploymentSet;
    protected $_name = [
        'deploymentSet' => 'DeploymentSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentSet) {
            $res['DeploymentSet'] = [];
            if (null !== $this->deploymentSet && \is_array($this->deploymentSet)) {
                $n = 0;
                foreach ($this->deploymentSet as $item) {
                    $res['DeploymentSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentSet'])) {
            if (!empty($map['DeploymentSet'])) {
                $model->deploymentSet = [];
                $n                    = 0;
                foreach ($map['DeploymentSet'] as $item) {
                    $model->deploymentSet[$n++] = null !== $item ? deploymentSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
