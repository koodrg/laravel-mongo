<?php

$elasticsearchHost = env('ELASTICSEARCH_HOST', 'localhost');
$elasticsearchPort = env('ELASTICSEARCH_PORT', '9200');

return array(

    /*
    |--------------------------------------------------------------------------
    | Custom Elasticsearch Client Configuration
    |--------------------------------------------------------------------------
    |
    | This array will be passed to the Elasticsearch client.
    | See configuration options here:
    |
    | http://www.elasticsearch.org/guide/en/elasticsearch/client/php-api/current/_configuration.html
     */

    'config' => [
        [
            'host' => $elasticsearchHost,
            'port' => $elasticsearchPort,
            'retries' => 1,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Index Name
    |--------------------------------------------------------------------------
    |
    | This is the index name that Elasticquent will use for all
    | Elasticquent models.
     */

    'default_index' => env('ELASTICQUENT_DEFAULT_INDEX', 'elasticquent'),

);
