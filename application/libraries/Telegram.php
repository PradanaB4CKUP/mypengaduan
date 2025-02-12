<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Telegram\Bot\Api;

class Telegram {

    private $telegram;

    public function __construct() {
        $this->telegram = new Api('7717439446:AAGpoRZZhZF7M9a_0Mv28oSMbC091NW_k4E'); // Ganti dengan token API bot Anda
    }

    public function sendMessage($params) {
        return $this->telegram->sendMessage($params);
    }
}
