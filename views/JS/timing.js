document.querySelector("#datetime-local-Return").addEventListener("focusout",function calcTime() {
    var date = document.querySelector("#datetime-local-Return").value.split`T`[0]
    var time = document.querySelector("#datetime-local-Return").value.split`T`[1]
    var date2 = document.querySelector("#datetime-local-Depart").value.split`T`[0]
    var time2 = document.querySelector("#datetime-local-Depart").value.split`T`[1]
    var dateMinutes= eval((date.split`-`[0]*525600)+(date.split`-`[1]*43800)+(date.split`-`[2]*1440)+(time.split`:`[0]*60)+(time.split`:`[1]))
    console.log(time2.split`:`[1]);

    var dateMinutes2= eval((date2.split`-`[0]*525600)+(date2.split`-`[1]*43800)+(date2.split`-`[2]*1440)+(time2.split`:`[0]*60)+(time2.split`:`[1]))
    document.querySelector("body > section > form > div > div:nth-child(5) > input.form-control").value=(dateMinutes-dateMinutes2)+" min"
    var minuten = dateMinutes-dateMinutes2;
    console.log(minuten, [...minuten+``].splice(-2));
    if(minuten>60){
        function timeConvert(n) {
            var num = n/100;
            var hours = (num / 60);
            var rhours = Math.floor(hours);
            var minutes = (hours - rhours) * 60;
            return rhours + " hour(s) and " + [...n+``].splice(-2).join`` + " minute(s).";
            }
            
            document.querySelector("body > section > form > div > div:nth-child(5) > input.form-control").value=timeConvert(minuten)
    }
})