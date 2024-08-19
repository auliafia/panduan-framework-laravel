<?php

use App\Http\Controllers\actionCOntroller;
use App\Http\Controllers\AnggotaAuthController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ApotekerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BirdController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BuahController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\csrf_fieldController;
use App\Http\Controllers\csrf_tokenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\definingLayoutController;
use App\Http\Controllers\displayData;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DosenBaruController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\extendLayoutController;
use App\Http\Controllers\fileDownloadController;
use App\Http\Controllers\fileResponController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\formulirController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ifStatementController;
use App\Http\Controllers\includingController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\InputPresenceController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\JadwalMahasiswaController;
use App\Http\Controllers\jsonController;
use App\Http\Controllers\JsonInputController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\loopController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\movingController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\paginationController;
use App\Http\Controllers\passingDataController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\presensiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\redirectNameController;
use App\Http\Controllers\SayurController;
use App\Http\Controllers\session1Controller;
use App\Http\Controllers\session2Controller;
use App\Http\Controllers\Session3Controller;
use App\Http\Controllers\Session4Controller;
use App\Http\Controllers\Session5Controller;
use App\Http\Controllers\Session6Controller;
use App\Http\Controllers\sharingController;
use App\Http\Controllers\showDataController;
use App\Http\Controllers\SiswaBaruController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\TeacherSubjectController;
use App\Http\Controllers\unescapedController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\UriController;
use App\Http\Controllers\validationFormController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\KamarController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/about', function () {
    return view('about', ['nama' => 'Aulia Fia']);
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog', function () {
    return view('blog');
});

// Routing start
route::get('registrasi', [siswaController::class, 'registrasi']);
route::post('/registrasi/hasil', [siswaController::class, 'hasil']);
// routing end

// Route get start
Route::get('blog', function () {
    return ('HALO INI CONTOH ROUTE GET');
});
// Route get end


// uri start
Route::get('uri', [UriController::class, 'index']);
// uri end


// Retrieving An Input Value start
Route::get('presensi', [presensiController::class, 'index']);
Route::post('presensi', [presensiController::class, 'hasil']);
// Retrieving An Input Value end

// JSon Input start
Route::get('json-form', [JsonInputController::class, 'showForm']);
Route::post('json-input', [JsonInputController::class, 'handleJsonInput']);
// JSon Input start

// input presence start
Route::get('input-form', [InputPresenceController::class, 'showForm']);
Route::post('check-input', [InputPresenceController::class, 'checkInput']);
// input presence end

// all input data start
Route::get('input-form', [InputController::class, 'showForm']);
Route::post('/retrieve-input', [InputController::class, 'retrieveInput']);
// all input data end

// Retrieving A Portion Of The Input Data
Route::get('formulir', [formulirController::class, 'hasil']);
Route::post('/proses-formulir', [formulirController::class, 'proses'])->name('proses-formulir');
// Retrieving A Portion Of The Input Data 

// upload 
// Route untuk menampilkan form upload
Route::get('upload', [uploadController::class, 'upload']);

// Route untuk menangani upload file
// Route::get('upload-file', [UploadController::class, 'upload']);
// Route::post('upload-file', [UploadController::class, 'uploadFile'])->name('uploadFile');
// upload file

// validasi upload file
Route::get('upload', [validationFormController::class, 'validateForm']);
Route::post('prosesUpload', [validationFormController::class, 'processForm'])->name('processUpload');

// moving file
Route::get('unggah', [movingController::class, 'unggah']);
Route::post('unggahFile', [movingController::class, 'unggahFile'])->name('unggahFile');

// json respon 
Route::get('json-response', [jsonController::class, 'getJsonResponse']);

// download file
Route::get('download', [fileDownloadController::class, 'download'])->name('file.download');

// file respons
Route::get('file', [fileResponController::class, 'show'])->name('file.show');

// redirect name
Route::get('out', [redirectNameController::class, 'out']);

// action
Route::get('tampil', [actionController::class, 'tampil']);
Route::get('tampil/index', [actionController::class, 'index']);

// Flashed Session Data
Route::get('/halaman-awal', function () {
    return redirect('/halaman-tujuan')->with('pesan', 'Ini adalah pesan dari halaman awal');
});

Route::get('/flasedview', function () {
    $pesan = session('pesan');
    return view('flashedview', ['pesan' => $pesan]);
});

