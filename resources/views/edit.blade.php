<!DOCTYPE html>
<html>
<head>
	<title>Edit Daftar Paket</title>
</head>
<body>
	<h3>Daftar Paket</h3>

	<a href="/daftar_paket"> Kembali</a>
	
	<br/>
	<br/>

    @foreach ($warnet_indomaju as $p)
        <form action="/daftar_paket/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id_paket" value="{{ $p->id_paket }}"> <br/>
            Nama Paket <input type="text" name="nama_paket" required="required" value="{{ $p->nama_paket }}"> <br/>
            Durasi <input type="text" name="jam_paket" required="required" value="{{ $p->jam_paket }}"> <br/>
            Harga <input name="harga_paket" required="required" value="{{ $p->harga_paket }}"> <br/>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
	

</body>
</html>