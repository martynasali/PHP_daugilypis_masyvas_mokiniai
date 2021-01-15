<?php



$moksleiviai =[
        "5b" => [
    rand(100, 900) => [
        "Birutė",
        "Stanaite",
        "ivertinimai" => [
            "matematika" => 10,
            "Infromatika" => 4,
            "Anglu" => 3]],
            rand(100, 900) => [
        "Petras",
        "Karaitis",
        "ivertinimai" => [
            "matematika" => 5,
            "Infromatika" => 6,
            "Anglu" => 7]],
            rand(100, 900) => [
        "Jonas",
        "Kpkaitis",
        "ivertinimai" => [
            "matematika" => 10,
            "Infromatika" => 10,
            "Anglu" => 9]],
            rand(100, 900) => [
        "Saulė",
        "Pkscanaite",
        "ivertinimai" => [
            "matematika" => 10,
            "Infromatika" => 2,
            "Anglu" => 9]],
            rand(100, 900) => [
        "Violeta",
        "Buzxcanaite",
        "ivertinimai" => [
            "matematika" => 10,
            "Infromatika" => 10,
            "Anglu" => 8]]],

"5c" => [
    rand(100, 900) => [
        "Andrius",
        "Wstdjfaitis",
        "ivertinimai" => [
            "matematika" => 3,
            "Infromatika" => 6,
            "Anglu" => 5]],
    rand(100, 900) => [
        "Odeta",
        "Khaqaite",
        "ivertinimai" => [
            "matematika" => 9,
            "Infromatika" => 6,
            "Anglu" => 7]],
    rand(100, 900) => [
        "Dalius",
        "Bkhjvaitis",
        "ivertinimai" => [
            "matematika" => 5,
            "Infromatika" => 9,
            "Anglu" => 6]],
    rand(100, 900) => [
        "Edita",
        "Qanosidanaite",
        "ivertinimai" => [
            "matematika" => 3,
            "Infromatika" => 5,
            "Anglu" => 9]],
    rand(100, 900) => [
            "Martynas",
        "Zxcsaitis",
        "ivertinimai" => [
            "matematika" =>  6,
            "Infromatika" => 9,
            "Anglu" => 8]]
]];


?>

<style>
    table, th, td {
        border: 1px solid black;
    }
</style>







<table>
    <colgroup span="6"></colgroup>
    <tr>
        <th>Klasė</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Kontrolinių darbų vidurkis</th>
        <th>Duomenu formatavimo data</th>
    </tr>

    <?php foreach ($moksleiviai as $klase => $pirmas):?>
    <?php foreach ($pirmas as $kodas => $vardai):?>




            <tr>

                <td><?=$klase;?></td>
                <td><?=$kodas;?></td>
                <? for($i=0; $i<2; $i++){?>
                <td><?=$vardai[$i];}?> </td>
                <?php foreach ($vardai["ivertinimai"] as $koda => $rezultatai):?>

                <td><?=$rezultatai;?></td>
                <?php endforeach;?>

                <td><?=date("Y-m-d");?></td>
                <?php endforeach;?>
                <?php endforeach;?>


            </tr>
        <tr>

        </tr>





</table>