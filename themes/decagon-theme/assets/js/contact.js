var mndFileds = new Array('Last Name', 'Email');
var fldLangVal = new Array('Last Name', 'Work Mail');
var name = '';
var email = '';

function checkMandatory4333670000000503009() {
  for (i = 0; i < mndFileds.length; i++) {
    var fieldObj =
      document.forms['WebToContacts4333670000000503009'][mndFileds[i]];
    if (fieldObj) {
      if (fieldObj.value.replace(/^\s+|\s+$/g, '').length == 0) {
        if (fieldObj.type == 'file') {
          alert('Please select a file to upload.');
          fieldObj.focus();
          return false;
        }
        alert(fldLangVal[i] + ' cannot be empty.');
        fieldObj.focus();
        return false;
      } else if (fieldObj.nodeName == 'SELECT') {
        if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
          alert(fldLangVal[i] + ' cannot be none.');
          fieldObj.focus();
          return false;
        }
      } else if (fieldObj.type == 'checkbox') {
        if (fieldObj.checked == false) {
          alert('Please accept  ' + fldLangVal[i]);
          fieldObj.focus();
          return false;
        }
      }
      try {
        if (fieldObj.name == 'Last Name') {
          name = fieldObj.value;
        }
      } catch (e) {}
    }
  }
  document.getElementById('formsubmit').disabled = true;
}
