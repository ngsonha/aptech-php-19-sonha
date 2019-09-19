
var php19 = [{
   'name': 'Nam',
   'height': 169,
   'weight': 85
 }, {
   'name': 'Thach',
   'height': 162,
   'weight': 63,
 }, {
   'name': 'Phong',
   'height': 170,
   'weight': 50
 }];

 var lengthArr = php19.length;
// // i++ ~ i = i + 1
 var soLanClick = 1;


 function inNguoiDung() {
     console.log(soLanClick);
       for (var i = 0; i < lengthArr; i++) {
         document.getElementById('p-' + i).innerHTML = php19[i].name + '-' +
           php19[i].height + '-' + php19[i].weight;
       }
     }

var id=['ha','hieu','chi'];
 for (var i=0 ; i< id.length ; i=i+1)
 {
     document.getElementById('p-'+i).innerHTML=id[i];
     console.log(id[i]);
 }


 