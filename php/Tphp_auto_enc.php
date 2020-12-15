<?php
if ($pausi_code) {
            $res = strrev(base64_encode(gzdeflate(gzdeflate(gzdeflate(gzcompress(gzcompress($pausi_code)))))));
            echo "<?php
\$enc = '$res';
eval(base64_decode(base64_decode('WlhaaGJDZ2lQejRpTG1kNmRXNWpiMjF3Y21WemN5aG5lblZ1WTI5dGNISmxjM01vWjNwcGJtWnNZWFJsS0dkNmFXNW1iR0YwWlNobmVtbHVabXhoZEdVb1ltRnpaVFkwWDJSbFkyOWtaU2h6ZEhKeVpYWW9KR1Z1WXlrcEtTa3BLU2twT3c9PQ=========')));exit;
?>";
}
