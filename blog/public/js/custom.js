
function SendData(){

    var myName= document.getElementById('myName').value;
    var myRoll=  document.getElementById('myRoll').value;
    var myClass=  document.getElementById('myClass').value;


    var url="/insertData";
    var data={name:myName,roll:myRoll,class:myClass};


    axios.post(url,data)
   .then(function (response) {
     alert(response.data);
   })
   .catch(function (error) {
     alert("Error");
   });

 }


 function DeleteData(){
     var myName = document.getElementById('myName').value;


    var url = '/deleteData'
    var data = {name:myName}

    axios.post(url,data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert("Error");
    });


 }
