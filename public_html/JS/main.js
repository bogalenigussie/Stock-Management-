$(document).ready(function () {
  var DOMAIN = "http://localhost/Product Sell/public_html";

  //Fetch Category
  fetch_category();
  function fetch_category() {
    $.ajax({
      url: DOMAIN + "/includes/process.php",
      method: "POST",
      data: { getCategory: 1 },
      success: function (data) {
        var root = "<option value='0'>Root</option>";
        $("#parent_cat").html(root + data);
      },
    });
  }

  //Add DVD
  $("#product_form").on("submit", function () {
    // if($("#category_name").val()=="") {
    //     $("#category_name").addClass("border-danger");
    //     $("#cat_error").html("<span class='text-danger'>Please Enter Category Name</span>");
    // } else {
    $.ajax({
      url: DOMAIN + "/includes/process.php",
      method: "POST",
      data: $("#product_form").serialize(),
      success: function (data) {
        if (data == "New_DVD_Added!") {
          window.location.href = encodeURI(
            DOMAIN + "/addProduct.php?msg=Your DVD data successfully Added!"
          );
        } else if (data == "New_Furniture_Added!") {
          window.location.href = encodeURI(
            DOMAIN +
              "/addProduct.php?msg=Your Furniture data successfully Added!"
          );
        } else if (data == "New_Book_Added!") {
          window.location.href = encodeURI(
            DOMAIN + "/addProduct.php?msg=Your Book data successfully Added!"
          );
        } else {
          window.location.href = encodeURI(
            DOMAIN + "/addProduct.php?Error Encountered while saving your data!"
          );
        }
      },
    });
  });

  //function for removing success message
  function closeOnClick() {
    $(".close_btn").on("click", function () {
      $(".success_msg").remove();
      window.location.href = DOMAIN + "/addProduct.php";
    });
  }
  closeOnClick();
});
