<?php

namespace I3bepb\Task3;

class Courier
{
    /**
     * @param array $boxes Веса посылок
     * @param int $weight Вес, который может увезти курьер
     *
     * @return int Максимальное количество рейсов, которые курьер сможет сделать с учетом условий
     */
    public function getResult(array $boxes, int $weight): int
    {
        $result = 0;
        $not = [];
        $skip = [];
        $j = 0;
        $c = count($boxes);
        do {
            $a = $boxes[$j];
            if (isset($skip[$j])) {
                $j++;
                continue ;
            }
            if ($a >= $weight) {
                $j++;
                continue ;
            }
            if (isset($not[$a])) {
                $j++;
                continue ;
            }
            for ($i = $j + 1; $i < $c; $i++) {
                if (isset($skip[$i])) {
                    continue ;
                }
                $b = $boxes[$i];
                if ($a + $b === $weight) {
                    $j++;
                    $skip[$i] = $i;
                    $result++;
                    continue 2;
                }
            }
            $not[$a] = $a;
            $j++;
        } while ($j < $c - 1);
        return $result;
    }
}
