<?php

   $json = file_get_contents("https://api.instagram.com/v1/users/XXXXXX/media/recent/?access_token=XXXX");
        $data = json_decode($json);

        $result = array();
 
        foreach( $data->data as $user_data ) {
             $result[] = array(
                'images' => (array) $user_data->images,
                'caption' => $user_data->caption->text,
            );
        }
         foreach($result as $item) {     
            echo "<img src='".@$item['images']['standard_resolution']->url."'/>";
         }
?>
