<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>404 Page Not Found</title>
<meta name="apple-mobile-web-app-title" content="404 Page Not Found" />
<meta name="application-name" content="404 Page Not Found" />
<meta name="theme-color" content="#191919" />
<meta id="meta_description" name="description" content="404 Page Not Found" />
<meta name="keywords" content="404, page, not, found" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<?php include '../blog/includes/googleanalytics.php'; ?>
<style>
  body {
      background: #181b1f;
      color: #FFF;
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif,
      Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
      text-align: center;
      margin: 0;
  }
  #page {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
  }
  .item {
      flex: 1;
        max-width: 50%;
  }
  h1 {
      font-weight: 500;
  }
  span {
      color: #6f7376;
      font-size: 14px;
  }
  a {
      color: #A4A9AD;
  }
  a:hover, a:focus {
      color: #FFF;
  }
</style>
</head>
<body>
    <div id="page">
        <div class="item">
            <h1>404 Page Not Found</h1>
            <span><a href="javascript:history.go(-1)">Go Back</a> or <a href="https://www.rileighsayen.com">Return Home</a>.</span>
        </div>
    </div>
</body>
</html>
