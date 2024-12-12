$(document).ready(function() {
    // Selector input yang akan menampilkan autocomplete.
    $( "#search" ).autocomplete({
        serviceUrl: "source.php",   // Kode php untuk prosesing data
        dataType: "JSON",           // Tipe data JSON
        onSelect: function (suggestion) {
            $( "#search" ).val("" + suggestion.search);
        }
    });
})