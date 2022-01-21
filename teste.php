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
 //json_encode($data);
//echo($data[0]["filename"]);
$arquivo = 'data.json';
$json = json_encode($data);
$file = fopen(__DIR__ . '/' . $arquivo,'w');
fwrite($file, $json);
fclose($file);

?>