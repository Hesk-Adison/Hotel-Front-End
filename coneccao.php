<?php


const HOST = 'localhost';
const DBNAME = 'projecto_final';
const DBUSER = 'root';
const DBPASSWORD = '';

function Conection(){
 
      try{

         $conetion = new PDO("mysql:host=".HOST.";"."dbname=".DBNAME,DBUSER.",".DBPASSWORD);


      }catch( PDOException $e ){
         echo $e->getMessage();
      }

      return $conetion;

   }

   

?>