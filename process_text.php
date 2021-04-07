<?php

// read text from file
function read_file(){
    $file_name = "./text.txt";

    if (file_exists($file_name)) {
        $file = file_get_contents($file_name);
        $text = htmlentities($file);
        echo $text;
    }
}

function process_file() {

    $file_name = "./text.txt";
    if (file_exists($file_name)) {

        $file = file_get_contents($file_name);         // read file into str
        $text = htmlentities($file);

        remove_spaces($text);                       // delete more than one spaces
        remove_repeating_punctuation($text);        // remove more than one , and .

        highlight_abbreviation($text);
        highlight_numbers($text);

        separate_sentences($text);

        echo $text;
    }
}

function remove_spaces(&$text) {
    $text = preg_replace('/\s{2,}/', ' ', $text);  // '/\s{2,}/' '/\s\s+/'
}

function remove_repeating_punctuation(&$text) {
    // удаление повторяющейся пунктуации
    $text  = preg_replace('/\.+/', '.', $text);
    $text  = preg_replace('/\,+/', ',', $text);
}

function highlight_abbreviation(&$text) {
    // выделение абрревиатур
    $text = preg_replace('/(\b[А-ЯЁA-Z]{2,}\b)/u',
        '<span style="text-decoration: underline">$1</span>', $text);
}

function highlight_numbers(&$text) {
    // выделение цифр
    $text = preg_replace('/[0-9]+/u',
        '<span style="color: blue">$0</span>', $text);
}

function separate_sentences(&$text) {
    // оформеление предложений в виде отдельного абзаца
    $text = preg_replace('/\.+/', '.<br/>',$text);
}

