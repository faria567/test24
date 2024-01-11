<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding: 0;
      margin: 0;
    }

    .container-fluid {
      padding: 0;
    }

    .navbar {
      background-color: #343a40;
      color: #fff;
      text-align: center;
    }

    .navbar-text {
    display: inline-block;
    padding: 14px 16px;
    text-decoration: none;
    color: white;
}

    .sidebar {
      background-color: #2c2f32;
      padding: 20px;
      color: #fff;
    }

    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 40px;
      padding: 10px;
    }

    .card {
      max-width: 300px;
      width: 100%;
    }

    .card-img-top {
      height: 100px;
      object-fit: cover;
    }

    .footer {
      background-color: #343a40;
      color: #fff;
      text-align: center;
      padding: 10px 0;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    
     
     <span class="navbar-text">Time: 02:30 PM - 03:30 PM </span>
    
  </nav>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 sidebar">
        <h2>My Intro</h2>
        <p>Hi there 👋 my name is Mossammat Faria.
            Experienced web developer with a passion for creating innovative and user-friendly websites.
             Skilled in front-end and back-end development, I specialize in HTML, CSS, JavaScript, bootstrap,wordpress,php and laravel framework.
             I have completed my Bsc in Computer Science and Engineering from University Of Information Technology and Sciences.</p>
            Email:mossammatfaria1999@gmail.com
            Mobile: 01748533946 
            </div>

      <!-- Main Content -->
      <div class="col-md-9">
        <div class="gallery-container">
          <!-- Card 1 -->
          @foreach($posts as $post)
          <div class="card">
            <img style="width:150px; height:100px;" src="{{ asset('uploads/'.$post->image)}}" alt="">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->description }}</p>
              
            </div>
          </div>
@endforeach
          
          {{-- <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div> --}}
          

        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <p>&copy;  <a href="https://github.com/faria567">Github of Mossammat Faria</a></p>
  </div>

  <!-- Bootstrap JS and Popper.js (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
