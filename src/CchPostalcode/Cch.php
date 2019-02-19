<?php

namespace CchPostalcode;

use Goutte\Client;

class Cch
{
    public static function getPostalCode($street, $number, $city) {
        $code = 0;
        try{
          $_client = new Client();
          $_crawler = $_client->request(
            'GET',
            'https://codigopostal.correos.cl/?calle='.urlencode($street).'&numero='.$number.'&comuna='.urlencode($city)
          );

          $code = trim($_crawler->filter('.tu_codigo')->first()->text());
        } catch (\Throwable $ex){
          $code = 0;
        }

        return $code;
    }
}
