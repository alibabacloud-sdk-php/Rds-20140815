<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLCollectorRetentionResponseBody extends Model
{
    /**
     * @description The retention period of the log files that are generated by the SQL Explorer feature. Valid values:
     *
     *   **30:** 30 days
     *   **180:** 180 days
     *   **365**: one year
     *   **1095**: three years
     *   **1825**: five years
     *
     * >  The retention period of the log files that are generated by the SQL Explorer feature on ApsaraDB RDS for PostgreSQL instances and ApsaraDB RDS for SQL Server instances is fixed as 30 days.
     * @example 365
     *
     * @var string
     */
    public $configValue;

    /**
     * @description The request ID.
     *
     * @example D5CEDCC2-CA75-43F7-9508-92F418CE6391
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configValue' => 'ConfigValue',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLCollectorRetentionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
