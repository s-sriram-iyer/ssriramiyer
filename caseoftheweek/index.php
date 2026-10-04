<!doctype html>
<html lang="en" data-theme="light">
  <head>
    <?php include "../components/head_contents.php"; ?>
  </head>

  <body>
    <?php include "../components/header.php"; ?>
    <main class="container">
    <!-- Welcome! --> <section class="hero"><h1 class="hero-name">Case of the Week<h1></section>

    <section class="recent-posts">
    <div class="recent-header">
    <h2>Case of the Week</h2>
    <a href="/caseoftheweek/" class="view-all">View all &rarr;</a>
    </div>
    <ul class="post-list">
      <?php
        include '/var/sqldata/credentials.php';
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM cases ORDER BY id DESC LIMIT 3";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          $url = "https://sriramiyer.co.uk/caseoftheweek/" . $row["url"];
          $title = $row["title"];
          $date = $row["date"];

          echo "<li class=\"post-entry\"><a href=\"";
          echo $url . "\"";
          echo "class=\"post-entry-link\"><h3 class=\"post-entry-title\">";
          echo $title;
          echo "</h3><span class=\"post-meta\"><span><time>";
          echo $date;
          echo "</time></span></span></a></li>";
        }
        $conn->close();
      ?>
    </ul>
  </section>

    </main>

  <?php include "../components/footer_and_important_js.php"; ?>

  </body>
</html>
