<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines\supportedEngineVersions\supportedCategorys;

use AlibabaCloud\Tea\Model;

class supportedStorageTypes extends Model
{
    /**
     * @description The storage type of the instance.
     *
     * @example local_ssd
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedStorageTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
