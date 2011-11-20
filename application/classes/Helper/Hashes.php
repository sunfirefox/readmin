<?php

class Helper_Hashes
{

    public static function anchorActionDelete( $key, $field )
    {
        $params = array(
            'db'    => Request::factory()->getDb(),
            'cmd'   => 'HDEL ' . urlencode( $key ) . ' ' . urlencode( $field ),
            'back'  => Request::factory()->getBack(),
        );

        $url    = 'http://' . Request::factory()->getServerName() . '/?' . http_build_query( $params );
        $title  = 'HDEL ' . htmlspecialchars($key) . ' ' . htmlspecialchars($field);

        return '<a class="cmd delete" href="' . $url . '" title="' . $title . '">Delete</a>';
    }
}