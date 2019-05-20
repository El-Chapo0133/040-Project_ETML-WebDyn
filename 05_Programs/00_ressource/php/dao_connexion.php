<?php
    /** **************************************************************
     * Autor               : Loris Levêque
     * Creation Date       : 16.04.2019
     * Modification Date   : 16.04.2019
     * 
     * Project Desc        : Make a website like Amazon :D
     *                       Cuz it's fun i guess
     * 
     * file Desc           : class for the connexion into the db
     * 
     ************************************************************** */
    class Dbconnect {
        /** %%%%%%%%%%%% Variables %%%%%%%%%%%% */
        private $connector;
        private $req;

        /** %%%%%%%%%%%% Private function %%%%%%%%%%%% */
        /**
         * Constructor function
         * @type [function]
         * @return none
         */
        public function __construct() {
            $this->req = $this->connector = null;
            try {
                $this->connector = new PDO(DB_DATA["database"], DB_DATA["login"], DB_DATA["password"], DB_DATA["option"]);
                echo '<script>console.log("Database created !");</script>';
            } catch (Exeption $e) {
                echo '<script>console.log("'.$e.'");</script>';
            }
        }
        /**
         * Search Product with a string
         * @type [function]
         * @return none
         */
        private function executeSearchProduct($search) {
            $sqlQuery = "SELECT idDish, disName, disImage FROM t_dish WHERE jeaName = '".$search."'";

            $this->req = $this->connector->prepare($sqlQuery);

            $this->req->execute();

            unset($sqlQuery);
        }
        private function executeGetCategories() {
            $sqlQuery = "SELECT catName, catImages,  idCategoryDishes FROM `t_categorydish`";

            $this->req = $this->connector->prepare($sqlQuery);

            $this->req->execute();

            unset($sqlQuery);
        }

        private function executeGetListDishes() {
            $sqlQuery = "SELECT idDishes, disName, disImage FROM t_dish";
            
            $this->req = $this->connector->prepare($sqlQuery);

            $this->req->execute();

            unset($sqlQuery);
        }
        private function executeGetOneDish($id) {
            $sqlQuery = "SELECT * FROM t_dish WHERE idDishes = ".$id;

            $this->req = $this->connector->prepare($sqlQuery);

            $this->req->execute();

            unset($sqlQuery);
        }
        /**
         * get an assoc array with the values from the req
         * @type [function]
         * @return array
         */
        private function getAssocArray() {
            return $this->req->fetchAll(DB_DATA["fetch"]);
        }
        
        /** %%%%%%%%%%%% Public function %%%%%%%%%%%% */
        public function getAllCategories() {
            $this->executeGetCategories();
            return $this->getAssocArray();
        }

        public function getListDishes() {
            $this->executeGetListDishes();
            return $this->getAssocArray();
        }

        public function getOneDish($id) {
            $this->executeGetOneDish($id);
            return $this->getAssocArray();
        }

        /**
         *  Close the cursor
         * @type [function]
         * @return none
         */
        public function closeCursor() {
            $this->req->closeCursor();
        }
        /**
         *  Close the connector
         * @type [function]
         * @return none
         */
        public function closeConnector() {
            unset($this->connector);
        }
        /**
         *  try the connexion with the db
         * @type [function]
         * @return string
         */
        public function tryConnection() {
            try {
                if ($this->connector != null) {
                    echo '<script>console.log("Connexion successful");</script>';
                    return 'Connexion successful';
                } else {
                    echo '<script>console.log("Connexion failed");</script>';
                    return 'Connexion failed';
                }
            } catch (Exeption $e) {
                echo '<script>console.log("BUG : '.$e.'");</script>';
                    return 'BUG D:';
            }
        }
    }
?>