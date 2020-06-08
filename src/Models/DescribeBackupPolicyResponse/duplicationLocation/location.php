<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse\duplicationLocation;

use AlibabaCloud\Tea\Model;

class location extends Model {
    protected $_name = [
        'endpoint' => 'Endpoint',
        'bucket' => 'Bucket',
    ];
    public function validate() {
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('bucket', $this->bucket, true);
    }
    public function toMap() {
        $res = [];
        $res['Endpoint'] = $this->endpoint;
        $res['Bucket'] = $this->bucket;
        return $res;
    }
    /**
     * @param array $map
     * @return location
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Endpoint'])){
            $model->endpoint = $map['Endpoint'];
        }
        if(isset($map['Bucket'])){
            $model->bucket = $map['Bucket'];
        }
        return $model;
    }
    /**
     * @description endpoint
     * @var string
     */
    public $endpoint;

    /**
     * @description bucket
     * @var string
     */
    public $bucket;

}
