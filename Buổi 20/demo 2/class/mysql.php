<?php
class mysql extends database implements crud, log, search{
    public function connect()
    {
        // TODO: Implement connect() method.
        $connection = mysqli_connect("", "", "");
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function writelog()
    {
        // TODO: Implement writelog() method.
    }

    public function readlog()
    {
        // TODO: Implement readlog() method.
    }

    public function timkiem()
    {
        // TODO: Implement timkiem() method.
    }
}