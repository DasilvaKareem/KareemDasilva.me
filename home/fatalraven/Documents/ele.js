 function level(){
                var levels = [1,2,3,4,5,6,7,8,9,10];
                var levelI = 0;
                 //Level I corresponds to levels I.E levels[levelI]
                var person = 1;
                var choice = document.getElementById("floor").value;
                
                while(levels[levelI]<choice){
                    levelI++;
                    console.log("You are on the floor " + levels[levelI]);
                }
               
            }
console.log("hi");