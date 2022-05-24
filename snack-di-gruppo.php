<?php

    // inserire qui gli array (se necessario)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>

    <style>

        /* stile per lo snack 6 */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .grey, .green {
            padding: 40px;
            float: left;
            width: 50%;
        }
        .grey {
            background: grey;
        }
        .green {
            background: green;
        }

        /* se si vuole aggiungere altro css è preferibile creare un file apparte */

    </style>
    
</head>
<body>

    <section id="snack1">
        
        <h1> Snack 1 </h1>

        <?php 

$risultati = [
        [
            'casa' => 'Dinamo Sassari',
            'ospite' => 'Virtus Bologna',
            'ptCasa' => '55',
            'ptOspite' => '60',
        ],
        [
            'casa' => 'Reggiana',
            'ospite' => 'Universo Treviso',
            'ptCasa' => '75',
            'ptOspite' => '67',
        ],
        [
            'casa' => 'Olimpia Milano',
            'ospite' => 'Cantù',
            'ptCasa' => '99',
            'ptOspite' => '42',
        ],
        [
            'casa' => 'Venezia',
            'ospite' => 'Varese',
            'ptCasa' => '68',
            'ptOspite' => '67',
        ],
        [
            'casa' => 'Napoli',
            'ospite' => 'Cremona',
            'ptCasa' => '84',
            'ptOspite' => '79',
        ]
    ];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
for($i=0; $i<count($risultati); $i++){
    echo "<span>{$risultati[$i]['casa']} - </span> 
          <span>{$risultati[$i]['ospite']} | </span>
          <span>{$risultati[$i]['ptCasa']} - </span>
          <span>{$risultati[$i]['ptOspite']}</span> <br>";
} 
?>


</body>
</html>

    </section>

    <section id="snack2">
        
        <h1> Snack 2 </h1>

        <?php
        $nome = $_GET['nome']; 
        $mail = $_GET['mail']; 
        $eta = $_GET['eta']; 
        if(!empty($nome)&& !empty($mail)&& !empty($eta)){
            $alert = 'parametrierrati';
            if(strlen($nome) > 3 && strpos($mail, '@')!== false && strpos($mail, '.')!== false && is_numeric($eta)){
                $alert ='accesso consentito';
            }else{
                $alert = 'accesso negato';
            };
        };
        ?>
        <p>
            <?php
            echo $alert;
            ?>
        </p>

    </section>

    <section id="snack3">
        
        <h1> Snack 3 </h1>

        <?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Pippo',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Pliuto',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Paperino',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Topolonsky',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Minisky',
            'text' => 'Testo post 6'
        ]
    ],
];
    


?>

​
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>
    </head>

     <body>
     <p>
            
<?php
// for($i=0; $i<count($posts); $i++){
//     //  echo "<span>{$posts[$i]} - </span>";
//     var_dump ($posts);
// //   for($o=0; $o<count($posts[$i]); $o++){
      
//       echo "<span>{$posts[$i][$o]['title']} - </span>";
//   }   

foreach ($posts as $key => $value){
      echo $key ?> <br> <?php 
    //  var_dump ($value);
     for($i=0; $i<count($value); $i++){
       echo "<span>{$value[$i]['title']} <br> </span>
             <span>{$value[$i]['author']} <br> - </span>
             <span>{$value[$i]['text']}<br>  - </span>";
     }
}

// }


?>
    </body>

    </html>
​
    </section>

    <section id="snack4">
        
        <h1> Snack 4 </h1>

        <?php 
 $new_array = [];
 while(count($new_array) < 15){
   $number = rand(1, 15);
 if(!in_array($number, $new_array)){
     $new_array[] = $number;
 }
 }
 var_dump($new_array);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>





    </section>

    <section id="snack5">
        
        <h1> Snack 5 </h1>

        <?php 

$text = 'nostrum voluptate velit deleniti minima. corrupti perferendis, non optio, eaque dolores voluptatum. Eveniet, doloremque inventore! Porro, suscipit, voluptates nam ratione dolorem ipsam quisquam deserunt ducimus corrupti. officia expedita deleniti. Illum est molestiae omnis, nulla id repudiandae. tempore harum temporibus corporis pariatur quod iusto laudantium, praesentium fuga magnam unde alias repellat!';

$pieces = explode(".", $text);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 

   for($i = 0; $i < count($pieces); $i++){
    $x = $pieces[$i];
     echo "<span>{$x}.</span> <br>" ;
}
   
   ?>
</html>
    </section>

    <section id="snack6">
        
        <h1> Snack 6 </h1>

        <?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>



        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .pm, .teachers {
            padding: 40px;
            float: left;
            width: 50%;
        }
        .pm {
            background: grey;
        }
        .teachers {
            background: green;
        }

    </style>

</head>


<body>
    
<div>

<?php 
        foreach ($db as $key => $value){
            //var_dump($key);
            ?> <div class="<?php echo $key ?>">
            <?php foreach ($value as $value){
                echo "<p>$value[name] $value[lastname]";
            } ?>
            </div> <?php
        }
        ?>

  
</div>


</body>

</html>

    </section>

    <section id="snack7">
        
        <h1> Snack 7 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>



    
</body>
</html>