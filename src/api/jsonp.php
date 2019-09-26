<?php
$jsonArray = '[
  {
      "title": "テストデータ１タイトル",
      "description": "テストデータ１概要",
      "url": "http://www.google.com"
  },
  {
      "title": "テストデータ２タイトル",
      "description": "テストデータ２概要",
      "url": "http://www.google.com"
  },
  {
      "title": "テストデータ３タイトル",
      "description": "テストデータ３概要",
      "url": "http://www.google.com"
  },
  {
      "title": "テストデータ４タイトル",
      "description": "テストデータ４概要",
      "url": "http://www.google.com"
  },
  {
      "title": "テストデータ５タイトル",
      "description": "テストデータ５概要",
      "url": "http://www.google.com"
  }
]';

if(array_key_exists('callback', $_GET)){

  header('Content-Type: text/javascript; charset=utf8');
  header('Access-Control-Allow-Origin: http://www.example.com/');
  header('Access-Control-Max-Age: 3628800');
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

  $callback = $_GET['callback'];
  echo $callback.'('.$jsonArray.');';

}else{
  // normal JSON string
  header('Content-Type: application/json; charset=utf8');

  echo $jsonArray;
}