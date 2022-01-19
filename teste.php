<?php
$arquivos = scandir("arquivos");
$data = array();
foreach($arquivos as $arq){
    if(!in_array($arq,array(".",".."))){
        $filename = "arquivos" . DIRECTORY_SEPARATOR . $arq;
        $info = pathinfo($filename);

        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s",filemtime($filename));
        
        array_push($data, $info);
    }  
} 
//echo json_encode($data);
//echo($data[0]["filename"]);

?>