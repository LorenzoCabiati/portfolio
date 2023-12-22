<header>
    <div class="hamburger-menu" onclick="buttonClick(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
  </header>

  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="progetti.php">Progetti</a>
    <a class="button" href="contattami.php">Contattami</a>
  </nav>

  <script>
    function buttonClick(x) {
      x.classList.toggle("change");
      document.querySelector('nav').classList.toggle('show');
    }
  </script>