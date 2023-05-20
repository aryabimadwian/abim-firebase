<style>
input[type=text],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea[type=text],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=number],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=date],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=email],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.button {
    background-color: red;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<form method="post" action="action_add.php">
    <table border="0" width="500">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="abim"></td>
        </tr>
        <tr>
            <td>PM pertama</td>
            <td>:</td>
            <td><input type="text" name="pm1"></td>
        </tr>
        <tr>
            <td>PM kedua</td>
            <td>:</td>
            <td><input type="text" name="pm2"></td>
        </tr>
        <tr>
            <td>TSP</td>
            <td>:</td>
            <td><input type="text" name="tsp"></td>
        </tr>
        <tr>
            <td>Kuning</td>
            <td>:</td>
            <td><input type="text" name="kuning"></td>
        </tr>
        <tr>
            <td>Merah</td>
            <td>:</td>
            <td><input type="text" name="merah"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>Rentang</td>
            <td>:</td>
            <td><input type="text" name="rentang"></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>
                <select name="kategori" id="kategori">
                    <option value="green">Baik</option>
                    <option value="#00FFFF">Sedang</option>
                    <option value="yellow">Tidak Sehat</option>
                    <option value="red">Sangat Tidak Sehat</option>
                    <option value="black">Berbahaya</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Penjelasan</td>
            <td>:</td>
            <td><textarea name="penjelasan" id="penjelasan" type="text"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="SAVE"></td>
        </tr>
    </table>
</form>

<a href="index.php"><button class="button">Back</button></a>