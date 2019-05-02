// $('.carousel').carousel({
//   interval: 2000
// })

function randomCatPic(){
  let randomNum = Math.floor(Math.random() * cat_pics.length);
  let randomCat = cat_pics[randomNum];
  let html = `
    <div class="cat_pic">
      <h3>Random Cat</h3>
      <img class="cat_pic_resize" src="${randomCat.path}"/>
      <table>
        <tbody>
          <tr>
            <th>Name:</th>
            <td>${randomCat.name}</td>
          </tr>
          <tr>
            <th>Personality:</th>
            <td>${randomCat.personality}</td>
          </tr>
          <tr>
            <th>Color: </th>
            <td>${randomCat.color}</td>
          </tr>
        </tbody>
      </table>
    </div>
  `

  return html;
}

function setCatPicture() {
  cat_sidebar.innerHTML = randomCatPic();
}

const cat_pics = [
  {name: "Sammy", color: "Ginger", personality: "Alpha", path: "/cat_pics/sammy.jpg"},
  {name: "Mary", color: "Black and white", personality: "quiet, but mischievous", path: "/images/cat_pics/mary.jpg"},
  {name: "Lumi", color: "White, black spots", personality: "gentle, super affectionate", path: "/images/cat_pics/lumi.jpg"},
  {name: "Tiny", color: "Tabby and white", personality: "noisy, lap cat", path: "/images/cat_pics/tiny.jpg"},
  {name: "Stripey", color: "Mackerel Tabby", personality: "naughty, bully", path: "/images/cat_pics/stripey.jpg"},
  {name: "Annabelle", color: "Black and white", personality: "nervous, cat-friendly", path: "/images/cat_pics/annabelle.jpg"},
  {name: "Kuno", color: "Black", personality: "squeaky, playful", path: "/images/cat_pics/kuno.jpg"}
]

const cat_sidebar = document.querySelector(".cat_pics")
setCatPicture();
setInterval(setCatPicture,60000)

console.log("cats")
