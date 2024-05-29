window.addEventListener('resize', displayScreenWidth); 
function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = ' ' + theWidth;
}
displayScreenWidth();


$(document).ready(function() {


    fetch("?json")
    .then(function(response){
        response.json().then(function(data){
        //    console.log(data);
            makeGlobalText(data);
    
            });
    
            })
            .catch(function(error){
                console.log(error.message);
        });

        fetch("?jsonCSS")
        .then(function(response){
            response.json().then(function(dataCSS){
                console.log(dataCSS);
                makeGlobalCSS(dataCSS);
        
                });
        
                })
                .catch(function(error){
                    console.log(error.message);
            });


            function makeGlobalText(datas) {
                let element = '';
                for (let data in datas) {
                    let elem     = datas[data].elem;
                    let theText  = datas[data].theText;
                    let theType  = datas[data].theType;
                  //  console.log(elem);
                    theType === "id" ? 
                    element = $(`#${elem}`) :
                    element =  $(`.${elem}`);
                   // console.log(element);
                   
                    element.html(theText);        
                    
                    if (element.next().attr('placeholder') !== undefined) {
                        console.log(`#${elem} has a placeholder`);
                        element.next().attr('placeholder', theText);
                    }
                }
                }
            
            
                function makeGlobalCSS(datas) {
                    datas.forEach(data => {
                        let selector = data.sel_name; 
                        let attrib   = data.att_name; 
                        let theType  = data.sel_type;
                        let value    = data.new_val; 
                
                        if (theType === "id") {
                            element = $(`#${selector}`);
                        } else if (theType === "class") {
                            element = $(`.${selector}`);
                        } else {
                            element = $(`${selector}`);
                        }
                
                        if (element.length) { 
                            if (attrib) {
                                    element.css(attrib, value);                                
                            } else {
                                console.warn(`Attrib ${selector} is empty`); // I like this! console.warn, much prettier than .log
                            }
                        } else {
                            console.warn(`Problem finding  ${selector}`);
                        }
                    });
                }

                
}); // end ready