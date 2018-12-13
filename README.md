# PUBG
PHP wrapper for the official PUBG API - http://pubg.midorfeed.net

## Installation
Include the API class into your project.You will need an API key from https://developer.playbattlegrounds.com/apps?locale=en

## USAGE
Use your API key in curl_get() function to make your first API call!

### Get Seasons
```php
$data = API::getSeasons($platform);
```
### Get Season Stats
```php
$data = API::getSeasonStats($platform,$player_id,$season);
```
### Get Match Details
```php
$data = API::getMatchDetail($platform,$id);
```
### Get Player By Name
```php
$data = API::getPlayerByName($name);
```



