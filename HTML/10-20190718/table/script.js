var id = ['1', '2', '3', '4', '5'];
for (var i=0 ; i< id.length ; i=i+1)
 {
     document.getElementById('p1-'+i).innerHTML=id[i];
     console.log(id[i]);
 }

 var thongTin = [
     {
        'name': 'Ha',
        'email' : 'abc@gmail.com',
     },

     {
        'name' :'Chi',
        'email' : 'bcd@gmail.com',
     },

     {
        'name' : 'Hieu',
        'email':'asd@gmail.com',
     },

     {
        'name': 'Danh',
        'email' : 'qwe@gmail.com',
     },

     {
        'name': 'Khai',
        'email' : 'fgd@gmail.com',
     }
];
var lenghtArr = thongTin.length;

var solanclick=0;
function inThongtin(){
    console.log(solanclick);
    for(var i=0; i< lenghtArr;i++)
    {
    document.getElementById('p2-' + i).innerHTML = thongTin[i].name ;
    document.getElementById('p3-' + i).innerHTML = thongTin[i].email ;
    }  
}

