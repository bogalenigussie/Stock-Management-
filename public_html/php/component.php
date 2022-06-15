<?php

function inputElement($title,$name,$placeholder )
{
    $ele1 = "<div class=\"input-group mb-2\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text bg-warning\">$title</div>
                            </div>
                            <input type=\"text\"  name=\"$name\"  autocomplete=\"off\"  placeholder='$placeholder'  class=\"form-control\"
                                id=\"inlineFormInputGroup\" >
                        </div>";

    echo $ele1;
}

function typeSwicherInput($title,$name)
{
    $ele2 = "<div class=\"input-group mb-2\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text bg-warning\">$title</div>
                            </div>
                          
<select name=\"product_Type\" >
 <option name=\"$name\" selected>Type Switcher </option>
  <option  name=\"DVD\">DVD</option>
  <option name=\"Furniture\" >Furniture</option>
  <option  name=\"Book\">Book</option>
</select>
                        </div>";

    echo $ele2;
}

function buttonElement($btnid,$text,$styleclass,$name,$attr){
    $btn="
    <button id='$btnid'  name='$name' '$attr' class='$styleclass'>$text</button>
    ";
    echo $btn;
}

function component(){
    $element="
            <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
            <div class=\"card shadow\">   
              <div>
                <img src=\"./upload/6415600503044.jpeg\" class=\"img-fluid card-img-top\">                   
              </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\"></h5>
           <h6>
            
         </h6>
             <p class=\"card-text\">
              some quick example 
           </p>
           <h5>
            <span class=\"price\"></span>
             <span class=\"price\"></span>
              <span class=\"price\"></span>
            </h5>
         </div>
        </div>
    </div>";

             echo $element;
}