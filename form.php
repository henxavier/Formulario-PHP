<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário PHP com anexo</title>
    
    <!-- Layout -->
    <!-- CSS BootStrap para deixar mais bunitim -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    
    <!-- JavaScript para deixar mais bunitim -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </head>
    
    <body>
    <div class="container">
    <br>
    
    <form class="form-horizontal" method="POST" action="envia.php" enctype="multipart/form-data">
    <fieldset>
    
    <!-- Título do formulário -->
    <legend>Formulário PHP com envio de anexo</legend>
    
    <!-- Campo: Nome -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nome">Nome</label>  
    <div class="col-md-4">
    <input id="nome" name="nome" placeholder="Informe seu nome" class="form-control input-md" required="" type="text">
    </div>
    </div>
    
    <!-- Campo: Email -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nome">Email</label>  
    <div class="col-md-4">
    <input id="replyto" name="replyto" placeholder="Informe seu email" class="form-control input-md" required="" type="text">
    </div>
    </div>
    
    <!-- Campo: Assunto -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nome">Assunto</label>  
    <div class="col-md-4">
    <input id="assunto" name="assunto" placeholder="Informe o assunto da mensagem" class="form-control input-md" required="" type="text">
    </div>
    </div>
    
    <!-- Campo: anexo --> 
    <div class="form-group">
    <label class="col-md-4 control-label" for="arquivo">Anexo</label>
    <div class="col-md-4">
    <input id="arquivo" name="arquivo" class="input-file" type="file">
        <span class="help-block">Arquivo no maximo 2MB</span>
    </div>
    </div> 
    
    <!-- Campo: Mensagem -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
    <div class="col-md-4">                     
    <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
    </div>
    </div>
    
    <!-- Botão Enviar -->
    <center>
    <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
    <button type="submit" class="btn btn-inverse">Enviar</button>
    </div>
    </div>
    
    </fieldset>
    </form>
    
    </div>
    </body>
    </html>