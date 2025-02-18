<?php

namespace Rootscratch\PSGC;

use GuzzleHttp\Client;

class PSGC
{
    public const BASE_URL = 'https://psgc.rootscratch.com/';
    public const LAST_UPDATED = '2025-02-18';
    public $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    public function Regions($region_id = null)
    {
        $url = self::BASE_URL . 'region';
        $response = $region_id ? $this->client->request('GET', $url, [
            'query' => [
                'id' => $region_id
            ]
        ]) : $this->client->get($url);
        return json_decode($response->getBody()->getContents());
    }

    public function Provinces($province_id = null)
    {
        $url = self::BASE_URL . 'province';
        $response = $province_id ? $this->client->request('GET', $url, [
            'query' => [
                'id' => $province_id
            ]
        ]) : $this->client->get($url);
        return json_decode($response->getBody()->getContents());
    }


    public function MunicipalAndCities($MunicipalAndCities_ID = null)
    {
        $url = self::BASE_URL . 'municipal-city';
        $response = $MunicipalAndCities_ID ? $this->client->request('GET', $url, [
            'query' => [
                'id' => $MunicipalAndCities_ID
            ]
        ]) : $this->client->get($url);
        return json_decode($response->getBody()->getContents());
    }

    public function City($city_id = null)
    {
        $url = self::BASE_URL . 'city';
        $response = $city_id ? $this->client->request('GET', $url, [
            'query' => [
                'id' => $city_id
            ]
        ]) : $this->client->get($url);
        return json_decode($response->getBody()->getContents());
    }

    public function Municipal($municipal_id = null)
    {
        $url = self::BASE_URL . 'municipal';
        $response = $municipal_id ? $this->client->request('GET', $url, [
            'query' => [
                'id' => $municipal_id
            ]
        ]) : $this->client->get($url);
        return json_decode($response->getBody()->getContents());
    }

    public function Barangays($barangay_id = null)
    {
        $url = self::BASE_URL . 'barangay';
        $response = $barangay_id ? $this->client->request('GET', $url, [
            'query' => [
                'id' => $barangay_id
            ]
        ]) : $this->client->get($url);
        return json_decode($response->getBody()->getContents());
    }
}
