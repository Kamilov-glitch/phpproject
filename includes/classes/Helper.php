<?php 

class Helper{
    
    public function passwordsMatch($pw1, $pw2) {
        return ($pw1 === $pw2) ? true : false;
    }

    public function isValidLength($str, $min = 8, $max = 20) {
        return (strlen($str) < $max && strlen($str) > $min) ? true : false;
    }

    public function isEmpty($postValues) {
        foreach($postValues as $value) {
            if ($value === '') return true;
        }
        return false;
    }

    public function isSecure($pw) {
        if(!preg_match("~[a-z]+~", $pw)) {
            return false;
        }

        if(!preg_match("~[0-9]+~", $pw)) {
            return false;
        }

        if(!preg_match("~[A-Z]+~", $pw)) {
            return false;
        }

        return true;
    }

    public function keepValues($val, $type, $attr = '') {
        switch ($type) {
            case 'textbox':
                echo "value = '$val'";
                break;
            case 'textarea':
                echo "$val";
                break;
            case 'select':
                if ($val == $attr) {
                    echo "value='$val' selected";
                } else {
                    echo "value='$attr'";
                }
                break;
            default:
                echo '';
        }
    }
    

}