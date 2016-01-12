<?php

namespace Weew\JsonEncoder\Exceptions;

use Exception;

class JsonDecodeException extends Exception {
    /**
     * @var mixed
     */
    private $json;

    /**
     * JsonDecodeException constructor.
     *
     * @param string $message
     * @param $json
     */
    public function __construct($message, $json) {
        parent::__construct($message);

        $this->json = $json;
    }

    /**
     * @return mixed
     */
    public function getJson() {
        return $this->json;
    }
}
