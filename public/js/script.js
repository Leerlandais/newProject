window.addEventListener('resize', displayScreenWidth); 
function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
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
/*
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
*/

            function makeGlobalText(datas) {
                let element = '';
                for (let data in datas) {
                    let elem = datas[data].elem;
                    let theText  = datas[data].theText;
                    let theType     = datas[data].theType;
                  //  console.log(elem);
                    theType === "id" ? 
                    element = $(`#${elem}`) :
                    element =  $(`.${elem}`);
                    console.log(element);
                    element.html(theText);        
                    
                    if (element.next().attr('placeholder') !== undefined) {
                        console.log(`Element #${elem} has a placeholder attribute.`);
                        element.next().attr('placeholder', theText);
                    }
                }
                }
            
            
            function makeGlobalCSS(datas) {
                datas.forEach(data => {
                    let selector = data.selector;
                    let attrib = data.attrib;
                    let value = data.val.replace(/;$/, ''); // Remove ; if present. Took me ages to find my error!
                    let element = $(`#${selector}`);
            
                    if (element.length) { // Check if the element exists
                        if (attrib !== "") {    // a check in case I had forgotten to add the attribute (another error I encountered)
                            /*
                            // my usual collection of console logs. Today I discovered console.warn, also very useful
                            console.log('Element:', element);
                            console.log('Selector:', selector);
                            console.log('Attribute:', attrib);
                            console.log('Value:', value);
                            */
                            element.css(attrib, value);
                        } else {
                            console.warn(`Attribute of ${selector} is empty`);
                        }
                    } else {
                        console.warn(`Element ${selector} not found`);
                    }
                });
            }
            

        
        
}); // end ready