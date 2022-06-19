<?php
    class Conectar {
        protected $dbh;
        protected function conexion(){
            try{
                //QA
                //$conectar= $this->dbh = new PDO("mysql:local=localhost;dbname=andercode_web","root","");
                //PRODUCCION
                $conectar= $this->dbh = new PDO("mysql:local=localhost;dbname=u245799734_andercode","u245799734_andercode","AndersonX.87");
                return $conectar;
            }catch(Exception $e){
                print "Error :".$e->getMessage();
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            //Local
			//return "http://localhost:90/PERSONAL_PaginaWEB_AnderCode/";
            //Produccion
            //TEST
            return "http://anderson-bastidas.com/";
		}
    }
?>