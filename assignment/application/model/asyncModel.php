<?php 
    include 'chromephp.php';
    //ChromePhp::log('>>> async model <<<');
    //ChromePhp::log($_SERVER);

    //ChromePhp::log('async model: get brand details');
    $title = $_GET['title'];
    //ChromePhp::log($title);

    //ChromePhp::log('async model: pre - connection to  MVCData db');

    try{
        $dbhandle = new PDO('sqlite:../../db/appData.db', 'user', 'password', array( 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            ));
        //ChromePhp::log('async model: successful connection to db');

        //ChromePhp::log('mdd : prepare pdo sql statement');
        if ($title != 'all') {
            $sql = 'SELECT * FROM model WHERE title = "'. $title . '"';
        } else {
            $sql = 'SELECT * FROM model';
        }
        //ChromePhp::log($sql);

        //ChromePhp::log('async model: PDO query() sql stmt');
        $stmt = $dbhandle->query($sql);
        //ChromePhp::log($stmt);

        $result = null;

        $i=0;

        while ($data = $stmt->fetch()) {
             //ChromePhp::log('async model: PDO fetch from appData.db');
             //ChromePhp::log($data);

            $result[$i]['title'] = $data['title'];
            $result[$i]['description'] = $data['description'];
            $result[$i]['path'] = $data['path'];

            $i++;

             //ChromePhp::log('async model: db data');
             //ChromePhp::log($result);
        }
    }
    catch (PDOEXception $e) {
        ChromePhp::warn('async model: error on server');
        ChromePhp::warn($e);
    }

    $dbhandle = null;
    //ChromePhp::log('async model: echo result to frontend json packet');
    //ChromePhp::log($result);
    echo json_encode($result);
?>