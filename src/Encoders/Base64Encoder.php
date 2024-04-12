<?php

namespace wilianx7\Auditing\Encoders;

class Base64Encoder implements \wilianx7\Auditing\Contracts\AttributeEncoder
{
    /**
     * {@inheritdoc}
     */
    public static function encode($value)
    {
        return base64_encode($value);
    }

    /**
     * {@inheritdoc}
     */
    public static function decode($value)
    {
        return base64_decode($value);
    }
}
