<?php

  $database = [
    [
      "domande" =>
      "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" ,
       "risposta" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."

    ],

    [

      "domande" =>
      "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" ,
       "risposta" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno."

    ]



  ];


?>
 <div>
   <p> <?php

   foreach ($database as $stampa) {
    echo $stampa["domande"] . "<br>" . $stampa["risposta"] ."<hr>";
   }



    ?> </p>

 </div>
