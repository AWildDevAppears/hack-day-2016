<?php
    function get($page, $options, $sort) {
        $curl = curl_init();

        $api_query = ((!!$page)? '&page="' . $page . '"' : '') . ((!!$sort)? '&sort=' . $sort : '');

        curl_setopt($curl, CURLOPT_URL, 'http://food2fork.com/api/search?key='. API_KEY . '=' . $options . $api_query );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = json_decode(curl_exec($curl));
        curl_close($curl);

        return $result;
    }

    function getById($id) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://food2fork.com/api/get?key='. API_KEY . '&rId=' . $id);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = json_decode(curl_exec($curl));
        curl_close($curl);

        return $result;
    }

 ?>

