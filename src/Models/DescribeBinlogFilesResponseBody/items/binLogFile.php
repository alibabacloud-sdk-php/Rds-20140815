<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class binLogFile extends Model
{
    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $logBeginTime;

    /**
     * @var string
     */
    public $logEndTime;

    /**
     * @var string
     */
    public $downloadLink;

    /**
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @var string
     */
    public $checksum;

    /**
     * @var string
     */
    public $hostInstanceID;

    /**
     * @var string
     */
    public $logFileName;
    protected $_name = [
        'fileSize'             => 'FileSize',
        'logBeginTime'         => 'LogBeginTime',
        'logEndTime'           => 'LogEndTime',
        'downloadLink'         => 'DownloadLink',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'linkExpiredTime'      => 'LinkExpiredTime',
        'checksum'             => 'Checksum',
        'hostInstanceID'       => 'HostInstanceID',
        'logFileName'          => 'LogFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->logBeginTime) {
            $res['LogBeginTime'] = $this->logBeginTime;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return binLogFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['LogBeginTime'])) {
            $model->logBeginTime = $map['LogBeginTime'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }

        return $model;
    }
}
