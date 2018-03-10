<?php                        
   
    include("db_config.php");
    
    $rcv_domain_id = intval($_GET['rcv_domain_id']);
    $sql = "SELECT domain_id,domain_name from domain where dept_id=\"".$rcv_domain_id."\"";

    $result = $conn->query($sql);
    $data = array();

    while($row = $result->fetch_assoc()){
        $data[] = array(
            "domain_id" => $row['domain_id'],
            "domain_name" => $row['domain_name']
        );
    }
    
    header('Content-type: application/json');
    echo json_encode($data);
?>