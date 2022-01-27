<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style2.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1acd2c2806.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>CGDeS</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Luxurious+Script&family=Pacifico&family=Righteous&display=swap');
    </style>
</head>
<body class="bg-light">
    <header>
        <nav class="bg-white container-fluid py-1 text-center border-bottom shadow">
            <img class="me-1 d-inline" src="img/city-gov-davao-logo-2.jpg" alt="City Government of Davao Logo"  width="24px">
            <a href="home.php" class="align-middle d-inline h-name">CGDeS Portal</a>
            <ul class="p-0 mb-0">
                <li class="d-inline px-2 border-end border-3"><a href="#">optional</a></li>
                <li class="d-inline pe-2 ps-1 border-end border-3""><a href="#">menu</a></li>
                <li class="d-inline pe-2 ps-1"><a href="#">here</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-sm mt-4 p-0">
        <h1 class="lead fs-6">Kindly fill the form below.</h1>
    </div>
    <div class="bg-white border-light p-4 border-3 rounded-3 shadow container">
        <h2 class="text-center">Request Certification Form</h2>
        <form nonvalidate>
            <label for="certification" class="form-label mb-1">Certification</label>
            <select name="certification" id="certification" class="form-control mb-2">
                <option value="default" selected>Choose...</option>
                <option value="CDRRMO-1">Certification to Different Barangays for the Utilizaition of their Five Percent (5%) Local Disaster Risk Reduction and Management Fund</option>
                <option value="CAGO-1">Boat Registration Certification</option>
                <option value="Central911-1">Patient Certificate</option>
                <option value="CLO-1">Certificate of No Pending Case</option>
                <option value="CENRO-1">Solid Waste Management Certificate (New-Low Risk)</option>
                <option value="CENRO-2">Solid Waste Management Certificate (New-High Risk)</option>
                <option value="CENRO-3">Solid Waste Management Certificate for Renewal</option>
                <option value="CENRO-4">Citation Ticket as Penalty for Unrenewed Solid Waste Management Certification</option>
                <option value="CENRO-5">Solid Waste Management Certificate for PALC</option>
                <option value="DCTRCDD-1">Certification and/or Certificate of Rehabilitation</option>
                <option value="CMO-CRD-1">Certified Machine Copies</option>
                <option value="CMO-CRD-2">Certifications - Correspondence and Records Division - CMO</option>
                <option value="VRU-1">Certificate of Compliance for Designated Outdoor Smoking Area</option>
                <option value="CHO-1">Dental Certificate</option>
                <option value="CHO-2">Health Certificate and Medical Certificate</option>
                <option value="CHO-3">Certificate of Insurance Claims</option>
                <option value="CHO-4">Certification and/or Review of Death Certificates</option>
                <option value="CHO-5">Medical Certificate for Child Adoption</option>
                <option value="CHO-6">Medical Certficate to Victims of Physical Injuries</option>
                <option value="CHO-7">Gender Certification</option>
                <option value="CMO-BB-1">CMO-Business Bureau Certifications / Certified True Copy</option>
                <option value="CADO-OP-1">Certifications for Applications for PNP/AFP/BFP/PAF/PN/PMA; Church Existence, Red Ribbon, Residency as DFA Requirements, etc.</option>
                <option value="CAO-1">Certifications - Office of the City Accountant</option>
                <option value="CASSO-1">Certified True Copy of Tax Declaration</option>
                <option value="CASSO-2">Certification of Total Landholding, No Landholding, and No Improvement</option>
                <option value="CEE-1">City Economic Enterprise - Certification</option>
                <option value="CEO-1">Request of Monitoring of BDF Projects</option>
                <option value="CEO-2">Application for Drainage Clearance</option>
                <option value="CEO-3">Miscellaneous Sales Application</option>
                <option value="CEO-4">Road Right of Way Certification</option>
                <option value="CEO-5">Certified Copies of Documents - City Engineer's Office</option>
                <option value="CEO-6"> Quarry Certification</option>
                <option value="CHLURU-1">Certificate of Completion - City Housing and Land Use Regulatory Unit</option>
                <option value="CPDC-1">Zoning Certification</option>
            </select>
            <label for="office" class="form-label mb-1">Department/Office from</label>
            <select name="office" id="office" class="form-control mb-2">
                <option value="default" selected>Office...</option>
                <option value="CDRRMO">City Disaster Risk Reduction and Management Office (CDRRMO)</option>
                <option value="CAGO">City Agriculurist Office (CAgO)</option>
                <option value="Central911">Davao City Central 911 Emergency Response Center</option>
                <option value="CLO">Office of the City Legal Officer (CLO)</option>
                <option value="DCTRCDD">Davao City Treatment and Rehabilitation Center for Drug Dependents (DCTRCDD)</option>
                <option value="CMO-CRD">City Mayor's Offie-Correspondence and Records Division (CMO-CRD)</option>
                <option value="CENRO">City Environment and Natural Resources Office</option>
                <option value="VRU">Vices Regulation Unit</option>
                <option value="CHO">City Health Office</option>
                <option value="CMO-BB">City Mayor's Office-Business Bureau</option>
                <option value="CADO-OP">Office of the Assistant City Administrator (Operations)</option>
                <option value="CAO">Office of the City Accountant</option>
                <option value="CASSO">City Assessor's Office</option>
                <option value="CEE">City Economic Enterprise</option>
                <option value="CEO">City Engineer's Office</option>
                <option value="CHLURU">City Housing and Land Use Regulatory Unit</option>
                <option value="CPDC">Office of the City Planning and Development Coordinator</option>
            </select>

            <div class="collapse" id="req-label">
                <p class="lead fs-6">Requirements:</p>
            </div>

            <!-- City Disaster Risk Reduction and Management Office -->
            <div class="collapse" id="CDRRMO-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CDRRMO-1"></dd>
                    <dt class="col-sm-7">3-year BDRRM Plan</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CDRRMO-1"></dd>
                    <dt class="col-sm-7">BDRRMC Resolution of Programming of the 5% BDRRMF</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CDRRMO-1"></dd>
                    <dt class="col-sm-7">BDRRMC Resolution for the BDC to approve the 5% BDRRMF Investment Plan</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CDRRMO-1"></dd>
                    <dt class="col-sm-7">BDC Resolution approving the BDRRMC one-year Activity Plan and the BDRRM Fund</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CDRRMO-1"></dd>
                    <dt class="col-sm-7">Barangay Council Resolution approving the appropriation of 5% Local DRRM Fund</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-6-CDRRMO-1"></dd>
                    <dt class="col-sm-7">Certification for Special Trust Fund</dt>
                </dl>
            </div>

            <!-- City Agriculturist Office -->
            <div class="collapse" id="CAGO-1">
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
                    <dt class="col-sm-7">Certification that fishing boat/banca is not in a pending case for violation of any fishery and other related marine environmental ordinance, laws, rules, or regulations within the City Waters at the time of registration</dt>
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

            <!-- Davao City Central 911 Emergency Response Center -->
            <div class="collapse" id="Central911-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-Central911-1"></dd>
                    <dt class="col-sm-7">Duly Accomplished Request Form/Record</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-Central911-1"></dd>
                    <dt class="col-sm-7">Special Power of Attorney</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5">
                        <input class="form-control" type="file" id="req-3-Central911-1">
                        <input class="form-control" type="file" id="req-4-Central911-1">
                    </dd>
                    <dt class="col-sm-7">2 Valid IDs (for concerned individuals)</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5">
                        <input class="form-control" type="file" id="req-5-Central911-1">
                        <input class="form-control" type="file" id="req-6-Central911">
                    </dd>
                    <dt class="col-sm-7">2 Valid IDs (for authorized representatives)</dt>
                </dl>
            </div>

            <!-- Office of the City Legal Officer -->
            <div class="collapse" id="CLO-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-Central911-1"></dd>
                    <dt class="col-sm-7">Duly Accomplished Request Form/Record</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-Central911-1"></dd>
                    <dt class="col-sm-7">Special Power of Attorney</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5">
                        <input class="form-control" type="file" id="req-3-Central911-1">
                        <input class="form-control" type="file" id="req-4-Central911-1">
                    </dd>
                    <dt class="col-sm-7">2 Valid IDs (for concerned individuals)</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5">
                        <input class="form-control" type="file" id="req-5-Central911-1">
                        <input class="form-control" type="file" id="req-6-Central911-1">
                    </dd>
                    <dt class="col-sm-7">2 Valid IDs (for authorized representatives)</dt>
                </dl>
            </div>

            <!-- City Environment and Natural Resources Office -->
            <div class="collapse" id="CENRO-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CENRO-1"></dd>
                    <dt class="col-sm-7">Accomplished Business Permit</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CENRO-1"></dd>
                    <dt class="col-sm-7">Application Form (Low Risk)</dt>
                </dl>
            </div>

            <div class="collapse" id="CENRO-2">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CENRO-2"></dd>
                    <dt class="col-sm-7">Accomplished Business Permit Application</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CENRO-2"></dd>
                    <dt class="col-sm-7">Solid Waste Management Plans and Programs</dt>
                </dl>
            </div>

            <div class="collapse" id="CENRO-3">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CENRO-3"></dd>
                    <dt class="col-sm-7">Previous Solid Waste Management Certificate</dt>
                </dl>
            </div>

            <div class="collapse" id="CENRO-4">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CENRO-3"></dd>
                    <dt class="col-sm-7">Previous Solid Waste Management Certificate</dt>
                </dl>
            </div>

            <div class="collapse" id="CENRO-5">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CENRO-5"></dd>
                    <dt class="col-sm-7">Letter request for PALC Application address to the Head of CENRO</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CENRO-2"></dd>
                    <dt class="col-sm-7">Solid Waste Management Plans and Programs</dt>
                </dl>
            </div>

            <!-- Davao City Treatment and Rehabilitation Center for Drug Dependents -->
            <div class="collapse" id="DCTRCDD-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-DCTRCDD-1"></dd>
                    <dt class="col-sm-7">Court Release Order for those who already completed the rehabilitation program</dt>
                </dl>
            </div>

            <!-- City Mayor's Office - Correspondence and Records Division -->
            <div class="collapse" id="CMO-CRD-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CMO-CRD-1"></dd>
                    <dt class="col-sm-7">Request Slip</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CMO-CRD-1"></dd>
                    <dt class="col-sm-7">Proof of Payment (Official Receipt)</dt>
                </dl>
            </div>

            <div class="collapse" id="CMO-CRD-2">
                <p class="lead fs-6 mt-3">For:</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-1-CMO-CRD-2">
                    <label for="rad-1-CMO-CRD-2" class="form-check-label">Employment application for government offices and the Armed Forces</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-2-CMO-CRD-2">
                    <label for="rad-2-CMO-CRD-2" class="form-check-label">PSA solemnizing officers</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-3-CMO-CRD-2">
                    <label for="rad-3-CMO-CRD-2" class="form-check-label">Board examination</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-4-CMO-CRD-2">
                    <label for="rad-4-CMO-CRD-2" class="form-check-label">On-the-job training / work immersion</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-5-CMO-CRD-2">
                    <label for="rad-5-CMO-CRD-2" class="form-check-label">Marriage requirement for uniformed personnel</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-6-CMO-CRD-2">
                    <label for="rad-6-CMO-CRD-2" class="form-check-label">Foreign financial support</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-7-CMO-CRD-2">
                    <label for="rad-7-CMO-CRD-2" class="form-check-label">DFA requirement</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="rad-CMO-CRD-2" id="rad-8-CMO-CRD-2">
                    <label for="rad-8-CMO-CRD-2" class="form-check-label">PESO requirement</label>
                </div>
                <p class="lead fs-6 mt-2">Requirements:</p>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CMO-CRD-2"></dd>
                    <dt class="col-sm-7">Barangay Clearance</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CMO-CRD-2"></dd>
                    <dt class="col-sm-7">Police Clearance</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CMO-CRD-2"></dd>
                    <dt class="col-sm-7">Proof of Payment (Official Receipt)</dt>
                </dl>
            </div>

            <!-- Vices Regulation Unit -->
            <div class="collapse" id="VRU-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-VRU-1"></dd>
                    <dt class="col-sm-7">Application Form</dt>
                </dl>
            </div>

            <!-- City Health Office -->
            <div class="collapse" id="CHO-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CHO-1"></dd>
                    <dt class="col-sm-7">Official Receipt of Dental Extraction Fee</dt>
                </dl>
            </div>

            <div class="collapse" id="CHO-2">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CHO-2"></dd>
                    <dt class="col-sm-7">Application Form</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CHO-2"></dd>
                    <dt class="col-sm-7">Community Tax Certificate (Cedula)</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CHO-2"></dd>
                    <dt class="col-sm-7">Official Receipt</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CHO-2"></dd>
                    <dt class="col-sm-7">Laboratory Result</dt>
                </dl>
            </div>

            <div class="collapse" id="CHO-3">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CHO-3"></dd>
                    <dt class="col-sm-7">Death Certificate</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CHO-3"></dd>
                    <dt class="col-sm-7">Order of Payment</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CHO-2"></dd>
                    <dt class="col-sm-7">Official Receipt</dt>
                </dl>
            </div>

            <div class="collapse" id="CHO-4">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CHO-4"></dd>
                    <dt class="col-sm-7">Duly filled-out Death Certificate Form</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CHO-3"></dd>
                    <dt class="col-sm-7">Order of Payment</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CHO-2"></dd>
                    <dt class="col-sm-7">Official Receipt</dt>
                </dl>
            </div>

            <div class="collapse" id="CHO-5"> <!-- same fields for CHO-6 -->
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CHO-3"></dd>
                    <dt class="col-sm-7">Order of Payment</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CHO-2"></dd>
                    <dt class="col-sm-7">Official Receipt</dt>
                </dl>
            </div>

            <div class="collapse" id="CHO-7">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CHO-7"></dd>
                    <dt class="col-sm-7">Birth Certificate</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CHO-3"></dd>
                    <dt class="col-sm-7">Order of Payment</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CHO-2"></dd>
                    <dt class="col-sm-7">Official Receipt</dt>
                </dl>
            </div>

            <!-- City Mayor's Office - Business Bureau -->
            <div class="collapse" id="CMO-BB-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CMO-BB-1"></dd>
                    <dt class="col-sm-7">Letter Request stating the purpose of the request</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CMO-BB-1"></dd>
                    <dt class="col-sm-7">Special Power of Attorney if represented for individual or sole proprietorship</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CMO-BB-1"></dd>
                    <dt class="col-sm-7">Partnership Resolution indicating the reason and authorized representative for Partnership</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CMO-BB-1"></dd>
                    <dt class="col-sm-7">Secretary's Certificate indicating the reason and the authorized representative</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CMO-BB-1"></dd>
                    <dt class="col-sm-7">Valid I.D. of the requisitioner</dt>
                </dl>
            </div>

            <!-- Office of the Assistant City Administrator (Operations) -->
            <div class="collapse" id="CADO-OP-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CADO-OP-1"></dd>
                    <dt class="col-sm-7">Payment Order Slip</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CADO-OP-1"></dd>
                    <dt class="col-sm-7">Official Receipt</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CADO-OP-1"></dd>
                    <dt class="col-sm-7">Cedula</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CADO-OP-1"></dd>
                    <dt class="col-sm-7">Police Clearance</dt>
                </dl>
            </div>

            <!-- Office of the City Accountant -->
            <div class="collapse" id="CAO-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CAO-1" required></dd>
                    <dt class="col-sm-7">Filled-up Request Slip</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CAO-1"></dd>
                    <dt class="col-sm-7">Duly Filled-up and signed Loan Application to lending Institutions</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CAO-1"></dd>
                    <dt class="col-sm-7">Print-out of missing months of remittances, if any</dt>
                </dl>
            </div>

            <!-- City Assessor's Office -->
            <div class="collapse" id="CASSO-1"> <!-- same fields for CASSO-2 -->
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CASSO-1" required></dd>
                    <dt class="col-sm-7">Filled-up request form</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CASSO-1" required></dd>
                    <dt class="col-sm-7">PIN (if none, proceed to Windows 1-4 for PIN Verification)</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CASSO-1" required></dd>
                    <dt class="col-sm-7">Valid I.D. of property owner</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CASSO-1"></dd>
                    <dt class="col-sm-7">Valid I.D. of authorized requestor/representative</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CASSO-1"></dd>
                    <dt class="col-sm-7">Authorization letter from the owner with photocopy of signatories and authorized representatives</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-6-CASSO-1"></dd>
                    <dt class="col-sm-7">If corporation,Secretary's Certificate with photocopy of signatories and authorized representatives</dt>
                </dl>
            </div>

            <!-- City Economic Enterprise -->
            <div class="collapse" id="CEE-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CEE-1" required></dd>
                    <dt class="col-sm-7">Scanned copy of Vaccine Card</dt>
                </dl>
            </div>

            <!-- City Engineer's Office -->
            <div class="collapse" id="CEO-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CEO-1"></dd>
                    <dt class="col-sm-7">Request Letter from the Brgy. Captain with Date of Receipt by the Contractor</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CEO-1"></dd>
                    <dt class="col-sm-7">Notice to Proceed with Date of Receipt by the Contractor</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CEO-1"></dd>
                    <dt class="col-sm-7">Notice of Award</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CEO-1"></dd>
                    <dt class="col-sm-7">Contract Agreement</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CEO-1"></dd>
                    <dt class="col-sm-7">Construction Schedule and S-Curve</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-6-CEO-1"></dd>
                    <dt class="col-sm-7">Approved Plans and POW</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-7-CEO-1"></dd>
                    <dt class="col-sm-7">Detailed Estimate prepared by the contractor for the project</dt>
                </dl>
            </div>

            <div class="collapse" id="CEO-2">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CEO-2"></dd>
                    <dt class="col-sm-7">Application Letter with contract number duly signed by the applicant or his/her representative</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CEO-2"></dd>
                    <dt class="col-sm-7">If necessary, authorization letter if done by an authorized representative</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CEO-2"></dd>
                    <dt class="col-sm-7">Notarized Deed of Sale/Lease Contract</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CEO-2"></dd>
                    <dt class="col-sm-7">Sketch Plan and Vicinity Map with Landmark duly signed and sealed by Geodetic Engineer</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CEO-2"></dd>
                    <dt class="col-sm-7">Drainage Plan with Site Development Plan prepared and duly signed and sealed by a licensed Sanitary Engineer/Master Plumber/Civil Engineer</dt>
                </dl>
            </div>

            <div class="collapse" id="CEO-3">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CEO-3"></dd>
                    <dt class="col-sm-7">Indorsement from Bureau of Lands</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CEO-3"></dd>
                    <dt class="col-sm-7">Prelimenary Investigation Report Issued by the City Environment and Natural Resources Office</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CEO-3"></dd>
                    <dt class="col-sm-7">Sketch Plan and Vicinity Map</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CEO-3"></dd>
                    <dt class="col-sm-7">Barangay Council Resolution</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CEO-3"></dd>
                    <dt class="col-sm-7">Barangay Development Council Resolution</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-6-CEO-3"></dd>
                    <dt class="col-sm-7">Certificate of No Landholding</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-7-CEO-3"></dd>
                    <dt class="col-sm-7">Tax Clearance with Updated Receipts</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-8-CEO-3"></dd>
                    <dt class="col-sm-7">Affidavit to acquire the land occupied</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-9-CEO-3"></dd>
                    <dt class="col-sm-7">Supporting Affidavit of two (2) disinterested persons</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-10-CEO-3"></dd>
                    <dt class="col-sm-7">Certification from the Regional Trial Court that there is no pending land registration case</dt>
                </dl>
            </div>

            <div class="collapse" id="CEO-4">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CEO-4"></dd>
                    <dt class="col-sm-7">Letter Request with complete address and contact number of the requesting party</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CEO-4" multiple></dd>
                    <dt class="col-sm-7">Site development plan and vicinity map</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CEO-4" multiple></dd>
                    <dt class="col-sm-7">For those intending to buy or sell, Intent to Sell / Intent to Buy</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CEO-4" multiple></dd>
                    <dt class="col-sm-7">Special Power of Attorney or written authorization for authorized representatives</dt>
                </dl>
            </div>

            <div class="collapse" id="CEO-5">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CEO-5"></dd>
                    <dt class="col-sm-7">Letter Request</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CEO-5" multiple></dd>
                    <dt class="col-sm-7">Attachments</dt>
                </dl>
            </div>

            <div class="collapse" id="CEO-6">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CEO-6"></dd>
                    <dt class="col-sm-7">Letter of Intent</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CEO-6"></dd>
                    <dt class="col-sm-7">Previous CEO Certification</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CEO-6"></dd>
                    <dt class="col-sm-7">Barangay Resolutions</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CEO-6"></dd>
                    <dt class="col-sm-7">Current road-right-of-way agreement / Copy of the land title (if owner to adjacent lot)</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CEO-6"></dd>
                    <dt class="col-sm-7">Sketch Plan</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-6-CEO-6"></dd>
                    <dt class="col-sm-7">Zoning Certification</dt>
                </dl>
            </div>

            <!-- City Housing and Land Use Regulatory Unit -->
            <div class="collapse" id="CHLURU-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CHLURU-1"></dd>
                    <dt class="col-sm-7">Application Form</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CHLURU-1"></dd>
                    <dt class="col-sm-7">SP Resolution approving the project</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CHLURU-1"></dd>
                    <dt class="col-sm-7">Copy of Subdivision Plans</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-4-CHLURU-1"></dd>
                    <dt class="col-sm-7">Copy of Subdivision Plans approved by DENR</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-5-CHLURU-1"></dd>
                    <dt class="col-sm-7">Affidavit of Completion</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-6-CHLURU-1"></dd>
                    <dt class="col-sm-7">Copy of Title/s of areas where the structures/facilities are located</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-7-CHLURU-1"></dd>
                    <dt class="col-sm-7">Real Property Tax Declaration</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-8-CHLURU-1"></dd>
                    <dt class="col-sm-7">Real Property Tax Clearance from City Treasurer's Office</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-9-CHLURU-1"></dd>
                    <dt class="col-sm-7">Picture (with descriptions) of completed structures/facilities</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-10-CHLURU-1"></dd>
                    <dt class="col-sm-7">Other documents</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-11-CHLURU-1"></dd>
                    <dt class="col-sm-7">CHLURU Payment Receipt</dt>
                </dl>
            </div>

            <!-- Office of the City Planning and Development Coordinator -->
            <div class="collapse" id="CPDC-1">
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CPDC-1"></dd>
                    <dt class="col-sm-7">Application Form</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-2-CPDC-1"></dd>
                    <dt class="col-sm-7">Subdivision / Sketch Plan approved by the Bureau of Land</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-3-CPDC-1"></dd>
                    <dt class="col-sm-7">TCT (Latest and Photocopy of Land Title must be certified by the Registry of Deeds)</dt>
                </dl>
                <dl class="row">
                    <dd class="col-sm-5"><input class="form-control" type="file" id="req-1-CPDC-1"></dd>
                    <dt class="col-sm-7">Zoning Certification Fee Receipt</dt>
                </dl>
            </div>

            <hr class="my-4">
            <div class="row g-2">
                <div class="col">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="Ricardo">
                </div>
                <div class="col">
                    <label for="middleName" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" placeholder="Bagsik">
                </div>
                <div class="col">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Dalisay">
                </div>
                <div class="col-1">
                    <label for="extName" class="form-label">Ext.</label>
                    <input type="text" class="form-control" placeholder="Jr., III">
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>

</body>
</html>