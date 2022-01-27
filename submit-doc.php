<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <select id="office">
        <option value="">Choose...</option>
        <option value="CDRRMO">City Disaster Risk Reduction blah blah</option>
    </select>

    <div class="form-check">
      <div class="row align-items-center">
        <div class="col">
          <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-1-CMO-CRD-2">
          <label for="rad-1-CMO-CRD-2" class="form-check-label">Employment application for government offices and the Armed Forces</label>
        
        
          <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-2-CMO-CRD-2">
          <label for="rad-2-CMO-CRD-2" class="form-check-label">PSA solemnizing officers</label>
        
          <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-3-CMO-CRD-2">
          <label for="rad-3-CMO-CRD-2" class="form-check-label">Board examination</label>
          <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-4-CMO-CRD-2">
          <label for="rad-4-CMO-CRD-2" class="form-check-label">On-the-job training / work immersion</label>
          <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-5-CMO-CRD-2">
          <label for="rad-5-CMO-CRD-2" class="form-check-label">Marriage requirement for uniformed personnel</label>
          <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-6-CMO-CRD-2">
          <label for="rad-6-CMO-CRD-2" class="form-check-label">Foreign financial support</label>
          <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-7-CMO-CRD-2">
          <label for="rad-7-CMO-CRD-2" class="form-check-label">DFA requirement</label>
          <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-8-CMO-CRD-2">
          <label for="rad-8-CMO-CRD-2" class="form-check-label">PESO requirement</label>
        </div>
      </div>
    </div>

    <div id="show-req">
      <p class="lead fs-6">Requirements:</p>
      <dl class="row">
        <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CAGO-1"></dd>
        <dt class="col-sm-7">Duly Registration Accomplished Form</dt>
      </dl>
      <dl class="row">
        <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CAGO-1"></dd>
        <dt class="col-sm-7">Certificate of Registration</dt>
      </dl>
      <dl class="row">
        <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CAGO-1"></dd>
        <dt class="col-sm-7">Certificate of Boat Ownership</dt>
      </dl>
      <dl class="row">
        <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CAGO-1"></dd>
        <dt class="col-sm-7">Certification that fishing boat/banca is not in a pending case for violation of any fishery and other related marine environmental ordinance, laws, rulws, or regulations within the City Waters at the time of registration</dt>
      </dl>
      <dl class="row">
        <dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CAGO-1"></dd>
        <dt class="col-sm-7">Order of Payment</dt>
      </dl>
      <dl class="row">
        <dd class="col-sm-5"><input class="form-control" type="file" id="req-6-CAGO-1"></dd>
        <dt class="col-sm-7">Official Receipt</dt>
      </dl>
      <dl class="row">
        <dd class="col-sm-5"><input class="form-control" type="file" id="req-7-CAGO-1"></dd>
        <dt class="col-sm-7">Previous Fishing License</dt>
      </dl>
    </div>
    <p class="lead fs-6">Requirements:</p><dl class="row"><dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CDRRMO-1"></dd><dt class="col-sm-7">3-year BDRRM Plan</dt></dl><dl class="row"><dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CDRRMO-1"></dd><dt class="col-sm-7">BDRRMC Resolution of Programming of the 5% BDRRMF</dt></dl><dl class="row"><dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CDRRMO-1"></dd><dt class="col-sm-7">BDRRMC Resolution for the BDC to approve the 5% BDRRMF Investment Plan</dt></dl><dl class="row"><dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CDRRMO-1"></dd><dt class="col-sm-7">BDC Resolution approving the BDRRMC one-year Activity Plan and the BDRRM Fund</dt></dl><dl class="row"><dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CDRRMO-1"></dd><dt class="col-sm-7">Barangay Council Resolution approving the appropriation of 5% Local DRRM Fund</dt></dl><dl class="row"><dd class="col-sm-5"><input class="form-control" type="file" id="req-6-CDRRMO-1"></dd><dt class="col-sm-7">Certification for Special Trust Fund</dt></dl>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('#office').change(function(){
            var opt = $(this).val();
            if (opt=="CDRRMO"){
                $('#show-req').html('<p>Requirements:</p>');
            }
        });
    </script>

  </body>
</html>