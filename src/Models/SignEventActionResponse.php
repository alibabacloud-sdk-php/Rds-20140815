<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class SignEventActionResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'eventId' => 'EventId',
        'eventRcpt' => 'EventRcpt',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('eventRcpt', $this->eventRcpt, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['EventId'] = $this->eventId;
        $res['EventRcpt'] = $this->eventRcpt;
        return $res;
    }
    /**
     * @param array $map
     * @return SignEventActionResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['EventId'])){
            $model->eventId = $map['EventId'];
        }
        if(isset($map['EventRcpt'])){
            $model->eventRcpt = $map['EventRcpt'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.eventId
     * @var string
     */
    public $eventId;

    /**
     * @description data.eventRcpt
     * @var string
     */
    public $eventRcpt;

}
