jQuery(document).ready(function ($) {
  $("#add-field-button").on("click", function () {
    var field_type = prompt(
      "Enter field type (email, text, number, select, tel)"
    );
    var field_label = prompt("Enter field label");
    var field_name = prompt("Enter field name");

    if (field_type && field_label && field_name) {
      var field_html = "";
      switch (field_type) {
        case "email":
          field_html =
            '<input type="email" name="' +
            field_name +
            '" placeholder="' +
            field_label +
            '">';
          break;
        case "text":
          field_html =
            '<input type="text" name="' +
            field_name +
            '" placeholder="' +
            field_label +
            '">';
          break;
        case "number":
          field_html =
            '<input type="number" name="' +
            field_name +
            '" placeholder="' +
            field_label +
            '">';
          break;
        case "select":
          field_html = '<select name="' + field_name + '">';
          var options = prompt("Enter options (comma separated)");
          options = options.split(",");
          $.each(options, function (index, option) {
            field_html +=
              '<option value="' + option + '">' + option + "</option>";
          });
          field_html += "</select>";
          break;
        case "tel":
          field_html =
            '<input type="tel" name="' +
            field_name +
            '" placeholder="' +
            field_label +
            '">';
          break;
      }
      $("#form-fields").append(field_html);
    }
  });

  $("#submit-button").on("click", function () {
    $("#dynamic-login-form").submit();
  });
});
