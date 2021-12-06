<html>

<head>
    <title>Toko Sepatu Ghn</title>

    <style>
    .error1 {
        color: red;
    }
    </style>
</head>

<body>
    <center>
        <form action="<? base_url('tokosepatu/cetak'); ?>" method="post">
            <table bgcolor='pink' width="220px">
                <tr>
                    <th>
                        <h3>Toko Sepatu Ghn</h3>
                        <hr>
                    </th>
                </tr>
                <tr>
                    <td colspan="5"><input type="text" name="nama" id="nama" placeholder="Nama"></td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('nama'); ?> </b></td>
                </tr>
                <tr>
                    <td colspan="5"><input type="text" name="no" id="no" placehoder="No"></td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('no'); ?> </b></td>
                </tr>
                <tr>
                    <td>
                        <select name="merk" id="merk">
                            <option value="">-Merk Sepatu-</option>
                            <option value="nike">Nike</option>
                            <option value="adidas">Adidas</option>
                            <option value="kicker">Kicker</option>
                            <option value="eiger">Eiger</option>
                            <option value="bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('merk');?> </b></td>
                </tr>
                <tr>
                    <td><b>Size Sepatu :</b></td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" ma,e="sixe" value="32">32
                        <input type="radio" ma,e="sixe" value="33">33
                        <input type="radio" ma,e="sixe" value="34">34
                        <input type="radio" ma,e="sixe" value="35">35
                        <input type="radio" ma,e="sixe" value="36">36
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                    <input type="radio" ma,e="sixe" value="37">37
                    <input type="radio" ma,e="sixe" value="38">38
                    <input type="radio" ma,e="sixe" value="39">39
                    <input type="radio" ma,e="sixe" value="40">40
                    <input type="radio" ma,e="sixe" value="41">41
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="radio" ma,e="sixe" value="42">42
                    <input type="radio" ma,e="sixe" value="43">43
                    <input type="radio" ma,e="sixe" value="44">44
                    <hr>
                    </td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('size'); ?> </b></td>
                </tr>
                <tr>
                    <td align="center" colspan="3">
                        <input type="submit" value="input">
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </center>
</body>

</html>