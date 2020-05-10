<?php 
//include './debug/chromePhp.php';

class Model {

    public $dbhandle;

    function __construct() {
        // ChromePhp::log('Model Construct');
        // ChromePhp::log($_SERVER);

        try {
            $this->dbhandle = new PDO('sqlite:./db/appData.db', 'user', 'password', array( 
                                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                        PDO::ATTR_EMULATE_PREPARES => false,
                                        ));
            //ChromePhp::log('Successful connection to appData');
        }
        catch (PDOEXception $e) {
            print new Exception($e->getMessage());
            //ChromePhp::warn('Unsuccessful connection to appData');
            //ChromePhp::warn($e);
        }
    }

    function loadData() 
    {
        //ChromePhp::log('model: load data');
        try {
            $sql = 'SELECT * FROM model';
            
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i=-0;

            while($data = $stmt->fetch()) {
                $result[$i]['title'] = $data['title'];
                $result[$i]['description'] = $data['description'];

                $i++;
            }
        }
        catch (PDOEXception $e){
            print new Exception($e->getMessage());
            //ChromePhp::warn($e);
        }
        $this->dbhandle = NULL;
        //ChromePhp::log($result);
        return json_encode($result);
    }

    function fauxData() {
        return array("Object1", "Object2", "Object3");
    }    

}
?>