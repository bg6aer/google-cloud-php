<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tests.FieldPath</code>
 */
class FieldPath extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string field = 1;</code>
     */
    private $field;

    public function __construct() {
        \Google\Cloud\Firestore\Tests\Conformance\FirestoreTestGpb::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated string field = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Generated from protobuf field <code>repeated string field = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setField($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->field = $arr;

        return $this;
    }

}

