<?php
 if($files){
     echo heading('Archivo(s) disponible(s) para descargar', 3);

      foreach($files as $file){

          echo anchor('archivos/downloads/'.$file, $file).br(1);

      }
echo br(1).anchor('archivos', 'Subir otro archivo');
 }else{

echo heading('No hay archivos para descargar', 3).anchor('archivos', 'Subir un Archivo');

 }
