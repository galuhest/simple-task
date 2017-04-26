<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/css/simple.css')); ?>">

  <script src="<?php echo e(asset('/js/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('/js/jquery-ui.js')); ?>"></script>

  <script src="<?php echo e(asset('js/simple.js')); ?>"></script>
    <title>Simple TO-DO</title>
  </head>
  <body>
    <div id="container body">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <input type="text" id="title" placeholder="Judul" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <input type="text" id="description" placeholder="Deskripsi" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <div class="tasks">

                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <div class="task">
                  <div class="row">
                      <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                          <input type="text" class="description form-control" placeholder="description" id="desc"/>
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1">
                          <input type="text" class="datepicker form-control" placeholder="tanggal mulai" id="dates"/>
                      </div>
                      <div class="col-md-3 col-sm-3">
                          <input type="text" class="datepicker form-control" placeholder="tanggal selesai" id="datet"/>
                      </div>
                      <div class="col-md-2 col-sm-2" id="prior">
                          <select class="form-control">
                              <option value="1">Rendah</option>
                              <option value="2">Sedang</option>
                              <option value="3">Tinggi</option>
                          </select>
                      </div>
                  </div>
              <div class="task1"></div>
              <br/>
              <button class="btn btn-primary" type="button" id="newTask" onclick="insert()">Tambah Task</button>
          </div>
        </div>
        </div>
    </div>

  </body>

  <script>
      $(".datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd"
      });
  </script>
</html>
