<!DOCTYPE html>
<html>

<head>
    <title>Data Kendaraan</title>
    <!--Bagian CSS untuk Styling Tabel-->
    <style type="text/css">
    h1 {
        font-family: sans-serif;
    }

    h3 {
        font-family: sans-serif;
        color: #FF0000;
    }

    table {
        font-family: Arial, Helvetica, sans-serif;
        color: #666;
        text-shadow: 1px 1px 0px #fff;
        background: #eaebec;
        border: #ccc 1px solid;
    }

    table th {
        padding: 15px 35px;
        border-left: 1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
        background: #ededed;
    }

    table th:first-child {
        border-left: none;
    }

    table tr {
        text-align: center;
        padding-left: 20px;
    }

    table td:first-child {
        text-align: left;
        padding-left: 20px;
        border-left: 0;
    }

    table td {
        padding: 15px 35px;
        border-top: 1px solid #ffffff;
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        background: #fafafa;
        background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
        background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
    }

    table tr:last-child td {
        border-bottom: 0;
    }

    table tr:last-child td:first-child {
        -moz-border-radius-bottomleft: 3px;
        -webkit-border-bottom-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    table tr:last-child td:last-child {
        -moz-border-radius-bottomright: 3px;
        -webkit-border-bottom-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    table tr:hover td {
        background: #f2f2f2;
        background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
        background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
    }

    .myButton {
        box-shadow: 3px 4px 0px 0px #8a2a21;
        background: linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
        background-color: #c62d1f;
        border-radius: 18px;
        border: 1px solid #d02718;
        display: inline-block;
        cursor: pointer;
        color: #ffffff;
        font-family: Arial;
        font-size: 22px;
        padding: 7px 25px;
        text-decoration: none;
        text-shadow: 0px 1px 0px #810e05;
    }

    .myButton:hover {
        background: linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
        background-color: #f24437;
    }

    .myButton:active {
        position: relative;
        top: 1px;
    }
    </style>
</head>

<body>

    <h3>Data Kendaraan</h3>
    <?php
// untuk meload data xml
$mobil = new SimpleXMLElement('http://localhost/Parsing%20Data%20XML/kendaraan.xml', null, true);
 
// menampilkan data ke XML ke dalam tabel HTML
echo "
<table>
<tr>
<th>Kode Mobil</th>
<th>Tipe Mobil</th>
<th>Merk Mobil</th>
<th>Jenis Mobil</th>
<th>Tipe Penggerak Roda</th>
</tr>
 
";
 
// melakukan looping penampilan data Kendaraan
foreach($mobil as $id)
{
        echo "
<tr>
<td width='200'>{$id->kode}</td>
<td width='200'>{$id->tipe}</td>
<td width='200'>{$id->merk}</td>
<td width='130'>{$id->jenis}</td>
<td width='80'>{$id->penggerak}</td>
</tr>
 
";
}
echo '</table>';
?>
    <br>
    </br>
    <button class="myButton" onclick="window.print()">Cetak Data Kendaraan</button>

</body>

</html>