function syncState(element) {
  const ques = {
    "qId" : element.name,
    "status" : element.value
  }
  // const qId = element.name;
  // const status = element.value;
  // alert(qId)
  // alert(status)

  fetch("update.php",{
    method: "post",
    headers:{
      "Content-Type": "application/json"
    },
    body: JSON.stringify(ques)
  }).then(function(response){
    return response.text();
  }).then(function(data){
    console.log(data);
  })



}


