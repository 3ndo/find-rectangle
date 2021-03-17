<?php

class geometry {
    public int $result;

    public function __construct($n, $m) {
       $this->result = $this->sum($n, $m);
    }

    private function sum(int $n, int $m) {
        $result = 0;

        // m(m - 1) * n(n - 1) / 4
        for($i = $m - 1; $i >= 1; $i--)
		{
            for($j = $n - 1; $j >= 1; $j--)
			{
                $result += ($m - $i) * ($n - $j);
            }
		}

        return $result;
    }
}


$geometry = new geometry(3, 3);

print_r("Всього прямокутників: $geometry->result");
