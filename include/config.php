<?php

    session_start();

    class PurifyInput{

        function strip_quotes($element) : string{
            $pattern = "/'/m";
            $replacer = "\'";
            $pattern2 = "/\"/m";
            $replacer2 = '\"';

            $element = preg_replace($pattern, $replacer, $element);

            return preg_replace($pattern2, $replacer2, $element);
        }

        function generate_empty_error($element) : string{
            return empty($element) ? " can't be blank" : "";
        }
    }

    class EstablishConnection{
        public $server_name;
        public $server_user;
        public $server_password;
        public $database_name;
        public $table_name;

        function __construct($server_name, $server_user, $server_password, $database_name, $table_name){
            $this->server_name = $server_name;
            $this->server_user = $server_user;
            $this->server_password = $server_password;
            $this->database_name = $database_name;
            $this->table_name = $table_name;
        }

        public function getServerName(){
            return $this->server_name;
        }

        public function setServerName($server_name): void{
            $this->server_name = $server_name;
        }

        public function getServerUser(){
            return $this->server_user;
        }

        public function setServerUser($server_user): void{
            $this->server_user = $server_user;
        }

        public function getServerPassword(){
            return $this->server_password;
        }

        public function setServerPassword($server_password): void{
            $this->server_password = $server_password;
        }

        public function getDatabaseName(){
            return $this->database_name;
        }

        public function setDatabaseName($database_name): void{
            $this->database_name = $database_name;
        }

        public function getTableName(){
            return $this->table_name;
        }

        public function setTableName($table_name): void{
            $this->table_name = $table_name;
        }

        public function connect_mysqli(){
            $GLOBALS['connection'] = new mysqli($this->getServerName(), $this->getServerUser(), $this->getServerPassword(), $this->getDatabaseName());
        }

    }

    class CommonSQLMethods{

        function get_element($requested_element, $db_element, $table_name) : string{
            $sql = "SELECT `$db_element` FROM `$table_name` WHERE `$db_element` = '$requested_element'";
            $result = $GLOBALS['connection']->query($sql);

            return $result->fetch_assoc()[$db_element];
        }

        function get_different_element($requested_element, $db_key, $field_wanted, $table_name) : string{
            $sql = "SELECT `$field_wanted` FROM `$table_name` WHERE `$db_key` = '$requested_element'";
            $result = $GLOBALS['connection']->query($sql);

            return $result->fetch_assoc()[$field_wanted];
        }

        function compare_elements($requested_element, $comparative_element, $user_value, $db_element, $table_name) : bool{
            $sql = "SELECT `$comparative_element` FROM `$table_name` WHERE `$db_element` = '$requested_element'";
            $result = $GLOBALS['connection']->query($sql);
            $comparative_element_fetched = $result->fetch_assoc()[$comparative_element] ??= '';

            return ($comparative_element_fetched === $user_value);
        }

        function check_if_exists($requested_element, $db_element, $table_name) : bool{
            $sql = "SELECT `$db_element` FROM `$table_name` WHERE `$db_element` = '$requested_element'";
            $result = $GLOBALS['connection']->query($sql);
            $element_fetched = $result->fetch_assoc()[$db_element] ??= '';

            return empty($element_fetched);
        }

        function create_content_shuffled_by_id($table_name, $db_key, $field_wanted) : array{
            $GLOBALS['db_connect']->setTableName($table_name);
            $sql = "SELECT * FROM `$table_name`";
            $result = $GLOBALS['connection']->query($sql);

            $numbers_array = array();

            $numbers = $result->num_rows;

            for($i = 1, $j = 0; $i <= $numbers; $i++, $j++){
                $my_sql = "SELECT `$field_wanted` FROM `$table_name` WHERE `$db_key` = '$i'";
                if($GLOBALS['connection']->query($my_sql)->num_rows > 0){
                    $numbers_array[$j] = $i;
                }
                else{
                    $numbers++;
                    $j--;
                }
            }
            shuffle($numbers_array);
            return $numbers_array;
        }

    }
    $GLOBALS['db_connect'] = new EstablishConnection("localhost","root","","main_db","users");
    $GLOBALS['purify'] = new PurifyInput();
    $GLOBALS['methods'] = new CommonSQLMethods();
    $GLOBALS['db_connect']->connect_mysqli();