// passing data to view
Route::get('taks', [passingDataController::class, 'taks']);

// sharing dat ato all view
Route::get('home', [sharingController::class, 'index']);

// defining a layout
Route::get('definingLayout', [definingLayoutController::class, 'index']);

// extend layout
Route::get('extendlayout', [extendLayoutController::class, 'main']);

// display data
Route::get('display', [displayData::class, 'dataDisplay']);

// echoing data
Route::get('show-data', [showDataController::class, 'showData']);

// unescaped
Route::get('unescaped-view', [unescapedController::class, 'index']);

// if data
Route::get('if-data', [ifStatementController::class, 'if']);

// loops
Route::get('loops', [loopController::class, 'contoh']);

// includng
Route::get('view-include', [includingController::class, 'index']);

// basic usage
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);

// Action helper
Route::get('/greet/{name}', [MyController::class, 'greet']);

// csrf_field
Route::get('/form', [csrf_fieldController::class, 'showForm'])->name('form.show');
Route::post('/submit', [csrf_fieldController::class, 'submitForm'])->name('form.submit');

// csrf_token
Route::get('/formulir', [csrf_tokenController::class, 'showForm'])->name('form.show');
Route::post('/formulir', [csrf_tokenController::class, 'handleForm'])->name('form.submit');

// send mail
Route::get('/email', [EmailController::class, 'showForm'])->name('email.form');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('email.send');

// paginating query builder
Route::get('/users', [paginationController::class, 'index']);

// simpel pagination
Route::get('/pagination', [paginationController::class, 'simplePagination']);

// eloquent
Route::get('/eloquent', [paginationController::class, 'eloquent']);

// result view 
Route::get('/display-results', function () {
    $results = [
        'result1' => 'Nilai 1',
        'result2' => 'Nilai 2',
        'result3' => 'Nilai 3',
    ];

    return view('results', ['results' => $results]);
});

// accessiong session
Route::get('/set-session', [session1Controller::class, 'setSession']);
Route::get('/get-session', [session1Controller::class, 'getSession']);

// 
Route::get('/setup-session', [session2Controller::class, 'setSession']);
Route::get('/check-session', [session2Controller::class, 'checkSession']);


// 
Route::get('/form-session', [Session3Controller::class, 'showForm'])->name('form.show');
Route::post('/form-session', [Session3Controller::class, 'storeForm'])->name('form.store');

// 
Route::get('/form-session-push', [Session4Controller::class, 'index'])->name('home');
Route::post('/add', [Session4Controller::class, 'addData'])->name('add.data');

// 
Route::get('/form', [Session5Controller::class, 'showForm']);
Route::post('/add-to-session', [Session5Controller::class, 'addToSession']);

//
Route::resource('items', Session6Controller::class);

// 
Route::get('/pelajar', [SiswaBaruController::class, 'index'])->name('siswas.index');
Route::post('/siswas', [SiswaBaruController::class, 'store'])->name('siswas.store');
Route::delete('/siswas/{id}', [SiswaBaruController::class, 'destroy'])->name('siswas.destroy');
Route::post('/delete-session', [SiswaBaruController::class, 'deleteFromSession'])->name('siswas.deleteSession');

// 
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// 

// Route::get('foods/create', [FoodController::class, 'create'])->name('foods.create');
// Route::post('foods', [FoodController::class, 'store'])->name('foods.store');

Route::resource('foods', FoodController::class);

// 
Route::get('/all-rows', function () {
    $rows = DB::table('books')->get();
    return view('tabel-buku', compact('rows'));
});


// 
Route::get('/one-rows', function () {
    $row = DB::table('books')->first();
    $columns = array_keys((array)$row);
    return view('data.one-row', ['row' => $row, 'columns' => $columns]);
});

Route::get('/one-column', function () {
    $column = DB::table('books')->pluck('title');
    return view('data.one-column', ['column' => $column]);
});

// 
Route::get('/list-column', function () {
    $columns = DB::table('books')->pluck('title');
    return view('data.list-column', ['columns' => $columns]);
});

// 
Route::get('/doctors', [DoctorController::class, 'index']);
Route::get('/doctors/create', [DoctorController::class, 'create']);
Route::post('/doctors', [DoctorController::class, 'store']);

// 
Route::get('/select-data', function () {
    $select_data = DB::table('books')
        ->select('author')
        ->get();
    return view('data.select-data', ['select_data' => $select_data]);
});

