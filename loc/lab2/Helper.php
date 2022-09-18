<?php
    function getNextID() {
        static $user_id = 1;
        return $user_id++;
    }