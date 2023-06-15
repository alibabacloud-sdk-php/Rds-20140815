<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlotsResponseBody;

use AlibabaCloud\Tea\Model;

class slots extends Model
{
    /**
     * @description The name of the database in which the replication slot resides.
     *
     * @example db_test01
     *
     * @var string
     */
    public $database;

    /**
     * @description The extension that is used by the replication slot.
     *
     * @example test_decoding
     *
     * @var string
     */
    public $plugin;

    /**
     * @description The name of the replication slot.
     *
     * @example slot_test01
     *
     * @var string
     */
    public $slotName;

    /**
     * @description The status of the replication slot.
     *
     * Valid values:
     *
     *   ACTIVE
     *
     * <!-- -->
     *
     *   INACTIVE
     *
     * <!-- -->
     * @example INACTIVE
     *
     * @var string
     */
    public $slotStatus;

    /**
     * @description The type of the replication slot.
     *
     * @example logical
     *
     * @var string
     */
    public $slotType;

    /**
     * @description Indicates whether the replication slot is temporary.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example false
     *
     * @var string
     */
    public $temporary;

    /**
     * @description The number of logs that are accumulated for the replication slot.
     *
     * @example 16 MB
     *
     * @var string
     */
    public $walDelay;
    protected $_name = [
        'database'   => 'Database',
        'plugin'     => 'Plugin',
        'slotName'   => 'SlotName',
        'slotStatus' => 'SlotStatus',
        'slotType'   => 'SlotType',
        'temporary'  => 'Temporary',
        'walDelay'   => 'WalDelay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->plugin) {
            $res['Plugin'] = $this->plugin;
        }
        if (null !== $this->slotName) {
            $res['SlotName'] = $this->slotName;
        }
        if (null !== $this->slotStatus) {
            $res['SlotStatus'] = $this->slotStatus;
        }
        if (null !== $this->slotType) {
            $res['SlotType'] = $this->slotType;
        }
        if (null !== $this->temporary) {
            $res['Temporary'] = $this->temporary;
        }
        if (null !== $this->walDelay) {
            $res['WalDelay'] = $this->walDelay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Plugin'])) {
            $model->plugin = $map['Plugin'];
        }
        if (isset($map['SlotName'])) {
            $model->slotName = $map['SlotName'];
        }
        if (isset($map['SlotStatus'])) {
            $model->slotStatus = $map['SlotStatus'];
        }
        if (isset($map['SlotType'])) {
            $model->slotType = $map['SlotType'];
        }
        if (isset($map['Temporary'])) {
            $model->temporary = $map['Temporary'];
        }
        if (isset($map['WalDelay'])) {
            $model->walDelay = $map['WalDelay'];
        }

        return $model;
    }
}
