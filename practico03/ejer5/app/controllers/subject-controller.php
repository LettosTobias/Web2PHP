<?php
    
require_once './app/model/db.php';
require_once './app/view/subject-view.php';

class subjectController{

    private $model;
    private $view;

    public function __construct() {
        $this->model = new subjectModel();
        $this->view = new subjectView();
    }

    public function showSubjects() {
        $tareas = $this->model->getAllSubjects();
        $this->view->showSubjects($tareas);
    }

   

    
    function addSubject(){
        // TODO: validar entrada de datos
          $materia = $_GET['nombre'];  
          $profesor = $_GET['profesor']; 
            
          $id = $this->model->insertSubject($materia , $profesor);  
        //   $this->model->editSubject($materia , $profesor, $id);
        
          header("Location: " . BASE_URL); 
    }
   
    function deleteSubject($id) {
        $this->model->deleteSubjectById($id);
        header("Location: " . BASE_URL);
    }
    
}