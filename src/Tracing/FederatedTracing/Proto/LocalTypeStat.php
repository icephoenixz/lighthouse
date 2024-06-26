<?php declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: src/Tracing/FederatedTracing/reports.proto

namespace Nuwave\Lighthouse\Tracing\FederatedTracing\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LocalTypeStat</code>.
 */
class LocalTypeStat extends \Google\Protobuf\Internal\Message
{
    /**
     * Key is (eg) "email" for User.email:String!
     * Unlike FieldStat, this is populated outside of FTV1 requests.
     *
     * Generated from protobuf field <code>map<string, .LocalFieldStat> local_per_field_stat = 1 [json_name = "localPerFieldStat"];</code>
     */
    private $local_per_field_stat;

    /**
     * Constructor.
     *
     * @param  array  $data {
     *     Optional. Data for populating the Message object.
     *
     *     @var array|\Google\Protobuf\Internal\MapField $local_per_field_stat
     *           Key is (eg) "email" for User.email:String!
     *           Unlike FieldStat, this is populated outside of FTV1 requests.
     * }
     */
    public function __construct($data = null)
    {
        Metadata\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Key is (eg) "email" for User.email:String!
     * Unlike FieldStat, this is populated outside of FTV1 requests.
     *
     * Generated from protobuf field <code>map<string, .LocalFieldStat> local_per_field_stat = 1 [json_name = "localPerFieldStat"];</code>
     *
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLocalPerFieldStat()
    {
        return $this->local_per_field_stat;
    }

    /**
     * Key is (eg) "email" for User.email:String!
     * Unlike FieldStat, this is populated outside of FTV1 requests.
     *
     * Generated from protobuf field <code>map<string, .LocalFieldStat> local_per_field_stat = 1 [json_name = "localPerFieldStat"];</code>
     *
     * @param  array|\Google\Protobuf\Internal\MapField  $var
     *
     * @return $this
     */
    public function setLocalPerFieldStat($var)
    {
        $arr = GPBUtil::checkMapField($var, GPBType::STRING, GPBType::MESSAGE, LocalFieldStat::class);
        $this->local_per_field_stat = $arr;

        return $this;
    }
}
