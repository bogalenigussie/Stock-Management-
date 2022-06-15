selectElement=document.querySelector("#myselect");

function myNewFunction() {
  sel_Product=selectElement.options[selectElement.selectedIndex].value;
  if(sel_Product==="DVD") {
    document.querySelector(
      ".sel_Product"
    ).innerHTML= ` <div class="form-group row">
                    <label for="inputsize" class="col-sm-2 col-form-label">SIZE(MB)</label>
                    <div class="col-sm-6">
                        <input type="number" id="size" name="size" autocomplete="off" placeholder='#Size'
                            class="form-control form-control-lg" required>
                             <span class="reminder">"Please Provide product size in Megabyte(MB)"</span>
                    </div>
                </div>`;
  } else if(sel_Product==="Furniture") {
    document.querySelector(
      ".sel_Product"
    ).innerHTML= `<div class="form-group row">
                      <label for="inputweight" class="col-sm-2 col-form-label">Height(CM):</label>
                        <div class="col-sm-6">
                                <input type="number"  autocomplete="off"  placeholder="#height" id="height" name="height"
                                class="form-control form-control-lg" required>
                        </div>
                 </div>
             <div class="form-group row">     
                    <label for="inputweight" class="col-sm-2 col-form-label">Width(CM):</label>
                       <div class="col-sm-6">
                            <input type="number" autocomplete="off" id="width" name="width" placeholder="#width"
                                class="form-control form-control-lg" required>
                        </div>
              </div>
              <div class="form-group row">  
                     <label for="inputlength" class="col-sm-2 col-form-label">Length(CM):</label>
                       <div class="col-sm-6">
                         <input type="number" autocomplete="off" id="length" name="length" placeholder="#length"
                                class="form-control form-control-lg" required>
                                <span class="reminder">"Please Provide dimension in HxWxL format"</span>
                       </div>
              </div>             
                 <div>        
                          
                 `;
  } else {
    document.querySelector(
      ".sel_Product"
    ).innerHTML= ` <div class="form-group row">
                    <label for="inputweight" class="col-sm-2 col-form-label">WEIGHT(KG)</label>
                    <div class="col-sm-6">
                        <input type="number" id="weight" name="weight" autocomplete="off" placeholder='#weight'
                            class="form-control form-control-lg" required>
                    
                       <span class="reminder">"Please Provide product size in Megabyte(MB)"</span>
                       </div>
                </div>`;
  }
}
