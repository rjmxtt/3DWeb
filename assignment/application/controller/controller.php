<?php
// include './debug/ChromePhp.php';
// ChromePhp::log('controller.php: Hello World');
// ChromePhp::log($_SERVER);

class Controller {

    public $load;
    public $model;

    function __construct($pageURI = null) 
    {
        $this->load = new Load();
        $this->model = new Model();

        $this->$pageURI();
    }

    function home() {
        $data=$this->model->loadData();
        //ChromePhp::log($data);
        $this->load->view('home', $data);
    }

    function threed() {
        $this->load->view('3d');
    }

    // function home() 
    // {
    //     $data = $this->model->model3D_info();
    //     $this->load->view('viewMVCTest2', $data);
    // }

    // function apiCreateTable() 
    // {
    //     $data = $this->model->dbCreateTable();
    //     $this->load->view('viewMessage', $data);
    // }

    // function apiInsertData() 
    // {
    //     $data = $this->model->dbInsertData();
    //     $this->load->view('viewMessage', $data);
    // }

    // function apiGetData() 
    // {  
    //     $data = $this->model->dbGetData();
    //     $this->load->view('viewData', $data);
    // }   

    // function apiGetFlickrService() {
    //     $this->load->view('viewFlickrService');
    // }   

    // function apiGetJson() 
    // {
    //     $this->load->view('viewJson');
    // }

    // function apiLoadImage()
    // {
    //     ChromePhp::warn('controller.php: [apiLoadImage] Get brand data');
    //     $data = $this->model->dbGetBrand();

    //     ChromePhp::log($data);
    //     $this->load->view('viewDrinks', $data);
    // }

    // function dbCreateTable() 
    // {
    //     echo "controller create table";
    // }

    // function dbInsertData() 
    // {
    //     echo "controller insert";
    // }
    // function dbGetData() 
    // {
    //     echo "controller retreive";
    // }
}
?>