<?php
function get_CURL($url)
{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);

curl_close($curl);

return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCzCedBCSSltI1TFd3bKyN6g&key=AIzaSyAWeO15qTlkXhBAX_jEhROXfUgvLlZ7mAM');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//lates video
$urlLatesVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyAWeO15qTlkXhBAX_jEhROXfUgvLlZ7mAM&channelId=UCzCedBCSSltI1TFd3bKyN6g&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatesVideo);
$latesVideoId = $result['items']['0']['id']['videoId'];

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCOpMvwC2IUQDH1W-fyVX-5w&key=AIzaSyAWeO15qTlkXhBAX_jEhROXfUgvLlZ7mAM');

$youtubeProfilePic1 = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName1 = $result['items'][0]['snippet']['title'];
$subscriber1 = $result['items'][0]['statistics']['subscriberCount'];

//lates video
$urlLatesVideo1 = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyAWeO15qTlkXhBAX_jEhROXfUgvLlZ7mAM&channelId=UCOpMvwC2IUQDH1W-fyVX-5w&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatesVideo1);
$latesVideoId1 = $result['items']['0']['id']['videoId'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portofolio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Dian Sayyidah Khairani</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sosmed">Sosial Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/profile.jpg" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Dian Sayyidah Khairani</h1>
          <h3 class="lead">Student College | Programmer | Editor</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about" style="background-color: #a8dadc; padding: 60px 0; color: #333;">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>Seorang anak perempuan pertama dari Bapak Gultom dan Ibu Koto yang saat ini tengah menempuh pendidikan S1 di UIN Imam Bonjol Padang jurusan sistem informasi. Seseorang yang memiliki cita-cita sebagai pengusaha ice cream sejak masa kecilnya.</p>
          </div>
          <div class="col-md-5">
            <p>Menjadi figur anak pertama membuat saya untuk menjadi contoh yang baik untuk para adik tersayang. Mulai mengikuti sebuah organisasi mahasiswa jurusan dan unit kegiatan DKTV menambah bumbu kehidupan perkuliahan saya agar tidak monoton dan menjadi jalan untuk mencoba hal-hal baru.</p>
          </div>
        </div>
      </div>
    </section>


    <!--Youtube-->
    <section class="sosmed bg-light" id="sosmed">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName; ?></h5>
                <p><?= $subscriber; ?> Subscriber.</p>
                <div class="g-ytsubscribe" data-channelid="UCzCedBCSSltI1TFd3bKyN6g" data-layout="default" data-count="default"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                src="https://www.youtube.com/embed/<?= $latesVideoId ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="<?= $youtubeProfilePic1; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName1; ?></h5>
                <p><?= $subscriber1; ?> Subscriber.</p>
                <div class="g-ytsubscribe" data-channelid="UCOpMvwC2IUQDH1W-fyVX-5w" data-layout="default" data-count="default"></div>
              </div>
            </div>

            <div class="row mt-3 pb-3">
              <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                src="https://www.youtube.com/embed/<?= $latesVideoId1 ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>

    <!-- Project -->
    <section class="project" id="project" style="background-color: #a8dadc; padding: 60px 0; color: #333;">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Project</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <div class="embed-responsive embed-responsive-16by9 mb-2">
                <iframe class="embed-responsive-item" 
                  src="https://www.youtube.com/embed/T2a_gZ5xf2I?feature=shared"?rel=0 
                  allowfullscreen></iframe>
              </div>
              <div class="card-body">
                <p class="card-text">Mengedit program-program di DKTV.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">

              <div class="embed-responsive embed-responsive-16by9 mb-2">
                <iframe class="embed-responsive-item" 
                  src="https://www.youtube.com/embed/6AKV6aYRLWw?feature=shared"?rel=0 
                  allowfullscreen></iframe>
              </div>
              <div class="card-body">
                <p class="card-text">Menjadi MC di acara Penganugerahaan Pegawai Terbaik, Pegawai Teladan, dan Penetapan Agen Perubahan dan mengedit video di Pengadilan Militer I-03 Padang.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/9.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="https://dilmil-padang.go.id/" target="_blank" rel="noopener noreferrer">Meredesain website Pengadilan MiliterI-03 Padang.</a></p>
              </div>
            </div>
          </div>   
        </div>

          <div class="row">
            <div class="col-md-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Project REST API Movie</h5>
                <p class="card-text">Aplikasi berbasis PHP yang menampilkan data film menggunakan REST API.</p>
              <a href="wpu-movie/index.html" class="btn btn-primary">Lihat Project</a>
              </div>
            </div>
            </div>
          


            <div class="col-md-4 offset-md-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/10.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Project REST API Menu Restaurant</h5>
                <p class="card-text">Aplikasi berbasis PHP yang menampilkan data menu makanan menggunakan REST API.</p>
              <a href="wpu-hut/latihan2.html" class="btn btn-primary">Lihat Project</a>
              </div>
            </div>
            </div>
          </div>
    </section>

    <!-- portofolio -->
    <section class="portofolio bg-light" id="portofolio">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <h2>Portofolio</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/thumbs/12.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <p class="card-text">Secretary for Human Resource Development HMPS SI</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/thumbs/13.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <p class="card-text">Finance Division</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/thumbs/14.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <p class="card-text">Secretary of the seminar committee</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Contact -->
    <section class="contact" id="contact" style="background-color: #a8dadc; padding: 60px 0; color: #333;">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Instagram = dianqr_</p>
                <p class="card-text">WhatsApp = 0812xxxxxxxx</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Organization = DKTV UIN IB</li>
              <li class="list-group-item">Koto Tangah, Padang</li>
              <li class="list-group-item">West Sumatera, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; 2025.</p>
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>