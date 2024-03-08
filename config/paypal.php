<?php

return array(
    /** set your paypal credential **/
    'client_id' => 'AV4jv_3hu_SNc6iGHsMx_qqr-JasVW4u18Dp76Ua9Tfxqf1XOnnEHKWcWCJLtH6tIUGdIerSAx1JZ33-',
    'secret' => 'EOwZ0BQZCRpqLLGV4Z5LbBhNOJqyiT-bbBlpGXEYZfj09mMlDlQ8r3zWgkElwxesqNcKab5EOdZn_2Ux',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 1000,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);