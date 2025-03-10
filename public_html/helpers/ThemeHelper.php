<?php

class ThemeHelper {
    public static function get_css_theme(String $theme_color) {
        if ($theme_color == 'blue') {
            return '<link rel="stylesheet" href="styles/theme-blue.css" />';
        } else if ($theme_color == 'pink') {
            return '<link rel="stylesheet" href="styles/theme-pink.css" />';
        } else if ($theme_color == 'yellow') {
            return '<link rel="stylesheet" href="styles/theme-yellow.css" />';
        } else if ($theme_color == 'black') {
            return '';
        } else {
            return '';
        }
    }

    public static function get_theme_switcher(String $theme_color) {

        $background_color = '';
        $next_color = '';
        $font_color = '';

        if ($theme_color == 'black') {
            $background_color = 'background-color: rgba(232, 206, 191, 1.0);'; // pink next
            $next_color = 'pink';
            $font_color = 'color: black !important;';
        } else if ($theme_color == 'pink') {
            $background_color = 'background-color: rgba(255, 223, 108, 1.0);'; // yellow next
            $next_color = 'yellow';
            $font_color = 'color: black !important;';
        } else if ($theme_color == 'yellow') {
            $background_color = 'background-color: rgba(82, 101, 143, 1.0);';  // blue next
            $next_color = 'blue';
            $font_color = 'color: white !important;';
        } else if ($theme_color == 'blue') {
            $background_color = 'background-color: rgba(0, 0, 0, 1.0);';  // black next
            $next_color = 'black';
            $font_color = 'color: white !important;';
        } else {
            return '';
        }

        $html_code = "

        <style>
        </style>
        <div>
        <form method='POST' action='switchtheme.php'>
        <input type='hidden' value='$next_color' name='next-theme'>
        <input style='position: fixed; bottom: 21px; right: 21px; $background_color $font_color padding: 16px; font-size: 16px !important; border-radius: 13px; color: white; z-index: 9999; border: 1px solid white; font-weight: bold !important;' value='Switch Theme ⟳' type='submit'>
        </form>
        </div>
        ";
        return $html_code;
    }
}
