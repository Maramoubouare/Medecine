<?php

    session_start();
    include('connexion_db/cnx.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $req="select * from cabinet where id=".$id;
        $query=mysqli_query($connect, $req);
        while($enreg=mysqli_fetch_array($query)){
          $EMAIL = $enreg['EMAIL'];
          $NOM = $enreg['PRENOM_MEDECIN'];

        }
      }

    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_PUBLIC_KEY', '38a38569626136bdf0945a65ff28d435');
    define('API_PRIVATE_KEY', 'df3579fd36c1f75465b243a319795f95');
    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);


        if(filter_var($EMAIL, FILTER_VALIDATE_EMAIL)){
        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "yacbyfly@gmail.com",
                'Name' => "HOPPHARM"
                ],
                'To' => [
                [
                    'Email' => $EMAIL,
                    'Name' => $NOM
                ]
                ],
                'Subject' => "Renitialisation mot de passe",
                'HTMLPart' => "Renitialiser votre mot de passe <a href=http://localhost:8888/medecin/renitialiser_mdp.php?id=$id>click here</a>"

            ]
            ]
        ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="forgot-password.php?mod=1" </SCRIPT>';
        }
        else{
            echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="forgot-password.php?mod=2" </SCRIPT>';
        }



?>
