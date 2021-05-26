<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../marigold/css/selectQuality.css">
  <title>Marigold</title>

</head>
<div id="header">
  <div class="grid-container-head">
    <div class="logo">
      <h1>Marigold <br> ดอกดาวเรือง</h1>
    </div>
    <div class="menu">
      <a href="about.php" class="button">หน้าแรก</a>
      <a href="selectQuality.php" class="button">คัดเกรดดาวเรือง</a>
      <a href="index.php" class="button">ออกจากระบบ</a>
    </div>
  </div>
</div>
<div class="grid-container-all">
  <div class="picture">
    <div class="grid-container-pic">
      <div class="pic">
        <script type='text/javascript'>
          function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
              var output = document.getElementById('showimg');
              output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
          }
        </script>
        <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
              <h4> อัพโหลดรูป </h4>
              <form action="http://devbanban.com/" method="get" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <div class="col-md-3"></div>
                  <div class="col-md-7">
                    <img id="showimg" alt="" width="400" height="400">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> <br><br>
      <div class="button-pic">
        <br>
        <label class="control-label col-md-3">เลือกภาพ :</label>

        <input type="file" class="form-control" id="showimg" name="showimg" accept="image/png, image/jpeg, image/gif " onchange="preview_image(event)">
        &nbsp; &nbsp;
        <a href="selectQuality.php" class="buttonn">วิเคราะห์</a>

      </div>

    </div>
  </div>
  <div class="size">
    <div class="grid-container-process-size">
      <div class="process-size">
        <input type="text" id="fname" name="fname">
        <div class="all-size">
          <br>
          <div class="grid-container-all-size">
            <div class="text-xl">
              <p>ไซส์XL <br> จำนวน</p>
            </div>
            <div class="size-xl">
              <input type="text" id="fname" name="fname">
            </div>
            <div class="text-l">
              <p>ไซส์L <br> จำนวน</p>
            </div>
            <div class="size-l">
              <input type="text" id="fname" name="fname">
            </div>
            <div class="text-m">
              <p>ไซส์M <br> จำนวน</p>
            </div>
            <div class="text-s">
              <p>ไซส์S <br> จำนวน</p>
            </div>
            <div class="size-m">
              <input type="text" id="fname" name="fname">
            </div>
            <div class="size-s">
              <input type="text" id="fname" name="fname">
            </div>
          </div>
        </div>
        <div class="button-save">
        <a href="selectQuality.php" class="buttonn">วิเคราะห์</a>
        </div>
      </div>
    </div>
  </div>


  <body>


  </body>


</html>