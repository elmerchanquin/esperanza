document.addEventListener("DOMContentLoaded", iniciar, false);
            function iniciar(){
                var canvas = document.getElementById("canvas_1");
                canvas.addEventListener("mousedown", ObtenerCoords, false);
            }

            function ObtenerCoords(event){
                var x = new Number();
                var y = new Number();
                var canvas = document.getElementById("canvas_1");

                if (event.x != undefined && event.y != undefined){
                x = event.x;
                y = event.y;
                }
                xa = x - 150
                ya = y - 264
                document.getElementById('cordenadas').setAttribute('value', x + ',' + y)
                var canvas = document.getElementById("canvas_1");
                var ctx = canvas.getContext("2d");
                ctx.beginPath();
                ctx.arc(xa,ya,5,0,2*Math.PI);
                ctx.stroke();
            }

