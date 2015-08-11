$(document).ready(function(){
  $('#filter-button').click(filtrele);
});

function filtrele(){
  var raw = $('#xml-data').val();
  var filtered = "<Urunler>\n";
  console.log(raw);
  console.log($(raw).find('Urun'));
  $(raw).find('Urun').each(function(i,e){
    if($(e).find('StokAdedi').text()!=="0"){
      filtered += "<Urun>" + $(e).html() + "</Urun>\n";
    }
  });
  filtered += "</Urunler>";
  $('#filtered-xml-data').text(filtered);
}
