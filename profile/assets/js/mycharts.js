
let xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
   if (xhr.readyState == 4) {
        document.getElementById('department-select').innerHTML = '';
        renderDepartmentsOptions(JSON.parse(xhr.responseText));
        reloadTeachers(function(){
          updateData();
        });
   }
}
xhr.open('POST', './ajax/get_departments.php', true);
xhr.send();

function renderDepartmentsOptions(array) {
  array.forEach(function(el, index) {
    let departmentSelect = document.getElementById('department-select');
    let option = document.createElement('option');
    option.innerHTML = el.name;
    option.value = el.id;
    departmentSelect.appendChild(option);
  })
}

function reloadTeachers(callback) {
  xhr.onreadystatechange = function() {
     if (xhr.readyState == 4) {
          document.getElementById('teachers-select').innerHTML = '';
          if (xhr.responseText != '') {
            renderTeachersOptions(JSON.parse(xhr.responseText));
            callback();
          }
     }
  }
  xhr.open('POST', './ajax/get_teachers.php?department=' + document.getElementById('department-select').value, true);
  xhr.send();
}

function renderTeachersOptions(array) {
  array.forEach(function(el, index) {
    let teachersSelect = document.getElementById('teachers-select');
    let option = document.createElement('option');
    option.innerHTML = el.name + ' ' + el.last_name + ' ' + el.patronymic;
    option.value = el.id;
    teachersSelect.appendChild(option);
  })
}


var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
type: 'doughnut',
data: {
    labels: ['Отл. 10', 'Отл. 9', 'Отл. 8', 'Хор. 7', 'Хор. 6', 'Хор. 5', 'Уд. 4', 'Уд. 3','Неуд. 2', 'Неуд 1'],
    datasets: [{
        data: [20, 19, 3, 5, 2, 3,3,5,2,4],
        backgroundColor: [
        'rgb(0, 94, 28)',
        'rgb(0, 135, 41)',
        'rgb(40, 156, 30)',
        'rgb(71, 168, 62)',
        'rgb(143, 163, 28)',
        'rgb(209, 245, 5)',
        'rgb(217, 242, 73)',
        'rgb(207, 123, 39)',
        'rgb(207, 75, 39)',
        'rgb(235, 0, 0)'
        ],
    }]
},
options: {

}
});

document.getElementById('teachers-select').onchange = function() {
  updateData();
}

function changeData(data) {
  myChart.data.datasets[0].data = data;
  myChart.update();
}

var old_val = document.getElementById('department-select').value;

function updateData() {
  let xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function() {
     if (xhr.readyState == 4) {
        let data = JSON.parse(xhr.responseText);
        changeData(data);
     }
  }
  xhr.open('POST', './ajax/get_stats.php?teacher=' + document.getElementById('teachers-select').value, true);
  xhr.send();
}

document.getElementById('department-select').onchange = function() {
  document.getElementById('teachers-select').innerHTML = '';
  reloadTeachers(function(){
    updateData();
  });
}
