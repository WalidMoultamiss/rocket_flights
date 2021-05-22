
    var jsonFileData;
    async function getDATA() {
          
            const response = await fetch('./database/airport.json');
            const data = await response.json();
            jsonFileData=data;
            }
    getDATA();
    count=0;
    ulHolder=document.querySelector("#inputGroupSelect01")
    ulHolder2=document.querySelector("#inputGroupSelect02")
    async function getAirPorts(){
      count++;
      if(count<2){
        console.log(count);
      for (let i = 0; i < jsonFileData.length; i++) {
        var liCreator = document.createElement("option");
        liCreator.innerHTML=`
        <option>${jsonFileData[i].iata_code}: ${jsonFileData[i].name} - ${jsonFileData[i].city} - ${jsonFileData[i].country}</option>
        `
        console.log("test");
        ulHolder.appendChild(liCreator)
        
      }
      for (let i = 0; i < jsonFileData.length; i++) {
        var liCreator = document.createElement("option");
        liCreator.innerHTML=`
        <option>${jsonFileData[i].iata_code}: ${jsonFileData[i].name} - ${jsonFileData[i].city} - ${jsonFileData[i].country}</option>
        `
        console.log("test");
        ulHolder2.appendChild(liCreator)

      }
    }
  }
  function sufPicker(x) {
    x.parentElement.firstElementChild.innerHTML =   x.value.split`:`[0]
    console.log(x);
  }
