<?php

class Validation
{

    /**
     * Simple vaildation for UK telephone numbers
     *
     * @param string $number
     * @return bool
     */
    public static function UKTelephoneCheck($number)
    {
        // UK phone number regex
        $pattern = "/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/";
        return preg_match($pattern, str_replace(' ', '', $number));
    }

    /**
     * Simple vaildation for US telephone numbers
     *
     * @param string $number
     * @return bool
     */
    public static function USTelephoneCheck($number)
    {
        // US phone number regex
        $pattern = "/^\+?1?[-.\s]?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/";
        return preg_match($pattern, str_replace(' ', '', $number));
    }
}
