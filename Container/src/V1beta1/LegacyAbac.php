<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for the legacy Attribute Based Access Control authorization
 * mode.
 *
 * Generated from protobuf message <code>google.container.v1beta1.LegacyAbac</code>
 */
class LegacyAbac extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the ABAC authorizer is enabled for this cluster. When enabled,
     * identities in the system, including service accounts, nodes, and
     * controllers, will have statically granted permissions beyond those
     * provided by the RBAC configuration or IAM.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    private $enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Whether the ABAC authorizer is enabled for this cluster. When enabled,
     *           identities in the system, including service accounts, nodes, and
     *           controllers, will have statically granted permissions beyond those
     *           provided by the RBAC configuration or IAM.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the ABAC authorizer is enabled for this cluster. When enabled,
     * identities in the system, including service accounts, nodes, and
     * controllers, will have statically granted permissions beyond those
     * provided by the RBAC configuration or IAM.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Whether the ABAC authorizer is enabled for this cluster. When enabled,
     * identities in the system, including service accounts, nodes, and
     * controllers, will have statically granted permissions beyond those
     * provided by the RBAC configuration or IAM.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

}

