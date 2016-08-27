<meta charset="utf-8"/>
<?php
    $diziA = [9,8,7,6,5,4,3,2,1,0];
    $max = $diziA[0];
    $i = 0;
    echo "<pre>";
        echo var_dump($diziA);
    echo "</pre>";
    foreach($diziA as $eleman)
    {
        if($eleman > $max)
            $max = $eleman;
    }
    while($i<$max)
    {
        $diziC[$i] = 0;
        $i++;
    }
    $i = 0;
    foreach ($diziA as $eleman)
    {
        $diziC[$eleman] = $diziC[$eleman] +1;
        $diziB[$i] = 0;
        $i++;
    }
    for ($i = 1; $i < count($diziC); $i++)
    {
        $diziC[$i] = $diziC[$i] + $diziC[$i-1];
    }
    foreach ($diziA as $eleman)
    {
        $diziB[$diziC[$eleman]] = $eleman;
        $diziC[$eleman]--;
    }
    echo "<pre>";
        var_dump($diziB);
    echo "</pre>";
?>