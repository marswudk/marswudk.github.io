const WeatherUrl =
    "https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-B5282D9D-8FDD-40E9-AD48-B1DF3270465D";
//要innerHTML的容器
var cards = document.querySelector(".container");
//圖片陣列
var a_images = ['images/good_2.png', 'images/no_1.png', 'images/no_2.png'];

fetch(WeatherUrl)
    .then(function (response) {
        return response.json();
    })
    .then(function (myJson) {
        const taiwan = myJson.records.location;

        taiwan.forEach(Alltaiwan => {
            const oArea = Alltaiwan.locationName;
            //氣候分辨(中文)
            const oWxs = Alltaiwan.weatherElement[0].time[0].parameter.parameterName;
            //氣候分辨代號(數字)
            const oWxs_2 = Alltaiwan.weatherElement[0].time[0].parameter.parameterValue;

            //選擇圖片判斷
            var oImg;
            for (let index = 0; index < oWxs_2.length; index++) {
                const oWx = oWxs_2[index];
                if (oWx == '2') {
                    oImg = a_images[0]; //氣候分辨代號2執行此項
                } else if (oWx == '8') {
                    oImg = a_images[1]; //氣候分辨代號8執行此項
                } else {
                    oImg = a_images[2]; //其餘執行此項
                }
            }

            //輸出
            cards.innerHTML += `
                        <section class="section_1">
                            <div class="name">
                                <h2>${oArea}</h2>
                                <p>${oWxs}</p>    
                            </div>
                            <img src="${oImg}" alt="${oWxs}" title="${oWxs}">
                        </section>
                    `;
        });
    });