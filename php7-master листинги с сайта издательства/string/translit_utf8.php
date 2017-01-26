<?php ## функция превода текста с русского языка в траслит
  function transliterate($st)
  {
    $pattern = ['а', 'б', 'в', 'г', 'д', 'е', 'ё',
                'ж', 'з', 'и', 'й', 'к', 'л', 'м',
                'н', 'о', 'п', 'р', 'с', 'т', 'у',
                'ф', 'х', 'ч', 'ц', 'ш', 'щ', 'ъ',
                'ы', 'ь', 'э', 'ю', 'я',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё',
                'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М',
                'Н', 'О', 'П', 'Р', 'С', 'Т', 'У',
                'Ф', 'Х', 'Ч', 'Ц', 'Ш', 'Щ', 'Ъ',
                'Ы', 'Ь', 'Э', 'Ю', 'Я'];
    $replace = ['a', 'b', 'v', 'g', 'd', 'e', 'yo',
                'zh', 'z', 'i', 'y', 'k', 'l', 'm',
                'n', 'o', 'p', 'r', 's', 't', 'u',
                'f', 'h', 'ch', 'ts', 'sh', 'shch', '\'',
                'y', '', 'e', 'yu', 'ya',
                'A', 'B', 'V', 'G', 'D', 'E', 'Yo',
                'Zh', 'Z', 'I', 'Y', 'K', 'L', 'M',
                'N', 'O', 'P', 'R', 'S', 'T', 'U',
                'F', 'H', 'CH', 'Ts', 'Sh', 'Shch', '\'',
                'Y', '', 'E', 'Yu', 'Ya'];

    return str_replace($pattern, $replace, $st);
  }
  echo transliterate("У попа была собака, он ее любил.");
?>