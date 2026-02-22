
 <h1>Selamat Datang {{ session('user_name')}}</h1>

 <a href="{{ route('alat.index') }}" class="btn btn-primary">Tambah Alat</a>
 
 <br>
 
 <a href="{{ route('read.data.alat') }}" class="btn btn-secondary">Lihat Data Alat</a>
 
 <br>

 <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Tambah Kategori</a>

 <br>

 <a href="{{ route('read.data.kategori') }}" class="btn btn-secondary">Lihat Data Kategori</a>

 <br>

 <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a> 