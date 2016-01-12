<?php

namespace Weew\JsonEncoder;

interface IJsonEncoder {
    /**
     * @param $data
     *
     * @return string
     */
    function encode($data);

    /**
     * @param $json
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     *
     * @return mixed
     */
    function decode($json, $assoc = true, $depth = 512, $options = 0);
}
