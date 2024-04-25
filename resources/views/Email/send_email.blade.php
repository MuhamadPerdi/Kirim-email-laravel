<form action="{{ route('submit.form') }}" method="post">
    @csrf
    <input type="text" name="nama" placeholder="Nama Anda"><br>
    <input type="email" name="email" placeholder="Email Anda"><br>
    <textarea name="pesan" placeholder="Pesan Anda"></textarea><br>
    <input type="submit" value="Kirim">
</form>