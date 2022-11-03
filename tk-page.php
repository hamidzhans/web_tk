<?php include "template/navbar.php";?>
<section class="hero-forms">
    <div class="hero-input">
        <h1>Halaman Data Tk</h1>
        <form action="">
            <label for="">TK Pilihan</label>
            <input type="file" name="gambar" required autocomplete="off">
            <label for="">NPSN</label>
            <input type="text" name="npsn" required autocomplete="off">
            
            <label for="">Nama TK</label>
            <input type="text" name="nama-tk" required autocomplete="off">
            
            <label for="">Alamat</label>
            <input type="text" name="alamat" required autocomplete="off">

            <label for="">Kode POS</label>
            <input type="text" name="kd-pos" required autocomplete="off">

            <label for="">kelurahan</label>
            <input type="text" name="kelurahan" required autocomplete="off">

            <label for="">Kecematan</label>
            <input type="text" name="kecematan" required autocomplete="off">

            <label for="">Kota</label>
            <input type="text" name="kota" required autocomplete="off">

            <label for="">Provinsi</label>
            <input type="text" name="provinsi" required autocomplete="off">

            <label for="">Status</label>
            <select name="status" required autocomplete="off">
                <option value="">Pilih Status Tk</option>
                <option value="swasta">Swasta</option>
                <option value="negri">Negri</option>
            </select>

            <label for="">Akreditas</label>
            <input type="text" name="akreditas" required autocomplete="off">

            <label for="">No. Hp</label>
            <input type="number" name="no-hp" required autocomplete="off">

            <label for="">Email</label>
            <input type="email" name="email" required autocomplete="off">

            <label for="">Website</label>
            <input type="text" name="web" required autocomplete="off">
            <button class="simpan">Simpan</button>
        </form>
    </div>
    
</section>
<?php include "template/footer.php";?>