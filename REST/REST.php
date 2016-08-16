<?php

class REST {

    protected $method;
    protected $body_json;
    private $file;

    /**
     * REST constructor.
     * @param $body_json
     * @param $method
     */
    public function __construct($file) {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->body_json = json_decode(file_get_contents('php://input'), true);
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getBodyJson() {
        return $this->body_json;
    }

    /**
     * @return mixed
     */
    public function getMethod() {
        return $this->method;
    }

    public function getUsers() {
        $users_protype = file_get_contents($this->file);
        $users = json_decode($users_protype);

        return $users;
    }

    public function GET() {

    }

    public function PUT($user) {

    }

    public function POST($user) {

    }

    public function DELETE($user_id) {

    }
}