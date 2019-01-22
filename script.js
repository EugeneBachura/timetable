  function dataRange() {
  document.inputForm.date1.max = document.inputForm.date2.value;
  document.inputForm.date2.min = document.inputForm.date1.value;
  if ((document.inputForm.date2.value != "")&&(document.inputForm.date1.value > document.inputForm.date2.value))
  {
    document.inputForm.date1.value = document.inputForm.date2.value;
  };
  if ((document.inputForm.date1.value!= "")&&(document.inputForm.date2.value < document.inputForm.date1.value))
  {
    document.inputForm.date2.value = document.inputForm.date1.value;
  };
};