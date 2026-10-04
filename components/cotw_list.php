<section class="recent-posts">
    <div class="recent-header">
    <h2>Case of the Week</h2>
    </div>
    <ul class="post-list">
      <?php
        include '/var/sqldata/credentials.php';

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($home == 1) {
          $sql = "SELECT * FROM cases ORDER BY id DESC LIMIT 3";
        } else {
            $sql = "SELECT * FROM cases ORDER BY id DESC";
        }

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