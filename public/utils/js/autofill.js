// Select2
$('.input-name').select2({      
placeholder: 'Choose....'
});   

const convertRupiah = (nilai) =>{
return new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
    maximumSignificantDigits: 1, 
}).format(nilai);
}

