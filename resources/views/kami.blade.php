@extends('layout/pertama')
@section('title','TENTANG APK')

@section('header')
<div>
        <img src="{{url('1.jpg')}}" class="img-fluid" alt="Responsive image">
        <div>
            <div class="carousel-caption">
                <h1 class="display-1 font-weight-bolder" style="color : black">ABOUT</h1>
                <hr style="height:5px; background-color:black;width:auto;">
                <h3 style="color : black">APP BLENDER</h3>
            </div>
        </div>
    </div>
@endsection

@section('isi')
<div class="row">
      <div class="col">
       <b><h3>- SEJARAH, PENGERTIAN DAN PENGGUNAAN APK BLENDER</h3></b>
        <p style="font-size:20px; color: blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - SEJARAH</p>
        <P>Pada tahun 1988 Ton Roosendaal mendanai perusahaan yang bergerak dibidang animasi yang dinamakan NeoGeo. NeoGeo adalah berkembang pesat sehingga menjadi perusahaan animasi terbesar di Belanda dan salah satu perusahaan animasi terdepan di Eropa. Ton Roosendaal selain bertanggung jawab sebagai art director juga bertanggung jawab atas pengembangan software internal.

Pada tahun 1995 muncullah sebuah software yang pada akhirnya dinamakan Blender. Setelah diamati ternyata Blender memiliki potensi untuk digunakan oleh artis –artis diluar NeoGeo. Lalu pada tahun 1998 Ton mendirikan perusahaan yang bernama Not a Number (NaN) Untuk mengembangkan dan memasarkan Blender lebih jauh. Cita – cita NaN adalah untuk menciptakan sebuah software animasi 3D yang padat, cross platform yang gratis dan dapat digunakan oleh masyarakat computer yang umum.

Sayangnya ambisi NaN tidak sesuai dengan kenyataan pasar saat itu. Tahun 2001 NaN dibentuk ulang menjadi perusahaan yang lebih kecil NaN lalu meluncurkan software komersial pertamanya, Blender Publisher. Sasaran pasar software ini adalah untuk web 3D interaktif. Angka penjualan yang rendah dan iklim ekonomi yang tidak menguntungkan saat itu mengakibatkan NaN ditutup. Punutupan ini termasuk penghentian terhadap pengembangan Blender.

Karena tidak ingin Blender hilang ditelan waktu begitu saja, Ton Roosendaal mendirikan organisasi non profit yang bernama Blender Foundation. Tujuan utama Blender Foundation adalah tersu mempromosikan dan mengembangkan Blender sebagai proyek open source. Pada tahun 2002 Blender dirilis ulang dibawah syarat – syarat GNU General Public License.</P>
        <p style="font-size:20px; color: blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - PENGERTIAN</p>
        <P>Blender merupakan OSS (Open Source SOftware) atau istilah lainnya software yang dapat di gunakan di berbagai macam OS (Operating System). Ini digunakan untuk dikembangkan secara komersial, tetapi sekarang dirilis di bawah GPL (GNU General Public License).</P>
        <img src="img/1.png" >
        <pre style="font-family: Arial, Helvetica;font-size:16px;">
        Untuk spekifikasi yang dibutuhkan untuk penginstallan software ini sangatlah sederhana

Intel pentium III atau lebih/ AMD dsbg
Ram 64Mb
VGA 4Mb
Disk Space 35Mb
Windows 2000 dan lebih, Linux.
Target di profesional media dan seniman, Blender dapat digunakan untuk membuat visualisasi 3D, stills serta siaran dan video berkualitas bioskop, sedangkan penggabungan mesin 
3D real-time memungkinkan penciptaan konten 3D interaktif untuk pemutaran yang berdiri sendiri. Blender memiliki berbagai macam kegunaan termasuk pemodelan, menjiwai, 
rendering, texturing, menguliti, rigging, pembobotan, editing non-linear, scripting, composite, post-produksi dan banyak lagi.

Blender tersedia untuk berbagai sistem operasi, seperti:
- Microsoft Windows
- Mac OS X
-Linux
- IRIX
- Solaris
- NetBSD
- FreeBSD
- OpenBSD.
Perangkat lunak ini berlisensi GPL (GNU General Public License) dan kemudian kode sumbernya tersedia dan dapat diambil siapa saja.

Fitur – Fitur Blender

Blender memiliki fitur sama kuat mengatur dalam lingkup dan kedalaman ke ujung lain tinggi 3D software seperti Softimage | XSI, Cinema 4D, 3ds Max dan Maya.
Perangkat lunak ini berisi fitur yang merupakan ciri khas dari model perangkat lunak high-end. Ini adalah Open Source yang paling populer grafis 3D aplikasi yang tersedia, dan 
merupakan salah satu yang paling didownload dengan lebih dari 200.000 download dari rilis masing-masing.

Fitur termasuk:

