<!DOCTYPE html>
<html>
<head>
	<title>tugas</title>
</head>
<style>
 * {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style pada tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background: linear-gradient(-45deg,#d96000,#ffbf8b);
  width: 20%;
  height: 700px;
  
}

/* Style tombol di dalam tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* mengubah warna latar belakang saat tombol tidak aktif*/
.tab button:hover {
  background-color: #ffc883;
}

/* 
Buat kelas "tombol tab" yang aktif */
.tab button.active {
  background-color: #d5a875;
}

/* Atur gaya konten tab */
.tabkonten {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 80%;
  border-left: none;
  height: 700px;
}
h1{
  font-size: 18px;
  font-family: calibri;
    margin-left: 24%;
}
h2{
  font-size: 18px;
  font-family: calibri;

}
.img img{

  width :110px;
  height  :110px;
  border-radius: 50%;
 margin-left: 24%;
}

</style>
</head>
<body>



<div class="tab">
	<div class="img">
	<img src="2.png" width="100px" height="100px"></div>
	<h1>Rex Regum Qeon</h1>
	<h2>Mobile legend||Pubg m||Dota 2</h2>

  <button class="tablinks" onclick="openCity(event, 'hal1')" id="defaultOpen">Dashbord</button>
  <button class="tablinks" onclick="openCity(event, 'hal2')">Hot News</button>
  <button class="tablinks" onclick="openCity(event, 'hal3')">about RQQ</button>
 
</div>

<div id="hal1" class="tabkonten">
  <h3>Jadi Ikon Mobile Legends, RRQ Lemon Ternyata Sempat Jadi Korban Bullying</h3>
  <img src="lemon.jpg" width="300px" height="190px">
 <p>Suara.com - Video TikTok unggahan Deasi Listiani belum lama ini mencuri perhatian penggemar Mobile Legends. Dalam video tersebut, gadis ini berkisah mengenai perjalanan karir RRQ Lemon sebelum kini menjadi ikon Mobile Legends dunia.
Kisah mengenai perjalanan karir RRQ Lemon ini diunggah oleh Deasi Listiani ke TikTok pertama kali sebelum kemudian diunggah ke akun Instagram @lemonerrs.<p>


<p>Dalam video tersebut, dikisahkan bahwa pro player dengan nama asli Muhammad Ikhsan ini adalah sosok pendiam yang tidak terlalu suka untuk berinteraksi dengan orang lain. Hal tersebut yang lalu membuatnya menjadi korban bullying.

Kecintaannya pada game membuat Lemon lebih suka menghabiskan waktu sendiri untuk bermain berbagai game. Hingga pada duduk di bangku SMA, pro player asal Banda Aceh ini lalu fokus bermain Mobile Legends.</p>
<p>
	Siapa sangka jika kegemarannya bermain Mobile Legends akhirnya dilirik oleh Rex Regum Qeon atau RRQ. CEO RRQ, Andrian Pauline dalam video Jonathan Liandi menyebut bahwa keputusannya membawa Lemon dari Banda Aceh ke Jakarta adalah tepat.

	Terbukti, pada 2018 lalu, bersama Lemon, RRQ keluar sebagai jawara MPL Indonesia Season 2. Tidak hanya itu, dengan tim andalannya, RRQ bahkan kembali meraih gelar juara di MPL Indonesia Season 5.
</p>
<p>
	Bersama dengan Oura mantan pentolan EVOS, bos EVOS, Aldean Tegar mengklaim Lemon sebagai salah satu ikon Mobiile Legends di dunia.


	Tidak hanya menjadi ikon RRQ, dengan kemampuannya, Lemon bahkan dapat dikatakan sebagai ikon dunia dengan menjadi salah satu pro player yang wajahnya muncul sebagai stiker Mobile Legends.
</p>
</div>

<div id="hal2" class="tabkonten">
  <h3>Resmi! Line up RRQ Hoshi dan Alter Ego di M2: Ada Psychoo dan Caecius</h3>
  <img src="m2.jpg" width="300px" height="190px">
  <p>Berikut line-up resmi dari dua tim Indonesia, RRQ Hoshi dan Alter Ego untuk turnamen Mobile Legends World Championship (M2) 2021 di Singapura, Januari mendatang.Indonesia mengirimkan dua wakil terbaiknya dalam 12 peserta M2 2021, yakni RRQ Hoshi sebagai kampiun MPL Indonesia Season 6, dan Alter Ego yang baru saja menjuarai ajang MPL Invitational.
    <br>
    <br>
Tak banyak perombakan yang dilakukan oleh kedua tim, sehingga peluang RRQ Hoshi dan Alter Ego untuk mengawinkan trofi dengan gelar juara di M2 2021 kian besar.Lantas, siapa saya pemain yang akan unjuk gigi mewakili RRQ Hoshi dan Alter Ego di M2 2021 mendatang? Berikut ulasannya untuk Anda.RRQ Hoshi masih menurunkan skuat terbaik, yakni Lemon, R7, Vynnn, Xinnn, dan Alberttt yang tak tergantikan. Kemudian, ada pula Wizzking sebagai pelengkap dalam tim.
Menariknya, alih-alih memasukkan Liam dalam line up, RRQ Hoshi justru merilis pemain anyar mereka, Psychoo, untuk bermain di panggung M2 2021 nanti.
<br>
<br>
Di sisi lain, Alter Ego juga mengandalkan para pemain terbaik yang berjasa dalam meraih trofi juara MPL Invitational, yaitu Celiboy, Udil, Ahmad, PAI, dan LeoMurphy.Namun, berbeda dengan sebelumnya saat Yam masuk sebagai pemain cadangan di MPL Invitational, kali ini posisi itu justru diisi oleh pemain senior Alter Ego, yakni Caesius.Menarik untuk menantikan kejutan dari RRQ Hoshi dan Alter Ego dengan line up mereka di M2. Siapa yang akan meneruskan jejak EVOS sebagai juara dunia Mobile Legends?Saksikan turnamen Mobile Legends Global Championship (M2) pada 18-20 Januari, hingga babak playoff yang digelar pada 22-24 Januari, live streaming dari kanal Youtube dan Facebook MPL Indonesia.

</p>
</div>

<div id="hal3" class="tabkonten">
  <h3>About me</h3>
  <p>
    Kali ini, kita akan membahas panjang lebar soal tim esports yang merupakan anggota keluarga grup MidPlaza Holding dari soal sejarah, ambisi, dan prinsip mereka. Karena itulah, kami mengajak berbincang CEO RRQ, Andrian Pauline (AP), untuk bercerita soal tim yang punya julukan ‘sang raja’ ini.
    <br>
    <br>
    Sejarah Singkat RRQ
Peresmian kerja sama antara RRQ dan ASUS ROG. Dokumentasi: ASUS Indonesia
Peresmian kerja sama antara RRQ dan ASUS ROG. Dokumentasi: ASUS Indonesia
Seperti yang kami tuliskan sebelumnya, RRQ memang merupakan bagian dari MidPlaza Holding karena ia berangkat dari sebuah publisher game milik MidPlaza yang bernama Qeon Interactive.
<br>
<br>
Qeon Interactive merupakan publisher game yang didirikan tahun 2011. Di tahun 2013, Riki Kawano Suliawan, CEO Qeon Interactive, pun mengajak Andrian Pauline (AP) untuk membuat tim esports sendiri dan Dota 2 adalah pilihan pertama mereka. Meski sekarang RRQ merupakan salah satu tim terbesar, ternyata mereka baru di-manage secara profesional sejak tahun 2017.
<br>
<br>
AP bercerita bahwa dari 2013 sampai 2017 itu, Riki lah yang menanggung semua kebutuhan RRQ. Namun di 2017, grup MidPlaza setuju untuk serius menggarap RRQ. Saat itulah AP ditunjuk untuk menjalankan RRQ. Setelah RRQ jadi klub profesional, mereka pun kedatangan banyak sponsor sejak kuartal pertama 2018.
<br>
<br>
Satu perdebatan yang mungkin kerap terjadi di tingkatan manajemen organisasi esports besar sekelas RRQ adalah dilema antara prestasi dan exposure. RRQ sendiri, menurut saya pribadi, berhasil menyeimbangkan keduanya -setidaknya jika dibandingkan dengan organisasi esports besar lain di Indonesia.
<br>
<br>
Namun bagaimana sebenarnya tujuan utama dari RRQ?
<br>
<br>
AP mengatakan bahwa prioritas utama RRQ adalah jadi juara. “Orientasinya memang jadi juara. Fokus latihan karena itulah yang menjadi manifestasi dari seorang atlit. Popularitas itu adalah bonus tambahan.” Ujar AP serius.
<br>
<br>
Ia juga berargumen bahwa RRQ bisa saja menarik berbagai talent yang tinggi exposure-nya. Namun sampai hari ini, RRQ memang tidak punya ‘artis’ karena tujuan mereka memang bukan ke sana. Ia benar-benar ingin membangun dan mempertahankan winning team. Meski memang hal ini ia akui cukup sulit saat ini karena banyak tim baru yang bermunculan.
<br>
<br>
Meski begitu, AP juga menambahkan bahwa bukan berarti RRQ tidak berusaha mencari exposure lewat konten. “Kita bikin konten juga kok.”
<br>
<br>
Mengejar kemenangan mungkin memang kedengarannya lebih romantis, jika tak mau dibilang idealis, namun faktanya usia produktif para gamer profesional itu cukup pendek. Sekarang ini, para gamer profesional biasanya sudah ‘pensiun’ di usia 30 tahun.
<br>
<br>
Bukankah ketenaran bisa memperbesar peluang mereka untuk terus survive saat mereka tak punya panggung lagi di esports? Bagaimana AP menanggapi hal ini?
<br>
<br>
RRQ Endeavour saat jadi juara PBIC 2017. Sumber: RevivalTV
RRQ Endeavour saat jadi juara PBIC 2017. Sumber: RevivalTV
Ia pun mengaku bahwa RRQ mengembalikan lagi ke individunya masing-masing, apakah mereka ingin mencari panggung selagi masih punya kesempatan, namun RRQ sendiri juga menawarkan benefit yang tidak kecil.
<br>
<br>
Lagipula, ini yang paling menarik, buat para pemain ataupun orang-orang di belakang layarnya RRQ yang ‘pensiun’ di sini; grup MidPlaza Holding punya 20 perusahaan yang siap menampung. “Asal jangan minta jadi direktur aja hahaha…” Kata AP berseloroh.
<br>
<br>
Di sisi lainnya, AP mengatakan jika RRQ juga selalu mendorong para pemain untuk menyelesaikan studi mereka (di tingkat akademik). Muasalnya, ia percaya pendidikan itu sangat berguna untuk banyak hal di masa depan. Tak hanya soal skill, namun pendidikan juga membuat orang jadi punya attitude yang lebih bagus. Bagi RRQ, pendidikan itu nomor satu.
  </p>
</div>

	

<script>
function openCity(evt, cityName) {
  var i, tabkonten, tablinks;
  tabkonten = document.getElementsByClassName("tabkonten");
  for (i = 0; i < tabkonten.length; i++) {
    tabkonten[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
//elemen dengan id = "defaultOpen" dan klik di atasnya
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html>