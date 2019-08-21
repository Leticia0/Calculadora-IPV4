<?php
$mascara = 0;
/*
  if ($mascara<24) {
        echo "Digite uma máscara entre 24 e 32";
    }else{*/
/*

    function valida($primeira_trinca){
        if ($primeira_trinca>255 and $primeira_trinca<0) {
            echo "IP Inválido"
        }

    }
*/

    function qtd_redes(int $mascara)
    {
        $total = 32;
        $bits_zerados = $total - $mascara;
        $total_quarta_trinca = 8;
        $bits_setados = $total_quarta_trinca - $bits_zerados;

        $qtd_redes = pow(2, $bits_setados);

        return $qtd_redes;
    }

    function qtd_enderecos($mascara)
    {
        $total = 32;
        $bits_zerados = $total - $mascara;
        $qtd_enderecos = pow(2, $bits_zerados);

        return $qtd_enderecos;
    }


    
      
    function enderecos_subrede(int $mascara) {
        $qtde = qtd_redes($mascara);
        $qtde_enderecos = qtd_enderecos($mascara);
        $c = 1;
        $end_rede = 0;
        $resp = array();
        while ($c <= $qtde) {
            array_push($resp, $end_rede);
            $end_rede = $end_rede + $qtde_enderecos;
            $c = $c + 1;
        }
        return $resp;
    } 

    function enderecos_bcast(int $mascara) {
        $qtde = qtd_redes($mascara);
        $qtde_enderecos = qtd_enderecos($mascara);
        $c = 1;
        $end_bcast = $qtde_enderecos - 1;
        $resp = array();
        while ($c <= $qtde) {
            array_push($resp, $end_bcast);
            $end_bcast = $end_bcast + $qtde_enderecos;
            $c = $c + 1;
        }
        return $resp;
    }


    function qtd_hosts(int $mascara)
    {
        $total = 32;
        $bits_zerados = $total - $mascara;

        $qtd_hosts = pow(2, $bits_zerados);
        $qtd_hosts= $qtd_hosts-2;

        

        if ($qtd_hosts<0) {
            echo "Não";
        }else{
            return $qtd_hosts;
        }
    }

    function primeiro_host_rede(int $quarta_trinca, int $mascara)
    {
        $q = qtd_enderecos($mascara);

        $posicao_rede = (int) ($quarta_trinca/$q);

        $primeiro_endereco = $posicao_rede * $q;
        $primeiro_host = $primeiro_endereco + 1;

        return $primeiro_host;
    }

    function ultimo_host_rede(int $quarta_trinca, int $mascara)
    {
        $q = qtd_enderecos($mascara);

        $posicao_rede = (int) ($quarta_trinca/$q);

        $primeiro_endereco = $posicao_rede * $q;
        $calculo = $primeiro_endereco + $q;
        $ultimo_host = $calculo - 1;

        return $ultimo_host;
    }

    function calculo_mascara(int $mascara_decimal){

        $mascara = '255.255.255';
        $bits_setados = $mascara_decimal - 24;

//        $bits_zerados = 8 - $bits_setados;


        $quarta_trinca = pow(2, $bits_setados);
        $quarta_trinca -= 1;

        $mascara_final = $mascara.".".$quarta_trinca;

        return $mascara_final;

    }

    function define_classe(int $primeira_trinca){
        $classe = "";
        if ($primeira_trinca >0 and $primeira_trinca < 127){
            $classe = "A";
        }elseif ($primeira_trinca > 127 and $primeira_trinca < 192){
            $classe = "B";
        }elseif ($primeira_trinca > 191 and $primeira_trinca < 224){
            $classe = "C";
        }elseif ($primeira_trinca > 223 and $primeira_trinca < 240){
            $classe = "D";
        }elseif ($primeira_trinca > 239 and $primeira_trinca < 256){
            $classe = "E";
        }else{
            $classe = "Tente Novamente. Houve um erro";
        }

        return $classe;
    }

    function privacidade_rede(int $primeira_trinca, int $segunda_trinca){
          $privacidade = "";
          if ($primeira_trinca == 10){
              $privacidade = "Privado";
          }elseif ($primeira_trinca == 172 and $segunda_trinca > 15 and $segunda_trinca <31){
              $privacidade = "Privado";
          }elseif ($primeira_trinca == 192 and $segunda_trinca == 168){
              $privacidade = "Privado";
          }else{
              $privacidade = "Público";
          }

          return $privacidade;
    }

if ($_POST["acao"] == "enviar") {
    $ip1 = $_POST["ip1"];
    $ip2 = $_POST["ip2"];
    $ip3 = $_POST["ip3"];
    $ip4 = $_POST["ip4"];
    $mascara = $_POST["mascara"];
    echo "<br>";
    if ($ip1 != NULL and $ip2 != NULL and $ip3 != NULL and $ip4 != NULL and $mascara != NULL){
       
        echo "O prefixo CIDR é " .$mascara;
        echo "<br>";
        echo "<br>";

        $redes = qtd_redes($mascara);
        echo "Essa máscara fornece " . $redes . " redes";
        echo "<br>";
        echo "<br>";

        $endereco = qtd_enderecos($mascara);
        echo "A máscara fornece " . $endereco . " endereços";
        echo "<br>";
        echo "<br>";


       
        $hosts = qtd_hosts($mascara);
        echo " Fornece " . $hosts . " hosts livres";
        echo "<br>";
        echo "<br>";

        $primeiro_host = primeiro_host_rede($ip4, $mascara);
        echo "O primeiro host de rede é " . $primeiro_host . " ";
         echo "<br>";
        echo "<br>";

        $ultimo_host = ultimo_host_rede($ip4, $mascara);
        echo "O último host de rede é " . $ultimo_host . " ";
         echo "<br>";
        echo "<br>";

        $mascara_decimal = calculo_mascara($mascara);
        echo "A máscara decimal é" . " $mascara_decimal";
         echo "<br>";
        echo "<br>";

        $resultado_classe = define_classe($ip1);
        echo "A classe desse endereço é " . $resultado_classe;
        echo "<br>";
        echo "<br>";

          

        $privada_publica = privacidade_rede($ip1, $ip2);
        echo "O endereço é " . $privada_publica;
         echo "<br>";
        echo "<br>";
                  

        $enderecos_de_rede = enderecos_subrede($mascara);
        $enderecos_de_bcast = enderecos_bcast($mascara);
        $c = 0;
        while ($c < $redes){
            echo "Rede ". $c." : ". $ip1.'.'.$ip2.'.'.$ip3.'.'.$enderecos_de_rede[$c].'<br>';
            echo "Broadcast ". $ip1.'.'.$ip2.'.'.$ip3.'.'.$enderecos_de_bcast[$c].'<br>';
            echo "<br>";
            $c = $c + 1;
        }
        
        echo "<br>";
        echo "<br>";
        


    }else{
        echo "Você não informou o valor de todos campos. Por favor digite novamente";
    }
  
}
//}
?>