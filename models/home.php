<?php

class HomeModel extends Model {
    public function Index() {
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
        return;
    }
}