class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $nilaiMaks = 0;
        foreach ($accounts as $list) {
            $sum = array_sum($list);
            if ($sum > $nilaiMaks ){
                $nilaiMaks = $sum;
            }
        }
        return $nilaiMaks;
    }
}