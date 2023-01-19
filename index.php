<!DOCTYPE html>
<html lang="pt-BR">
<!-- 
  Escolher Mineiros/GO
  para extrair o maximo possível de informações
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de API</title>

    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous" sync></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.0/semantic.min.css"
        integrity="sha512-PwhgdrueUt7iVICnZMjYcbiLalCztrVfzUIYXekIK8hZu4DQP141GrKh6fUHmNERWi4bGdBXIZqtBZnsSzHEMg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1>Tabelas de Indice HACKEADA <button id='hack'>hackear</button></h1>
    <div id="resultado" class="ui grid"></div>
</body>
<script>
var classes = [
    "ui table inverted orange",
    "ui table inverted green",
    "ui table inverted blue",
    "ui table inverted gray"
];

$('#hack').on('click', function() {
    var url = '';
    $.get("getLeis.php", {},
        function(data) {
            $('#resultado').html(data);
        }
    );


});
</script>
<style>
body {
    padding: 10px 20px;
}

table {
    width: 48% !important;
    margin: 1% !important;
}
</style>

</html>