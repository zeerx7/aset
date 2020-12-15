<?php
        $text = $raw;
        $op = $type;
        if ($act == 'Encode') {
            switch ($op) {case 'base64': $codi=base64_encode($text);
            break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
            break;case 'json' : $codi=json_encode(utf8_encode($text));
            break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
            break;case 'gzinflater' : $codi=base64_encode(str_rot13(gzdeflate($text)));
            break;case 'gzinflatex' : $codi=base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
            break;case 'gzinflatew' : $codi=base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
            break;case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
            break;case 'str2' : $codi=base64_encode(str_rot13($text));
            break;case 'urlencode' : $codi=rawurlencode($text);
            break;case 'ur' : $codi=convert_uuencode($text);
            break;case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
            break;default:break;}
        }elseif ($act == 'Decode'){
            $op = $_POST["ope"];
            switch ($op) {case 'base64': $codi=base64_decode($text);
            break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
            break;case 'json' : $codi=utf8_dencode(json_dencode($text));
            break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
            break;case 'gzinflater' : $codi=gzinflate(str_rot13(base64_decode($text)));
            break;case 'gzinflatex' : $codi=gzinflate(str_rot13(gzinflate(base64_decode($text))));
            break;case 'gzinflatew' : $codi=str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
            break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
            break;case 'str2' : $codi=str_rot13(base64_decode($text));
            break;case 'urlencode' : $codi=rawurldecode($text);
            break;case 'ur' : $codi=convert_uudecode($text);
            break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
            break;default:break;}
        }
