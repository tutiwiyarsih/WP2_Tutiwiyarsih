<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'>Pada pengertian codeigniter di atas tadi dijelaskan bahwa codeigniter menggunakan metode MVC. Apa itu MVC? KIta juga harus mengetahui apa itu MVC sebelum masuk dan lebihh jauh dalam belajar codeigeniter.</p>
    <p>MVC adalah teknik atau konsep yang memisahkan komponen utama emnjadi tiga komponen yaitu model, view dan controler.</p>
        <ol type="a">
        <li>Model</li>
    <p align='justify'>Model adalah kelas yang merepresentasikan atau memodelkan tiep data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebagi penangan yang berhubungan dengan pengolahan atau manipulasi database. seperti misalnya mengambil data darii database, menginput dan pengolahan database lainnya. Semua indtruksi atau fungsi yang berhubungan dengan pengolahan database diletakan didalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model.</p>
    <p align='justify'>Sebagai catatan, semua model harus disimpan di dalam folder application \models</p>
    <li>View</li>
    <p align='justify'>View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser). Tampilan dari user inteface dikumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer alam melakukan pengembangan tampilan sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
    <li>Controller</li>
    <p align='justify'>Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara angsung, intinya data yang tersimpan di database (model) di ambil oleh Controller dan kemudian Controller pula yang menampilkan nya ke view. JAdi controller lah yag mengolah intrksi.</p>
    <p align='justify'>Dari penjelasan tentang model,view, dan controller di aats dapat di simpulkan bahwa controller sebagai penghubung view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep MVC, Controller memanggil instruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk di tampilkan. Jadi jelas sudah dan sangat mudah dalam pengmbangan aplikasi dengan cara mvc ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu behubungan dengna view untuk mendesign tampilan aplikasi, karena back-end developer yang menangani abgian controller dan modelnya. JAdi pembagian tugas pun menjadi mudah pengembangan aplikasi dpaat dilakukan dengan cepat dan terstruktur.</p>
</section>
 