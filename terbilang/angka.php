<!DOCTYPE html>
<html>
<head>
  <title>Gilacoding</title>
</head>
<body>
  <form>
   <label>Masukkan Nilai</label> 
   <input type="text" id="terbilang-input" class="mata-uang" onkeyup="inputTerbilang();">
   <br/>
   <br/>
   <label>Hasil</label> 
   <input type="text" id="terbilang-output">
  </form width="50px">
  <script src="jquery-1.11.2.min.js"></script>
  <script src="jquery.mask.min.js"></script>
  <script src="terbilang.js"></script>
  <script type="text/javascript">
    function inputTerbilang() {
      //membuat inputan otomatis jadi mata uang
      $('.mata-uang').mask('0.000.000.000', {reverse: true});

      //mengambil data uang yang akan dirubah jadi terbilang
       var input = document.getElementById("terbilang-input").value.replace(/\./g, "");

       //menampilkan hasil dari terbilang
       document.getElementById("terbilang-output").value = terbilang(input).replace(/  +/g, ' ');
    } 
  </script>
</body>
</html>