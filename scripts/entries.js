const $$ = document.querySelector.bind(document);
const selects = $$("#students_num");
const container = $$("main > .container");
const submit = $$("#submit");
const forms = document.querySelectorAll("form");

selects.addEventListener("change", function (e) {
  const value = e.target.value;
  container.innerHTML = "<h4>Student Details</h4>";
  for (let index = 0; index < value; index++) {
    container.innerHTML += `<div class="info">
    <h5 id="student_${index + 1}">Student ${index + 1}</h5>
    <div id='stu-${index + 1}' >
        <div class="form-group">
        <input name="student_nos" class="hidden" hidden value=${
          index + 1
        }></input>
            <div class="left">
                <label for="reg">Registration Number</label>
                <label for="name">Name</label>
                <label for="marks">Marks</label>
            </div>
            <div class="right">
                <div class="reg">
                    <input type="number" name="stu_${index + 1}_reg">
                </div>
  
                <div class="name">
                    <input type="text" name="stu_${index + 1}_name">
                </div>
  
                <div class="marks">
                    <ul>
                        <li><input type="number" name="stu_${
                          index + 1
                        }_sub1" placeholder="sub1"></li>
                        <li><input type="number" name="stu_${
                          index + 1
                        }_sub2" placeholder="sub2"></li>
                        <li><input type="number" name="stu_${
                          index + 1
                        }_sub3" placeholder="sub3"></li>
                    </ul>
                </div>
            </div>
  
  
        </div>
    </div>
  </div>
  `;
  }
  container.innerHTML += "<button type='submit' id='submit'>Submit</button>";
});

submit.onclick = function () {
  forms.forEach((form) => {
    form.submit();
  });
};