// 
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);

// 
Route::get('/teacher-subject', [TeacherSubjectController::class, 'index'])->name('teacher_subject.index');
Route::post('/teacher-subject', [TeacherSubjectController::class, 'store'])->name('teacher_subject.store');
Route::get('/teacher-subject/subject/create', [TeacherSubjectController::class, 'createSubject'])->name('teacher_subject.create_subject');
Route::post('/teacher-subject/subject', [TeacherSubjectController::class, 'storeSubject'])->name('teacher_subject.store_subject');
Route::get('/teacher-subject/results', [TeacherSubjectController::class, 'results'])->name('teacher_subject.results');


// 
Route::get('mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('programstudi/create', [MahasiswaController::class, 'createProgramStudi'])->name('programstudi.create');
Route::post('programstudi', [MahasiswaController::class, 'storeProgramStudi'])->name('programstudi.store');


// 
Route::get('/', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/jadwal-mahasiswa/create', [JadwalMahasiswaController::class, 'create'])->name('jadwal_mahasiswa.create');
Route::post('/jadwal-mahasiswa', [JadwalMahasiswaController::class, 'store'])->name('jadwal_mahasiswa.store');
Route::get('/mata-kuliah/create', [DosenController::class, 'createMataKuliah'])->name('mata_kuliah.create');
Route::post('/mata-kuliah', [DosenController::class, 'storeMataKuliah'])->name('mata_kuliah.store');
Route::get('/get-jam-belajar/{dosenId}', [DosenController::class, 'getJamBelajar']);

// 
Route::get('/gurus/create', [GuruController::class, 'create']);
Route::post('/gurus', [GuruController::class, 'store']);
Route::get('/gurus', [GuruController::class, 'index']);

// 
Route::get('/perawats', [PerawatController::class, 'index'])->name('perawats.index');
Route::get('/perawats/create', [PerawatController::class, 'create'])->name('perawats.create');
Route::post('/perawats', [PerawatController::class, 'store'])->name('perawats.store');

// 
Route::get('/apotekers', [ApotekerController::class, 'index'])->name('apotekers.index');
Route::get('/apotekers/create', [ApotekerController::class, 'create'])->name('apotekers.create');
Route::post('/apotekers', [ApotekerController::class, 'store'])->name('apotekers.store');


// 
Route::get('/buses/create', [BusController::class, 'create'])->name('buses.create');
Route::post('/buses', [BusController::class, 'store'])->name('buses.store');
Route::get('/buses', [BusController::class, 'index'])->name('buses.index');


//
Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');


// 
Route::get('/flowers', [FlowerController::class, 'index'])->name('flowers.index');
Route::get('/flowers/create', [FlowerController::class, 'create'])->name('flowers.create');
Route::post('/flowers', [FlowerController::class, 'store'])->name('flowers.store');

// 
Route::resource('buah', BuahController::class);


// 
Route::resource('sayur', SayurController::class);
// 
Route::get('/tanaman', [TanamanController::class, 'index'])->name('tanaman.index');
Route::get('/tanaman/create', [TanamanController::class, 'create'])->name('tanaman.create');
Route::post('/tanaman', [TanamanController::class, 'store'])->name('tanaman.store');
Route::get('/tanaman/group-by-jenis', [TanamanController::class, 'groupByJenis'])->name('tanaman.groupByJenis');
Route::get('/tanaman/having', [TanamanController::class, 'indexWithHaving'])->name('tanaman.index_with_having');


// 
Route::resource('birds', BirdController::class);

// 
Route::resource('karyawan', KaryawanController::class);

// 
// Route::resource('magang', MagangController::class);


// 
Route::resource('internships', InternshipController::class);

// 
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


// 
Route::get('/daftar', [AnggotaAuthController::class, 'showRegisterForm'])->name('daftar');
Route::post('/daftar', [AnggotaAuthController::class, 'register']);
Route::get('/masuk', [AnggotaAuthController::class, 'showLoginForm'])->name('masuk');
Route::post('/masuk', [AnggotaAuthController::class, 'login']);
Route::get('/beranda', [AnggotaAuthController::class, 'dashboard'])->middleware('auth');
Route::post('/keluar', [AnggotaAuthController::class, 'logout'])->middleware('auth');


// 

Route::resource('kamar', KamarController::class);