<?php
$http_status_codes = 
    array(
        100 => "Continue", 
        101 => "Switching Protocols", 
        102 => "Processing", 
        200 => "OK", 
        201 => "Created", 
        202 => "Accepted", 
        203 => "Non-Authoritative Information", 
        204 => "No Content", 
        205 => "Reset Content", 
        206 => "Partial Content", 
        207 => "Multi-Status", 
        300 => "Multiple Choices", 
        301 => "Moved Permanently", 
        302 => "Found", 
        303 => "See Other",
        304 => "Not Modified",
        305 => "Use Proxy", 
        306 => "(Unused)", 
        307 => "Temporary Redirect", 
        308 => "Permanent Redirect", 
        400 => "Bad Request", 
        401 => "Unauthorized", 
        402 => "Payment Required", 
        403 => "Forbidden", 
        404 => "Not Found", 
        405 => "Method Not Allowed", 
        406 => "Not Acceptable", 
        407 => "Proxy Authentication Required", 
        408 => "Request Timeout", 
        409 => "Conflict",
        410 => "Gone", 
        411 => "Length Required", 
        412 => "Precondition Failed", 
        413 => "Request Entity Too Large", 
        414 => "Request-URI Too Long", 
        415 => "Unsupported Media Type", 
        416 => "Requested Range Not Satisfiable", 
        417 => "Expectation Failed", 
        418 => "I'm a teapot", 
        419 => "Authentication Timeout", 
        420 => "Enhance Your Calm", 
        422 => "Unprocessable Entity", 
        423 => "Locked", 
        424 => "Failed Dependency", 
        424 => "Method Failure", 
        425 => "Unordered Collection", 
        426 => "Upgrade Required", 
        428 => "Precondition Required", 
        429 => "Too Many Requests", 
        431 => "Request Header Fields Too Large", 
        444 => "No Response", 
        449 => "Retry With", 
        450 => "Blocked by Windows Parental Controls", 
        451 => "Unavailable For Legal Reasons", 
        494 => "Request Header Too Large", 
        495 => "Cert Error", 
        496 => "No Cert", 
        497 => "HTTP to HTTPS", 
        499 => "Client Closed Request", 
        500 => "Internal Server Error", 
        501 => "Not Implemented", 
        502 => "Bad Gateway", 
        503 => "Service Unavailable", 
        504 => "Gateway Timeout", 
        505 => "HTTP Version Not Supported", 
        506 => "Variant Also Negotiates", 
        507 => "Insufficient Storage", 
        508 => "Loop Detected", 
        509 => "Bandwidth Limit Exceeded",
        510 => "Not Extended", 
        511 => "Network Authentication Required", 
        598 => "Network read timeout error", 
        599 => "Network connect timeout error"
    );

    echo $http_status_codes[201];



    // if (!function_exists('http_response_code')) {
    //     function http_response_code($code = NULL) {

    //         if ($code !== NULL) {

    //             switch ($code) {
    //                 case 100: $text = 'Continue'; break;
    //                 case 101: $text = 'Switching Protocols'; break;
    //                 case 200: $text = 'OK'; break;
    //                 case 201: $text = 'Created'; break;
    //                 case 202: $text = 'Accepted'; break;
    //                 case 203: $text = 'Non-Authoritative Information'; break;
    //                 case 204: $text = 'No Content'; break;
    //                 case 205: $text = 'Reset Content'; break;
    //                 case 206: $text = 'Partial Content'; break;
    //                 case 300: $text = 'Multiple Choices'; break;
    //                 case 301: $text = 'Moved Permanently'; break;
    //                 case 302: $text = 'Moved Temporarily'; break;
    //                 case 303: $text = 'See Other'; break;
    //                 case 304: $text = 'Not Modified'; break;
    //                 case 305: $text = 'Use Proxy'; break;
    //                 case 400: $text = 'Bad Request'; break;
    //                 case 401: $text = 'Unauthorized'; break;
    //                 case 402: $text = 'Payment Required'; break;
    //                 case 403: $text = 'Forbidden'; break;
    //                 case 404: $text = 'Not Found'; break;
    //                 case 405: $text = 'Method Not Allowed'; break;
    //                 case 406: $text = 'Not Acceptable'; break;
    //                 case 407: $text = 'Proxy Authentication Required'; break;
    //                 case 408: $text = 'Request Time-out'; break;
    //                 case 409: $text = 'Conflict'; break;
    //                 case 410: $text = 'Gone'; break;
    //                 case 411: $text = 'Length Required'; break;
    //                 case 412: $text = 'Precondition Failed'; break;
    //                 case 413: $text = 'Request Entity Too Large'; break;
    //                 case 414: $text = 'Request-URI Too Large'; break;
    //                 case 415: $text = 'Unsupported Media Type'; break;
    //                 case 500: $text = 'Internal Server Error'; break;
    //                 case 501: $text = 'Not Implemented'; break;
    //                 case 502: $text = 'Bad Gateway'; break;
    //                 case 503: $text = 'Service Unavailable'; break;
    //                 case 504: $text = 'Gateway Time-out'; break;
    //                 case 505: $text = 'HTTP Version not supported'; break;
    //                 default:
    //                     exit('Unknown http status code "' . htmlentities($code) . '"');
    //                 break;
    //             }

    //             $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

    //             header($protocol . ' ' . $code . ' ' . $text);

    //             $GLOBALS['http_response_code'] = $code;

    //         } else {

    //             $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);

    //         }

    //         return $code;

    //     }
    // }


    // const SWITCHING_PROTOCOLS = 101;
    // const OK = 200;
    // const CREATED = 201;
    // const ACCEPTED = 202;
    // const NONAUTHORITATIVE_INFORMATION = 203;
    // const NO_CONTENT = 204;
    // const RESET_CONTENT = 205;
    // const PARTIAL_CONTENT = 206;
    // const MULTIPLE_CHOICES = 300;
    // const MOVED_PERMANENTLY = 301;
    // const MOVED_TEMPORARILY = 302;
    // const SEE_OTHER = 303;
    // const NOT_MODIFIED = 304;
    // const USE_PROXY = 305;
    // const BAD_REQUEST = 400;
    // const UNAUTHORIZED = 401;
    // const PAYMENT_REQUIRED = 402;
    // const FORBIDDEN = 403;
    // const NOT_FOUND = 404;
    // const METHOD_NOT_ALLOWED = 405;
    // const NOT_ACCEPTABLE = 406;
    // const PROXY_AUTHENTICATION_REQUIRED = 407;
    // const REQUEST_TIMEOUT = 408;
    // const CONFLICT = 408;
    // const GONE = 410;
    // const LENGTH_REQUIRED = 411;
    // const PRECONDITION_FAILED = 412;
    // const REQUEST_ENTITY_TOO_LARGE = 413;
    // const REQUESTURI_TOO_LARGE = 414;
    // const UNSUPPORTED_MEDIA_TYPE = 415;
    // const REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    // const EXPECTATION_FAILED = 417;
    // const IM_A_TEAPOT = 418;
    // const INTERNAL_SERVER_ERROR = 500;
    // const NOT_IMPLEMENTED = 501;
    // const BAD_GATEWAY = 502;
    // const SERVICE_UNAVAILABLE = 503;
    // const GATEWAY_TIMEOUT = 504;
    // const HTTP_VERSION_NOT_SUPPORTED = 505;

    // echo GONE;