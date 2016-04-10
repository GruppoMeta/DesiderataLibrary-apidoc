swagger: '2.0'
info:
  title: Desiderata Library
  description: Servizi
  version: "1.0.0"
host: localhost

schemes:
  - http
basePath: /sr_desiderataLibrary
produces:
  - application/json
paths:
<?php
  include('yaml/login_paths.yaml'); echo PHP_EOL;
  include('yaml/annotation_paths.yaml'); echo PHP_EOL;
  include('yaml/tags_paths.yaml'); echo PHP_EOL;
  include('yaml/desiderata_paths.yaml'); echo PHP_EOL;
  include('yaml/search_paths.yaml'); echo PHP_EOL;
  include('yaml/similar_paths.yaml'); echo PHP_EOL;
  include('yaml/license_paths.yaml'); echo PHP_EOL;
  include('yaml/user_paths.yaml'); echo PHP_EOL;
  include('yaml/geosearch_paths.yaml'); echo PHP_EOL;
  include('yaml/social_paths.yaml'); echo PHP_EOL;
  include('yaml/catalog_paths.yaml'); echo PHP_EOL;
  include('yaml/order_paths.yaml'); echo PHP_EOL;
  include('yaml/cds_paths.yaml'); echo PHP_EOL;
  include('yaml/recommender_paths.yaml'); echo PHP_EOL;
?>

definitions:
<?php
  include('yaml/login_def.yaml'); echo PHP_EOL;
  include('yaml/annotation_def.yaml'); echo PHP_EOL;
  include('yaml/tags_def.yaml'); echo PHP_EOL;
  include('yaml/desiderata_def.yaml'); echo PHP_EOL;
  include('yaml/search_def.yaml'); echo PHP_EOL;
  include('yaml/user_def.yaml'); echo PHP_EOL;
  include('yaml/geosearch_def.yaml'); echo PHP_EOL;
  include('yaml/social_def.yaml'); echo PHP_EOL;
  include('yaml/catalog_def.yaml'); echo PHP_EOL;
  include('yaml/order_def.yaml'); echo PHP_EOL;
  include('yaml/recommender_def.yaml'); echo PHP_EOL;
?>