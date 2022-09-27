
<?php  

class subjectView{

    public function showSubjects($materias){ 

        include './templates/header.php';
        include './templates/subjects-alta.php';
        
?>

       <table class="table table-striped">
            <thead>
                <th>Materias</th>
                <th>Profesor</th>
            </thead>
            <tbody>
              
                
                <?php 

                    foreach ($materias as $materia) {
                        echo '<tr>';
                       
                        echo "<td> $materia->nombre  </td>";
                        echo "<td> $materia->profesor  </td>"; 
                        <a href="delete/$subject->id" type='button' class='btn btn-danger ml-auto'>Borrar</a>;
                        echo '</tr>';
                    }
                ?>  
                

             
           </tbody>

        </table>
<?php }  } ?>
 






