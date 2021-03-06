<?php
/**
 * Оригинальные листинги в подкаталоге instruct
 *
 *
 *                              Инструкци if - else.
 * Классический вид:
 *      if (логич_выраж) {
 *          инструкция_1
 *      } elseif (другое_логич_выраж) (
 *          инструкция_2
 *      } else {
 *          инструкция_3
 *      }
 *
 * Альтернативный синтаксис:
 *      if (логическое_выражение) :
 *          команды;
 *      elseif (другое_логическое_выражение):
 *          другие_команды;
 *      else :
 *          иначе_команды;
 *      endif
 * 
 * Блоки  elseif  и  else  можно опускать.
 *
 *      listing-9-1
 *
 *
 *
 *                              Цикл с предусловием  while.
 * Классический вид.
 *      while (Логическое_условие) {
 *          инструкция;
 *      }
 *
 * Альтернативный синтаксис:
 *      while (логичиское_выражение) :
 *          команды;
 *      endwhile;
 *
 *      listing-9-2
 *
 *
 *                              Цикл с постусловием  do-while.
 * Тело цикла выполится хотя бы 1 раз!
 *      do {
 *          команды;
 *      } while (логическое_выражение);
 *
 *
 *                              Универсальный цик  for.
 *      for (инициализирующие_команды; условия_цикла; команды после прохода) {
 *          тело_цикла;
 *      }
 * 
 *      listing-9-3
 * 
 *
 *                              Инструкция break и continue.
 * Break и  continue   работают только с циклическими конструкциями.
 * Break осуществляет немедленный выход из цикла, можно указываеть
 *  вложенность циклов из которых выйти. (удобен для циклов поисков.)
 *      for ($i = 0; $i < count($matrix); $i++) {
 *          for ($j = 0; $j < count($matrix[$i]); $j++) {
 *              if ($matrix[$i][$j] == 0) break(2);         // прерываение 2-х циклов
 *          }
 *      }
 *      if ($i < 10) echo 'Найден нулевой элемент в матрице!';
 *
 * Continue завершает текущую итерацию цикла и переходит к новой.
 *  (удобно для циклов-фильтров, когда надо перебрать некоторые объекты, и выбрать, те
 *    которые удовлетворяют условиям).
 *      for ($i = 0; $i < count($files); $i++) {
 *          if ($files[$i] == ".") continue;
 *          if ($files[$i] == "..") continue;
 *          if (is_dir($files[$i])) continue;
 *          echo "Найден файл: {$files[$i]}<br />";
 *      }
 *          // Цикл печатает те элементы маассива, которые являются файлами.
 *
 *
 *                              Нетрадиционное использование do-while и break.
 *      listing-9-4 
 * В данном листинге ввод данных в форму, и если что-то заполнено неверно, то идет прерывание 
 * отображается снова наша форма и сообщение об ошибке. 
 * Используется конструкция   
 *   if (что_то) do {...} while (0);
 * 
 * 
 *                              Цикл  foreach.
 * Массив - это набор так называемых ключей, каждому из которых соответсвует некоторое значение.
 *      foreach (массив as $ключ => $значение)
 *          команды;
 * Команды циклически выполняются для каждого элемента массива.
 *      listing-9-5     // Вывод всех переменных окружения
 *
 * Другая форма записи цикла foreach, применяется, когда нас не интерисует значение ключа очередного элемента.
 *      foreach ($массив as $значение)
 *          команды;
 * В этом случае доступно лишь значение очередного элемента-массива, но не его ключ. Это может
 *  быть полезно, например, для работы с массивами-списками.
 * Цикл foreach  оперирует с копией массива. (создается копия массива)
 * Для того, чтобы изменять значения массива внутри тела цикла, стоит использовать ссылочный синтаксис.
 *      foreach ($массив as $ключ => &$значение) {
 *          //Здесь можно изменять $значение, при этом изменятся элементы.
 *          // исходного массива $массив
 *      }
 *
 *
 *                              Конструкция  switch-case.
 * За место нескольких подряд  if-else, целесообразнее switch-case.
 *      switch (выражение) {
 *          case значение1: команды1; [break;]
 *          case значение2: команды2; [break;]
 *          ...........
 *          case значениеN: командыN; [break;]
 *          [default: команды по умолчанию; [break;]]
 *      }
 *
 *
 *                              Инструкции goto.
 * с версии PHP 5.3  оператор goto   осуществляет безусловныый переход на метку.
 *      goto метка;
 *      .......
 *      метка:
 *
 *      listing-9-6    // пример организации цикла
 *
 * у goto много ограничений (нельзя перемещаться в цикл, в другой файл).
 * Фактически goto  это более удобная замена многоуровневого break.
 *
 *
 *                              Инструкции require и include.
 * Эти инструкции позволяют разбить текст программы на несколько файлов.
 *      require имя_файла;
 * При запуске программы интерпретатор просто заменит инструкцию на содержимое файла имя_файла
 *      listing-9-7
 *      listing-9-8
 *      listing-9-9
 *
 * Конструкция include   практически идентична require  за исключением, что в случае
 *  невозможности подключения файла работа сценария не завершится немедленно,
 * а продолжается(с выводом соответствующего диагностичского сообщения).
 *
 *
 *                              Инструкции require_once и include_once.
 * В случае большого количества подключений require может возникнуть ситуация, когда одна
 *  и таже функция подключена несколько раз. Тогда возникнет ошибка!
 * require_once (и include_once)  при подключении видит, что затребованный файл был уже ранее
 * подключен, то не будет производить подключение файла и ошибка не произойдет!
 *  Рекомендация от авторов использовать только require_once и include_once.
 *
 * РЕЗЮМЕ: каждая программа состоит из набора инструкций, объединяющих группы
 *  операций и позволяющих им выполняться в произвольной последовательности и в
 *  зависимости от некоторых условий (необязательно подряд).
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * 
 */