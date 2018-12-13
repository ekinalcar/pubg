<?php
	class Api{
        
    //- Use "https://api.pubg.com/shards/{platform}" for PC players' season stats for seasons after "division.bro.official.2018-09".
    //- Use "https://api.pubg.com/shards/{platform-region}" for Xbox, and to get season stats for PC players' prior to and including "division.bro.official.2018-09".
		public static function getSeasons($platform){
        $seasons = curl_get('https://api.pubg.com/shards/'.$platform.'/seasons',array());
        if(!empty($seasons['data'])){
            return $seasons;
        }
        return false;
		}

   public static function getSeasonStats($platform,$player_id,$season){
      $stats = curl_get('https://api.pubg.com/shards/'.$platform.'/players/'.$player_id.'/seasons/'.$season,array());
       if(!empty($stats['data'])){
            return $stats;
        }
        return false;
		}

    public static function getMatchDetail($platform,$id) {
      $detail = curl_get('https://api.pubg.com/shards/'.$platform.'/matches/'.$id,array());
       if(!empty($detail['data'])){
          return $detail;
       }
        return false;
    }
        
      

        public static function getPlayerByName($name){
            $name = urlencode($name);

            $player = curl_get('https://api.pubg.com/shards/steam/players?filter[playerNames]='.$name.'',array());

            if(!empty($player['data'])){
                return $player;
            }else{
                return false;
            }
        }
	}
