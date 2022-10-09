<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title style="font-weight: 500;">PgPortals</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')  }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')  }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')  }}" rel="stylesheet">

<style>
  select.goog-te-combo{
  display: inline-block;
  width: 100%;
  /* height: calc(2.25rem + 2px); */
  padding: .375rem 1.75rem .375rem .75rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 1rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
select.goog-te-combo:hover, select.goog-te-combo:active, select.goog-te-combo:focus {
  border-color: #2eca6a !important;
}
select.goog-te-combo option{
  border-color: #313131 !important;
}
.goog-gt-tt{
  display: none !important;
}
  .goog-text-hightlight{
  background-color: unset !important;
  box-shadow: unset !important;
  -moz-box-sizing: unset !important;
  box-sizing:unset !important;
  position: unset !important;
}
</style>
</head>

<body>
<div class="">
<div class="language-translate-code" style="position:fixed; right:0;z-index:1999"><div id="google_translate_element"></div>
</div>
@yield('content')
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script>
  function googleTranslateElementInit() {
    // new google.translate.TranslateElement({pageLanguage: 'ur', includedLanguages: 'en,hi,ur,bn,gu,ml,ps,xh,zu,af', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    new google.translate.TranslateElement({ pageLanguage: 'en,hi,ur,bn,gu,ml,ps,xh,zu,af' }, 'google_translate_element'); 
  }
</script>
    <!-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/googleElement.js"></script>
</body>

</html>