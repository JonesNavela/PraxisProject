<!DOCTYPE html>
<html>
    <head>
        <title>Vehicle Registration</title>
        <link type="text/css" href="css/vehiclestyle.css" rel="stylesheet" />
    </head>
    <body>
        <!-- // Just a div to wrap all contents in -->
        <div class="appContainer">

             <div class="row center-contents">
                  <!--//The Generate button  -->
                 <input type="button" value="Generate" onclick="Random();" />
             </div>

             <div class="row">
                  <!--//Text Area to display 1 million random generated numbers  -->
                  <textarea type="text" id="millionRandomNumbers"  readonly="true" rows="10"></textarea>
            </div>


              <div class="row">
                    <!--// Display Province random numbers count  -->
                  <div class="col6">
                      <div class="field-container">
                          <label for="province1">Gauteng=</label>
                          <input type="text" name="province1" readonly="true" placeholder="1000" />
                      </div>
                      <div class="field-container">
                          <label for="province2">Mpumalanga=</label>
                          <input type="text" name="province2" readonly="true" placeholder="1000" />
                      </div>
                      <div class="field-container">
                          <label for="province3">Limpopo=</label>
                          <input type="text" name="province3" readonly="true" placeholder="1000" />
                      </div>
                      <div class="field-container">
                          <label for="province4">Western Cape=</label>
                          <input type="text" name="province4" readonly="true" placeholder="1000" />
                      </div>

                  </div>
                   <div class="col6">
                      <div class="field-container">
                          <label for="province5">Kwazulu-Natal=</label>
                          <input type="text" name="province5" readonly="true" placeholder="1000" />
                      </div>
                      <div class="field-container">
                          <label for="province6">Eastern Cape=</label>
                          <input type="text" name="province6" readonly="true" placeholder="1000" />
                      </div>
                      <div class="field-container">
                          <label for="province7">Free State=</label>
                          <input type="text" name="province7" readonly="true" placeholder="1000" />
                      </div>
                      <div class="field-container">
                          <label for="province8">Northern Cape=</label>
                          <input type="text" name="province8" readonly="true" placeholder="1000" />
                      </div>
                       <div class="field-container">
                          <label for="province9">North West=</label>
                          <input type="text" name="province9" readonly="true" placeholder="1000" />
                      </div>
                  </div>
              </div>
            <div class="row">
                <div id="result" class="col12"></div>
            </div>

        </div>
        <!-- // <script src="js/jquery-3.3.1.min.js"></script>  //not really needed yet-->

        <script src="js/Generatenumbers.js"></script>
        <script src="js/Arrayofobjects.js"></script>
    </body>
</html>
