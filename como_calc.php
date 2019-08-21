<?php
	include "cabecalho.php";
?>

<html>
    <title>Calculadora IPV4</title>
        <head>

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        </head>
<br>
<br>
        <body style='background-image: url("fundo.jpg")'>
            <div style="margin-right: 10%">
                <div style="margin-left: 10%">
                  <div style="background-color: white">
                    <br>
                    <h2 style="margin-left: 40%">Como Calcular</h2>
                    <br>
                    <br>
                    <h5 style="color: #696969">Como calcular uma máscara de IP de subrede

Um endereço IP é um código binário de 32 bits (muitas vezes escrito na forma decimal) que contém partes de rede e hospedeiro. Os bits do hospedeiro definem um determinado computador. O prefixo da rede determina uma rede e seu comprimento depende da classe. Fazer sub-redes ajuda a organizar uma rede, quebrando-a em várias. Para defini-las, você deve pegar os bits da parte do hospedeiro do endereço IP. Isso também estende-se ao prefixo de rede. A máscara de sub-rede define explicitamente os bits de rede e do hospedeiro como 1 e 0, respectivamente. Neste exemplo, vamos calcular uma máscara de sub-rede para um computador com endereço IP 192.35.128.93, que pertence a uma rede com seis sub-redes.<br>

Endereço IP – Um endereço IPv4 é formado por 32 bits que é o mesmo que dizermos que possui quatro octetos representados na forma decimal (ex: 192.168.0.1). Uma parte desse endereço indica-nos a rede e a outra parte indica-nos qual a máquina.<br>

Máscara de rede – Para determinarmos que parte do endereço IP identifica a rede e que parte identifica a máquina, teremos de recorrer à máscara de rede (subnet mask ou netmask) associada.
<br>
Endereço Broadcast – O endereço broadcast de uma rede/sub-rede é definido como um endereço especial uma vez que permite que uma determinada informação seja enviada para todas as máquinas de uma rede/subrede. Este é sempre o último endereço possível de uma rede/sub-rede.<br>

Instruções<br>

1
Determine a classe de rede (A, B ou C) com base no endereço IP: * Se os endereços IP começam com 1 a 126, são classe A. * Se os endereços IP começam com 128 a 191, são classe B. * Se os endereços IP começam com 192 a 223, são classe C. No nosso exemplo, a rede é classe C, já que o endereço IP 192.35.128.93 começa com 192.<br>

2
Determine o número de bits necessários para definir as sub-redes: * Número de sub-redes = (2^Número de bits) - 2. Assim, * Número de bits = log2 (Número de sub-redes + 2). No nosso exemplo, existem seis sub-redes: * Número de bits = log2(6 + 2) = log2(8) = 3. Três bits no endereço de IP são usados como parte da sub-rede.<br>

3
Faça a máscara de sub-rede na forma binária, estendendo a máscara de sub-rede padrão com os bits da sub-rede. As máscaras padrão para as classes A a C são: * 11111111.00000000.00000000.00000000 (Classe A, parte da rede é de 8 bits) * 11111111.11111111.00000000.00000000 (Classe B, parte da rede é de 16 bits) * 11111111.11111111.11111111.00000000 (Classe C, parte da rede é de 24 bits) No nosso exemplo, uma extensão do padrão de máscara de sub-rede classe C com 3 bits (Passo 2) resulta na máscara seguinte: 11111111.11111111.11111111.11100000.<br>

4
Converta a máscara de sub-rede binária para a forma decimal. O formato binário contém quatro octetos (de 8 bits cada). Use as seguintes regras: * Para o octeto "1111111", escreva "255". * Para o octeto "00000000", escreva "0". * Se octeto contém "1" e "0", use a fórmula: Número inteiro = (128 x n) + (64 x n) + (32 x n) + (16 x n) + (8 x n) + (4 x n) + (2 x n) + (1 x n) Onde "n" é 1 ou 0, na posição correspondente na sequência do octeto. No nosso exemplo, para 11111111.11111111.11111111.11100000 11111111 -> 255 11111111 -> 255 11111111 -> 255 11100000 -> (128 x 1) + (64 x 1) + (32 x 1) + (16 x 0) + (8 x 0) + (4 x 0) + (2 x 0) + (1 x 0) = 224 A máscara de sub-rede é 255.255.255.224.<br></h5>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
	include "rodape.php";
?>