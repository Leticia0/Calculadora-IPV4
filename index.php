<?php
include "cabecalho.php";
?>

<html>
<head>
    <title>Calculadora IPV4</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>

        #last_input{
            margin-right: 0.5%;
        }

    </style>

    <script>
        $(document).ready(function () {
            $("button").click(function () {
                        //TODO Perguntar para o professor como se faz, caso queira pegar os dados do name
                        var ip1 = $("#ip1").val();
                        var ip2 = $("#ip2").val();
                        var ip3 = $("#ip3").val();
                        var last_input = $("#last_input").val();
                        var mask = $("#mask").val();
                        $.post("funcoes.php",
                        {
                            acao: "enviar",
                            ip1: ip1,
                            ip2: ip2,
                            ip3: ip3,
                            ip4: last_input,
                            mascara: mask

                        },
                        function (data) {
                            var resultado = $("#resultado2").html(data);
                        })
                    }
                    )
        })
    </script>
</head>
<body>

    <div style="background-image: url(fundo2.jpg); background-attachment: fixed;">
        <br>
        <br>
        <br>
        <br>
        <h3 style="margin-bottom: 3%; color: white; font-family: serif;">Digite um ip válido</h3>
        <br>
        <div class="container" style="background-color: white; opacity: 0.7; width: 55%; border-radius: 0.3rem;">

            <div>

               <div class="">
                    <br>
                    <input type="text" id="ip1" maxlength="3" size="8" class="form-control" placeholder="192." style="width: 16%; float:left; margin-left: 3.45%">
                    <input type="text" id="ip2" maxlength="3"  class="form-control" placeholder="168." style="width: 16%; float:left; margin-left: 1%">
                    <input type="text" id="ip3" maxlength="3" size="1" class="form-control" placeholder="10." style="width: 16%; float:left; margin-left: 1%">
                    <input type="text" id="last_input" name="ip4" maxlength="3" size="1" class="form-control" placeholder="100/" style="width: 16%; float:left; margin-left: 1%">

                    <input type="text" id="mask" maxlenght="2" size="2" class="form-control" placeholder="24" style="width: 16%; float:left; margin-left: 1%">
               </div>

                 <button class="btn btn-dark" style="margin-left: 1%; margin-top: 0%">Enviar</button>
            
            </div>
        <br>
        </div><!--fecha o container-->

        <div id="resultado">
            <br>
            <div id="resultado2"></div>
            <br>
        </div>

     <br>
     <br>

    </div>
</body>
</html>

<?php
//include "rodape.php";
?>