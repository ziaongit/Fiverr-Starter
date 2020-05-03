<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <title>Create / Edit Item</title>
   </head>
   <body>
      <h1 class="bg-info text-white text-center p-2 fixed-top">Create / Edit Item</h1>
      <main class="content" role="content">
         <div id="loader"></div>
         <section id="section1">
            <div class="container-fluid col-md-8 col-md-offset-3">
               <!-- MultiStep Form -->
               <form id="regForm" method="post">
                  <div class="tab">
                     <h2 class="bg-info text-white p-2">Seller's Information</h2>
                     <div class="row">
                        <div class="col-md-4">
                           <div class="control-group">
                              <h5>First Name</h5>
                              <p><input placeholder="" oninput="this.className = ''" id="firstName" name="firstName"></p>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="control-group">
                              <h5>Middle Name</h5>
                              <p><input placeholder="" oninput="this.className = ''" id="middleName" name="middleName"></p>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="control-group">
                              <h5>Last Name</h5>
                              <p><input placeholder="" oninput="this.className = ''" id="lastName" name="lastName"></p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="control-group">
                              <h5>Date of Birth</h5>
                              <p><input type="date" placeholder="" oninput="this.className = ''" id="dateOfBirth" name="dateOfBirth"></p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="control-group">
                              <h5>Permit Number</h5>
                              <p><input type="number" placeholder="" oninput="this.className = ''" id="permitNumber" name="permitNumber"></p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div  div class="col-md-12">
                           <div class="control-group">
                              <h5>Street One</h5>
                              <p><input placeholder="" oninput="this.className = ''" id="street1" name="street1"></p>
                           </div>
                        </div>
                        <div  div class="col-md-12">
                           <div class="control-group">
                              <h5>Street Two</h5>
                              <p><input placeholder="" oninput="this.className = ''" id="street2" name="street2"></p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div  div class="col-md-4">
                           <div class="control-group">
                              <h5>City</h5>
                              <p><input placeholder="" oninput="this.className = ''" id="city" name="city"></p>
                           </div>
                        </div>
                        <div  div class="col-md-4">
                           <div class="control-group">
                              <h5>State</h5>
                              <p>
                                 <select class="element select medium" id="state" name="state">
                                    <option value="" selected="selected"></option>
                                    <option value="1" >First option</option>
                                    <option value="2" >Second option</option>
                                    <option value="3" >Third option</option>
                                 </select>
                              </p>
                           </div>
                        </div>
                        <div  div class="col-md-4">
                           <div class="control-group">
                              <h5>Zip Code</h5>
                              <p><input type="number" placeholder="" oninput="this.className = ''" id="zip" name="zip"></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab">
                     <h2 class="bg-info text-white p-2">Item Information</h2>
                     <div class="row">
                        <div  div class="col-md-4">
                           <div class="control-group">
                              <h5>Manufacturer</h5>
                              <p>
                                 <select class="element select medium" id="manufacturer" name="manufacturer">
                                    <option value="" selected="selected"></option>
                                    <option value="1" >First option</option>
                                    <option value="2" >Second option</option>
                                    <option value="3" >Third option</option>
                                 </select>
                              </p>
                           </div>
                        </div>
                        <div  div class="col-md-4">
                           <div class="control-group">
                              <h5>Model</h5>
                              <p><input placeholder="" oninput="this.className = ''" id="model" name="model"></p>
                           </div>
                        </div>
                        <div  div class="col-md-4">
                           <div class="control-group">
                              <h5>Serial Number</h5>
                              <p><input type="number" placeholder="" oninput="this.className = ''" id="serialNumber" name="serialNumber"></p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="control-group">
                              <h5>Caliber/Gauge</h5>
                              <p>
                                 <select class="element select medium" id="caliber" name="caliber">
                                    <option value="" selected="selected"></option>
                                    <option value="1" >First option</option>
                                    <option value="2" >Second option</option>
                                    <option value="3" >Third option</option>
                                 </select>
                              </p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="control-group">
                              <h5>General Description</h5>
                              <p>
                                 <select class="element select medium" id="general" name="general">
                                    <option value="" selected="selected"></option>
                                    <option value="1" >First option</option>
                                    <option value="2" >Second option</option>
                                    <option value="3" >Third option</option>
                                 </select>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="control-group">
                              <h5>Barrel Length (Inches)</h5>
                              <p><input type="number" placeholder="" oninput="this.className = ''" id="barrel" name="barrel"></p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="control-group">
                              <h5>Frame Type</h5>
                              <p>
                                 <select class="element select medium" id="frame" name="frame">
                                    <option value="" selected="selected"></option>
                                    <option value="1" >First option</option>
                                    <option value="2" >Second option</option>
                                    <option value="3" >Third option</option>
                                 </select>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="buttons-div" style="overflow:auto;">
                     <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                     </div>
                  </div>
                  <!-- Circles which indicates the steps of the form: -->
                  <div id="steps-div" style="text-align:center;margin-top:40px;">
                     <span class="step"></span>
                     <span class="step"></span>
                  </div>
               </form>
               <!-- /.MultiStep Form -->
            </div>
         </section>
      </main>
      <!-- /content -->
   </body>
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/jquery.easing.min.js"></script>
   <script src="assets/js/sweetalert2.js"></script>
   <script src="assets/js/main.js"></script>
</html>