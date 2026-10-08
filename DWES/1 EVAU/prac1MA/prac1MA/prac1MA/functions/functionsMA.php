<?php
    function isPrime($number)
    {
        if ($number < 2)
        {
            return false;
        }

        for ($divisor = 2; $divisor * $divisor <= $number; $divisor++)
        {
            if ($number % $divisor === 0)
            {
                return false;
            }
        }
        return true;
    }

    function filterByType($numbers, $type)
    {
        $selected = [];

        foreach ($numbers as $number)
        {
            switch ($type)
            {
                case "even":
                    $matches = $number % 2 === 0;
                    break;
                case "odd":
                    $matches = $number % 2 !== 0;
                    break;
                case "prime":
                    $matches = isPrime($number);
                    break;
                case "positive":
                    $matches = $number > 0;
                    break;
                case "negative":
                    $matches = $number < 0;
                    break;
                default:
                    return [];
            }

            if ($matches)
            {
                $selected[] = $number;
            }
        }
        return $selected;
    }

    function calculateStatistics($numbers)
    {
        $total = count($numbers);
        if ($total === 0)
        {
            return [];
        }

        sort($numbers);

        $media = array_sum($numbers) / $total;

        $middle = (int)($total / 2);
        if ($total % 2 === 0)
        {
            $mediana = ($numbers[$middle - 1] + $numbers[$middle]) / 2;
        }
        else
        {
            $mediana = $numbers[$middle];
        }

        $moda = $numbers[0];
        $bestStreak = 1;
        $streak = 1;
        for ($i = 1; $i < $total; $i++)
        {
            if ($numbers[$i] == $numbers[$i - 1])
            {
                $streak++;
            }
            else
            {
                $streak = 1;
            }

            if ($streak > $bestStreak)
            {
                $bestStreak = $streak;
                $moda = $numbers[$i];
            }
        }

        return [
            "media" => $media,
            "mediana" => $mediana,
            "moda" => $moda
        ];
    }

    function analyzeWords($text)
    {
        $words = explode(" ", $text);

        $count = 0;
        $longest = "";
        $shortest = "";

        foreach ($words as $word)
        {
            if ($word !== "")
            {
                if ($count === 0)
                {
                    $longest = $word;
                    $shortest = $word;
                }
                else
                {
                    if (strlen($word) > strlen($longest))
                    {
                        $longest = $word;
                    }
                    if (strlen($word) < strlen($shortest))
                    {
                        $shortest = $word;
                    }
                }
                $count++;
            }
        }

        return [
            "number_of_words" => $count,
            "longest_word" => $longest,
            "shortest_word" => $shortest
        ];
    }

    function convertTemperature($temperature, $from = "celsius", $to = "fahrenheit")
    {
        switch ($from)
        {
            case "celsius":
                $celsius = $temperature;
                break;
            case "fahrenheit":
                $celsius = ($temperature - 32) * 5 / 9;
                break;
            case "kelvin":
                $celsius = $temperature - 273.15;
                break;
            default:
                return false;
        }

        switch ($to)
        {
            case "celsius":
                return $celsius;
            case "fahrenheit":
                return $celsius * 9 / 5 + 32;
            case "kelvin":
                return $celsius + 273.15;
            default:
                return false;
        }
    }
?>
