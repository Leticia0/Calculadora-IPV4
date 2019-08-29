<?php

	$mascara = 0;


    function qtd_redes($mascara)
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


    function enderecos_subrede($mascara) {
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


    function enderecos_broadcast($mascara) {
        $qtde = qtd_redes($mascara);
        $qtde_enderecos = qtd_enderecos($mascara);
        $c = 1;
        $end_broadcast = $qtde_enderecos - 1;
        $resp = array();
        while ($c <= $qtde) {
            array_push($resp, $end_broadcast);
            $end_broadcast = $end_broadcast + $qtde_enderecos;
            $c = $c + 1;
        }
        return $resp;
    }


    function qtd_hosts($mascara)
    {
        $total = 32;
        $bits_zerados = $total - $mascara;

        $qtd_hosts = pow(2, $bits_zerados);
        $qtd_hosts= $qtd_hosts-2;

        
        if ($qtd_hosts<0){
            echo "Não";
        }else{
            return $qtd_hosts;
        }
    }

    function primeiro_host_rede($quarta_trinca, $mascara){
       
        $q = qtd_enderecos($mascara);

        $posicao_rede = (int) ($quarta_trinca/$q);

        $primeiro_endereco = $posicao_rede * $q;

        $primeiro_host = $primeiro_endereco + 1;

        return $primeiro_host;
    }

    function ultimo_host_rede($quarta_trinca, $mascara){

        $q = qtd_enderecos($mascara);

        $posicao_rede = (int) ($quarta_trinca/$q);

        $primeiro_endereco = $posicao_rede * $q;
       
        $calculo = $primeiro_endereco + $q;
       
        $ultimo_host = $calculo - 1;

        return $ultimo_host;
    }

    function calculo_mascara($mascara_decimal){

        $mascara = '255.255.255';

        $bits_setados = 32-$mascara_decimal;

        $quarta_trinca = 256 - pow(2, $bits_setados);

        $mascara_final = $mascara.".".$quarta_trinca;

        return $mascara_final;

    }

    function define_classe($primeira_trinca){
        $classe = "";
        if ($primeira_trinca > 0 and $primeira_trinca < 128){
            $classe = "A";
        }elseif ($primeira_trinca > 127 and $primeira_trinca < 190){
            $classe = "B";
        }elseif ($primeira_trinca > 191 and $primeira_trinca < 224){
            $classe = "C";
        }elseif ($primeira_trinca > 223 and $primeira_trinca < 238){
            $classe = "D";
        }elseif ($primeira_trinca > 239 and $primeira_trinca < 254){
            $classe = "E";
        }else{
            $classe = "Não foi possível calcular";
        }

        return $classe;
    }
    

    function privacidade_rede($primeira_trinca, $segunda_trinca){
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
       

        function validacao($primeira_trinca){
            $val = "";
            if ($primeira_trinca > 0 and $primeira_trinca < 127){
                $val = "válido";
            }elseif ($primeira_trinca > 127 and $primeira_trinca < 192){
                $val = "válido";
            }elseif ($primeira_trinca > 191 and $primeira_trinca < 224){
                $val = "válido";
            }elseif ($primeira_trinca > 223 and $primeira_trinca < 240){
                $val = "válido";
            }elseif ($primeira_trinca > 239 and $primeira_trinca < 256){
                $val = "válido";
            }else{
                $val = "inválido";
            }

        return $val;
    }

    if ($mascara>32 || $mascara<24) {

        echo "Insira um CIDR entre 24 e 32";

    }elseif($ip1>255 || $ip1<1 || $ip1<0){

        echo "Endereço IP inválido";

        }else{

        $val = validacao($ip1);
        echo "Esse IP é " . $val;
        echo "<br>";
        echo "<br>";

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

        $privada_publica = privacidade_rede($ip1, $ip2);
        echo "O endereço é " . $privada_publica;
        echo "<br>";
        echo "<br>";

        $resultado_classe = define_classe($ip1);
        echo "A classe desse endereço é " . $resultado_classe;
        echo "<br>";
        echo "<br>";

        $mascara_decimal = calculo_mascara($mascara);
        echo "A máscara decimal é" . " $mascara_decimal";
        echo "<br>";
        echo "<br>";
       
       // ---

        $enderecos_de_rede = enderecos_subrede($mascara);

        $enderecos_de_broadcastt = enderecos_broadcast($mascara);
        
        $c = 0;
        while ($c < $redes){

	        $enderecos_de_redee[$c] = $enderecos_de_rede[$c]+1;

	        $enderecos_de_broadcast[$c] = $enderecos_de_broadcastt[$c]-1;                     

            $rede= $c+1; 

            echo "Sub-rede: ". $rede."<br>"."Endereço de rede: ". $ip1.'.'.$ip2.'.'.$ip3.'.'.$enderecos_de_rede[$c].'<br>';

            echo "Broadcast:". $ip1.'.'.$ip2.'.'.$ip3.'.'.$enderecos_de_broadcastt[$c].'<br>';

            echo "Primeiro host: ". $ip1.'.'.$ip2.'.'.$ip3.'.'.$enderecos_de_redee[$c].'<br>';

            echo "Ultimo host: ". $ip1.'.'.$ip2.'.'.$ip3.'.'.$enderecos_de_broadcast[$c].'<br>';

            echo "<br>";

            $c = $c + 1;
        }
        
        echo "<br>";
        echo "<br>";
        }
   //$resut=validar($primeira_trinca);
       // $eita = validar($mascara);
      //  echo $eita;

    }else{
        echo "Preencha os campos corretamente e tente novamente";
    }
    }
  

?>
