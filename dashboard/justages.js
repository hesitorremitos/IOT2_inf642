var g = new JustGage({
    id: "temperatura",
    min: 0,
    max: 50,
    title: "Temperatura ºC",
    pointer: true,
    pointerOptions: {
        toplength: 10,
        bottomlength: 10,
        bottomwidth: 8,
        color: '#FF0000'
    }
});
var g1 = new JustGage({
    id: "humedad",
    min: 0,
    max: 100,
    title: "humedad",
    pointer: true,
    pointerOptions: {
        toplength: 10,
        bottomlength: 10,
        bottomwidth: 8,
        color: '#FF0000'
    }
});