<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grpc.proto

namespace Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.TestRequest</code>
 */
class TestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 int = 1;</code>
     */
    protected $int = 0;
    /**
     * Generated from protobuf field <code>string string = 2;</code>
     */
    protected $string = '';
    /**
     * Generated from protobuf field <code>.grpc.LoginRequest message = 3;</code>
     */
    protected $message = null;
    /**
     * Generated from protobuf field <code>repeated .grpc.LoginRequest messages = 4;</code>
     */
    private $messages;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any any = 5;</code>
     */
    protected $any = null;
    /**
     * Generated from protobuf field <code>map<int32, string> map = 6;</code>
     */
    private $map;
    /**
     * Generated from protobuf field <code>map<string, .grpc.LoginRequest> map2 = 7;</code>
     */
    private $map2;
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any anys = 8;</code>
     */
    private $anys;
    /**
     * Generated from protobuf field <code>.grpc.Test enum = 9;</code>
     */
    protected $enum = 0;
    /**
     * Generated from protobuf field <code>bool bool = 10;</code>
     */
    protected $bool = false;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 11;</code>
     */
    protected $timestamp = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 12;</code>
     */
    protected $duration = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct struct = 13;</code>
     */
    protected $struct = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask fieldMask = 14;</code>
     */
    protected $fieldMask = null;
    /**
     * Generated from protobuf field <code>repeated string strings = 15;</code>
     */
    private $strings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $int
     *     @type string $string
     *     @type \Grpc\LoginRequest $message
     *     @type \Grpc\LoginRequest[]|\Google\Protobuf\Internal\RepeatedField $messages
     *     @type \Google\Protobuf\Any $any
     *     @type array|\Google\Protobuf\Internal\MapField $map
     *     @type array|\Google\Protobuf\Internal\MapField $map2
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $anys
     *     @type int $enum
     *     @type bool $bool
     *     @type \Google\Protobuf\Timestamp $timestamp
     *     @type \Google\Protobuf\Duration $duration
     *     @type \Google\Protobuf\Struct $struct
     *     @type \Google\Protobuf\FieldMask $fieldMask
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $strings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 int = 1;</code>
     * @return int
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * Generated from protobuf field <code>int32 int = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInt($var)
    {
        GPBUtil::checkInt32($var);
        $this->int = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string string = 2;</code>
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Generated from protobuf field <code>string string = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setString($var)
    {
        GPBUtil::checkString($var, True);
        $this->string = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grpc.LoginRequest message = 3;</code>
     * @return \Grpc\LoginRequest|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Generated from protobuf field <code>.grpc.LoginRequest message = 3;</code>
     * @param \Grpc\LoginRequest $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Grpc\LoginRequest::class);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .grpc.LoginRequest messages = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Generated from protobuf field <code>repeated .grpc.LoginRequest messages = 4;</code>
     * @param \Grpc\LoginRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grpc\LoginRequest::class);
        $this->messages = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any any = 5;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getAny()
    {
        return $this->any;
    }

    public function hasAny()
    {
        return isset($this->any);
    }

    public function clearAny()
    {
        unset($this->any);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any any = 5;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setAny($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->any = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<int32, string> map = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Generated from protobuf field <code>map<int32, string> map = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMap($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT32, \Google\Protobuf\Internal\GPBType::STRING);
        $this->map = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .grpc.LoginRequest> map2 = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMap2()
    {
        return $this->map2;
    }

    /**
     * Generated from protobuf field <code>map<string, .grpc.LoginRequest> map2 = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMap2($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grpc\LoginRequest::class);
        $this->map2 = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any anys = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnys()
    {
        return $this->anys;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any anys = 8;</code>
     * @param \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->anys = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grpc.Test enum = 9;</code>
     * @return int
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * Generated from protobuf field <code>.grpc.Test enum = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setEnum($var)
    {
        GPBUtil::checkEnum($var, \Grpc\Test::class);
        $this->enum = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bool = 10;</code>
     * @return bool
     */
    public function getBool()
    {
        return $this->bool;
    }

    /**
     * Generated from protobuf field <code>bool bool = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setBool($var)
    {
        GPBUtil::checkBool($var);
        $this->bool = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 12;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 12;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct struct = 13;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getStruct()
    {
        return $this->struct;
    }

    public function hasStruct()
    {
        return isset($this->struct);
    }

    public function clearStruct()
    {
        unset($this->struct);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct struct = 13;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setStruct($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->struct = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask fieldMask = 14;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getFieldMask()
    {
        return $this->fieldMask;
    }

    public function hasFieldMask()
    {
        return isset($this->fieldMask);
    }

    public function clearFieldMask()
    {
        unset($this->fieldMask);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask fieldMask = 14;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->fieldMask = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string strings = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStrings()
    {
        return $this->strings;
    }

    /**
     * Generated from protobuf field <code>repeated string strings = 15;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStrings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->strings = $arr;

        return $this;
    }

}

