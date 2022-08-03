<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/static/plugins/images/favicon.png">
    <title>Automatic Generate Question | User Guide</title>
    <!-- Bootstrap Core CSS -->
    <!-- <link href="/static/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <!-- <link href="/static/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet"> -->
    <!-- animation CSS -->
    <link href="/static/css/animate.css" rel="stylesheet">
    <!-- Menu CSS
    Custom CSS -->
    <link href="/static/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <!-- <link href="/static/css/colors/default-dark.css" id="theme" rel="stylesheet"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
    WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]> -->
    <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> -->
    <!-- <![endif] -->
</head>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <title>EGQ</title>
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>

    <!-- <div id="wrapper"> -->
    <!-- Page Content -->
    <nav class="navbar navbar-expand-lg navbar-light ps-3 pe-3 fixed-top" style=" background-color: #3E6D81 !important; box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.35);">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php">
                <img src="static/plugins/images/assets/img/logo-light.png" width="60%" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-weight: 600;">
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="index.php">Home&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="question_collection.php">Question Collection&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="generate.php">Generate&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="cbt.php">CBT&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="login.php">Sign In&emsp;</a>
                    </li>
                    <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class='dropdown-item' href='/'>
                            Masuk
                        </a>
                        <a class='dropdown-item' href='/'>
                            Profile
                        </a>
                    </div> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <!-- <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">User Guide</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">User Guide</li>
                        </ol>
                    </div>
                </div> -->
        <!-- .row -->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="pt-5">
                    <!-- Tabstyle start -->
                    <section class="m-b-40">
                        <div class="sttabs tabs-style-circle">
                            <nav>
                                <ul>
                                    <li><a href="#section-circle-1" class="sticon linea-basic" data-icon="m"><span>Pronoun</span></a></li>
                                    <li><a href="#section-circle-2" class="sticon linea-basic" data-icon="f"><span>Question</span></a></li>
                                    <li><a href="#section-circle-3" class="sticon linea-basic" data-icon="&#xe011;"><span>Article</span></a></li>
                                    <li><a href="#section-circle-4" class="sticon linea-basic" data-icon="&#xe020;"><span>Generate</span></a></li>
                                    <li><a href="#section-circle-5" class="sticon linea-basic" data-icon="M"><span>Download</span></a></li>
                                </ul>
                            </nav>
                            <div class="content-wrap text-center">
                                <section id="section-circle-1">
                                    <h4 style="color: #3E6D81">Tambah Koleksi Pronoun</h4>
                                    <p style="text-align: justify;">Menu ini merupakan menu yang digunakan untuk menambahkan data pronoun, data ini yang nantinya akan digunakan untuk melakukan penghapusan kandidat soal yang memiliki pronoun pada kalimat soal ataupun jawabannya. Penghapusan pronoun ini bertujuan agar soal yang dihasilkan tidak ambigu. Oleh karena itu, semakin banyak data pronoun, maka soal yang dihasilkan menjadi lebih bersih dari pronoun.</p>
                                    <p style="text-align: justify;">Adapun cara untuk melakukan penambahkan pronoun ini yaitu dengan memasukkan kata atau kalimat pronoun kedalam kotak bertuliskan "Pronoun", kemudian tekan tombol "Add" dan tunggu hingga proses penyimpanan selesai. Setelah proses penyimpanan selesai, pronoun akan muncul didalam tabel</p>
                                    <img width="100%" src="/static/plugins/images/user_guide/pronoun.jpg" class="img-responsive m-t-15" />
                                </section>
                                <section id="section-circle-2">
                                    <h4 style="color: #3E6D81">Tambah Dataset Pertanyaan</h4>
                                    <p style="text-align: justify;">Menu ini merupakan menu yang digunakan untuk menambahkan dataset pertanyaan dari <i>short answer question</i> bagian <i>reading comprehension</i> IELTS, data ini yang nantinya akan digunakan untuk melakukan penentuan jarak kandidat soal dengan dataset, yang nantinya akan menentukan kualitas dari kandidat soal yang dihasilkan. Semakin kecil nilai jarak maka semakin bagus kualitasnya. Oleh karena itu, semakin banyak dataset pertanyaan, maka soal yang dihasilkan memiliki beragam jarak.</p>
                                    <p style="text-align: justify;">Adapun cara untuk melakukan penambahkan dataset pertanyaan ini yaitu dengan memasukkan kata atau kalimat pertanyaan kedalam kotak bertuliskan "Question", kemudian tekan tombol "Add" dan tunggu hingga proses penyimpanan selesai. Setelah proses penyimpanan selesai, kalimat pertanyaan akan muncul didalam tabel</p>
                                    <img width="100%" src="/static/plugins/images/user_guide/question.jpg" class="img-responsive m-t-15" />
                                </section>
                                <section id="section-circle-3">
                                    <h4 style="color: #3E6D81">Tambah Artikel</h4>
                                    <p style="text-align: justify;">Menu ini merupakan menu yang digunakan untuk menambahkan data artikel, data ini yang nantinya akan digunakan untuk menghasilkan kandidat soal dari artikel, untuk menambahkan data artikel ini bisa dengan memasukkan link ataupun file.</p>
                                    <p style="text-align: justify;">Adapun cara untuk melakukan penambahkan data artikel ini yaitu dengan memasukkan judul dari artikel kedalam kotak bertuliskan "Title", kemudian pilih apakah ingin melalui link ataupun mengupload file, kemudian tekan tombol "Add" dan tunggu hingga proses penyimpanan selesai. Setelah proses penyimpanan selesai, judul artikel akan muncul didalam tabel</p>
                                    <img width="100%" src="/static/plugins/images/user_guide/article_01.jpg" class="img-responsive m-t-15" />
                                    <img width="100%" src="/static/plugins/images/user_guide/article_02.jpg" class="img-responsive m-t-15" />
                                </section>
                                <section id="section-circle-4">
                                    <h4 style="color: #3E6D81">Generate Question</h4>
                                    <p style="text-align: justify;">Menu ini merupakan menu yang digunakan untuk melakukan generate soal dari artikel yang telah ditambahkan pada menu sebelumnya. Jenis soal yang dihasilkan yaitu short answer question di reading comprehension IELTS.</p>
                                    <p style="text-align: justify;">Adapun cara untuk melakukan generate soal ini yaitu pertama memilih artikel yang akan di generate, kemudian memasukkan maksimal jumlah soal yang dihasilkan, setelah itu tekan tombol "Generate" dan tunggu hingga proses selesai. Hasil soal akan ditampilkan pada kotak "Result".</p>
                                    <img width="100%" src="/static/plugins/images/user_guide/generate_question.jpg" class="img-responsive m-t-15" />
                                </section>
                                <section id="section-circle-5">
                                    <h4 style="color: #3E6D81">Download</h4>
                                    <p style="text-align: justify;">Setelah melakukan generate soal dari artikel, selanjutnya file bisa diunduh dengan menekan tombol "Download".</p>
                                    <img width="100%" src="/static/plugins/images/user_guide/download.jpg" class="img-responsive m-t-15" />
                                </section>
                            </div>
                            <!-- /content -->
                        </div>
                        <!-- /tabs -->
                    </section>
                    <!-- Tabstyle start -->
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul>
                        <li><b>Layout Options</b></li>
                        <li>
                            <div class="checkbox checkbox-info">
                                <input id="checkbox1" type="checkbox" class="fxhdr">
                                <label for="checkbox1"> Fix Header </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-warning">
                                <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                <label for="checkbox2"> Fix Sidebar </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox" class="open-close">
                                <label for="checkbox4"> Toggle Sidebar </label>
                            </div>
                        </li>
                    </ul>
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                        <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                        <li><b>With Dark sidebar</b></li>
                        <br />
                        <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme working">7</a></li>
                        <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img width="100%" src="/static/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img width="100%" src="/static/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img width="100%" src="/static/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img width="100%" src="/static/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img width="100%" src="/static/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img width="100%" src="/static/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img width="100%" src="/static/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img width="100%" src="/static/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
    <!-- <footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer> -->
    <!-- /#page-wrapper -->
    <!-- </div> -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="/static/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/static/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/static/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/static/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/static/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/static/js/custom.min.js"></script>
    <script src="/static/js/cbpFWTabs.js"></script>
    <script type="text/javascript">
        (function() {
            [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });
        })();
    </script>
    <!--Style Switcher -->
    <script src="/static/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>