<?php

class Video
{
    function add($idc)
    {   
        $key = "AIzaSyDfP9m5SzOTQZewRq5oAjO7a-2P6e12aqM";
        $url = "https://youtube.googleapis.com/youtube/v3/search?maxResults=50&part=snippet&channelId=$idc&key=$key";
        $url = file_get_contents($url);
        $list = json_decode($url);        
        foreach((array)$list->items as $item)
        {
            if(!empty($item->id->videoId)){$a =  $item->id->videoId;
            $url2 = "https://www.googleapis.com/youtube/v3/videos?id=$a&key=AIzaSyDfP9m5SzOTQZewRq5oAjO7a-2P6e12aqM&part=snippet,statistics";         
            $url2 = file_get_contents($url2);
            $list2 = json_decode($url2);       
            $like =  $list2->items[0]->statistics->likeCount;echo" <br>";
            $id_v = $item->id->videoId;
            $title = $item->snippet->title;
            echo $title;
            $a =  explode('T', $list2->items[0]->snippet->publishedAt);
            $date = $a[0];
            $cnx = cnx_bdd();
            $requete="SELECT * from videos where id_video = '".$id_v."';";
            $jeuResultat=$cnx->query($requete);  
            $ligne = $jeuResultat->fetch();
            if(!$ligne)
            {
                $requete="INSERT INTO videos (id_video,title,likes,chanel_id,date_v) VALUES ('".$id_v."','".$title."',$like,'".$idc."','".$date."');";
                $ok=$cnx->query($requete);
            }    
            else
            {
                return False;
            }
           
            }
        }
        
    }
    function liste($idc)
    {
        $cnx = cnx_bdd();
        $requete = "select * from videos where chanel_id = '".$idc."' order by date_v desc limit 5;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
           
            $info[$i]['id_video']=$ligne['id_video'];
            $info[$i]['title']=$ligne['title'];
            $info[$i]['likes']=$ligne['likes'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }
}
?>