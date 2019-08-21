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
                    <h2 style="margin-left: 40%">Sobre IPV4</h2>
                    <br>
                    <br>
                    <h5 style="color: #696969">Existem duas versões do protocolo IP: o IPV4 é a versão atual, que utilizamos na grande maioria das situações, enquanto o IPV6 é a versão atualizada, que prevê um número brutalmente maior de endereços e deve começar a se popularizar a partir de 2010 ou 2012, quando os endereços IPV4 começarem a se esgotar.<br><br>

                    No IPV4, os endereço IP são compostos por 4 blocos de 8 bits (32 bits no total), que são representados através de números de 0 a 255, como "200.156.23.43" ou "64.245.32.11".<br><br>

                    As faixas de endereços começadas com "10", com "192.168" ou com de "172.16" até "172.31" são reservadas para uso em redes locais e por isso não são usados na internet. Os roteadores que compõe a grande rede são configurados para ignorar estes pacotes, de forma que as inúmeras redes locais que utilizam endereços na faixa "192.168.0.x" (por exemplo) podem conviver pacificamente.<br><br>

                    No caso dos endereços válidos na internet as regras são mais estritas. A entidade responsável pelo registro e atribuição dos endereços é a ARIN (http://www.arin.net/). As operadoras, carriers e provedores de acesso pagam uma taxa anual, que varia de US$ 1.250 a US$ 18.000 (de acordo com o volume de endereços requisitados) e embutem o custo nos links revendidos aos clientes.<br><br>

                    Ao conectar via ADSL ou oura modalidade de acesso doméstico, você recebe um único IP válido. Ao alugar um servidor dedicado você recebe uma faixa com 5 ou mais endereços e, ao alugar um link empresarial você pode conseguir uma faixa de classe C inteira. Mas, de qualquer forma, os endereços são definidos "de cima para baixo" de acordo com o plano ou serviço contratado e você não pode escolher quais endereços utilizar.<br><br>

                    Embora aparentem ser uma coisa só, os endereços IP incluem duas informações. O endereço da rede e o endereço do host dentro dela. Em uma rede doméstica, por exemplo, você poderia utilizar os endereços "192.168.1.1", "192.168.1.2" e "192.168.1.3", onde o "192.168.1." é o endereço da rede (e por isso não muda) e o último número (1, 2 e 3) identifica os três micros que fazem parte dela.

                    Os micros da rede local podem acessar a internet através de um roteador, que pode ser tanto um servidor com duas placas de rede, quando um modem ADSL ou outro dispositivo que ofereça a opção de compartilhar a conexão. Neste caso, o roteador passa a ser o gateway da rede e utiliza seu endereço IP válido para encaminhar as requisições feitas pelos micros da rede interna. Este recurso é chamado de NAT (Network Address Translation).<br><br>

                    Endereços de 32 bits permitem cerca de 4 bilhões de endereços diferentes, quase o suficiente para dar um endereço IP exclusivo para cada habitante do planeta. O grande problema é que os endereços são sempre divididos em duas partes, rede e host. Nos endereços de classe A, o primeiro octeto se refere à rede e os três octetos seguintes referem-se ao host. Temos apenas 126 faixas de endereços classe A disponíveis no mundo, dadas a governos, instituições e até mesmo algumas empresas privadas, como por exemplo a IBM. As faixas de endereços classe A consomem cerca de metade dos endereços IP disponíveis, representando um gigantesco desperdício, já que nenhuma das faixas é completamente utilizada. Será que a IBM utiliza todos os 16 milhões de endereços IP a que tem direito? Certamente não.<br><br>

                    Mesmo nos endereços classe B (dois octetos para a rede, dois para o host, garantindo 65 mil endereços) e nos classe C (três octetos para a rede e um para o host, ou seja, apenas 256 endereços) o desperdício é muito grande. Muitas empresas alugam faixas de endereços classe C para utilizar apenas dois ou três endereços por exemplo.<br><br>

                    Para piorar, parte dos endereços estão reservados para as classes D e E, que jamais foram implementadas. Isto faz com que já haja uma grande falta de endereços, principalmente os de classe A e B, que já estão todos ocupados. No ritmo atual, é provável que em poucos anos não existirão mais endereços disponíveis.<br><br>

                    Mais uma séria limitação do protocolo IPv4 é a falta de uma camada de segurança. Ele foi "desenvolvido para ser usado em redes onde as pessoas confiam umas nas outras" e não em um ambiente anárquico como a internet atual. Camadas de autenticação e encriptação precisam ser adicionadas através de protocolos implantados sobre o TCP/IP, como no CHAP, SSH e assim por diante.<br><br>

                    O problema da falta de endereços pode ser contornada de diversas formas, como por exemplo através do NAT, onde um único endereço IP pode ser compartilhado entre vários hosts (em teoria até 16 milhões, usando um endereço da faixa 10.x.x.x na rede interna). Quase todos já utilizamos o NAT ao compartilhar a conexão usando o ICQ do Windows, o IP Masquerading no Linux, ou mesmo mini-distribuições como o Coyote e o Freesco. A maior limitação do NAT é que os hosts sob a conexão compartilhada não recebem conexões entrantes, impedindo que os usuários utilizem programas de compartilhamento de arquivos, servidores Web ou FTP, muitos jogos multiplayer e assim por diante. Numa rede pequena ainda é possível redirecionar algumas portas do servidor para o host que for rodar estas aplicações, mas esta não seria uma opção para por exemplo um provedor de acesso que resolvesse, por falta de endereços IP, oferecer conexões NAT para seus clientes.</h5>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
	include "rodape.php";
?>