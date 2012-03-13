<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Peach</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="header">
        <h1>- Peach -</h1>
        <strong>Safely change the domain name in your WordPress database dump.</strong>
    </header>
    <div class="pane">
        <section id="upload" class="upload">
            <div class="copy">
                <h2>To start, drag &amp; drop a dump.</h2>
                <small>(a .sql file)</small>
            </div>
        </section>
        <section id="domain-form" class="domain-form">
            <div class="copy">
                <label for="old-domain">Change</label>
                <input type="text" name="old" id="old-domain" placeholder="http://old-domain.com" />
                <label for="new-domain">to</label>
                <input type="text" name="new" id="new-domain" placeholder="http://new-domain.com" />
                <button class="go">GO!</button>
                <div class="buttons">
                    <a class="cancel" href="javascript:void(0)">Start Over</a>
                    <a class="download" href="javascript:void(0)">Download</a>
                </div>
                <div class="output"></div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <h3>About This Utility</h3>
        <p>As you probably know, migrating a WordPress database from one domain to another can be a bit of a hassle. Two major things must happen for it to be a seamless migration; Find &amp; replace the domain and fix the serialized url's containing the old domain. This tool does that for you. No need to run a bash script on every migration. Simply drag the sql dump into the square and set a new domain.</p>
        <h3>Support</h3>
        <p>As of now this only works in <a href="https://www.google.com/chrome">Chrome</a>. Depending on usage, I will look at degrading to the others.</p>
        <aside>
            Made by <a href="http://petesaia.com">Pete Saia</a>. Made possible by <a href="http://www.html5rocks.com/en/">JavaScript & HTML5</a>.
        </aside>
    </footer>
    <script src="assets/js/lib/jquery.js"></script>
    <script src="assets/js/lib/jquery.activity-indicator-1.0.0.js"></script>
    <script src="assets/js/migrate.js"></script>
    <script src="assets/js/filemanager.js"></script>
    <script src="assets/js/peach.js"></script>
</body>
</html>