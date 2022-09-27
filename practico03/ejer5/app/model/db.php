<?php

class SubjectModel{

    private $db;
    public function __construct(){
        
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_web2;charset=utf8', 'root', '');


    }
    /**
     * Devuelve la lista de tareas completa.
     */
    public function getAllSubjects(){
       //la conexion ya esta abierta por el constructor de la clase
       //paso 2 ejecuto la sentencia
       $query = $this->db->prepare("SELECT * FROM materias");
       $query->execute();
        //obtengo los resultados en forma de objeto
        $subjects = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $subjects;
    }

    public function insertSubject($nombre,$profesor){

        $query = $this->db->prepare("INSERT INTO materias($nombre , $profesor) VALUES( ? , ? )");
        $query->execute([$nombre , $profesor]);

        // return $this->db->lastInsertID();
    }
    

    function deleteSubjectById($id){

        $query =$this->db->prepare('DELETE FROM materias WHERE id=?');
        $query->execute([$id]);
        header("Location: " . BASE_URL);


    }

    function editSubject($materia , $profesor ,$id){

        
        $query = $this->db->prepare("UPDATE materias SET nombre = $materia , profesor = $profesor WHERE id = ?");
        $query->execute($id);
    }

}
