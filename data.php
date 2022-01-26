<?php
$arquivos = scandir("arquivos"); //diretorio alvo
$data = array();
foreach($arquivos as $arq){ //vasculha e salva as informações dos arquivos de dentro do diretorio alvo
    if(!in_array($arq,array(".",".."))){
        $filename = "arquivos" . DIRECTORY_SEPARATOR . $arq;
     // $info = pathinfo($filename);
        $info["name"] = pathinfo($filename,PATHINFO_FILENAME);
        $info["type"] = pathinfo($filename,PATHINFO_EXTENSION);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y",filemtime($filename));
        $info["url"]= "http://localhost/site-gaga-salva/".str_replace("\\","/",$filename);
        
        array_push($data, $info);
    }  
} 

$arquivo = 'data.json'; 
$json = json_encode($data);//tranformando em json
$file = fopen(__DIR__ . '/' . $arquivo,'w');
fwrite($file, $json); //salvando o arquivo json no servidor
fclose($file);

?>