- Model: Obyek 3D tipe, termasuk jerat poligon, permukaan NURBS, Bezier dan kurva B-spline; multiresolusi patung kemampuan; Modifier stack deformers; model Mesh; Python Scripting
- Rigging: Skeleton kode ciptaan; Skinning; lapisan Bone; B-splines interpolated tulang
- Animasi: animasi editor non-linear; Vertex framing kunci untuk morphing, animasi Karakter berpose editor; deformers animasi, pemutaran Audio; sistem kendala animasi
Rendering: raytracer inbuilt; oversampling, blor gerak, efek pasca produksi, ladang, non-square pixel, lapisan Render dan melewati; Render baking ke peta UV, Efek termasuk halo, 
                   suar lensa, kabut, vektor motion-blur proses pasca- , dan proses pasca-defocus; Ekspor naskah untuk penyaji eksternal
- UV unwrapping: Laurent dan metode Berdasarkan Sudut unwrapping; unwreapping berdasarkan jahitan; falloff proporsional mengedit peta UV
- Shading: membaur dan shader specular; Node editor; hamburan Bawah, shading Tangent; peta Refleksi
- Fisika dan Partikel: sistem Partikel dapat dilampirkan ke mesh objek; simulator Fluida; solver Realtime tubuh lembut
- Imaging dan Komposisi: multilayer OpenEXR dukungan; filter node komposit, konverter, warna dan operator vektor; 8 mendukung prosesor; sequencer realtime dekat; Bentuk gelombang 
                                          dan U / V menyebar plits
- Realtime 3D/Game Penciptaan: editor grafis logika; Bullet Fisika dukungan Perpustakaan; jenis Shape: polyhedron Convex, kotak, bola, kerucut, silinder, kapsul, majemuk, dan mesh 
                                                     segitiga statis dengan mode auto penonaktifan; tabrakan Diskrit; Dukungan untuk kendaraan dinamika; Mendukung semua modus pencahayaan OpenGL; 
                                                     Python scripting; Audio
- Lintas Platfrom dengan GUI OpenGL seragam pada semua Platfrom ,siap untuk digunakan untuk semua versi windows (98, NT, 2000, XP), Linux,OS X , FreeBSD, Irix, SUN dan berbagai 
Sistem Oprasi lainnya .
- Kualitas tinggi arsitektur 3D yeng memungkinkan penciptaan cepat dan efisiens .
- Lebih dari 200.000 download (pengguna) dari seluruh dunia
- Diekseskusi berukuran kecil, dan distribusi rendah

Kelebihan Blender :
    Blender adalah salah satu software open source yang digunakan untuk membuat konten multimedia khusunya 3Dimensi, ada kelemahan dan beberapa kelebihan yang dimiliki Blender 
dibandingkan software sejenis. Berikut kelebihannya :
<b>-   Open Source</b>
Blender merupakan salah satu software open source, dimana kita bisa bebas memodifikasi source codenya untuk keperluan pribadi maupun komersial, asal tidak melanggar GNU General 
Public License yang digunakan Blender.

<b>-   Multi Platform</b>
Karena sifatnya yang open source, Blender tersedia untuk berbagai macam operasi sistem seperti Linux, Mac dan Windows. Sehingga file yang dibuat menggunakan Blender versi Linux 
tak akan berubah ketika dibuka di Blender versi Mac maupun Windows.

<b>-   Update</b>
Dengan status yang Open Source, Blender bisa dikembangkan oleh siapapun. Sehingga update software ini jauh lebih cepat dibandingkan software sejenis lainnya. Bahkan dalam hitungan 
jam, terkadang software ini sudah ada update annya. Update an tersebut tak tersedia di situs resmi blender.org melainkan di graphicall.org Free
Blender merupakan sebuah software yang Gratis Blender gratis bukan karena tidak laku, melainkan karena luar biasanya fitur yang mungkin tak dapat dibeli dengan uang, selain itu 
dengan digratiskannya software ini, siapapun bisa berpartisipasi dalam mengembangkannya untuk menjadi lebih baik. Gratisnya Blender mendunia bukan seperti 3DMAX/ Lainnya yang di 
Indonesia Gratis membajak :p. Tak perlu membayar untuk mendapatkan cap LEGAL. Karena Blender GRATIS dan LEGAL

<b>-   Lengkap</b>
Blender memiliki fitur yang lebih lengkap dari software 3D lainnya.  Coba cari software 3D selain Blender yang di dalamnya tersedia fitur Video editing, Game Engine, Node Compositing
, Sculpting. Bukan plugin lho ya, tapi sudah include atau di bundling seperti Blender.

<b>-    Ringan</b>
Blender relatif ringan jika dibandingkan software sejenis. Hal ini terbuti dengan sistem minimal untuk menjalankan Blender. Hanya dengan RAM 512 dan prosesor Pentium 4 / sepantaran 
dan VGA on board, Blender sudah dapat berjalan dengan baik namun tidak bisa digunakan secara maksimal. Misal untuk membuat highpolly akan sedikit lebih lambat.

<b>-    Komunitas Terbuka</b>
Tidak perlu membayar untuk bergabung dengan komunitas Blender yang sudah tersebar di dunia. Dari yang newbie sampai yang sudah advance terbuka untuk menerima masukan dari 
siapapun, selain itu mereka juga saling berbagi tutorial dan file secara terbuka. Salah satu contoh nyatanya adalah OPEN MOVIE garapan Blender Institute
        </pre>
      </div>
    </div>
  </div>
@endsection
