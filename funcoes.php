<?php
$mascara = 0;
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

    function qtd_hosts(int $mascara)
    {
        $total = 32;
        $bits_zerados = $total - $mascara;

        $qtd_hosts = pow(2, $bits_zerados);

        return $qtd_hosts;
    }

    function primeiro_host_rede(int $quarta_trinca, int $mascara)
    {
        $q = qtd_enderecos($mascara);
        //print $q;

        $posicao_rede = (int) ($quarta_trinca/$q);

        //echo $posicao_rede;
        $primeiro_endereco = $posicao_rede * $q;
        $primeiro_host = $primeiro_endereco + 1;

        return $primeiro_host;
    }

    function ultimo_host_rede(int $quarta_trinca, int $mascara)
    {
        $q = qtd_enderecos($mascara);
        //print $q;

        $posicao_rede = (int) ($quarta_trinca/$q);

        //echo $posicao_rede;
        $primeiro_endereco = $posicao_rede * $q;
        $calculo = $primeiro_endereco + $q;
        $ultimo_host = $calculo - 1;

        return $ultimo_host;
    }

    function calculo_mascara(int $mascara_decimal){

        $mascara = '255.255.255';
        $bits_setados = $mascara_decimal - 24;
//        $bits_zerados = 8 - $bits_setados;
        //TODO PQ TÁ ERRADO

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
        $a = qtd_redes($mascara);
        echo "Essa máscara fornece ".$a." redes";
        echo "<br>";
        echo "<br>";

        $b = qtd_enderecos($mascara);
        echo "Essa máscara fornece ".$b." endereços";
         echo "<br>";
        echo "<br>";

        $c = qtd_hosts($mascara);
        echo "Essa máscara fornece ".$c." hosts";
         echo "<br>";
        echo "<br>";

        $d = primeiro_host_rede($ip4, $mascara);
        echo "O primeiro host dessa rede é "." $d";
         echo "<br>";
        echo "<br>";

        $e = ultimo_host_rede($ip4, $mascara);
        echo "O último host é "." $e";
         echo "<br>";
        echo "<br>";

        $f = calculo_mascara($mascara);
        echo "A máscaras é"." $f";
         echo "<br>";
        echo "<br>";

        $g = define_classe($ip1);
        echo "A classe desse endereço é ". $g;
        echo "<br>";
        echo "<br>";

        $h = privacidade_rede($ip1, $ip2);
        echo "O endereço é ". $h;
         echo "<br>";
        echo "<br>";
    }else{
        echo "Você não informou o valor de todos campos. Por favor digite noavemente";
    }
}

?>