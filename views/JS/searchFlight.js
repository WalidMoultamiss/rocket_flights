let label=document.querySelectorAll("label")
    let btn=document.querySelectorAll(".buttonForm")
    count=1
    count2=1
    label.forEach(e=>{e.setAttribute("for",`${count}`);count++})
    btn.forEach(e=>{e.setAttribute("id",`${count2}`);count2++})

    function passenger() {
      passengers_value=document.querySelector("#inputGroupSelect").value
      document.querySelectorAll(".passengers").forEach(e=>{
        e.value=passengers_value;
      })
    }
    document.querySelectorAll(".flightHolder").forEach(e=>{
      var res = e.children[0].children[0].value
      if(res === "SpaceX"){
        e.children[0].innerHTML=`
        <img src="./views/images/SpaceX-Logo.wine.svg" alt="space X" width="100%" height="100%">
        `
      }
      if(res === "Virgin galactic"){
        e.children[0].innerHTML=`
        <img src="./views/images/virgin.svg" alt="space X" width="100%" height="100%">
        `
      }
      if(res === "Boeing"){
        e.children[0].innerHTML=`
        <img src="./views/images/Boeing_full_logo.svg" alt="space X" width="100%" height="100%">
        `
      }
      
      })
    
    
    
    document.querySelectorAll(".flightHolder").forEach(e=>{
      e.addEventListener("mousemove",function () {
        // console.log(e);
        
        // e.children[2].style.transform="translateX(700px)";
        // e.children[5].style.color="black";
      })
      
      var date = e.children[4].innerText.split` `[0];
      var time = e.children[4].innerText.split` `[1];
      var time11 = time.split`:`[0]
      var time12 = time.split`:`[1]
      
      e.children[4].innerHTML=`
      <div
          style="
          display:flex;
          justify-content:center;
          flex-wrap:wrap;
          width:132px;
          ">
        <h3 style="margin-bottom:0px;
        font-weight: 200 !important;">${time11}:${time12}</h3>
        <br>
        <h6>${date}</h6>
      </div>
      `
      var date2 = e.children[5].innerText.split` `[0];
      var time2 = e.children[5].innerText.split` `[1];
      var time22 = time2.split`:`[0]
      var time23 = time2.split`:`[1]
      e.children[5].innerHTML=`
      <div style="display:flex;justify-content:center;flex-wrap:wrap;width:132px">
        <h3 style="margin-bottom:0px;
        font-weight: 200 !important;">${time22}:${time23}</h3>
        <br>
        <h6>${date2}</h6>
      </div>
      `
      })