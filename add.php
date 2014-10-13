<htm>
    <head>
        <title>New Contact</title>
    </head>
    <body>
        <form action="insert_contact.php" method="POST" name="form" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td><td>:</td><td><input type="text" name="nama" size="30"></td>
                </tr>
                <tr>
                    <td>Email</td><td>:</td><td><input type="text" name="email" size="30"></td>
                </tr>
                <tr>
                    <td>Pilih File</td><td>:</td><td><input type="file" name="gambar" ></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td>
                        <input type="submit" value="Add" name="submit">
                        <a href="index.php" style="text-decoration: none">Back</a>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</htm>