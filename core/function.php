<?php
function tampilHalaman($tabel, $limit)
{   include ('config/koneksi.php');
    $url=$_GET['page'];
    $sql="SELECT COUNT(*) AS total FROM $tabel";
    $aksiQuery = $conn->query($sql);
    $hasil = mysqli_fetch_array($aksiQuery);
    $totalData = $hasil['total'];
    $totalHal= ceil($totalData / $limit);
    $hal = 1;
    while ($hal <= $totalHal) 
    {
        echo '<a href="?page='.$url.'&hal='.$hal.'">'.$hal.'</a>';
        if ($hal < $totalHal)
            echo " | ";
        $hal++;
    }
} 

function ambilData($tabel,$hal=1,$limit)
{   include ('config/koneksi.php');
    $dataTable=array();
    $startRow=($hal-1) * $limit;
    $sql="SELECT * FROM $tabel LIMIT $startRow , $limit";

    $query=mysqli_query($conn,$sql);
 
    while($data=mysqli_fetch_array($query))
        array_push($dataTable,$data);

    return $dataTable;
} // akhir



function selectAll($table){
    include ('config/koneksi.php');
    $sql="SELECT * FROM $table";
    $query=mysqli_query($conn,$sql);

    return $query;
}

