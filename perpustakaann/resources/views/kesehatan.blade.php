<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes Kesehatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <form>
        <div class="form-group row">
          <label for="text" class="col-4 col-form-label">Nama</label> 
          <div class="col-8">
            <input id="text" name="text" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Tanggal</label> 
            <div class="col-8">
              <input id="text" name="text" type="date" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Usia</label> 
            <div class="col-8">
              <input id="text" name="text" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Checkboxes</label> 
          <div class="col-8">
            <div class="custom-control custom-checkbox custom-control-inline">
              <input name="checkbox" id="checkbox_0" type="checkbox" checked="checked" class="custom-control-input" value="rabbit"> 
              <label for="checkbox_0" class="custom-control-label">Laki - laki</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="duck"> 
              <label for="checkbox_1" class="custom-control-label">Perempuan</label>
            </div>
            
          </div>
        </div> <hr>
        
      </form><br>

    <div>
        <table border="1">
            <thead>
                <th>Jenis Tes</th>
                <th>Hasil Pemeriksaan</th>
                <th>Normal</th>
            </thead>
            <tbody>
                
                    <td>Tekanan Darah</td>
                    <td>100/80mmhg</td>
                    <td>120/80mmhg</td>
            </tbody>
            <tbody>
                  <td>Asam Urat</td>
                  <td>7 mg/dl</td>
                  <td>6 mg/dl</td>
            </tbody>
            <tbody>
                  <td>Kolesterol Total</td>
                  <td>180 mg/dl</td>
                  <td>200 mg/dl</td>
            </tbody>
            <tbody>
                  <td>Gula Darah</td>
                  <td>70-110 mg/dl</td>
                  <td>70-125  mg/dl</td>
            </tbody>
            </tbody>
        </table>
    </div>
</body>
</html>