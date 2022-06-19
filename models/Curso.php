<?php
    class Curso extends Conectar{

        public function get_curso_1(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso WHERE est=1 AND cur_id IN (1,2,11,15,16) AND cur_precio <> 'Gratis'";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_curso_2(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso WHERE est=1 AND cur_id IN (17,18,19,20,21) AND cur_precio <> 'Gratis'";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_curso_3(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso WHERE est=1 AND cur_id IN (22,23,24,25,26) AND cur_precio <> 'Gratis'";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_curso_4(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso WHERE est=1 AND cur_id IN (27,28,29,30,31) AND cur_precio <> 'Gratis'";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_curso_5(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso WHERE est=1 AND cur_id IN (32,33,34,35,36) AND cur_precio <> 'Gratis'";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_curso_gratis_1(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso WHERE est=1 AND cur_id IN (3,4,5,6,7) AND cur_precio = 'Gratis'";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_curso_gratis_2(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso WHERE est=1 AND cur_id IN (8,9,10,12,13) AND cur_precio = 'Gratis'";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_curso_gratis_3(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso WHERE est=1 AND cur_id IN (14) AND cur_precio = 'Gratis'";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>