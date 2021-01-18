
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
    html,
    body {
        height: 100%;
    }
    body {
        margin: 0;
        background: -webkit-linear-gradient(45deg, #49a09d, #5f2c82);
        background: linear-gradient(45deg, #49a09d, #5f2c82);
        font-family: sans-serif;
        font-weight: 100;
    }
    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    table {
        width: 800px;
        border-collapse: collapse;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    th,
    td {
        padding: 15px;
        background-color: rgba(255, 255, 255, 0.2);
        color: #fff;
    }
    th {
        text-align: left;
    }
    thead th {
        background-color: #55608f;
    }
    tbody tr:hover {
        background-color: rgba(255, 255, 255, 0.3);
    }
    tbody td {
        position: relative;
    }
    tbody td:hover:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -9999px;
        bottom: -9999px;
        background-color: rgba(255, 255, 255, 0.2);
        z-index: -1;
    }

</style>






<div class="container">
    <table>
        <thead>
        <colgroup span="6"></colgroup>
        <tr>
            <th>Klasė</th>
            <th>Kodas</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Kontrolinių darbų vidurkis</th>
            <th>Duomenu formatavimo data</th>
        </tr>
        </thead>




        <?php $t=0; ?>
        <?php foreach ($moksleiviai as $klase => $pirmas):?>
        <?php foreach ($pirmas as $kodas => $vardai):?>
        <?php $f=0; ?>


        <tbody>
        <tr>

            <td><?= $klase; ?></td>
            <td><?= $kodas; ?></td>
            <? for ($i = 0;
                    $i < 2;
                    $i++){ ?>
            <td><?= $vardai[$i];
                } ?> </td>
            <?php foreach ($vardai["ivertinimai"] as $koda => $rezultatai): ?>
                <?php $Rezultatai[$f] = $rezultatai;
                $f = $f + 1; ?>

            <?php endforeach;
            $foo = ($Rezultatai[0] + $Rezultatai[1] + $Rezultatai[2]) / 3; ?>
            <td><?= (number_format((float)$foo, 1, '.', '')) ?></td>

            <td><?= date("Y-m-d"); ?></td>
            <?php endforeach; ?>
            <?php endforeach; ?>


        </tr>
        </tbody>


    </table>
</div>
