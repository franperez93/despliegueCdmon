        
<?php        
        //Obtener los datos desde github
        $payload = json_decode($_POST['payload']);

        $payload->ref;

        //Realizar las comprobaciones necesarias(recupera de master cuando haga el push)
        
        "refs/heads/master";
        
        //Ejecutar el script de puesta en produccion
        
        shell_exec('sh /entrada/PUESTA_EN_PRODUCCION.sh');
        shell_exec('date >> log.txt');
        
?>        