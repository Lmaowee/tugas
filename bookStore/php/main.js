$(".btnedit").click(e =>{
  let textvalues = displayData(e);

  let id = $("input[name*='id']");
  let namabuku = $("input[name*='nama_buku']");
  let authorbuku = $("input[name*='nama_author']");
  let hargabuku = $("input[name*='Harga_Buku']");

  id.val(textvalues[0]);
  namabuku.val(textvalues[1]);
  authorbuku.val(textvalues[2]);
  hargabuku.val(textvalues[3]);
});

function displayData(e){
  let id = 0;
  const td = $("#tbody tr td");
  let textvalues = [];

  for (const value of td) {
   if(value.dataset.id == e.target.dataset.id) {
      console.log(e.target.dataset.id)
      textvalues[id++] = value.textContent;
   }
  }
  return textvalues;
}

