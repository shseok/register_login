<?php
function validate_input_text($textValue)
{
    if (!empty($textValue)) {
        // 공백입력시 붙여줌
        $trim_text = trim($textValue);
        // 특수 문자 제거
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str; // 비어있다면 이후에 처리
    }
}

function validate_input_email($emailValue)
{
    if (!empty($emailValue)) {
        // 공백입력시 붙여줌
        $trim_text = trim($emailValue);
        // 원하지 않는 이메일 제거
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
}
