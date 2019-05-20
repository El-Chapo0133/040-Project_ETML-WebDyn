<?php 
    /** **************************************************************
     * Autor               : Loris Levêque
     * Creation Date       : 16.04.2019
     * Modification Date   : 16.04.2019
     * 
     * Project Desc        : Make a website like Amazon :D
     *                       Cuz it's fun i guess
     * 
     * file Desc           : Const for having useful values :D
     * 
     ************************************************************** */

     /**
      * assoc array for the db values
      * @type array
      * @return none
      */
    const DB_DATA = array(
        'database' => 'mysql:host=localhost;dbname=crunchydb;charset=utf8',
        'login' => 'projet040_levequelo',
        'password' => '.Etml-',
        'fetch' => PDO::FETCH_ASSOC,
        'option' => array(
            PDO::ERRMODE_WARNING
        )
    );
     /**
      * assoc array for the link values
      * @type array
      * @return none
      */
    const LINK_DATA = array(
        'index' => '01_src/index/index.php'
    );
     /**
      * assoc array for the cooki values
      * @type array
      * @return none
      */
    const COOKIE_DATA = array(
        'expire' => '86400' // 1 day
    );
    
    /* ################################################################
    class DataUnsetter {
        /**
         * Unset the const for the database
         * @type [function]
         * @return none
         *//*
        public function unsetDbData() {
            unset(DB_DATA);
        }/*
        /**
         * Unset the const for the links
         * @type [function]
         * @return none
         *//*
        public function unsetLinkData() {
            unset(LINK_DATA);
        }/*
        /**
         * Unset the const for the cookies
         * @type [function]
         * @return none
         *//*
        public function unsetCookieData() {
            unset(COOKIE_DATA);
        }
    }*/
?>