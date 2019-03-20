<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resume</title>
</head>

<body>
  <div class="container">
    <!-- <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
      </div>
      <div class="col">
        <h1>Hector Benites</h1>
        <h2>PHP Developer</h2>
        <ul>
          <li>Mail: hector@mail.com</li>
          <li>Phone: 1234567890</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @hectorbenitez</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div> -->

    <?php 
    
      $mascotas = array(
        array(
          'nombre' => 'Pelusa',
          'raza' => '-----',
          'tipo' => 'Gato',
          'edad'=>15,
        ),
        array(
          'nombre' => 'Aika',
          'raza' => '-----',
          'tipo' => 'Perro',
          'edad'=>10,
        ),
        array(
          'nombre' => 'Boni',
          'raza' => '-----',
          'tipo' => 'Gato',
          'edad'=>6,
        )
      );

      $empleados = array(
        array(
          'nombre'=>'Moises',
          'apellido'=>'Cornejo',
          'dni'=>'71467650',
          'mascotas' => $mascotas
        ),
        array(
          'nombre'=>'Juan',
          'apellido'=>'Kuga',
          'dni'=>'99999999',
          'mascotas' => array(
            array(
              'nombre' => 'kuma',
              'raza' => '-----',
              'tipo' => 'Perro',
              'edad'=>2,
            )
          )
        ),
        array(
          'nombre'=>'Carlos',
          'apellido'=>'Tamayo',
          'dni'=>'99999999',
          'mascotas' => array($mascotas[0])
        )
      );

      
      // echo '<pre>';
      // var_dump($empleados);
      // echo '</pre';
    ?>

    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Empleados Superpet</h3>
          <ul>
              <?php foreach ($empleados as $empleado): ?>
            <li class="work-position">
              <h5><?php echo $empleado['nombre'].' '.$empleado['apellido'];?></h5>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p> -->
              <strong>Mascotas:</strong>
              
              <ul>
                  <?php foreach ($empleado['mascotas'] as $mascota): ?>
                    <li><?php echo $mascota['nombre'];?></li>
                  <?php endforeach?>
                </ul>
            </li>
            <!-- <li class="work-position">
                <h5>PHP Developer</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>
                <strong>Achievements:</strong>
                <ul>
                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                </ul>
              </li>
              <li class="work-position">
                  <h5>PHP Developer</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>
                  <strong>Achievements:</strong>
                  <ul>
                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                  </ul>
                </li> -->
                <?php endforeach?>
          </ul>
        </div>
        <!-- <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                       </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by @hectorbenitez
      </div>
    </div>
  </div> -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>