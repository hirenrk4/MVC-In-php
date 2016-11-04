// design by hiren kadivar

<?php
 include_once("Model/Model.php");

 Class Controller
{
  
  public $model;

    public function Controller()
    {
     $this->model=new Model();
    }
    public function insert()
    {
       $result = $this->model->insert_data();
       return $result;
       
    }
    public function show()
    {
      include 'View/view.php';
       
    }
    
    public function display()
    {
      $select = $this->model->select_data();
      include 'View/select.php';
    }
}
?>
